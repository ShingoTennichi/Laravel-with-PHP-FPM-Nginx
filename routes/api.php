<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Route::get('/', function () {

//   return 'ping ok';
// });

Route::apiResource('apiModel', App\Http\Controllers\ApiModelController::class);