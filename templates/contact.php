<main class="legal-page">
    <h1><?= t('contact.title') ?></h1>

    <section>
        <h2><?= t('contact.email_title') ?></h2>
        <p><?= t('contact.email_text') ?></p>
        <p class="contact-email">
            <a href="mailto:faustobe@gmail.com">faustobe@gmail.com</a>
        </p>
    </section>

    <section>
        <h2><?= t('contact.support_title') ?></h2>
        <p><?= t('contact.support_text') ?></p>
        <ul>
<?php foreach (tRaw('contact.support_items') as $item): ?>
            <li><?= e($item) ?></li>
<?php endforeach; ?>
        </ul>
    </section>

    <section>
        <h2><?= t('contact.github_title') ?></h2>
        <p><?= t('contact.github_text') ?></p>
        <p><a href="https://github.com/faustobe" target="_blank" rel="noopener">github.com/faustobe</a></p>
    </section>
</main>
