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
