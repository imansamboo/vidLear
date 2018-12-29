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
    return redirect(route('homepage'));
});
//
Route::post('/passReset', 'SMSController@resetPassword');
/*Route::post('/passReset', function (){
    error_log(__DIR__  .'/../reset.log', 3 , '/var/www/html/address.log');
});*/
Route::get('/homepage', 'HomePageController@index')->name('homepage');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/verify', function () {
    return view('auth.verify');
});

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');

Auth::routes(['verify' => true]);
Route::get('/login', function () {
    return redirect(route('homepage'));
})->name('login');

Route::get('/register', function () {
    return redirect(route('homepage'));
});
Route::get('/sms/varification', 'HomeController@index')->name('home');
Route::get('/home', function () {
    return redirect(route('homepage'));
});
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductsController');
    Route::resource('provinces', 'ProvincesController');
    Route::resource('cities', 'CitiesController');
    Route::resource('addresses', 'AddressesController');
    Route::resource('fees', 'FeesController');
    Route::resource('invoices', 'InvoicesController');
    Route::resource('invoiceItems', 'InvoiceItemsController');
    Route::get('invoiceItems/create/{invoice_id}', 'InvoiceItemsController@create');
});

Route::post('/varifyWithSms','SMSController@verify');
Route::get('/resendSms','SMSController@reSend');
\Phonedotcom\SmsVerification\SmsVerificationProvider::registerRoutes($router);


Route::get('/index', function () {
    return view('homepage2');
});

Route::get('/products', 'HomePageController@indexProducts');
Route::get('/categories', 'HomePageController@indexCategories');
//Route::get('/products/{product}', ['uses' =>'HomePageController@viewProduct']);
Route::get('/products/{product}', ['uses' =>'HomePageController@viewProduct']);
Route::get('/categories/{category_id}/products', ['uses' =>'HomePageController@indexProductsOfCategory']);
Route::get('/view', function () {
    return view('view');
});
Route::get('/videos', function () {
    return view('videos');
});

Route::get('/admin', function () { return redirect('/admin/home'); })->middleware('auth');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

});




