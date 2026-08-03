# CES WordPress backup

Snapshot date: 2026-08-03 (Asia/Shanghai)

This branch preserves the theme source already tracked in this repository and a
public snapshot of `https://ces.hku.hk`. The generated snapshot contains:

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

## Scope limitation

This is not yet a restorable WordPress server backup. WordPress admin redirected
to the login page and no CES credentials were available in the local environment.
Public access cannot export the database, unpublished or trashed content,
revisions, Elementor edit metadata, private menu configuration, widgets, form
configuration and submissions, plugin settings, user credentials, or PHP source
installed on the server.

To make the backup fully restorable, add an authenticated database export and the
server's `wp-content` directory (at minimum themes, plugins, and uploads). Do not
commit `wp-config.php`, database passwords, login cookies, API keys, or other
secrets to Git.
