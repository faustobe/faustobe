<main class="privacy-page">
    <h1><?= t('ecodes_privacy.title') ?></h1>
    <p class="last-updated"><strong><?= t('ecodes_privacy.last_updated') ?></strong></p>

    <section>
        <h2><?= t('ecodes_privacy.intro_title') ?></h2>
        <p><?= t('ecodes_privacy.intro_text') ?></p>
    </section>

    <section>
        <h2><?= t('ecodes_privacy.data_title') ?></h2>

        <h3><?= t('ecodes_privacy.data_local_title') ?></h3>
        <ul>
<?php foreach (tRaw('ecodes_privacy.data_local_items') as $item): ?>
            <li><?= $item ?></li>
<?php endforeach; ?>
        </ul>
        <p><?= t('ecodes_privacy.data_local_note') ?></p>

        <h3><?= t('ecodes_privacy.data_perms_title') ?></h3>
        <ul>
<?php foreach (tRaw('ecodes_privacy.data_perms_items') as $item): ?>
            <li><?= $item ?></li>
<?php endforeach; ?>
        </ul>
    </section>

    <section>
        <h2><?= t('ecodes_privacy.third_title') ?></h2>
        <p><?= t('ecodes_privacy.third_text') ?></p>

        <h3><?= t('ecodes_privacy.off_title') ?></h3>
        <p><?= t('ecodes_privacy.off_text') ?> <a href="https://world.openfoodfacts.org/privacy" target="_blank" rel="noopener"><?= t('ecodes_privacy.off_link') ?></a>.</p>

        <h3><?= t('ecodes_privacy.mlkit_title') ?></h3>
        <p><?= t('ecodes_privacy.mlkit_text') ?> <a href="https://policies.google.com/privacy" target="_blank" rel="noopener"><?= t('ecodes_privacy.mlkit_link') ?></a>.</p>
    </section>

    <section>
        <h2><?= t('ecodes_privacy.not_collected_title') ?></h2>
        <p><?= t('ecodes_privacy.not_collected_text') ?></p>
        <ul>
<?php foreach (tRaw('ecodes_privacy.not_collected_items') as $item): ?>
            <li><?= e($item) ?></li>
<?php endforeach; ?>
        </ul>
    </section>

    <section>
        <h2><?= t('ecodes_privacy.security_title') ?></h2>
        <p><?= t('ecodes_privacy.security_text') ?></p>
    </section>

    <section>
        <h2><?= t('ecodes_privacy.children_title') ?></h2>
        <p><?= t('ecodes_privacy.children_text') ?></p>
    </section>

    <section>
        <h2><?= t('ecodes_privacy.changes_title') ?></h2>
        <p><?= t('ecodes_privacy.changes_text') ?></p>
    </section>

    <section>
        <h2><?= t('ecodes_privacy.contact_title') ?></h2>
        <p><?= t('ecodes_privacy.contact_text') ?> <a href="mailto:faustobe.azs@gmail.com">faustobe.azs@gmail.com</a></p>
    </section>

    <p class="back-link"><a href="<?= url('apps/ecodes') ?>"><?= t('ecodes_privacy.back_link') ?></a></p>
</main>
