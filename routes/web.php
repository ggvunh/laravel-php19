<?php
use Furbook\Cat;
use Furbook\Breed;

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
    $cats = Cat::all();
    return view('cats.index', compact('cats'));
});

Route::get('/cats/breeds/{name}', function($name){
  $breed = Breed::with('cats')
    ->where('name', $name)
    ->first();
  $cats = $breed->cats;
  return view('cats.index', compact(['cats', 'breed']));
});


Route::get('/about', function() {
  return view('about');
});
