# Laravel Site Settings

Install this package by write in your terminal project directory

<strong>composer require kajalpandya/laravel-settings</strong>

## Register provider and aliases
then put this line to your config/app.php file in providers array
<strong>KajalPandya\LaravelSiteSettings\LaravelSiteSettingsServiceProvider::class,</strong>

## Remove below files
<strong>database/migrations</strong>
<strong>database/seeds</strong>

## Clear the cache
<strong>$ php artisan config:cache</strong>

## Auto load files
<strong>$ composer dump-autoload</strong>

## Clear the cache again
<strong>$ php artisan config:cache</strong>

## Finaly publish the provider
<strong>$ php artisan vendor:publish --provider="KajalPandya\LaravelSiteSettings\LaravelSiteSettingsServiceProvider"</strong>

## then run
<strong>$ php artisan migrate && php artisan db:seed</strong>

## make tmp folder in public

then run localhost:8000

Have fun..!!!!!