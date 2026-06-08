<?php
$ebooks = [
    'it' => [
        'title'    => 'Mangia Consapevole',
        'desc'     => 'Guida pratica agli additivi alimentari con E-Codes Reader. 8 capitoli, formato ebook A5.',
        'btn'      => 'Scarica PDF',
        'file'     => 'ecodes-guide-it.pdf',
        'label'    => 'IT',
    ],
    'en' => [
        'title'    => 'Eat Consciously',
        'desc'     => 'Practical guide to food additives with E-Codes Reader. 8 chapters, A5 ebook format.',
        'btn'      => 'Download PDF',
        'file'     => 'ecodes-guide-en.pdf',
        'label'    => 'EN',
    ],
    'es' => [
        'title'    => 'Come Consciente',
        'desc'     => 'Guía práctica sobre aditivos alimentarios con E-Codes Reader. 8 capítulos, formato ebook A5.',
        'btn'      => 'Descargar PDF',
        'file'     => 'ecodes-guide-es.pdf',
        'label'    => 'ES',
    ],
    'fr' => [
        'title'    => 'Manger Consciemment',
        'desc'     => 'Guide pratique sur les additifs alimentaires avec E-Codes Reader. 8 chapitres, format ebook A5.',
        'btn'      => 'Télécharger le PDF',
        'file'     => 'ecodes-guide-fr.pdf',
        'label'    => 'FR',
    ],
    'de' => [
        'title'    => 'Bewusst Essen',
        'desc'     => 'Praktischer Leitfaden zu Lebensmittelzusatzstoffen mit E-Codes Reader. 8 Kapitel, A5 Ebook-Format.',
        'btn'      => 'PDF herunterladen',
        'file'     => 'ecodes-guide-de.pdf',
        'label'    => 'DE',
    ],
];

$current = $ebooks[$currentLang] ?? $ebooks['it'];
$others  = array_filter($ebooks, fn($k) => $k !== $currentLang, ARRAY_FILTER_USE_KEY);
?>
<main class="page-content download-page">
    <h1 class="page-title"><?= t('download.title') ?></h1>
    <p class="page-lead"><?= t('download.intro') ?></p>

    <section class="download-ebooks">
        <h2 class="section-title"><?= t('download.ebooks_title') ?></h2>

        <div class="ebook-featured">
            <div class="ebook-featured__badge"><?= $current['label'] ?></div>
            <div class="ebook-featured__body">
                <h3 class="ebook-featured__title"><?= htmlspecialchars($current['title']) ?></h3>
                <p class="ebook-featured__desc"><?= htmlspecialchars($current['desc']) ?></p>
            </div>
            <div class="ebook-featured__footer">
                <a href="<?= asset('/assets/files/' . $current['file']) ?>"
                   class="ebook-btn" download="<?= $current['file'] ?>"><?= htmlspecialchars($current['btn']) ?></a>
            </div>
        </div>

        <p class="ebook-also-label"><?= t('download.also_in') ?></p>
        <div class="ebook-others">
            <?php foreach ($others as $code => $eb): ?>
            <a href="<?= asset('/assets/files/' . $eb['file']) ?>"
               class="ebook-other-link" download="<?= $eb['file'] ?>">
                <span class="ebook-other-link__badge"><?= $eb['label'] ?></span>
                <span class="ebook-other-link__title"><?= htmlspecialchars($eb['title']) ?></span>
            </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="download-cta">
        <p class="download-cta__text"><?= t('download.cta_text') ?></p>
        <a href="mailto:faustobe@gmail.com" class="download-cta__link">faustobe@gmail.com</a>
    </section>
</main>
