<main class="whoami-page">
    <header class="whoami-hero">
        <img class="whoami-hero__photo" src="<?= asset('/assets/cyb-nana.png') ?>" alt="faustobe" />
        <div class="whoami-hero__body">
            <h1 class="whoami-hero__name"><?= t('whoami.title') ?></h1>
            <p class="whoami-hero__bio"><?= t('whoami.p1') ?></p>
            <p class="whoami-hero__bio"><?= t('whoami.p2') ?></p>
        </div>
    </header>

    <section class="whoami-contact">
        <h2 class="whoami-contact__title"><?= t('whoami.contact_title') ?></h2>
        <p class="whoami-contact__text"><?= t('whoami.contact_text') ?></p>
        <div class="whoami-contact__actions">
            <a href="mailto:faustobe@gmail.com" class="btn">faustobe@gmail.com</a>
            <a href="https://github.com/faustobe" class="btn btn--ghost" target="_blank" rel="noopener">GitHub</a>
        </div>
        <p class="whoami-contact__note"><?= t('whoami.github_text') ?> <a href="https://github.com/faustobe" target="_blank" rel="noopener">github.com/faustobe</a></p>
        <p class="whoami-contact__note"><?= t('whoami.support_text') ?></p>
    </section>
</main>
