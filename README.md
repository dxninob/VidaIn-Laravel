# VidaIn-Laravel

Crear proyecto Laravel:
~~~
composer create-project laravel/laravel example-app
~~~

Cambiar datos en el archivo .env:
~~~
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
~~~

Correr solo una vez (cuando se clona el repo):
~~~
composer install
php artisan key:generate
~~~

Borrar datos de la BD:
~~~
php artisan migrate:fresh
~~~

Borrar datos de la BD y hacer seed a los datos:
~~~
php artisan migrate:fresh --seed
~~~

Correr la página:
~~~
php artisan serve
~~~

Migraciones:
* Están en la carpeta database\migrations
* Se hacen con el siguiente comando:
~~~
php artisan make:migration modules
~~~

Modelos:
* Están en la carpeta app\Models
* Se hacen con el siguiente comando:
~~~
php artisan make:model Module
~~~

Controladores:
* Están en la carpeta app\Http\Controllers
* El nombre termina en Controller.php (ej. UserController.php)
