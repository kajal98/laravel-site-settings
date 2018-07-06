# Just type your entity name and generate model, views, controller

## create new directory in your root folder
<strong>$ composer create-project --prefer-dist laravel/laravel blog</strong>

## go to your directory
<strong>$ cd blog</strong>

## move .env.example file to .env
<strong>$ mv .env.example .env</strong>

## generate your app key
<strong>$ php artisan key:generate</strong>

set your database configuration in .env file

run localhost:8000 in your browser

if all working good then put this line to your composer.json file

<strong>"kajalpandya/generate_laravel_crud": "dev-master",</strong>

## update composer 
<strong>$ composer update</strong>

## Register provider
then put this line to your config/app.php file in providers array
<strong>Youcandothis\Crud\CrudServiceProvider::class,</strong>

## Clear the cache
<strong>$ php artisan config:cache</strong>

## Auto load files
<strong>$ composer dump-autoload</strong>

## Finaly publish the provider
<strong>$ php artisan vendor:publish --provider="Youcandothis\Crud\CrudServiceProvider"</strong>


## Register middleware in app\Http\Kernel.php in $routeMiddleware group
<strong>'admin' => \App\Http\Middleware\AdminOnly::class,</strong>

## autoload helper file in your composer.json file under "autoload-dev" array
"files": [
    "app/helpers.php"
]

then run localhost:8000

Have fun..!!!!!

## Screenshots
<img src="/ss/Register.png" alt="Register">
<img src="/ss/Login.png" alt="Login">
<img src="/ss/Dashboard.png" alt="Dashboard">
<img src="/ss/Change.png" alt="Change">
<img src="/ss/Listing.png" alt="Listing">
<img src="/ss/Add.png" alt="Add">
<img src="/ss/Edit.png" alt="Edit">
<img src="/ss/Show.png" alt="Show">