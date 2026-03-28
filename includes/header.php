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
];

$metaKey = $metaKeys[$currentRoute] ?? ['home_title', 'home_description'];
$pageTitle = t('meta.' . $metaKey[0]);
$pageDescription = t('meta.' . $metaKey[1]);
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
    <!-- hreflang tags for SEO -->
<?php foreach ($SUPPORTED_LANGUAGES as $code => $name): ?>
    <link rel="alternate" hreflang="<?= $code ?>" href="<?= langUrl($code, $currentRoute) ?>" />
<?php endforeach; ?>
    <link rel="alternate" hreflang="x-default" href="<?= langUrl($DEFAULT_LANG, $currentRoute) ?>" />
</head>

<body>

<header>
    <div class="nav-container">
        <div class="logo"><a href="<?= url() ?>" style="color: inherit; text-decoration: none;">faustobe</a></div>

        <ul class="nav-links">
            <li><a href="<?= url() ?>"<?= activeClass('') ?>><?= t('nav.home') ?></a></li>
            <li><a href="<?= url('apps/ecodes') ?>"<?= activeClass('apps/ecodes') ?>><?= t('nav.ecodes') ?></a></li>
            <li><a href="<?= url('guides') ?>"<?= activeClass('guides') ?>><?= t('nav.guides') ?></a></li>
            <!-- <li><a href="<?= url('apps/santibailor') ?>"<?= activeClass('apps/santibailor') ?>><?= t('nav.santibailor') ?></a></li> -->
            <!-- <li><a href="<?= url('apps/drop') ?>"<?= activeClass('apps/drop') ?>><?= t('nav.drop') ?></a></li> -->
            <!-- <li><a href="<?= url('works') ?>"<?= activeClass('works') ?>><?= t('nav.works') ?></a></li> -->
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
