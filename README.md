## Development
Install npm packages
```
npm install
```

From Laravel 6 and onwards, Laravel view (UI) generation (including *auth* scaffolding, which is done by `php artisan make:auth` in the previous versions) is now separated into [laravel/ui package](https://github.com/laravel/ui)

Referencing: https://medium.com/@agavitalis/php-artisan-make-auth-command-is-not-defined-laravel-6-b51adcc6356d

Install `laravel/ui`
```
composer require laravel/ui
```

Generate the auth routes, a `HomeController`, auth views, and a `app.blade.php` layout file:
```
php artisan ui:auth
```

Do the above step with Bootstrap:
```
php artisan ui bootstrap --auth
```