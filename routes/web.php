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

//The listed order seems to make a difference.
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Auth::routes();
Auth::routes();
Route::get('/logout', function () {
	Auth::logout();
	/* return "You have successfully logged out.  Click here to go back to main page:<br/>
	<a href='/'>Towel Emporium HOME</a>"; */
	//return Redirect::route('home');
    //return "You are logging out";
	return Redirect::to('/');
});
Route::get('/about', 'HomeController@about');
Route::get('/contactus', 'ContactusController@index')->name('contactus'); 
Route::post('contactus', 'ContactusController@process');

//If this was listed before above routes to be accessible.  Those routes don't seem to work.
Route::get('/{cat}', 'HomeController@index',['except' => ['/about', '/contactus','/login','/register','contactus']]);

//Route::get('/flights', 'FlightsController@add');



//Route::get('/home', 'HomeController@index')->name('home');

