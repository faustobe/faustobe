<?php
/**
 * Bootstrap: detect language and route, load translations.
 */

// Detect language from query string (set by .htaccess)
$currentLang = isset($_GET['lang']) && isset($SUPPORTED_LANGUAGES[$_GET['lang']])
    ? $_GET['lang']
    : $DEFAULT_LANG;

// Detect route from query string
$rawRoute = $_GET['route'] ?? '';
$currentRoute = normalizeRoute($rawRoute);

// Handle legacy redirects (301 permanent)
if (isset($REDIRECTS[$currentRoute])) {
    header('Location: ' . langUrl($currentLang, $REDIRECTS[$currentRoute]), true, 301);
    exit;
}

// Validate route exists
if (!isset($ROUTES[$currentRoute])) {
    http_response_code(404);
    $currentRoute = '';
    $is404 = true;
} else {
    $is404 = false;
}

// Load translation file
$langFile = __DIR__ . '/../lang/' . $currentLang . '.php';
if (file_exists($langFile)) {
    $translations = require $langFile;
} else {
    // Fallback to Italian
    $translations = require __DIR__ . '/../lang/it.php';
}

// Page metadata
$pageTemplate = $ROUTES[$currentRoute];
$pageCSS = $PAGE_CSS[$currentRoute] ?? null;
