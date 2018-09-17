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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'HomeController@index');

Route::get('/flights', 'FlightsController@add');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', function () {
	Auth::logout();
	/* return "You have successfully logged out.  Click here to go back to main page:<br/>
	<a href='/'>Towel Emporium HOME</a>"; */
	//return Redirect::route('home');
    //return "You are logging out";
	return Redirect::to('/');
});
Route::get('/about', 'HomeController@about');
Route::get('/contactus', 'ContactusController@index'); 
Route::post('contactus', 'ContactusController@process');