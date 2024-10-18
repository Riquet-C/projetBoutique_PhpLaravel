# projet boutique en laravel

Un site web développé avec PHP Laravel en modèle MVC pour apprendre les bases de ces technologies.
Site effectuer avant le module javascript et fait uniquement en html / bootstrap

## Technologies Utilisées

- [Laravel](https://laravel.com/) - Framework PHP
- [MySQL](https://www.mysql.com/) - Système de gestion de base de données
- [Bootstrap](https://getbootstrap.com/) - Framework CSS pour un design réactif et mobile-first

## Installation

Pour installer ce projet sur votre machine locale, suivez ces étapes :

1. Clonez le dépôt :
   ```bash
   git clone https://github.com/votre-utilisateur/votre-repo.git
    ```
2. Accédez au répertoire du projet :

```bash
cd votre-repo
```
3. Installez les dépendances :

```bash
composer install
npm install
```
4. Configurez votre fichier .env :

Copiez le fichier .env.example en .env :
```bash
cp .env.example .env
Modifiez le fichier .env pour configurer votre connexion à la base de données MySQL.
```
5. Créez la base de données :

```bash
php artisan migrate
```
6. Démarrez le serveur de développement :

```bash
php artisan serve
```
Ensuite, ouvrez votre navigateur et allez à http://localhost:8000/.
