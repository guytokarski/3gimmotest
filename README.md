## 3G IMMO TEST

### Etapes

- création de la structure de base avec composer
- mise en place d'un virtualhost apache pour accéder au site
- création d'une base de données dans Adminer et config dans .env
- création de la table 'annonce' par migration (avec artisan).
- création du template blade de base master dans un sous-dossier 'layouts'. Par défaut j'y inclu bootstrap pour le css
- création d'un menu blade dans un sous-dossier 'partials'.
- gestion des traductions fr/en par un middleware
- création du contrôleur avec artisan (resource controller fait pour le CRUD).
- ajout des routes (par resource)
- action et vue index pour le listing des annonces
- action et vue pour la modification
- action et vue pour la création
- action pour la suppression

- pas de tri ni pagination, il est tard je suis pris demain, plusieurs facon de faire en @push une librairie jquery (meme possible ajax) ou react (besetable) dans le template index.blade.php etc...

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
