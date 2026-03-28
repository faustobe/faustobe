<main>
    <!-- Hero Section -->
    <section class="app-hero">
        <div class="app-icon">
            <img src="<?= asset('/assets/ecodes/icon.png') ?>" alt="E-Codes Reader Icon" />
        </div>
        <div class="app-intro">
            <h1><?= t('ecodes.title') ?></h1>
            <p class="tagline"><?= t('ecodes.tagline') ?></p>
            <p class="description"><?= t('ecodes.description') ?></p>
            <div class="app-buttons">
                <a href="https://play.google.com/store/apps/details?id=it.faustobe.ecodes" target="_blank" rel="noopener">
                    <img src="<?= asset('/assets/google-play-badge.png') ?>" alt="Scarica su Google Play" height="60" />
                </a>
            </div>
        </div>
    </section>

    <!-- <?php // require __DIR__ . '/../../components/beta-section.php'; ?> -->

    <!-- Features Section -->
    <section class="features">
        <h2><?= t('ecodes.features_title') ?></h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">&#128247;</div>
                <h3><?= t('ecodes.feature_scan') ?></h3>
                <p><?= t('ecodes.feature_scan_desc') ?></p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#128300;</div>
                <h3><?= t('ecodes.feature_db') ?></h3>
                <p><?= t('ecodes.feature_db_desc') ?></p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#9888;&#65039;</div>
                <h3><?= t('ecodes.feature_alert') ?></h3>
                <p><?= t('ecodes.feature_alert_desc') ?></p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#129367;</div>
                <h3><?= t('ecodes.feature_diet') ?></h3>
                <p><?= t('ecodes.feature_diet_desc') ?></p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#128202;</div>
                <h3><?= t('ecodes.feature_nutri') ?></h3>
                <p><?= t('ecodes.feature_nutri_desc') ?></p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#127757;</div>
                <h3><?= t('ecodes.feature_lang') ?></h3>
                <p><?= t('ecodes.feature_lang_desc') ?></p>
            </div>
        </div>
    </section>

    <!-- Screenshots Section -->
    <section class="screenshots">
        <h2><?= t('ecodes.screenshots_title') ?></h2>
        <div class="screenshots-grid">
            <img src="<?= asset('/assets/ecodes/screen1.png') ?>" alt="<?= e(t('ecodes.screen1_alt')) ?>" />
            <img src="<?= asset('/assets/ecodes/screen2.png') ?>" alt="<?= e(t('ecodes.screen2_alt')) ?>" />
            <img src="<?= asset('/assets/ecodes/screen3.png') ?>" alt="<?= e(t('ecodes.screen3_alt')) ?>" />
            <img src="<?= asset('/assets/ecodes/screen4.png') ?>" alt="<?= e(t('ecodes.screen4_alt')) ?>" />
        </div>
    </section>

    <!-- Info Section -->
    <section class="app-info">
        <h2><?= t('ecodes.info_title') ?></h2>
        <div class="info-grid">
            <div class="info-item">
                <strong><?= t('ecodes.version_label') ?></strong>
                <span><?= t('ecodes.version') ?></span>
            </div>
            <div class="info-item">
                <strong><?= t('ecodes.android_label') ?></strong>
                <span><?= t('ecodes.android') ?></span>
            </div>
            <div class="info-item">
                <strong><?= t('ecodes.updated_label') ?></strong>
                <span><?= t('ecodes.updated') ?></span>
            </div>
            <div class="info-item">
                <strong><?= t('ecodes.license_label') ?></strong>
                <span><?= t('ecodes.license') ?></span>
            </div>
        </div>
    </section>

    <!-- Guides Section -->
    <section class="app-guides">
        <h2><?= t('ecodes.guides_section_title') ?></h2>
        <div class="app-guides-row">
            <a href="<?= url('guides/come-usare-ecodes') ?>" class="app-guide-chip">
                <span class="app-guide-chip__icon">📱</span>
                <span class="app-guide-chip__label"><?= t('ecodes.guide_come_usare') ?></span>
            </a>
            <a href="<?= url('guides/leggere-etichetta-nutrizionale') ?>" class="app-guide-chip">
                <span class="app-guide-chip__icon">🏷️</span>
                <span class="app-guide-chip__label"><?= t('ecodes.guide_etichetta') ?></span>
            </a>
            <a href="<?= url('guides/additivi-vs-ultraprocessati') ?>" class="app-guide-chip">
                <span class="app-guide-chip__icon">🧪</span>
                <span class="app-guide-chip__label"><?= t('ecodes.guide_additivi') ?></span>
            </a>
            <a href="<?= url('guides/classificazione-nova') ?>" class="app-guide-chip">
                <span class="app-guide-chip__icon">📊</span>
                <span class="app-guide-chip__label"><?= t('ecodes.guide_nova') ?></span>
            </a>
            <a href="<?= url('guides/ingredienti-pericolosi') ?>" class="app-guide-chip">
                <span class="app-guide-chip__icon">⚠️</span>
                <span class="app-guide-chip__label"><?= t('ecodes.guide_ingredienti') ?></span>
            </a>
            <a href="<?= url('guides/cibi-consigliati') ?>" class="app-guide-chip">
                <span class="app-guide-chip__icon">🥦</span>
                <span class="app-guide-chip__label"><?= t('ecodes.guide_cibi') ?></span>
            </a>
            <a href="<?= url('guides/rischi-alimenti-ultraprocessati') ?>" class="app-guide-chip">
                <span class="app-guide-chip__icon">🔬</span>
                <span class="app-guide-chip__label"><?= t('ecodes.guide_upf') ?></span>
            </a>
            <a href="<?= url('guides/sicurezza-alimentare-bambini-e-anziani') ?>" class="app-guide-chip">
                <span class="app-guide-chip__icon">👶</span>
                <span class="app-guide-chip__label"><?= t('ecodes.guide_bambini') ?></span>
            </a>
        </div>
    </section>

    <!-- Links Section -->
    <section class="app-links">
        <a href="<?= url('apps/ecodes/privacy') ?>"><?= t('ecodes.privacy_link') ?></a>
        <a href="<?= url('whoami') ?>"><?= t('ecodes.contact_link') ?></a>
    </section>

</main>
