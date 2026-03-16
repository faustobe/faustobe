<?php
/**
 * Configuration: supported languages and route mapping.
 */

// Base path: auto-detect environment
// localhost → subdirectory /faustobe, production → domain root
$BASE_PATH = ($_SERVER['HTTP_HOST'] ?? '') === 'localhost' ? '/faustobe' : '';

// Supported languages: code => native name
$SUPPORTED_LANGUAGES = [
    'it' => 'Italiano',
    'en' => 'English',
    'es' => 'Español',
    'fr' => 'Français',
    'de' => 'Deutsch',
];

// Default language (no URL prefix)
$DEFAULT_LANG = 'it';

// Route => template file (relative to templates/)
$ROUTES = [
    ''                    => 'home.php',
    'whoami'              => 'whoami.php',
    'privacy-policy'      => 'privacy-policy.php',
    'works'               => 'works.php',
    'apps/ecodes'         => 'apps/ecodes/index.php',
    'apps/ecodes/privacy' => 'apps/ecodes/privacy.php',
    'apps/santibailor'    => 'apps/santibailor.php',
    'apps/drop'           => 'apps/drop.php',
];

// Page-specific CSS files (route => additional CSS)
$PAGE_CSS = [
    'apps/ecodes'         => '/css/app-page.css',
    'apps/ecodes/privacy' => '/css/app-page.css',
    'apps/santibailor'    => '/css/app-page.css',
    'apps/drop'           => '/css/app-page.css',
    'works'               => '/css/app-page.css',
];
