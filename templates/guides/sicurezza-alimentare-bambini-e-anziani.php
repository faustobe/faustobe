<main>
<div class="guide-page">

  <!-- Breadcrumb -->
  <nav class="guide-breadcrumb" aria-label="Breadcrumb">
    <a href="<?= url() ?>">faustobe</a>
    <span>›</span>
    <a href="<?= url('guides') ?>"><?= t('nav.guides') ?></a>
    <span>›</span>
    <span><?= t('guides.sicurezza_bambini_breadcrumb') ?></span>
  </nav>

  <!-- Hero -->
  <header class="guide-hero">
    <div class="guide-hero__text">
      <div class="guide-hero__tag">
        <span>👶</span> <?= t('guides.category_info') ?>
      </div>
      <h1 class="guide-hero__title"><?= t('guides.sicurezza_bambini_h1') ?></h1>
      <p class="guide-hero__lead"><?= t('guides.sicurezza_bambini_lead') ?></p>
      <div class="guide-hero__meta">
        <span>⏱ <?= t('guides.read_8min') ?></span>
        <span>🎯 <?= t('guides.level_beginner') ?></span>
      </div>
    </div>

    <!-- TOC sidebar (desktop) -->
    <aside class="guide-hero__aside" aria-label="Indice della guida">
      <strong><?= t('guides.toc_title') ?></strong>
      <ol class="toc-list">
        <li><a href="#piu-vulnerabili"><span class="toc-num">1</span><?= t('guides.sicurezza_bambini_toc_1') ?></a></li>
        <li><a href="#additivi-bambini"><span class="toc-num">2</span><?= t('guides.sicurezza_bambini_toc_2') ?></a></li>
        <li><a href="#anziani"><span class="toc-num">3</span><?= t('guides.sicurezza_bambini_toc_3') ?></a></li>
        <li><a href="#prodotti-bambini"><span class="toc-num">4</span><?= t('guides.sicurezza_bambini_toc_4') ?></a></li>
        <li><a href="#lista-sicura"><span class="toc-num">5</span><?= t('guides.sicurezza_bambini_toc_5') ?></a></li>
      </ol>
    </aside>
  </header>

  <!-- Main content -->
  <div class="guide-content">
<?php
$contentFile = __DIR__ . '/content/sicurezza-alimentare-bambini-e-anziani.' . $currentLang . '.php';
require file_exists($contentFile)
    ? $contentFile
    : __DIR__ . '/content/sicurezza-alimentare-bambini-e-anziani.it.php';
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
