<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

// Route::get('foo', function () {
//     return "Hello World!";
// });



// Route::get('product/{id}', function($id) {
//     return 'User'.$id;
// });