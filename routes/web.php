<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
// use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Product;

// For authentication
// -- register / login
Auth::routes();


// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/show_react', 'show_react');

/////////////////
// ADMIN
//
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {

  Route::get('/', function () {
    return redirect('/admin/dashboard');
  });

  Route::get('/dashboard', 'AdminController@index');

  Route::get('/home', 'HomeController@index')->name('dashboard');

  Route::get('/masterdetail', 'AdminController@masterdetail');

  Route::view('/react', 'admin.react');

  Route::view('/react', 'admin.react');

  Route::resource('tasks', 'AdminTasksController', ['as' => 'admin']);
});

Route::group(['prefix' => 'customer'], function () {

  Route::get('/register', 'CustomerController@showRegisterPage')->name('customerRegisterPage');
  Route::post('/register', 'CustomerController@saveCustomerData')->name('saveCustomerData');

  Route::get('/login','CustomerController@showLoginPage')->name('customerLoginPage');
  Route::post('/login','CustomerController@validateCustomer')->name('validateCustomer');

  Route::get('/dashboard','CustomerController@dashboard')->name('customerDashboard')->middleware('customerAuth');

  Route::post('/logout','CustomerController@logout')->name('customerLogout');
});

Route::resource('/', ContactController::class)->only(['index', 'store']);


Route::get('/menu', function () {
  return view('pages.menu', ['post' => Product::all()]);
});
