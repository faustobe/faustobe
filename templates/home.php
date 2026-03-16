<main>
    <!-- Hero -->
    <section class="hero">
        <h1><?= t('home.headline') ?></h1>
        <p class="subtitle"><?= t('home.subtitle') ?></p>
    </section>

    <!-- App Cards -->
    <section class="app-cards">
        <a href="<?= url('apps/ecodes') ?>" class="app-card">
            <img src="<?= asset('/assets/ecodes/icon.png') ?>" alt="E-Codes Reader" class="app-card-icon" />
            <div class="app-card-body">
                <h2>E-Codes Reader</h2>
                <p><?= t('home.ecodes_card_desc') ?></p>
            </div>
        </a>
    </section>
</main>
