<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About CDAFAL68
## github token
<code>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</code>

#### Creating a new project we use this code
<code>composer create-project --prefer-dist laravel/laravel [project_name]</code>

#### To run a project,
<code>php artisan serve</code> which will generate a link to be opened in a navigator

#### How to create a controller
<code>php artisan make:controller AdherentController</code> for Adherent Controller

#### How to create a migration table
<code>php artisan make:migration create_adherent_table</code> for Adherent migration.
This will create a <code>CreateAdherentTable extends Migration</code> inside root/database/migrations and it's name will be prefixed with the current date

> The creation of migrations should be in a good order, to prevent the problems with foreign keys, when a foreign key refers to a table, that table has to there at the time of execution .
> The best way to solve such problem, is either to rename migration files, and change prefixed dates, so that independent tables comes first, and the tables with foreign keys after.
> The second option is to reference that key in itself (referred class)

#### Foreign keys
while making a foreign key, use the following syntax
```PHP 
#inside up function
$table->foreign('postal_code_id')->references('id')->on('postal_code')->onDelete('cascade');
```
the code means that we are creating a foreign key in the current table (where belong the code) and that foreign key will link the property postal_code_id in the current entity with id in postal_code entity.
Sometimes there will be issues, because the foreign key is trying to link with a table that doenst exist in the time of execution (just like in c++), 
the solution, is to remove the linking code, and add the following in that table u want to refer to 
example
```PHP
#this code will be removed in adherent table
$table->foreign('postal_code_id')->references('id')->on('postal_code')->onDelete('cascade');

#it will be replaced with in postal_code table
Schema::table('adherent', function (Blueprint $table) {
    $table->foreign('postal_code_id')->references('id')->on('postal_code');
});
```

### Adding a column in an existing table
when adding a column in a table, if that table is in up state, u need to refresh <code>php artisan migrate:refresh</code> the whole database so that you put them in down state, and put them back in up state.
The problem is that, when refreshing , you loose all your data in the whole database.
the good way to do is to create a new table with this naming convention <code>php artisan make:migration add_property1_to_adherent_table</code>
This will create a new table, that it's job is just to add a column to the table 
example
```php
public function up()
{
    Schema::table('adherent', function (Blueprint $table) {
        $table->string('propery1');
    });
}
```
and after run <code>php artisan migrate</code> to migrat the table
## CDAFAL68

La CDAFAL accueille ses adhérents pour différentes raisons, notamment les donner des formations de différentes sortes que ce soit dans les technologies, les langues,...
Ces adhérents sont enregistrés dans une base de données enfin de faciliter la communication , la gestions de l’évolution des ces adhérents, la gestion de leur frais pédagogiques trimestriels, …

- [Site internet de l'association](https://cdafal68.eu/)
- [Tel: 03.89.42.85.20](03.89.42.85.20)
- [cdafal68.secretariat@gmail.com](mailto:cdafal68.secretariat@gmail.com)
- Adresse: 3 Rue Georges Risler, 68100 Mulhouse
- Développeur: Oreste MUHIRWA GABO 
- [Profile d'oreste](https://github.com/orestegabo/)

## Les problématiques
- La base de données sous Ms access, local , ne facilite pas l'accès à n’importe quel moment avec n’importe quel ordinateur.
- La synchronisation des informations et la mise à jour de la structure de la base de données. Il faut donc mettre en arrêt l’utilisation de la base de données, pour qu’on puisse apporter les modifications, sinon il faudra recopier les données dans la nouvelle version.
- L'accès direct aux tables par des utilisateurs non développeurs est problématique, car ils ont tendances à utiliser access comme des tableaux excel, et négliger l’utilisation des formulaires, ce qui rend l'intégrité et la sécurité de données vulnérables.

## Solutions proposés
- L'utilisation d’une gestionnaire de base de données MySql
- La développement de l’application web , accessible sur internet, pour pouvoir y accéder à n’importe quel ordinateur connecté,
- La synchronisation de données

## Sécurité de l'application

Si vous découvrez une faille de sécurité dans Laravel, veuillez envoyer un e-mail à Oreste MUHIRWA GABO sur [muhirwa.g.oreste@gmail.com](mailto:muhirwa.g.oreste@gmail.com). Toutes les failles de sécurité seront rapidement corrigées.


## Apprendre Laravel

Laravel possède la [documentation](https://laravel.com/docs) et la bibliothèque de didacticiels vidéo les plus complètes et les plus complètes de tous les frameworks d'applications Web modernes, ce qui facilite la prise en main du framework.

Si vous n'avez pas envie de lire, [Laracasts](https://laracasts.com) peut vous aider. Laracasts contient plus de 1500 didacticiels vidéo sur une gamme de sujets, notamment Laravel, le PHP moderne, les tests unitaires et JavaScript. Boostez vos compétences en fouillant dans notre vidéothèque complète.
## License

L'application Cdafal n'est pas ouvert au public, le code source est confidentiel sous la licence GNU General Public License (GPL)
# cdafal68
