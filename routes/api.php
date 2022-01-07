<?php

use App\Http\Controllers\API\PassportAuthController;
use App\Http\Controllers\API\ProductController;

Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('get-user', [PassportAuthController::class, 'userInfo']);

 Route::resource('products', ProductController::class);

});
