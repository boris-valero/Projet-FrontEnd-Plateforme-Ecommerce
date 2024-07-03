<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Exemple de route API
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route pour obtenir les produits
Route::get('/products', [ProductController::class, 'index']);

//Route::get('/products/{id}', [ProductController::class, 'show']);

