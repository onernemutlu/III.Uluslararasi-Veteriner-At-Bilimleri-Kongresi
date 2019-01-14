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

Route::get('/', 'PagesController@index');
Route::get('/products', 'PagesController@products');
Route::get('/posts', 'PagesController@posts');
Route::get('/about', 'PagesController@about');
Route::get('/service', 'PagesController@service');
Route::get('/payments', 'PaymentsController@index');
//Route::get('/payments', 'PaymentsController@create');
Route::get('/choose' , 'ChooseRegistrationTypeController@index')->name('choose');
Route::get('/ngo/register' , 'NgoRegistrationController@index')->name('ngo.register');
Route::get('/private/register' , 'PrivateRegistrationController@index')->name('private.register');
Route::get('/standard/register' , 'StandardRegistrationController@index')->name('standard.register');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/purchase', 'PurchaseController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/success', 'PagesController@success');
Route::get('/autism1', 'PagesController@autism1');
Route::get('/autism2', 'PagesController@autism2');
Route::get('/autism3', 'PagesController@autism3');

Route::get('/help', 'PagesController@help');
Route::get('/calendar', 'PagesController@calendar');


Route::resource('products', 'ProductsController');
Route::resource('posts', 'PostsController');
Route::resource('payments','PaymentsController');
Route::resource('donationEvent','DonationEventController');
Route::resource('donate','DonateController');
Auth::routes();



Route::post('/payments', 'PaymentsController@store');
Route::post('/ngo/create' , 'NgoRegistrationController@create')->name('ngo.create');
Route::post('/private/create' , 'PrivateRegistrationController@create')->name('private.create');
Route::post('/standard/create' , 'StandardRegistrationController@create')->name('standard.create');


Route::get('/productsusermanual', 'PagesController@productsusermanual');
Route::get('/donationsusermanual', 'PagesController@donationsusermanual');
Route::get('/activitiesusermanual', 'PagesController@activitiesusermanual');
Route::get('/registrationusermanual', 'PagesController@registrationusermanual');

Route::get('/event', 'EventController@index');


Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin/postconfirm' , 'PostsConfirmationController@postconfirm')->name('admin.post.confirm');
    
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin/confirm' , 'ProductsConfirmationController@confirm')->name('admin.product.confirm');
    
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin/usersconfirm' , 'UserConfirmationController@confirm')->name('user.confirm');
    
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::delete('/admin/usersdelete' , 'UserDeleteController@destroy')->name('user.delete');
    
});

Route::get('search/autocomplete', 'PaymentsController@autocomplete');
Route::get('/private/show',   'PrivateUserUpdateController@index')->name('private.users.show');
Route::put('/private/edit',   'PrivateUserUpdateController@edit');


Route::post('/purchase/destroy', 'PurchaseController@destroy');
Route::get('events', 'EventController@index')->name('events.index');
Route::post('events', 'EventController@addEvent')->name('events.add');
