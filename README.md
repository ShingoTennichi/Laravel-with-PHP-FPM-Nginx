# Laravel API

Note: The Laravel 11 support will be expired in 2026 / Feb / 03

## Installation

1. clone this repository

```sh
$ git clone https://github.com/ShingoTennichi/Laravel-with-PHP-FPM-Nginx.git
```

2. run containers

```sh
$ docker-compose up -d
```

3. check whether the app is running [http://localhost:8080/api/ping](http://localhost:8080/api/ping)

4. shut down containers

```sh
$ docker-compose down --rmi all
```

## Instruction for Laravel App

### Step1: create laravel app

```sh
composer create-project laravel/laravel project-name
```

### Step2: create api route

```sh
php artisan install:api
```

### Step3(optional): create model for api route

```sh
php artisan make:model model-name -a --api
```

### Step4: create new routes

```php
// example routes
Route::get('path', function () {return response(['message', 'cat'])->json()});

Route::post('path', function (Request $request) {return /* some logic */response(['message', 'cat'])->json()});

// add routes created in step3
Route::apiResource('apiModel', App\Http\Controllers\ApiModelController::class);
```

### artisan commands

```sh
# shows all routes available
php artisan route:list

# run the dev server
php artisan serve --port=8080

# migrate database model
php artisan migrate
```
