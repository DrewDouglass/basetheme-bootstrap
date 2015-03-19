WordPress theme files to build from. Originally based on HTML5 Boilerplate, Boilerplate base theme, Starker's base theme, and others.

Version 1.9.1
- Simplify archive.php, add universal the_archive_title() function. Remove category, author, and tag templates (will use archive.php).

Version 1.9
- Updated normalize.css
- Update to jQuery 1.11.2
- Switch to 100% font-size for body
- Misc minor CSS typography and style adjustments
- Switch from .innercontain to .row (and .widerow)
- Add SimpleStateManager to plugins.js and relevant base code to main.js
- Add mobile nav code
- Removing H1 from homepage logo
- Upgrade Modernizr and Respond.js
- Change default content width
- Add theme support for Title tag, remove title tag from header.php, remove related functions from functions.php
- Updated HTML5 theme support to match twentyfifteen functions
- Add comments for post-formats and gallery support, but don't enable by default
- Disable a bunch of functions by default, but leave code. Uncomment filters/actions to enable.
- Update comments.php to match twentyfifteen
- Remove unnecessary functions from functions.php
- Upgrade to TGM-Plugin-Activation 2.4.0
- Match IE classes to HTML5 Boilerplate
- Updated recommended plugins to ACF 5.0 PRO

Version 1.8.7
- Fix jQuery fallback script
- Recommend plugin updates: Remove NGFB, Replace All in One SEO with WordPress SEO by Yoast, Replace external Pingback plugin with auto-install plugin "Remove XMLRPC Pingback Ping."
- Remove .htpasswd warning
- Empty img folder
- Add high resolution media query

Version 1.8.6
- Added CSS to reset widgets
- Fixed .row margins

Version 1.8.5.1
- Updated template-home.php and page.php HTML structure.

Version 1.8.5
- jQuery 1.11.0
- Pingback DDoS Prevent plugin added to plugin auto-installer.
- Missing colon bug in cpt.php
- HTML changes to page.php
- Added template-home.php because of frequency of use.
- Small css changes to style.css
- Added generate_colclass() function and corresponding CSS classes.
- Auto-add pages, delete Sample Page, and setup Reading Settings on activation.
- Disable search engines if base pages are created.

Version 1.8.1
- Changed location of Install Plugins menu.
- Set plugins to auto activate after bulk install.

Version 1.8.0
- Removed boilerplate_filter_wp_title from functions.php
- Added twentythirteen_wp_title to functions.php
- Removed boilerplate_remove_recent_comments_style from functions.php
- Cleaned up comments and code in functions.php
- Renamed tg_scripts function to basetheme_enqueue in functions.php
- Moved custom post types to lib/cpt.php
- Updated editor-style.css to match TwentyThirteen theme
- Enabled HTML5 support for search-form, comment-form, comment-list
- Removed custom search form function
- Removed gallery styles via 'use_default_gallery_style' filter instead of removing inline styles.
- Updated language file to match Twenty Thirteen theme.
- Added TGM-Plugin-Activation class; Recommends install of Advanced Custom Fields, All in One SEO Pack, Nextgen Facebook Open Graph+, BulletProof Security, Simple 301 Redirects, Gravity Forms (manual install only)
- Auto delete Hello Dolly plugin on theme activation.
- Updated favicon links in header.php

Version 1.7.3
- jQuery 1.10.2
- Normalize CSS 1.1.3
- Added #wrapper around whole site with overflow: hidden;
- Fixed comments.php callback bug

Version 1.7.2.1
- jQuery 1.9.1
- Normalize CSS 1.1
- Removed some CSS classes.

Version 1.7.2
- Updated to modernizr-2.6.2-respond-1.1.0.min and jQuery 1.8.3.
- Moved stylesheet enqueue into functions.php from header.php.
- Added cache_bust() to functions.php for stylesheet & javascript cache busting.
- Removed $ver from jQuery enqueue to improve caching.
- Added .lt-ie10 class to header.php.

Version 1.7.1
- Fixed bug in admin.themeadmin.php.
- Updated header.php.
- Updated CSS.

Version 1.7
- Added admin functionality. See lib/admin.functions.php.
- - Added admin notices. Currently only displays notice if search engines are blocked.
- - Added admin-specific stylesheet (lib/css/admin.css).
- - Added admin.themeadmin.php; dedicated file for ACF php code.

- Added debug_display function to functions.php for nicer debugging.

- Updated to latest HTML5 Boilerplatele, jQuery 1.8.2, Modernizr 2.6.1, updated directories, updated css.

- Small changes, fixes, and updated comments.

Version 1.6.1
- Fixed language_attributes bug in header.php

Version 1.6:
- Updated style.css
- Updated theme functions to newest standards.
- Added alt_title() to functions.php.
- Fixed misc bugs.