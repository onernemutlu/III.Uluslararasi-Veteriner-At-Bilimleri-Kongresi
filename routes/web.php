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



/*Route::get('/hello', function () {
    //return view('welcome');
    return 'ONER OSMAN KUZEY DORUK';

    
});
*/
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/service', 'PagesController@service');

Route::resource('posts','PostsController');



/* Dynamic ve dynamic value uzantı oluşturmak için, .$id fonksiyonu kullandık. */
/*Route::get('/users/{id}/{name}', function($id, $name)   

{
    return 'This is user '.$name. ' with an id of '.$id;

}

);*/
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
