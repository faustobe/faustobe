# Aggiungere una nuova lingua

## Esempio: aggiungere il Portoghese (pt)

### 1. Creare il file di traduzione

Copiare `lang/it.php` come base e tradurre tutti i valori:

```bash
cp lang/it.php lang/pt.php
```

Aprire `lang/pt.php` e tradurre ogni stringa. La struttura da mantenere è:

```php
<?php
return [
    'nav' => [
        'home' => 'Início',
        // ...
    ],
    'footer' => [
        'privacy' => 'Privacidade',
        'contact' => 'Contato',
        // ...
    ],
    // tutte le altre sezioni: meta, home, contact, privacy,
    // ecodes, ecodes_privacy, santibailor, drop, works
];
```

### 2. Registrare la lingua in `config.php`

Aggiungere il codice lingua all'array `$SUPPORTED_LANGUAGES`:

```php
$SUPPORTED_LANGUAGES = [
    'it' => 'Italiano',
    'en' => 'English',
    'es' => 'Español',
    'fr' => 'Français',
    'de' => 'Deutsch',
    'pt' => 'Português',  // ← aggiungere qui
];
```

### 3. Aggiungere il routing in `.htaccess`

Aggiungere il codice lingua nelle due regole di rewrite (riga 4):

```apache
# prima
RewriteRule ^(en|es|fr|de)/?$ ...
RewriteRule ^(en|es|fr|de)/(.+?)/?$ ...

# dopo
RewriteRule ^(en|es|fr|de|pt)/?$ ...
RewriteRule ^(en|es|fr|de|pt)/(.+?)/?$ ...
```

### Fatto

Nessun altro file da modificare. Header, footer, language switcher e tag hreflang si aggiornano automaticamente leggendo `$SUPPORTED_LANGUAGES`.

## Checklist

- [ ] `lang/pt.php` creato con tutte le traduzioni
- [ ] `config.php` aggiornato con la nuova lingua
- [ ] `.htaccess` aggiornato con il nuovo codice lingua
- [ ] Testare `http://localhost/faustobe/pt/` e le altre pagine
