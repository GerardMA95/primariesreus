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
    $usersListArray = \App\User::where(['active' => true])->get();
    return view('web.main.main', ['usersList' => $usersListArray]);
})->name('home');

Route::namespace('Web')->group(function () {
    Route::get('/preguntes', 'Entity\Email\EmailController@create')->name('contactMain');
    Route::post('/preguntes/store', 'Entity\Email\EmailController@store')->name('conctactSave');

    Route::get('/adhesions', 'Entity\User\UserController@create')->name('adhesionsMain');
    Route::post('/adhesions/store', 'Entity\User\UserController@store')->name('adhesionsSave');

    Route::get('/privacitat', 'WebController@policyTerms')->name('policyMain');

    Route::get('/test', function () {
        return view('emailTemplates.emailConfirmation');
    })->name('emailConfirmation');

    Route::get('/email/confirmation/{userId}/{userToken}', 'Entity\User\UserController@emailConfirmation')->name('userConfirmationEmail');

    /*  SEND MAILS */
    Route::get('/email/send', 'Entity\Email\EmailController@send')->name('sendEmail');
});