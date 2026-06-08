<main class="works-page">
    <h1><?= t('works.title') ?></h1>

    <article class="project-card">
        <div class="project-card__body">
            <h2 class="project-card__title"><?= t('works.ecodes_title') ?></h2>
            <p class="project-card__desc"><?= t('works.ecodes_desc') ?></p>
            <div class="project-card__tags">
                <span class="project-tag">Android</span>
                <span class="project-tag">Open Food Facts</span>
            </div>
        </div>
        <div class="project-card__footer">
            <a href="https://play.google.com/store/apps/details?id=it.faustobe.ecodes" class="project-link project-link--store" target="_blank" rel="noopener">Play Store</a>
            <a href="<?= url('apps/ecodes') ?>" class="project-link"><?= t('works.ecodes_link') ?></a>
        </div>
    </article>

    <article class="project-card">
        <div class="project-card__body">
            <h2 class="project-card__title"><?= t('works.jigger_title') ?></h2>
            <p class="project-card__desc"><?= t('works.jigger_desc') ?></p>
            <div class="project-card__tags">
                <span class="project-tag">Android</span>
                <span class="project-tag project-tag--private"><?= t('works.tag_private') ?></span>
            </div>
        </div>
        <div class="project-card__screenshots">
            <div class="screenshots-grid">
                <img src="<?= asset('/assets/works/jigger-0.jpeg') ?>" alt="Jigger - screenshot 1">
                <img src="<?= asset('/assets/works/jigger-1.jpeg') ?>" alt="Jigger - screenshot 2">
                <img src="<?= asset('/assets/works/jigger-2.jpeg') ?>" alt="Jigger - screenshot 3">
            </div>
        </div>
    </article>

    <article class="project-card">
        <div class="project-card__body">
            <h2 class="project-card__title"><?= t('works.gestionale_title') ?></h2>
            <p class="project-card__desc"><?= t('works.gestionale_desc') ?></p>
            <div class="project-card__tags">
                <span class="project-tag">Dolibarr</span>
                <span class="project-tag project-tag--production"><?= t('works.tag_production') ?></span>
            </div>
        </div>
        <div class="project-card__screenshots">
            <div class="screenshots-grid">
                <img src="<?= asset('/assets/works/temp.jpg') ?>" alt="Gestionale - screenshot">
            </div>
        </div>
    </article>
</main>
