<main>
<div class="guide-page">

  <!-- Breadcrumb -->
  <nav class="guide-breadcrumb" aria-label="Breadcrumb">
    <a href="<?= url() ?>">faustobe</a>
    <span>›</span>
    <span><?= t('nav.guides') ?></span>
  </nav>

  <!-- Header -->
  <div class="guides-index">
    <div class="guides-index__header">
      <div class="guides-index__tag">📚 <?= t('nav.guides') ?></div>
      <h1 class="guides-index__title"><?= t('guides.index_title') ?></h1>
      <p class="guides-index__lead"><?= t('guides.index_lead') ?></p>
    </div>

    <!-- Guides grid -->
    <div class="guides-grid">

      <a href="<?= url('guides/come-usare-ecodes') ?>" class="guide-card">
        <div class="guide-card__icon">📱</div>
        <div class="guide-card__category"><?= t('guides.category_app') ?></div>
        <div class="guide-card__title"><?= t('guides.come_usare_ecodes_title') ?></div>
        <div class="guide-card__desc"><?= t('guides.come_usare_ecodes_desc') ?></div>
        <div class="guide-card__meta">
          <span>⏱ <?= t('guides.read_5min') ?></span>
          <span>🎯 <?= t('guides.level_beginner') ?></span>
        </div>
      </a>

      <a href="<?= url('guides/leggere-etichetta-nutrizionale') ?>" class="guide-card">
        <div class="guide-card__icon">🏷️</div>
        <div class="guide-card__category"><?= t('guides.category_info') ?></div>
        <div class="guide-card__title"><?= t('guides.leggere_etichetta_title') ?></div>
        <div class="guide-card__desc"><?= t('guides.leggere_etichetta_desc') ?></div>
        <div class="guide-card__meta">
          <span>⏱ <?= t('guides.read_7min') ?></span>
          <span>🎯 <?= t('guides.level_beginner') ?></span>
        </div>
      </a>

      <a href="<?= url('guides/additivi-vs-ultraprocessati') ?>" class="guide-card">
        <div class="guide-card__icon">🧪</div>
        <div class="guide-card__category"><?= t('guides.category_info') ?></div>
        <div class="guide-card__title"><?= t('guides.additivi_ultra_title') ?></div>
        <div class="guide-card__desc"><?= t('guides.additivi_ultra_desc') ?></div>
        <div class="guide-card__meta">
          <span>⏱ <?= t('guides.read_7min') ?></span>
          <span>🎯 <?= t('guides.level_beginner') ?></span>
        </div>
      </a>

      <a href="<?= url('guides/classificazione-nova') ?>" class="guide-card">
        <div class="guide-card__icon">📊</div>
        <div class="guide-card__category"><?= t('guides.category_info') ?></div>
        <div class="guide-card__title"><?= t('guides.nova_title') ?></div>
        <div class="guide-card__desc"><?= t('guides.nova_desc') ?></div>
        <div class="guide-card__meta">
          <span>⏱ <?= t('guides.read_7min') ?></span>
          <span>🎯 <?= t('guides.level_beginner') ?></span>
        </div>
      </a>

      <a href="<?= url('guides/ingredienti-pericolosi') ?>" class="guide-card">
        <div class="guide-card__icon">⚠️</div>
        <div class="guide-card__category"><?= t('guides.category_info') ?></div>
        <div class="guide-card__title"><?= t('guides.ingredienti_title') ?></div>
        <div class="guide-card__desc"><?= t('guides.ingredienti_desc') ?></div>
        <div class="guide-card__meta">
          <span>⏱ <?= t('guides.read_8min') ?></span>
          <span>🎯 <?= t('guides.level_beginner') ?></span>
        </div>
      </a>

      <a href="<?= url('guides/cibi-consigliati') ?>" class="guide-card">
        <div class="guide-card__icon">🥦</div>
        <div class="guide-card__category"><?= t('guides.category_info') ?></div>
        <div class="guide-card__title"><?= t('guides.cibi_title') ?></div>
        <div class="guide-card__desc"><?= t('guides.cibi_desc') ?></div>
        <div class="guide-card__meta">
          <span>⏱ <?= t('guides.read_7min') ?></span>
          <span>🎯 <?= t('guides.level_beginner') ?></span>
        </div>
      </a>

      <a href="<?= url('guides/rischi-alimenti-ultraprocessati') ?>" class="guide-card">
        <div class="guide-card__icon">🔬</div>
        <div class="guide-card__category"><?= t('guides.category_info') ?></div>
        <div class="guide-card__title"><?= t('guides.rischi_upf_title') ?></div>
        <div class="guide-card__desc"><?= t('guides.rischi_upf_desc') ?></div>
        <div class="guide-card__meta">
          <span>⏱ <?= t('guides.read_7min') ?></span>
          <span>🎯 <?= t('guides.level_beginner') ?></span>
        </div>
      </a>

      <a href="<?= url('guides/sicurezza-alimentare-bambini-e-anziani') ?>" class="guide-card">
        <div class="guide-card__icon">👶</div>
        <div class="guide-card__category"><?= t('guides.category_info') ?></div>
        <div class="guide-card__title"><?= t('guides.sicurezza_bambini_title') ?></div>
        <div class="guide-card__desc"><?= t('guides.sicurezza_bambini_desc') ?></div>
        <div class="guide-card__meta">
          <span>⏱ <?= t('guides.read_8min') ?></span>
          <span>🎯 <?= t('guides.level_beginner') ?></span>
        </div>
      </a>

    </div>
  </div>

</div>
</main>

<script>
(function () {
    var hdr = document.querySelector('.guides-index__header');
    if (!hdr) return;

    var initH = hdr.offsetHeight;
    hdr.style.maxHeight = initH + 'px';

    var collapsed = false;

    function update() {
        var shouldCollapse = window.scrollY > 20;
        if (shouldCollapse === collapsed) return;
        collapsed = shouldCollapse;

        if (collapsed) {
            hdr.style.maxHeight = '0px';
            hdr.style.marginBottom = '0px';
        } else {
            hdr.style.maxHeight = initH + 'px';
            hdr.style.marginBottom = '';
        }
    }

    window.addEventListener('scroll', update, { passive: true });
})();
</script>
