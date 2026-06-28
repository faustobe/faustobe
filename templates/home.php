<main class="home">

    <!-- Hero -->
    <section class="hero">
        <p class="hero__eyebrow"><?= t('home.eyebrow') ?></p>
        <h1 class="hero__title"><?= t('home.headline') ?></h1>
        <p class="hero__subtitle"><?= t('home.subtitle') ?></p>
        <div class="hero__actions">
            <a href="<?= url('servizi') ?>" class="btn"><?= t('home.cta_services') ?></a>
            <a href="<?= url('apps/ecodes') ?>" class="btn btn--ghost"><?= t('home.cta_apps') ?></a>
        </div>
    </section>

    <!-- Servizi interattivi -->
    <section class="home-services">
        <div class="services-interactive">
            <div class="services-list">
                <a href="<?= url('servizi') ?>" class="service-item is-active" data-preview="web">
                    <div class="service-item__icon">🌐</div>
                    <div class="service-item__text">
                        <h3 class="service-item__title"><?= t('servizi.web_title') ?></h3>
                        <p class="service-item__desc"><?= t('home.svc_web_desc') ?></p>
                    </div>
                    <img class="service-item__inline" src="<?= asset('/assets/works/adg.jpg') ?>" alt="" loading="lazy" />
                </a>
                <a href="<?= url('servizi') ?>" class="service-item" data-preview="automation">
                    <div class="service-item__icon">⚙️</div>
                    <div class="service-item__text">
                        <h3 class="service-item__title"><?= t('servizi.automation_title') ?></h3>
                        <p class="service-item__desc"><?= t('home.svc_automation_desc') ?></p>
                    </div>
                    <img class="service-item__inline" src="<?= asset('/assets/works/onirika.jpg') ?>" alt="" loading="lazy" />
                </a>
                <a href="<?= url('servizi') ?>" class="service-item" data-preview="android">
                    <div class="service-item__icon">📱</div>
                    <div class="service-item__text">
                        <h3 class="service-item__title"><?= t('servizi.android_title') ?></h3>
                        <p class="service-item__desc"><?= t('home.svc_android_desc') ?></p>
                    </div>
                    <img class="service-item__inline" src="<?= asset('/assets/works/jigger-0.jpeg') ?>" alt="" loading="lazy" />
                </a>
                <a href="<?= url('servizi') ?>" class="service-item" data-preview="latex">
                    <div class="service-item__icon">📄</div>
                    <div class="service-item__text">
                        <h3 class="service-item__title"><?= t('servizi.latex_title') ?></h3>
                        <p class="service-item__desc"><?= t('home.svc_latex_desc') ?></p>
                    </div>
                    <img class="service-item__inline" src="<?= asset('/assets/works/ebook-guide.jpg') ?>" alt="" loading="lazy" />
                </a>
            </div>

            <div class="services-preview" aria-hidden="true">
                <img class="services-preview__img is-active" data-preview="web" src="<?= asset('/assets/works/adg.jpg') ?>" alt="" loading="lazy" />
                <img class="services-preview__img" data-preview="automation" src="<?= asset('/assets/works/onirika.jpg') ?>" alt="" loading="lazy" />
                <img class="services-preview__img" data-preview="android" src="<?= asset('/assets/works/jigger-0.jpeg') ?>" alt="" loading="lazy" />
                <img class="services-preview__img" data-preview="latex" src="<?= asset('/assets/works/ebook-guide.jpg') ?>" alt="" loading="lazy" />
            </div>
        </div>
    </section>

</main>

<script>
(function () {
    var items = document.querySelectorAll('.service-item');
    var previews = document.querySelectorAll('.services-preview__img');
    if (!items.length) return;

    function activate(key) {
        items.forEach(function (it) {
            it.classList.toggle('is-active', it.getAttribute('data-preview') === key);
        });
        previews.forEach(function (p) {
            p.classList.toggle('is-active', p.getAttribute('data-preview') === key);
        });
    }

    items.forEach(function (it) {
        var key = it.getAttribute('data-preview');
        it.addEventListener('mouseenter', function () { activate(key); });
        it.addEventListener('focus', function () { activate(key); });
    });
})();
</script>
