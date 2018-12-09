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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/varify', function () {
    return view('varify');
});

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductsController');
    Route::resource('provinces', 'ProvincesController');
    Route::resource('cities', 'CitiesController');
    Route::resource('addresses', 'AddressesController');
});

Route::post('/varifyWithSms','SMSController@varify');
Route::get('/resendSms','SMSController@reSend');
\Phonedotcom\SmsVerification\SmsVerificationProvider::registerRoutes($router);
Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/view', function () {
    return view('view');
});

Route::get('/admin', function () { return redirect('/admin/home'); });

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

});




