# CES WordPress backup

Snapshot date: 2026-08-03 (Asia/Shanghai)

This branch contains both a public snapshot and an encrypted WordPress server
backup of `https://ces.hku.hk`.

The theme files at the repository root (`index.php`, `style.css`, `js/main.js`,
and `assets`) are the authenticated `CES_custom` theme export from this backup,
so they are ready to use as the baseline for subsequent changes.

## Public snapshot

The public snapshot contains:

- rendered copies of every published page returned by the WordPress REST API;
- English and Traditional Chinese home page variants;
- same-origin CSS, JavaScript, fonts, and images required by those pages;
- public REST representations of pages, posts, media, categories, tags, and users;
- all original upload files referenced by the 32 public media records; and
- SHA-256 checksums for every snapshot file.

The Simplified Chinese URL advertised by the site (`?lang=zh-CN`) was requested,
but the live server returned HTTP 404. That response is recorded in `wget.log`.

Run `scripts/backup-public-wordpress.sh YYYY-MM-DD` from the repository root to
create another public snapshot.

## Encrypted server backup

`secure-backup/2026-08-03` contains an AES-256-CBC encrypted backup split into
GitHub-compatible parts. The decrypted outer ZIP contains:

- a compressed SQL database dump;
- all installed themes, including the complete `CES_custom` PHP source;
- all installed plugins;
- the complete uploads directory; and
- other `wp-content` directories, including Kinsta must-use plugins.

The encryption key is deliberately stored outside this public Git repository.
On the machine that created this backup it is located at:

`/Users/zhuoyuan/labspace/tmp/ces_web_backup_key_2026-08-03.txt`

Reassemble and decrypt the archive from the repository root:

```sh
cat secure-backup/2026-08-03/*.part-* \
  | openssl enc -d -aes-256-cbc -pbkdf2 -iter 600000 -md sha256 \
      -pass file:/path/to/ces_web_backup_key_2026-08-03.txt \
      -out /tmp/ces-wordpress-full-backup-2026-08-03.zip
unzip -t /tmp/ces-wordpress-full-backup-2026-08-03.zip
```

See `secure-backup/2026-08-03/MANIFEST.txt` for expected sizes and SHA-256
checksums. WordPress core and `wp-config.php` are not included; install a clean
matching WordPress core and create a new environment-specific `wp-config.php`
when restoring. Never commit the decryption key, database dump, login cookies,
`wp-config.php`, or other decrypted backup material.
