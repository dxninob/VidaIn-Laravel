# VidaIn-Laravel

composer create-project laravel/laravel example-app

DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

composer install
php artisan key:generate

php artisan migrate:fresh
php artisan migrate:fresh --seed

php artisan serve

database\migrations
php artisan make:migration modules

app\Models
php artisan make:model Module

app\Http\Controllers
nombre termina en Controller.php
