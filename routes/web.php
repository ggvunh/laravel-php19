<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return redirect('/cats');
});

Route::get('/cats', function() {
    $name = 'Minh';
    $address = 'Da Nang';
    $age = 20;
    return view('cats.show.cats', compact(['name', 'address', 'age']));
});

Route::get('/cats/{name}', function($name) {
    echo 'My name is ' . $name;
});
