// =============================================
// MENU MOBILE
// =============================================
document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            // Cambia icona hamburger → × (opzionale)
            menuToggle.textContent = navLinks.classList.contains('active') ? '✕' : '☰';
        });

        // Chiudi menu quando si clicca un link (utile su mobile)
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                menuToggle.textContent = '☰';
            });
        });
    }

    // =============================================
    // TEMA DARK/LIGHT + SALVATAGGIO PREFERENZA
    // =============================================
    const themeToggle = document.querySelector('.theme-toggle');
    const body = document.body;

    // Carica preferenza salvata o system preference
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        body.classList.toggle('dark', savedTheme === 'dark');
    } else if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
        body.classList.add('dark');
    }

    // Aggiorna icona iniziale
    if (themeToggle) {
        themeToggle.textContent = body.classList.contains('dark') ? '☀️' : '🌙';
    }

    // Toggle tema
    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark');
            const isDark = body.classList.contains('dark');
            themeToggle.textContent = isDark ? '☀️' : '🌙';
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        });
    }

    // =============================================
    // BETA FORM - Google Forms submission
    // =============================================
    const betaForm = document.getElementById('beta-form');
    const formSuccess = document.getElementById('form-success');
    const submitBtn = document.querySelector('.btn-submit');

    if (betaForm && formSuccess && submitBtn) {
        submitBtn.addEventListener('click', (e) => {
            if (betaForm.checkValidity()) {
                e.preventDefault();
                const formData = new FormData(betaForm);
                fetch(betaForm.action, {
                    method: 'POST',
                    body: formData,
                    mode: 'no-cors'
                }).then(() => {
                    betaForm.style.display = 'none';
                    formSuccess.style.display = 'block';
                });
            }
        });
    }
});








