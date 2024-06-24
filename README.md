# System Login And Register [PHP, MYSQL]

## Description
une application web développée en PHP et MySQL qui permet aux utilisateurs de s'inscrire et de se connecter de manière sécurisée.
le project et en cour de devloppment nest pas encore finit .

## Fonctionnalités
- **Inscription utilisateur**: Permet aux nouveaux utilisateurs de créer un compte avec un nom d'utilisateur unique et un mot de passe sécurisé.
- **Connexion sécurisée**: Authentification des utilisateurs en vérifiant les informations de connexion par rapport à la base de données.
- **Gestion de session**: Sessions utilisateur pour maintenir l'état de connexion tout au long de la navigation sur le site.
- **Gestion de base de données**: Intégration avec MySQL pour stocker et récupérer les informations des utilisateurs en toute sécurité.

## Prérequis
- Serveur web (Apache ou nginx ...)
- PHP version 7.x ou supérieure
- MySQL (mariadb serveur ou autre)

## Installation et Configuration

### Étape 1: Configuration de la base de données MySQL

1. **Création de la base de données**:
   - Connectez-vous à votre serveur MySQL à l'aide d'un outil comme phpMyAdmin ou en ligne de commande.
   - Créez une nouvelle base de données nommée `loginSystem`.

2. **Création de la table des utilisateurs**:
   - Utilisez le script SQL suivant pour créer une table `utilisateurs` dans votre base de données :

     ```sql
     CREATE TABLE users (
         id INT(11) AUTO_INCREMENT PRIMARY KEY,
         username VARCHAR(50) NOT NULL UNIQUE,
         password VARCHAR(255) NOT NULL,
         date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

### Étape 2: Configuration de l'application PHP

1. Clonez ce dépôt dans le répertoire de votre serveur web :

   ```bash
   git clone [https://github.com/SebbaIneb/login-and-register-System-PHP-And-Mysql/](https://github.com/SebbaIneb/login-and-register-System-PHP-And-Mysql/)


## Contributions
Les contributions sont les bienvenues! N'hésitez pas à proposer des améliorations en soumettant une demande de tirage (pull request).
