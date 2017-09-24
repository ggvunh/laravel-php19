<?php
use Furbook\Cat;
use Furbook\Breed;
use Illuminate\Support\Facades\Input;

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


Route::get('/', 'CatController@home');
Route::get('/cats', 'CatController@getCats');
Route::get('/cats/breeds/{name}', 'CatController@view');
Route::get('/about', 'CatController@about');
// load form create
Route::get('cats/create', 'CatController@create');
// push data to server
Route::post('cats', 'CatController@save');
Route::get('cats/{cat}/edit', 'CatController@edit');
Route::put('cats/{cat}', 'CatController@update');
Route::get('/cats/{cat}', 'CatController@show')->middleware(['auth', 'isAdmin']);
Route::get('cats/{cat}/delete', 'CatController@delete');

Route::resource('photos', 'PhotoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/getUsers', function(){

  // dd(Auth::check());
  $currentUser = Auth::user();
  dd($currentUser);
});

Route::resource('categories', 'CategoryController');
Route::get('/ajax', function() {
  return view('ajax');
});
