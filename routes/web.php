<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage',
        ['name' => 'MATTIA']
);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/profile', function () {
    return view('profile',
        [
            'name' => 'MATTIA',
            'surname' => 'FERRARI',
            'age' => 24
        ]
);
});