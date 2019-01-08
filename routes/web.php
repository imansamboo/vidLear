<?php
use Illuminate\Support\Facades\Auth;

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
Route::get('/favorite', 'HomePageController@favorOfUser');
Route::get('/clientarea', 'HomePageController@getInvoicesOfUser');
Route::get('/products/{product}/video/{vid}', ['uses' =>'HomePageController@viewProductVideo']);
Route::get('/settings', function () {
    return view('settings', ['categories' => App\Category::all(), 'error' => array(), 'user' => Auth::user()]);
})->name('setting');
Route::get('/transactions', function () {
    return view('transactions', ['categories' => App\Category::all(), 'user' => Auth::user()]);
});
//
Route::get('/passReset', 'SMSController@resetPassword');
Route::get('/verifyReset', 'SMSController@checkReset');


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
    Route::resource('videos', 'VideosController');
    Route::resource('provinces', 'ProvincesController');
    Route::resource('cities', 'CitiesController');
    Route::resource('addresses', 'AddressesController');
    Route::resource('fees', 'FeesController');
    Route::resource('invoices', 'InvoicesController');
    Route::resource('invoiceItems', 'InvoiceItemsController');
    Route::get('invoiceItems/create/{invoice_id}', 'InvoiceItemsController@create');
});

Route::get('/varifyWithSms','SMSController@verify');
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
    return view('view2');
});
Route::get('/videos', function () {
    return view('videos');
});

Route::get('/admin', function () { return redirect('/admin/home'); })->middleware('auth');
Route::post('/user/update', 'UsersController@update')->middleware('auth')->name('user.update');
Route::get('/favorProduct', 'FavorsController@update');
Route::get('/payInvoice/{productId}', 'Invoices2Controller@firstStore');
Route::post('/payInvoice/{id}', 'Invoices2Controller@store');
Route::get('/rateProduct', 'RatingsController@store');
Route::get('/getRating', 'RatingsController@getRating');
Route::get('/isRated', 'RatingsController@isRated');
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

});

Route::get('/registerRate', function () {
    $idArray = array();
    foreach(App\Product::all() as $product){
        $idArray[] = $product->id;
    }
    foreach (App\User::all() as $user){
        App\Rating::create(
            array(
                'user_id' => $user->id,
                'product_id' => $idArray[mt_rand(0, count($idArray) - 1)],
                'rating' => mt_rand(1,5)
            )
        );
    }

});

Route::get('/registerVideos', function () {
    $idArray = array('مقدمه', 'جلسه اول', 'جلسه دوم', 'جلسه سوم', 'جلسه چهارم');

    foreach(App\Product::all() as $product){
        for($i = 0; $i < 5; $i++){
            $video = App\ProductVideo::create(
                 array(
                    'title' => $idArray[$i],
                    'duration' => mt_rand(300, 500),
                    'product_id' => $product->id,
                    'video' => $i . '.mp4',
                )
            );
            $video->priority = (string)$i;
            $video->save();
        }
    }

});
Route::get('/registerDiscount', function () {
    foreach(App\Product::all() as $product){
        $discount = number_format(((float)mt_rand(0, 100)), 2, '.', '');
        $product->discount = $discount;
        $product->save();
    }
});
Route::get('/registerPhotos', function () {
    $i = 0;
    foreach(App\Product::all() as $product){
        $product->photo = (fmod($i, 8) + 1) . '.jpg';
        $product->save();
        $i++;
    }
});


