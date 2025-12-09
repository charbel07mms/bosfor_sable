

# 📦 Bosfor SARL – Gestion des Produits (Laravel)

Application web développée en **Laravel** permettant de gérer les produits  
(sable, gravier, matériaux de construction) pour l’entreprise **Bosfor SARL**, avec :

✔ Ajout de produits  
✔ Affichage public des produits  
✔ Espace admin sécurisé  
✔ Upload d’images  
✔ Page d’accueil dynamique  

---

## 🚀 Fonctionnalités

### 🏠 Page d’accueil (publique)
- Affiche automatiquement les produits disponibles  
- Images stockées dans `storage/app/public/produits`  
- Design moderne avec section **Produits disponibles**

### 🔐 Espace Admin (authentification requise)
- Ajouter un produit  
- Modifier un produit  
- Supprimer un produit  
- Visualiser la liste complète des produits  

### 🖼 Gestion des Images
- Upload sécurisé  
- Stockage dans `/storage`  
- Accessible via `php artisan storage:link`  

---

## 🛠 Technologies utilisées
- **Laravel 10+**  
- **PHP 8.1+**  
- **Bootstrap 5**  
- **MySQL**  
- **Blade Templates**

---

## 📥 Installation du projet

### 1️⃣ Cloner le projet
```bash
git clone https://github.com/charbel07mms/bosfor_sable
cd bosfor-sarl
````

### 2️⃣ Installer les dépendances

```bash
composer install
npm install
npm run build
```

### 3️⃣ Configurer l’environnement

Copier le fichier `.env.example` :

```bash
cp .env.example .env
```

Modifier les accès MySQL dans `.env` :

```
DB_DATABASE=bosfor_sarl
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Générer la clé Laravel

```bash
php artisan key:generate
```

### 5️⃣ Exécuter les migrations

```bash
php artisan migrate
```

### 6️⃣ Autoriser les images publiques

```bash
php artisan storage:link
```

---

## 📌 Routes principales

### 🔓 Public

| Route    | Description               |
| -------- | ------------------------- |
| `/`      | Page d’accueil & produits |
| `/login` | Connexion admin           |

### 🔐 Admin

| Route                | Description         |
| -------------------- | ------------------- |
| `/produit`           | Liste des produits  |
| `/produit/create`    | Ajouter un produit  |
| `/produit/{id}/edit` | Modifier un produit |
| `/produit/{id}`      | Voir détails        |

---

## 📂 Structure du projet

```
/app
   /Http/Controllers/ProduitController.php
   /Models/Produit.php

/resources/views
   welcome.blade.php
   /produit
      index.blade.php
      create.blade.php
      edit.blade.php
      show.blade.php

/database/migrations
   2024_xx_xx_create_produits_table.php
```

---

## 📸 Aperçu des pages



---

## 🧑‍💻 Auteur

**Bosfor SARL Web App**
Développé par : charbel ciss
Année : **2025**

---


