# Laravel API

Note: The Laravel 11 support will be expired in 2026 / Feb / 03

## Step1: create laravel app

```sh
composer create-project laravel/laravel project-name
```

## Step2: create api route

```sh
php artisan install:api
```

## Step3: create model for api route

```sh
php artisan make:model model-name -a --api
```

## Step4: apply new routes created in Step3

```php
Route::apiResource('apiModel', App\Http\Controllers\ApiModelController::class);
```

## Step5:

## Step6:

---

## artisan commands

```sh
# shows all routes available
php artisan route:list

# run the server
php artisan serve

# migrate database model
php artisan migrate
```
