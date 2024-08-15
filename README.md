# FAPIW Framework

FAPIW est un framework PHP léger pour créer des services API. Il est conçu pour être simple et extensible, avec une structure de projet claire et modulaire.

## Structure du Projet

Voici la structure du projet FAPIW :

``` 
/my-php-framework
|-- /core
|   |-- /Routing
|   |   |-- Router.php
|   |   `-- Route.php
|   |
|   |-- /Request
|   |   `-- Request.php
|   |
|   |-- /Response
|   |   `-- Response.php
|   |
|   |-- /Database
|   |   `-- Database.php
|   |
|   |-- /Authentication
|   |   `-- Auth.php
|   |
|   |-- /Cron
|   |   `-- CronJob.php
|   |
|   |-- /Security
|   |   `-- Security.php
|   |
|   `-- Controller.php
|
|-- /src
|   |-- /Controllers
|   |   `-- ExampleController.php
|   |-- /Models
|   |   `-- ExampleModel.php
|   `-- /Routes
|       `-- routes.php
|
|-- /vendor
|-- composer.json
|-- .htaccess
|-- index.php
```

## Contenu des Dossiers

### /core

Ce dossier contient la logique principale du framework.

- **/Routing**
    - `Router.php` : Gère les routes et la logique de dispatching.
    - `Route.php` : Représente une route individuelle.

- **/Request**
    - `Request.php` : Gère les requêtes HTTP.

- **/Response**
    - `Response.php` : Gère les réponses HTTP.

- **/Database**
    - `Database.php` : Gère les appels à la base de données via PDO.
    - `ModelInterface` : Interface définissant les méthodes de base pour les modèles.

- **/Authentication**
    - `Auth.php` : Gère l'authentification des utilisateurs.

- **/Cron**
    - `CronJob.php` : Gère les tâches cron.

- **/Security**
    - `Security.php` : Gère la sécurité, y compris la sanitation des données et la protection CSRF.

- **/Controller**
    - `Controller.php` : Classe de base pour tous les contrôleurs.  
    - `ControllerInterface` : Interface définissant les méthodes de base pour les contrôleurs.

### /src

Ce dossier contient la logique métier dédiée aux utilisateurs du framework.

- **/Controllers**
    - `ExampleController.php` : Un exemple de contrôleur.

- **/Models**
    - `ExampleModel.php` : Un exemple de modèle.

- **/Routes**
    - `routes.php` : Définit les routes pour l'application.

## Utilisation

### Configuration Initiale

1. Installez les dépendances avec Composer :

```
composer install
```
2. Configurez votre serveur web (Apache, Nginx) pour pointer vers `index.php` comme point d'entrée.

### Ajouter une Route

Pour ajouter une nouvelle route, éditez le fichier `/src/Routes/routes.php` :

```php
$router->addRoute('/example', [new ExampleController($request, $response), 'index']);
```

### Créer un Contrôleur

Créez un nouveau fichier dans `/src/Controllers` et ajoutez votre logique métier :

```php
<?php
class NewController extends Controller {
    public function actionMethod() {
        $this->response->send('Response from new action method.');
    }
}
?>
```

N'oubliez pas de déclarer la route correspondante dans `routes.php`.
### Créer un Modèle

Créez un nouveau fichier dans `/src/Models` et implémentez les méthodes définies dans `ModelInterface` :

```php
<?php
class NewModel implements ModelInterface {
    public function save() {
        // Logique pour sauvegarder le modèle
    }

    public function delete() {
        // Logique pour supprimer le modèle
    }

    public static function find($id) {
        // Logique pour trouver un modèle par ID
    }
}
?>
```
## Contribution

Merci d'utiliser et de contribuer à FAPIW ! Si vous avez des suggestions ou trouvez des bugs, n'hésitez pas à créer une issue ou à soumettre une pull request.

---

© 2023 FAPIW. Tous droits réservés.
