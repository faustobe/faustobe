<?php
/**
 * Dynamic XML sitemap: every route in every supported language,
 * with hreflang alternates. Served at /sitemap.xml (see .htaccess).
 */
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/helpers.php';

header('Content-Type: application/xml; charset=utf-8');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" '
   . 'xmlns:xhtml="http://www.w3.org/1999/xhtml">' . "\n";

foreach (array_keys($ROUTES) as $route) {
    foreach ($SUPPORTED_LANGUAGES as $code => $name) {
        echo "  <url>\n";
        echo '    <loc>' . htmlspecialchars(absLangUrl($code, $route)) . "</loc>\n";
        foreach ($SUPPORTED_LANGUAGES as $alt => $altName) {
            echo '    <xhtml:link rel="alternate" hreflang="' . $alt . '" href="'
               . htmlspecialchars(absLangUrl($alt, $route)) . "\"/>\n";
        }
        echo '    <xhtml:link rel="alternate" hreflang="x-default" href="'
           . htmlspecialchars(absLangUrl($DEFAULT_LANG, $route)) . "\"/>\n";
        echo "  </url>\n";
    }
}

echo '</urlset>' . "\n";
