# Baneservice_app
[Voir la maquette ici] https://www.figma.com/design/kLs2FsZj6LyMZkLb41D376/Dashboard-Admin?m=auto&t=Mdfb30Ouy44hSrFh-1


ARBORESENCE
/baneservice_app
│── index.php                # Point d'entrée principal (routeur)
│── .htaccess                # Réécritures d’URL (optionnel)
│
├── /controllers             # Contrôleurs (logique métier)
│   ├── UserController.php
│   ├── ProductController.php
│   └── SubscriptionController.php
│
├── /models                  # Modèles (interaction avec la base de données)
│   ├── User.php
│   ├── Product.php
│   └── Subscription.php
│
├── /views                   # Vues (fichiers HTML + PHP)
│   ├── layouts/             # Layout global (header, footer…)
│   │   ├── header.php
│   │   └── footer.php
│   │
│   ├── user/
│   │   ├── login.php
│   │   └── register.php
│   │
│   ├── product/
│   │   ├── list.php
│   │   └── detail.php
│   │
│   └── subscription/
│       ├── index.php
│       └── detail.php
│
├── /includes                # Fichiers utilitaires
│   ├── config.php           # Config DB, constantes
│   ├── database.php         # Connexion PDO/MySQLi
│   └── functions.php        # Fonctions globales
│
├── /assets                  # Ressources statiques
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── app.js
│   └── images/
│       └── logo.png
│
└── /public                  # Dossier public (optionnel)
    └── uploads/             # Uploads utilisateurs
