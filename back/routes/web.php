<?php

use Illuminate\Support\Facades\Route;

Route::get('/testv', function () {
    return ('welcome');
});

Route ::get('/test', function (){
    return 'Eric';
});
