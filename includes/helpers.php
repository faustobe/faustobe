<?php
/**
 * Helper functions for multilingual site.
 */

/**
 * Get a translation string using dot notation.
 * Example: t('ecodes.beta_title') => $translations['ecodes']['beta_title']
 *
 * @param string $key   Dot-notation key
 * @param string|null $fallback  Fallback if key not found
 * @return string
 */
function t(string $key, ?string $fallback = null): string {
    global $translations;
    $keys = explode('.', $key);
    $value = $translations;
    foreach ($keys as $k) {
        if (!isset($value[$k])) {
            return $fallback ?? $key;
        }
        $value = $value[$k];
    }
    return is_string($value) ? $value : ($fallback ?? $key);
}

/**
 * Get a translation value as-is (can be array for lists).
 *
 * @param string $key  Dot-notation key
 * @return mixed
 */
function tRaw(string $key) {
    global $translations;
    $keys = explode('.', $key);
    $value = $translations;
    foreach ($keys as $k) {
        if (!isset($value[$k])) {
            return null;
        }
        $value = $value[$k];
    }
    return $value;
}

/**
 * Generate a URL for a route in the current language.
 *
 * @param string $route  Route key (e.g. 'contact', 'apps/ecodes')
 * @return string
 */
function url(string $route = ''): string {
    global $currentLang, $DEFAULT_LANG, $BASE_PATH;
    $prefix = $BASE_PATH;
    if ($currentLang !== $DEFAULT_LANG) {
        $prefix .= '/' . $currentLang;
    }
    if ($route === '') {
        return $prefix . '/';
    }
    return $prefix . '/' . $route . '/';
}

/**
 * Generate a URL for a route in a specific language.
 *
 * @param string $lang   Language code
 * @param string $route  Route key
 * @return string
 */
function langUrl(string $lang, string $route = ''): string {
    global $DEFAULT_LANG, $BASE_PATH;
    $prefix = $BASE_PATH;
    if ($lang !== $DEFAULT_LANG) {
        $prefix .= '/' . $lang;
    }
    if ($route === '') {
        return $prefix . '/';
    }
    return $prefix . '/' . $route . '/';
}

/**
 * Generate a URL for a static asset (CSS, JS, images).
 *
 * @param string $path  Asset path (e.g. '/css/main.css', '/assets/ecodes/icon.png')
 * @return string
 */
function asset(string $path): string {
    global $BASE_PATH;
    $url = $BASE_PATH . $path;
    // Cache-busting: append the file's modification time so browsers always
    // fetch a fresh copy after a change (no more manual hard-refresh).
    $file = dirname(__DIR__) . $path;
    if (is_file($file)) {
        $url .= (strpos($url, '?') === false ? '?' : '&') . 'v=' . filemtime($file);
    }
    return $url;
}

/**
 * Absolute origin (scheme + host) of the current request.
 * Used for SEO tags that require absolute URLs (canonical, hreflang, OG).
 */
function siteOrigin(): string {
    $https = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off')
        || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https')
        || (($_SERVER['SERVER_PORT'] ?? '') == 443);
    $scheme = $https ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'faustobe.it';
    return $scheme . '://' . $host;
}

/**
 * Absolute URL for a route in a given language (canonical / hreflang / OG).
 */
function absLangUrl(string $lang, string $route = ''): string {
    return siteOrigin() . langUrl($lang, $route);
}

/**
 * Absolute URL for a static asset (e.g. Open Graph images).
 */
function absAsset(string $path): string {
    return siteOrigin() . asset($path);
}

/**
 * Normalize a route string: trim slashes, remove trailing index.
 *
 * @param string $route
 * @return string
 */
function normalizeRoute(string $route): string {
    $route = trim($route, '/');
    // Remove .html extension for backward compatibility
    $route = preg_replace('/\.html$/', '', $route);
    // Map old HTML filenames to routes
    $htmlMap = [
        'contact'        => 'contact',
        'privacy-policy' => 'privacy-policy',
        'apps/ecodes/privacy' => 'apps/ecodes/privacy',
    ];
    if (isset($htmlMap[$route])) {
        return $htmlMap[$route];
    }
    // Remove trailing /index
    $route = preg_replace('/\/index$/', '', $route);
    return $route;
}

/**
 * Check if a nav item is active.
 *
 * @param string $route  Route to check
 * @return bool
 */
function isActive(string $route): bool {
    global $currentRoute;
    return $currentRoute === $route;
}

/**
 * Output an active class string if the route matches.
 *
 * @param string $route
 * @return string
 */
function activeClass(string $route): string {
    return isActive($route) ? ' class="active"' : '';
}

/**
 * Escape HTML output.
 *
 * @param string $str
 * @return string
 */
function e(string $str): string {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
