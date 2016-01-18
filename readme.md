# Laravel Laroute

Ce package est une extension de `aaronlord/laroute` pour alléger le fichier `laroute.js`
en ne lui fournissant que les noms et URLs des routes ; les autres propriétés (host,
methods, action) étant inutiles.

## Installation

Inclure le package avec Composer :

```
composer require axn/laravel-laroute
```

Ajouter le service provider au tableau des providers dans `config/app.php` :

```
'Axn\Laroute\ServiceProvider',
```

## Utilisation

Voir le readme de `aaronlord/laroute` : https://github.com/aaronlord/laroute

La différence est que les méthodes `action` et `link_to_action` ne sont plus utilisables
vu que les actions des routes ont été retirées de `laroute.js`.
