<?php

//use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    //return ('welcome');
    echo "API";
});

// Route ::get('/test', function (){
//     return 'Eric';
// });
//définit une route dans Laravel qui répond à une requête GET à l'URL (HTTP de type GET)
Route ::get('/users/{id}', function ($id){
});

use App\Models\User;

Route::get('/products', 'App\Http\Controllers\productController@index');
Route::get('/products/{id}', 'App\Http\Controllers\productController@show');

// Route::get('/products', function(){
//     $stock = App\Models\Product::All();
//     if (!stock){
//         return 'product non trouvé';
//     }
//     return $product;
// });
  





