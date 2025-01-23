<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Route::get('/', function () {

//   return 'ping ok';
// });

// Route::apiResource('apiModel', App\Http\Controllers\ApiModelController::class);

Route::get('/ping', function () {
  return response()->json(['message' => 'ping ok']);
});

Route::get('/test', function () {
  return Http::get('https://jsonplaceholder.typicode.com/todos/1')->json();
});