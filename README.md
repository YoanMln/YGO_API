# YGO_API

Projet perso autour de **Yu‑Gi‑Oh!** : une **API Laravel** (Back_end) qui expose des cartes et leurs relations (types, attributs, sous‑types), et un **front Vue 3** (Front_end) pour les afficher et les filtrer.

> **Statut : en cours de développement**
>
> Le schéma, les endpoints et l’UI évoluent encore. Certaines parties peuvent être incomplètes ou instables (migrations, images, filtres, etc.).

## Structure

- `Back_end/` : Laravel (API REST)
- `Front_end/` : Vue 3 + Vite + Pinia (interface)

## Prérequis

- **PHP** (compatible avec la version Laravel du projet)
- **Composer**
- **Node.js** (voir `Front_end/package.json` → Node 20+ recommandé)
- (Optionnel) SQLite / MySQL selon la config `.env`

## Installation

### 1) Back-end (Laravel)

Depuis la racine :

```bash
cd Back_end
composer install
cp .env.example .env
php artisan key:generate
```

Configurer la base de données dans `.env` (par défaut c’est **SQLite**).

Puis lancer les migrations et seeders :

```bash
php artisan migrate --seed
```

Démarrer le serveur :

```bash
php artisan serve
```

Par défaut l’API tourne sur `http://127.0.0.1:8000`.

### 2) Front-end (Vue)

Dans un autre terminal :

```bash
cd Front_end
npm install
npm run dev
```

Par défaut Vite tourne sur `http://localhost:5173`.

## API (principaux endpoints)

- `GET /api/cards` : liste des cartes (avec relations chargées côté back)
- `GET /api/cards/{id}` : détail d’une carte
- `POST /api/cards` : création
- `PUT/PATCH /api/cards/{id}` : mise à jour
- `DELETE /api/cards/{id}` : suppression


## Roadmap (indicative)

- Pagination + filtres côté API
- Nettoyage/solidification des migrations et des contraintes DB
- Normalisation des champs (ex: attributs) + validations
- Stabilisation des URLs d’images
- README plus complet 

