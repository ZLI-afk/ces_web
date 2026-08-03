#!/usr/bin/env bash

set -euo pipefail

site_url="https://ces.hku.hk"
snapshot_date="${1:-2026-08-03}"
snapshot_root="snapshot/${snapshot_date}"
api_dir="${snapshot_root}/api"
site_dir="${snapshot_root}/public-site"
uploads_dir="${snapshot_root}/wp-content/uploads"

if [[ -e "${snapshot_root}" ]]; then
  printf 'Refusing to overwrite existing snapshot: %s\n' "${snapshot_root}" >&2
  exit 1
fi

mkdir -p "${api_dir}" "${site_dir}" "${uploads_dir}"

curl_json() {
  local route="$1"
  local output="$2"

  curl --fail --silent --show-error --location \
    --retry 3 --retry-delay 2 \
    "${site_url}/index.php?rest_route=${route}" \
    | jq --sort-keys . > "${output}"
}

curl_json "/" "${api_dir}/rest-index.json"
curl_json "/wp/v2/types" "${api_dir}/types.json"
curl_json "/wp/v2/pages&per_page=100&context=view" "${api_dir}/pages.json"
curl_json "/wp/v2/posts&per_page=100&context=view" "${api_dir}/posts.json"
curl_json "/wp/v2/media&per_page=100&context=view" "${api_dir}/media.json"
curl_json "/wp/v2/categories&per_page=100&context=view" "${api_dir}/categories.json"
curl_json "/wp/v2/tags&per_page=100&context=view" "${api_dir}/tags.json"
curl_json "/wp/v2/users&per_page=100&context=view" "${api_dir}/users.json"
curl_json "/wp/v2/navigation&per_page=100&context=view" "${api_dir}/navigation.json"
curl_json "/wp/v2/sureforms_form&per_page=100&context=view" "${api_dir}/sureforms-forms.json"

curl --fail --silent --show-error --location --head --retry 3 "${site_url}/" \
  | sed '/^set-cookie:/Id' > "${snapshot_root}/response-headers.txt"

page_urls=("${site_url}/" "${site_url}/?lang=zh-HK" "${site_url}/?lang=zh-CN")
while IFS= read -r page_url; do
  page_urls+=("${page_url}")
done < <(jq -r '.[].link' "${api_dir}/pages.json" | sort -u)

if ! wget \
  --page-requisites \
  --convert-links \
  --adjust-extension \
  --execute robots=off \
  --domains=ces.hku.hk \
  --directory-prefix="${site_dir}" \
  --output-file="${snapshot_root}/wget.log" \
  "${page_urls[@]}"; then
  printf 'Some page requisites could not be downloaded; see %s/wget.log\n' \
    "${snapshot_root}" >&2
fi

while IFS= read -r media_url; do
  case "${media_url}" in
    "${site_url}/wp-content/uploads/"*)
      relative_path="${media_url#${site_url}/wp-content/uploads/}"
      output_path="${uploads_dir}/${relative_path}"
      mkdir -p "$(dirname "${output_path}")"
      curl --fail --silent --show-error --location \
        --retry 3 --retry-delay 2 \
        --output "${output_path}" "${media_url}"
      ;;
    *)
      printf 'Skipping unexpected media URL: %s\n' "${media_url}" >&2
      ;;
  esac
done < <(jq -r '.[].source_url | select(. != null)' "${api_dir}/media.json" | sort -u)

(
  cd "${snapshot_root}"
  find . -type f ! -name SHA256SUMS -print0 \
    | sort -z \
    | xargs -0 shasum -a 256 > SHA256SUMS
)

printf 'Public snapshot written to %s\n' "${snapshot_root}"
