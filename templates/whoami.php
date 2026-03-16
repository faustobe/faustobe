<main class="whoami-page">
    <div class="whoami-header">
        <img src="<?= asset('/assets/cyb-nana.png') ?>" alt="faustobe" class="whoami-photo" />
        <h1><?= t('whoami.title') ?></h1>
    </div>

    <div class="whoami-body">
        <p><?= t('whoami.p1') ?></p>
        <p><?= t('whoami.p2') ?></p>
    </div>

    <hr class="whoami-divider" />

    <section class="whoami-contact">
        <h2><?= t('whoami.contact_title') ?></h2>
        <p><?= t('whoami.contact_text') ?></p>
        <p class="contact-email">
            <a href="mailto:faustobe@gmail.com">faustobe@gmail.com</a>
        </p>
        <p><?= t('whoami.support_text') ?></p>
        <p><?= t('whoami.github_text') ?></p>
        <p><a href="https://github.com/faustobe" target="_blank" rel="noopener">github.com/faustobe</a></p>
    </section>
</main>
