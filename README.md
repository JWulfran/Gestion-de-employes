# 👨‍💼 Application de Gestion des Employés – PHP & MySQL

Ce projet est une application web simple permettant de **gérer les informations des employés** (ajout, modification, suppression, visualisation) à l’aide de **PHP** et **MySQL**. Il s'agit d'un projet CRUD typique, parfait pour illustrer les bases du développement web back-end.

🔗 **Dépôt GitHub** : [Gestion-de-employes](https://github.com/JWulfran/Gestion-de-employes.git)

---

## 🎯 Objectifs du projet

- Créer une application de gestion des employés
- Implémenter les opérations CRUD :
  - **C**reate : Ajouter un nouvel employé
  - **R**ead : Afficher la liste des employés
  - **U**pdate : Modifier les données d’un employé
  - **D**elete : Supprimer un employé

---

## 🛠️ Technologies utilisées

- **PHP** (programmation côté serveur)
- **MySQL / MariaDB** (base de données relationnelle)
- **HTML / CSS** (interface utilisateur simple)
- **XAMPP / MAMP** ou tout serveur Apache local

---

## 🧪 Fonctionnalités principales

- Formulaire d’ajout d’employé
- Table dynamique avec les informations :
  - Nom, Prénom, Poste, Salaire, Département, etc.
- Boutons **Modifier** et **Supprimer** avec redirection
- Messages de succès ou d’erreur (feedback utilisateur)
- Séparation du code en plusieurs fichiers :
  - `ajouter.php`, `modifier.php`, `supprimer.php`, `connexion.php`, etc.

---

## 📦 Structure du projet

/Gestion-de-employes<br>
│<br>
├── connexion.php <br>
├── index.php ← Page d’accueil avec la liste des employés<br>
├── ajouter.php ← Formulaire d’ajout<br>
├── modifier.php ← Formulaire de modification<br>
├── supprimer.php ← Suppression par ID<br>
└── css/ ← (facultatif) fichier de styles<br>

---

## 🧠 Ce que j’ai appris

- Connexion entre **PHP** et une base **MySQL**
- Manipulation des données via formulaire
- Sécurité de base (requêtes préparées, validation)
- Structuration d’un petit projet PHP modulaire

---

📂 _Ce projet est une base solide pour évoluer vers des applications plus complexes comme la gestion RH, des portails intranet, ou des dashboards dynamiques._
