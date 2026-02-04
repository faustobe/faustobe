<main class="legal-page">
    <h1><?= t('privacy.title') ?></h1>

    <p class="last-updated"><?= t('privacy.last_updated') ?></p>

    <section>
        <h2><?= t('privacy.controller_title') ?></h2>
        <p><?= t('privacy.controller_text') ?> <a href="mailto:faustobe@gmail.com">faustobe@gmail.com</a></p>
    </section>

    <section>
        <h2><?= t('privacy.data_title') ?></h2>
        <p><?= t('privacy.data_text1') ?></p>
        <p><?= t('privacy.data_text2') ?></p>
    </section>

    <section>
        <h2><?= t('privacy.apps_title') ?></h2>
        <p><?= t('privacy.apps_text') ?></p>
        <ul>
            <li><a href="<?= url('apps/ecodes/privacy') ?>"><?= t('privacy.apps_ecodes_link') ?></a></li>
        </ul>
    </section>

    <section>
        <h2><?= t('privacy.rights_title') ?></h2>
        <p><?= t('privacy.rights_text') ?></p>
        <ul>
<?php foreach (tRaw('privacy.rights_items') as $item): ?>
            <li><?= e($item) ?></li>
<?php endforeach; ?>
        </ul>
        <p><?= t('privacy.rights_contact') ?></p>
    </section>

    <section>
        <h2><?= t('privacy.changes_title') ?></h2>
        <p><?= t('privacy.changes_text') ?></p>
    </section>
</main>
