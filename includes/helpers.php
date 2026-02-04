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
    return $BASE_PATH . $path;
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
