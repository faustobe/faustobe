<?php
/**
 * Shared header with navigation and language switcher.
 * Variables available: $currentLang, $currentRoute, $SUPPORTED_LANGUAGES, $DEFAULT_LANG, $pageCSS
 */

// Determine meta title and description based on route
$metaKeys = [
    ''                          => ['home_title', 'home_description'],
    'whoami'                    => ['whoami_title', 'whoami_description'],
    'privacy-policy'            => ['privacy_title', 'privacy_description'],
    'works'                     => ['works_title', 'works_description'],
    'apps/ecodes'               => ['ecodes_title', 'ecodes_description'],
    'apps/ecodes/privacy'       => ['ecodes_privacy_title', 'ecodes_privacy_description'],
    'apps/santibailor'          => ['santibailor_title', 'santibailor_description'],
    'apps/drop'                 => ['drop_title', 'drop_description'],
    'guides'                                        => ['guides_title', 'guides_description'],
    'guides/come-usare-ecodes'                      => ['guides_come_usare_ecodes_title', 'guides_come_usare_ecodes_description'],
    'guides/leggere-etichetta-nutrizionale'         => ['guides_leggere_etichetta_title', 'guides_leggere_etichetta_description'],
    'guides/additivi-vs-ultraprocessati'            => ['guides_additivi_ultra_title', 'guides_additivi_ultra_description'],
    'guides/classificazione-nova'                   => ['guides_nova_title', 'guides_nova_description'],
    'guides/ingredienti-pericolosi'                 => ['guides_ingredienti_title', 'guides_ingredienti_description'],
    'guides/cibi-consigliati'                       => ['guides_cibi_title', 'guides_cibi_description'],
    'guides/sicurezza-alimentare-bambini-e-anziani' => ['guides_sicurezza_bambini_title', 'guides_sicurezza_bambini_description'],
    'guides/rischi-alimenti-ultraprocessati'        => ['guides_rischi_upf_title', 'guides_rischi_upf_description'],
    'servizi'                                       => ['servizi_title', 'servizi_description'],
    'download'                                      => ['download_title', 'download_description'],
];

$metaKey = $metaKeys[$currentRoute] ?? ['home_title', 'home_description'];
$pageTitle = t('meta.' . $metaKey[0]);
$pageDescription = t('meta.' . $metaKey[1]);

// SEO: absolute URLs, social cards, structured data
$canonical = absLangUrl($currentLang, $currentRoute);
$ogLocales = ['it' => 'it_IT', 'en' => 'en_US', 'es' => 'es_ES', 'fr' => 'fr_FR', 'de' => 'de_DE'];
$ogLocale  = $ogLocales[$currentLang] ?? 'it_IT';
$isGuide   = strpos($currentRoute, 'guides/') === 0;
$ogType    = $isGuide ? 'article' : 'website';
$ogImage   = absAsset('/assets/og-default.jpg');
$descPlain = html_entity_decode($pageDescription, ENT_QUOTES, 'UTF-8');
$titlePlain = html_entity_decode($pageTitle, ENT_QUOTES, 'UTF-8');

// JSON-LD graph
$ldGraph = [
    [
        '@type'    => 'Person',
        'name'     => 'faustobe',
        'url'      => absLangUrl($DEFAULT_LANG, ''),
        'email'    => 'faustobe@gmail.com',
        'jobTitle' => 'Software developer',
        'sameAs'   => ['https://github.com/faustobe'],
    ],
    [
        '@type' => 'WebSite',
        'name'  => 'faustobe',
        'url'   => absLangUrl($DEFAULT_LANG, ''),
    ],
];
if ($currentRoute === 'apps/ecodes') {
    $ldGraph[] = [
        '@type'            => 'SoftwareApplication',
        'name'             => 'E-Codes Reader',
        'operatingSystem'  => 'Android',
        'applicationCategory' => 'HealthApplication',
        'url'              => $canonical,
        'description'      => $descPlain,
        'offers'           => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'EUR'],
    ];
}
if ($isGuide) {
    $ldGraph[] = [
        '@type'       => 'Article',
        'headline'    => $titlePlain,
        'description' => $descPlain,
        'inLanguage'  => $currentLang,
        'url'         => $canonical,
        'author'      => ['@type' => 'Person', 'name' => 'faustobe'],
        'publisher'   => ['@type' => 'Organization', 'name' => 'faustobe'],
    ];
}
$jsonLd = json_encode(
    ['@context' => 'https://schema.org', '@graph' => $ldGraph],
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
);
?>
<!DOCTYPE html>
<html lang="<?= e($currentLang) ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $pageTitle ?></title>
    <meta name="description" content="<?= e($pageDescription) ?>" />
    <link rel="stylesheet" href="<?= asset('/css/main.css') ?>" />
<?php if ($pageCSS): ?>
    <link rel="stylesheet" href="<?= asset($pageCSS) ?>" />
<?php endif; ?>
    <!-- Canonical -->
    <link rel="canonical" href="<?= e($canonical) ?>" />

    <!-- hreflang (URL assoluti) -->
<?php foreach ($SUPPORTED_LANGUAGES as $code => $name): ?>
    <link rel="alternate" hreflang="<?= $code ?>" href="<?= e(absLangUrl($code, $currentRoute)) ?>" />
<?php endforeach; ?>
    <link rel="alternate" hreflang="x-default" href="<?= e(absLangUrl($DEFAULT_LANG, $currentRoute)) ?>" />

    <!-- Open Graph -->
    <meta property="og:type" content="<?= $ogType ?>" />
    <meta property="og:site_name" content="faustobe" />
    <meta property="og:title" content="<?= e($pageTitle) ?>" />
    <meta property="og:description" content="<?= e($pageDescription) ?>" />
    <meta property="og:url" content="<?= e($canonical) ?>" />
    <meta property="og:image" content="<?= e($ogImage) ?>" />
    <meta property="og:locale" content="<?= $ogLocale ?>" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= e($pageTitle) ?>" />
    <meta name="twitter:description" content="<?= e($pageDescription) ?>" />
    <meta name="twitter:image" content="<?= e($ogImage) ?>" />

    <!-- Structured data -->
    <script type="application/ld+json">
<?= $jsonLd ?>
    </script>
</head>

<body>

<header>
    <div class="nav-container">
        <div class="logo"><a href="<?= url() ?>" style="color: inherit; text-decoration: none;">faustobe</a></div>

        <ul class="nav-links">
            <li><a href="<?= url() ?>"<?= activeClass('') ?>><?= t('nav.home') ?></a></li>
            <li><a href="<?= url('works') ?>"<?= activeClass('works') ?>><?= t('nav.works') ?></a></li>
            <li><a href="<?= url('servizi') ?>"<?= activeClass('servizi') ?>><?= t('nav.servizi') ?></a></li>
            <li><a href="<?= url('guides') ?>"<?= activeClass('guides') ?>><?= t('nav.guides') ?></a></li>
            <li><a href="<?= url('download') ?>"<?= activeClass('download') ?>><?= t('nav.download') ?></a></li>
            <!-- <li><a href="<?= url('apps/santibailor') ?>"<?= activeClass('apps/santibailor') ?>><?= t('nav.santibailor') ?></a></li> -->
            <!-- <li><a href="<?= url('apps/drop') ?>"<?= activeClass('apps/drop') ?>><?= t('nav.drop') ?></a></li> -->
        </ul>

        <div class="lang-switcher">
            <button class="lang-current" aria-label="Change language"><?= strtoupper($currentLang) ?></button>
            <ul class="lang-dropdown">
<?php foreach ($SUPPORTED_LANGUAGES as $code => $name): ?>
<?php if ($code !== $currentLang): ?>
                <li><a href="<?= langUrl($code, $currentRoute) ?>"><?= e($name) ?></a></li>
<?php endif; ?>
<?php endforeach; ?>
            </ul>
        </div>

        <div class="menu-toggle">&#9776;</div>
        <div class="theme-toggle">&#127769;</div>
    </div>
</header>
