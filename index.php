<?php
/**
 * Front controller: loads config, detects language/route, renders page.
 */

// Load configuration
require_once __DIR__ . '/config.php';

// Load helper functions
require_once __DIR__ . '/includes/helpers.php';

// Bootstrap: detect language, route, load translations
require_once __DIR__ . '/includes/bootstrap.php';

// Render page
require __DIR__ . '/includes/header.php';

if ($is404) {
    echo '<main><h1>404</h1><p>Page not found.</p></main>';
} else {
    require __DIR__ . '/templates/' . $pageTemplate;
}

require __DIR__ . '/includes/footer.php';
