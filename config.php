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
    ''                          => 'home.php',
    'whoami'                    => 'whoami.php',
    'privacy-policy'            => 'privacy-policy.php',
    'works'                     => 'works.php',
    'apps/ecodes'               => 'apps/ecodes/index.php',
    'apps/ecodes/privacy'       => 'apps/ecodes/privacy.php',
    'apps/santibailor'          => 'apps/santibailor.php',
    'apps/drop'                 => 'apps/drop.php',
    'guides'                                        => 'guides/index.php',
    'guides/come-usare-ecodes'                      => 'guides/come-usare-ecodes.php',
    'guides/leggere-etichetta-nutrizionale'         => 'guides/leggere-etichetta-nutrizionale.php',
    'guides/additivi-vs-ultraprocessati'            => 'guides/additivi-vs-ultraprocessati.php',
    'guides/classificazione-nova'                   => 'guides/classificazione-nova.php',
    'guides/ingredienti-pericolosi'                 => 'guides/ingredienti-pericolosi.php',
    'guides/cibi-consigliati'                       => 'guides/cibi-consigliati.php',
    'guides/sicurezza-alimentare-bambini-e-anziani' => 'guides/sicurezza-alimentare-bambini-e-anziani.php',
    'guides/rischi-alimenti-ultraprocessati'        => 'guides/rischi-alimenti-ultraprocessati.php',
    'servizi'                                       => 'servizi.php',
];

// Page-specific CSS files (route => additional CSS)
$PAGE_CSS = [
    'apps/ecodes'               => '/css/app-page.css',
    'apps/ecodes/privacy'       => '/css/app-page.css',
    'apps/santibailor'          => '/css/app-page.css',
    'apps/drop'                 => '/css/app-page.css',
    'works'                     => '/css/app-page.css',
    'guides'                                        => '/css/guide.css',
    'guides/come-usare-ecodes'                      => '/css/guide.css',
    'guides/leggere-etichetta-nutrizionale'         => '/css/guide.css',
    'guides/additivi-vs-ultraprocessati'            => '/css/guide.css',
    'guides/classificazione-nova'                   => '/css/guide.css',
    'guides/ingredienti-pericolosi'                 => '/css/guide.css',
    'guides/cibi-consigliati'                       => '/css/guide.css',
    'guides/sicurezza-alimentare-bambini-e-anziani' => '/css/guide.css',
    'guides/rischi-alimenti-ultraprocessati'        => '/css/guide.css',
];

// Legacy route redirects — 301 permanent
$REDIRECTS = [
    'guides/come-usare-lapp' => 'guides/come-usare-ecodes',
];
