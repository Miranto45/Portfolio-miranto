# Portfolio — ANDRIAMAHERISON TANTELINIAINA MIRANTO

Portfolio personnel en **Laravel 12**, design **noir & blanc** avec animations simples.
Tout est modifiable dans **VS Code**.

## 1. Installation (une seule fois)

Pre-requis : PHP 8.2+, Composer.

```bash
composer install
cp .env.example .env       # Windows : copy .env.example .env
php artisan key:generate
php artisan serve
```

Ouvre ensuite http://localhost:8000

## 2. Ou remplir mes informations ?

**Un seul fichier :** `config/portfolio.php`
Nom, email, telephone, GitHub, "A propos", formation, experience, competences,
projets, langues, centres d'interet. Tout est commente en francais.

## 3. Ma photo

Remplace le fichier `public/images/profil.jpg` par ta photo (garde le meme nom).
Elle s'affiche tout en haut du portfolio, a cote du nom.

## 4. Mon CV en PDF

Le fichier telecharge est `public/cv/CV-Miranto.pdf`.
Remplace-le par ton vrai CV (meme nom) : le bouton
« Telecharger mon CV » fonctionne pour tout le monde via la route `/cv`.

## 5. Faire fonctionner les messages (formulaire de contact)

Le formulaire envoie un vrai email a mirantoandriamaherison@gmail.com.
Dans `.env`, renseigne un **mot de passe d'application Gmail** :

1. Active la validation en 2 etapes sur ton compte Google.
2. Va sur https://myaccount.google.com/apppasswords et cree un mot de passe.
3. Colle-le dans `MAIL_PASSWORD` du fichier `.env`.

Pour tester sans email, mets `MAIL_MAILER=log` : les messages arrivent dans
`storage/logs/laravel.log`.

## 6. Mettre en ligne sur GitHub (compte Miranto45)

```bash
git init
git add .
git commit -m "Mon portfolio Laravel"
git branch -M main
git remote add origin https://github.com/Miranto45/portfolio.git
git push -u origin main
```

Cree d'abord le depot vide `portfolio` sur https://github.com/Miranto45

## Correction de l'erreur Composer

Si Composer affiche :

```text
Your requirements could not be resolved to an installable set of packages
affected by security advisories
```

Cette version corrige le probleme en utilisant **Laravel 12**.
Dans le dossier du nouveau ZIP, relance simplement :

```bash
composer install
php artisan key:generate
php artisan serve
```

Si tu reutilises un ancien dossier, supprime-le ou remplace seulement la ligne
`"laravel/framework": "^11.0"` par `"laravel/framework": "^12.0"` dans `composer.json`, puis lance :

```bash
composer update
php artisan key:generate
php artisan serve
```

## Structure

```
config/portfolio.php               <- TOUTES TES INFOS
resources/views/portfolio.blade.php <- la page
resources/views/emails/contact.blade.php <- l'email recu
public/css/style.css               <- le design noir & blanc
public/js/main.js                  <- les animations
public/images/profil.jpg           <- ta photo
public/cv/CV-Miranto.pdf           <- ton CV
app/Http/Controllers/PortfolioController.php
app/Mail/ContactMessage.php
routes/web.php
```
