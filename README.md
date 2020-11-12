# WP Theme Lock

[![WP Theme Lock on Packagist](https://img.shields.io/packagist/v/masonitedoors/wp-theme-lock.svg?style=flat)](https://packagist.org/packages/masonitedoors/wp-theme-lock)

An mu-plugin that forces a WordPress theme to always be active. Intended for a [Headless WordPress](https://www.gatsbyjs.com/docs/glossary/headless-wordpress/) setup.

## Config

Out of the box, this mu-plugin expects [wp-headless-theme](https://github.com/masonitedoors/wp-headless-theme) to be installed.

You can set your own theme using the available filter in a separate mu-plugin.

```php
add_filter( 'wp_theme_lock', function() {
  return 'twentytwenty'; // Theme directory to lock.
});
```
