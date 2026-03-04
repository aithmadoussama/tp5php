
# LAB 5 : PHP (POO + DAO + Web Services) : Gestion Etudiant (CRUD + JSON)

# 🎓 Gestion d'Étudiants - PHP DAO Architecture

![PHP](https://img.shields.io/badge/PHP-8.x-777bb4.svg?style=flat-square&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1.svg?style=flat-square&logo=mysql)
![Architecture](https://img.shields.io/badge/Architecture-DAO%20%2F%20Service-green.svg?style=flat-square)

## 📝 Description
Ce projet est une application web de gestion d'étudiants développée en PHP. Il illustre l'implémentation du **Design Pattern DAO (Data Access Object)** et d'une couche **Service** pour assurer une séparation propre entre la logique métier, l'accès aux données (base de données) et l'interface utilisateur.



---

## ✨ Fonctionnalités

* **CRUD Étudiants** : Ajout, affichage, modification (via service) et suppression.
* **Architecture Structurée** : Découplage via des interfaces (`IDao`) et des classes de service (`EtudiantService`).
* **Web Services (API JSON)** : Endpoints prêts pour une consommation externe (Mobile ou Front-end moderne) situés dans le dossier `/ws`.
* **Sécurité** : Utilisation de **PDO** avec requêtes préparées pour la protection contre les injections SQL.
* **Gestion de Racine** : Configuration centralisée des chemins via `racine.php`.

---

## 📂 Structure du Projet

```text
projet/
├── classes/          # Définition de l'objet métier (Etudiant.php)
├── connexion/        # Gestion de la connexion PDO (Connexion.php)
├── controller/       # Traitement des actions (addEtudiant.php, deleteEtudiant.php)
├── dao/              # Interface IDao définissant les contrats
├── service/          # Implémentation de la logique SQL (EtudiantService.php)
├── ws/               # Services Web retournant du JSON (API)
├── index.php         # Interface utilisateur principale
└── racine.php        # Définition de la constante de chemin RACINE
```

## Captures d'ecran

<img width="1366" height="768" alt="Capture d’écran du 2026-02-19 15-03-11" src="https://github.com/user-attachments/assets/553ca535-e019-48b0-93fc-388b6247abd3" />

## Vidéo démonstrative

https://github.com/user-attachments/assets/78d2b4a8-6e8a-4b5e-b19c-41315c27ebf1
