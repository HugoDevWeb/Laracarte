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

use App\Mail\ContactMessage;


Route::get('/', [
    'as' => 'home',
    'uses' => 'PageController@home',
]);

//Différente syntax, meme résultat

Route::get('/about', 'PageController@about')->name('about');

Route::get('/contact', 'ContactController@create')->name('contact.create');

Route::post('/contact', 'ContactController@store')->name('contact.store');


Route::get('/test-email', function (){
    return new ContactMessage('hugo', 'hugolavergne0@gmail.com', 'le contenu du message');

});


