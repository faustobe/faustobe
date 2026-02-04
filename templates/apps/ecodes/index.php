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
                <span class="badge-coming-soon"><?= t('ecodes.coming_soon') ?></span>
            </div>
        </div>
    </section>

    <!-- Beta Tester Section -->
    <section class="beta-section">
        <h2><?= t('ecodes.beta_title') ?></h2>
        <p class="beta-intro"><?= t('ecodes.beta_intro') ?></p>
        <p class="beta-description"><?= t('ecodes.beta_description') ?></p>

        <div class="beta-form-container">
            <form id="beta-form" class="beta-form" action="https://docs.google.com/forms/d/e/1FAIpQLSc9oyp0npEEv9U9JhXXcIu-hAfgzAxQlHUzoJb3oPU9UW-Cvg/formResponse" method="POST" target="hidden-iframe">
                <div class="form-group">
                    <label for="email"><?= t('ecodes.beta_label') ?></label>
                    <input type="email" id="email" name="entry.1381138829" placeholder="<?= e(t('ecodes.beta_placeholder')) ?>" required />
                </div>
                <button type="submit" class="btn btn-submit"><?= t('ecodes.beta_submit') ?></button>
                <span class="form-hint"><?= t('ecodes.beta_hint') ?></span>
            </form>
            <div id="form-success" class="form-success" style="display: none;">
                <?= t('ecodes.beta_success') ?>
            </div>
            <iframe name="hidden-iframe" style="display: none;"></iframe>
        </div>

        <p class="beta-note"><?= t('ecodes.beta_note') ?></p>
    </section>

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

    <!-- Links Section -->
    <section class="app-links">
        <a href="<?= url('apps/ecodes/privacy') ?>"><?= t('ecodes.privacy_link') ?></a>
        <a href="<?= url('contact') ?>"><?= t('ecodes.contact_link') ?></a>
    </section>

</main>
