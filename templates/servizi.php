<main class="services-page">
    <header class="page-intro">
        <h1 class="page-intro__title"><?= t('servizi.title') ?></h1>
        <p class="page-intro__lead"><?= t('servizi.lead') ?></p>
    </header>

    <div class="services-grid">
        <article class="service-card">
            <div class="service-card__icon">🌐</div>
            <h2 class="service-card__title"><?= t('servizi.web_title') ?></h2>
            <p class="service-card__text"><?= t('servizi.web_text') ?></p>
        </article>
        <article class="service-card">
            <div class="service-card__icon">⚙️</div>
            <h2 class="service-card__title"><?= t('servizi.automation_title') ?></h2>
            <p class="service-card__text"><?= t('servizi.automation_text') ?></p>
        </article>
        <article class="service-card">
            <div class="service-card__icon">📱</div>
            <h2 class="service-card__title"><?= t('servizi.android_title') ?></h2>
            <p class="service-card__text"><?= t('servizi.android_text') ?></p>
        </article>
        <article class="service-card">
            <div class="service-card__icon">📄</div>
            <h2 class="service-card__title"><?= t('servizi.latex_title') ?></h2>
            <p class="service-card__text"><?= t('servizi.latex_text') ?></p>
        </article>
    </div>

    <section class="services-cta">
        <h2 class="services-cta__title"><?= t('home.contact_title') ?></h2>
        <p class="services-cta__text"><?= t('servizi.contact_text') ?></p>
        <a href="mailto:faustobe@gmail.com" class="btn"><?= t('home.contact_cta') ?></a>
    </section>
</main>
