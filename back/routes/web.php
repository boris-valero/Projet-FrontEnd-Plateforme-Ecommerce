<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return ('welcome');
});

Route ::get('/test', function (){
    return 'Eric';
});
