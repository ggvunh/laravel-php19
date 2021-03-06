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
Route::get('/cats/{cat}', 'CatController@show');
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

Route::get('/noti', function(){
  return view('about');
});

Route::get('/push-noti', function(){
    $options = array(
      'cluster' => 'ap1',
      'encrypted' => true
    );
    $pusher = new Pusher\Pusher(
      '7e60769bc3587cde5ee2',
      '8d0661694c63ce3b2de8',
      '410811',
      $options
    );

    $data['message'] = 'vua co mot booking moi';
    $pusher->trigger('hotel', 'booking', $data);
    echo 'thanh cong';
});
// load gio hang
Route::get('/shop', 'ProductController@index');
// add gio hang
Route::get('/carts/{id}/add', 'CartController@add');
// xoa toan bo gio hang
Route::get('/carts/destroy', 'CartController@destroy');
// checkout tinh toan gio hang
Route::get('/checkout', 'CartController@checkout');
// xoa 1 phan tu trong gio hang
Route::get('/carts/{rowId}/delete', 'CartController@delete');

Route::get('/loadCarts', 'CartController@loadCarts');
