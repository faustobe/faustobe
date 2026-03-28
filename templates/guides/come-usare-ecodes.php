<main>
<div class="guide-page">

  <!-- Breadcrumb -->
  <nav class="guide-breadcrumb" aria-label="Breadcrumb">
    <a href="<?= url() ?>">faustobe</a>
    <span>›</span>
    <a href="<?= url('guides') ?>"><?= t('nav.guides') ?></a>
    <span>›</span>
    <span><?= t('guides.come_usare_ecodes_breadcrumb') ?></span>
  </nav>

  <!-- Hero -->
  <header class="guide-hero">
    <div class="guide-hero__text">
      <div class="guide-hero__tag">
        <span>📖</span> <?= t('guides.category_app') ?>
      </div>
      <h1 class="guide-hero__title"><?= t('guides.come_usare_ecodes_h1') ?></h1>
      <p class="guide-hero__lead"><?= t('guides.come_usare_ecodes_lead') ?></p>
      <div class="guide-hero__meta">
        <span>⏱ <?= t('guides.read_5min') ?></span>
        <span>🎯 <?= t('guides.level_beginner') ?></span>
      </div>
    </div>

    <!-- TOC sidebar (desktop) -->
    <aside class="guide-hero__aside" aria-label="Indice della guida">
      <strong><?= t('guides.toc_title') ?></strong>
      <ol class="toc-list">
        <li>
          <a href="#tre-controlli">
            <span class="toc-num">1</span>
            <?= t('guides.ecodes_toc_1') ?>
          </a>
        </li>
        <li>
          <a href="#regole-semplici">
            <span class="toc-num">2</span>
            <?= t('guides.ecodes_toc_2') ?>
          </a>
        </li>
        <li>
          <a href="#interpretare-risultato">
            <span class="toc-num">3</span>
            <?= t('guides.ecodes_toc_3') ?>
          </a>
        </li>
        <li>
          <a href="#guida-pratica">
            <span class="toc-num">4</span>
            <?= t('guides.ecodes_toc_4') ?>
          </a>
        </li>
        <li>
          <a href="#riepilogo">
            <span class="toc-num">5</span>
            <?= t('guides.ecodes_toc_5') ?>
          </a>
        </li>
        <li>
          <a href="#perche-conta">
            <span class="toc-num">6</span>
            <?= t('guides.ecodes_toc_6') ?>
          </a>
        </li>
      </ol>
    </aside>
  </header>

  <!-- Main content -->
  <div class="guide-content">
<?php
$contentFile = __DIR__ . '/content/come-usare-ecodes.' . $currentLang . '.php';
require file_exists($contentFile)
    ? $contentFile
    : __DIR__ . '/content/come-usare-ecodes.it.php';
?>
  </div><!-- /guide-content -->
</div><!-- /guide-page -->
</main>

<script>
(function () {
    var hero = document.querySelector('.guide-hero');
    if (!hero) return;

    var initH = hero.offsetHeight;
    hero.style.maxHeight = initH + 'px';

    var collapsed = false;
    var scrollingToTop = false;

    function update() {
        if (scrollingToTop) {
            if (window.scrollY <= 20) { scrollingToTop = false; } else { return; }
        }
        var shouldCollapse = window.scrollY > 20;
        if (shouldCollapse === collapsed) return;
        collapsed = shouldCollapse;
        if (collapsed) {
            hero.style.maxHeight = '0px';
            hero.style.paddingTop = '0px';
            hero.style.paddingBottom = '0px';
        } else {
            hero.style.maxHeight = initH + 'px';
            hero.style.paddingTop = '';
            hero.style.paddingBottom = '';
        }
    }

    // TOC links: collapse hero instantly before scrolling to avoid layout-shift
    document.querySelectorAll('.toc-list a[href^="#"]').forEach(function (link) {
        link.addEventListener('click', function (e) {
            if (collapsed) return;
            e.preventDefault();
            var targetId = link.getAttribute('href');
            collapsed = true;
            hero.style.transition = 'none';
            hero.style.maxHeight = '0px';
            hero.style.paddingTop = '0px';
            hero.style.paddingBottom = '0px';
            requestAnimationFrame(function () {
                requestAnimationFrame(function () {
                    var target = document.querySelector(targetId);
                    if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    hero.style.transition = '';
                });
            });
        });
    });

    // Inject ↑ back-to-top button into each section header
    document.querySelectorAll('.guide-section-header').forEach(function (hdr) {
        var btn = document.createElement('a');
        btn.href = '#';
        btn.className = 'guide-back-top';
        btn.textContent = '↑';
        btn.title = 'Torna in cima';
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            scrollingToTop = true;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        hdr.appendChild(btn);
    });

    window.addEventListener('scroll', update, { passive: true });
})();
</script>
