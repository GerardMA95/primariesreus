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
    return view('web.main.main');
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

//Route::get('/preguntes', function () {
//    return view('web.contact.contactPage');
//})->name('contactMain');

//Route::get('/adhesions', function () {
//    return view('web.adhesions.adhesionsMainPage');
//})->name('adhesionsMain');

///*
// * Admin routes
// */
//Route::group(['prefix' => '/admin'], function () {
//    /*
//     * Admin required Auth routes
//     */
//	Route::group(['middleware' => 'admin.auth'], function(){
//		//Poner en un controller
//		Route::get('/', function () {
//		    return view('admin.main.main');
//		})->name('admin.index');
//		Route::get('/coches/acciones', 'Admin\AdminController@carAdmin')->name('admin.coches.index');
//		Route::get('/loginTest', 'Admin\Auth\LoginAdminController@addTestUser');
//        /* Model binding for specific routes */
//        Route::model('vehiculo', 'App\Vehicle');
//        Route::get('vehiculo/visible', 'Admin\Entity\Vehicle\VehicleController@active')->name('vehiculo.active');
//        Route::get('vehiculo/no-visible', 'Admin\Entity\Vehicle\VehicleController@disabled')->name('vehiculo.disabled');
//        Route::resource('vehiculo', 'Admin\Entity\Vehicle\VehicleController');
//
//        Route::resource('coches', 'Admin\Entity\Car\CarController');
//        /* Model binding for specific routes */
//        Route::model('marca', 'App\Patent');
//        Route::resource('marca', 'Admin\Entity\Patent\PatentController');
//        //* Model binding for specific routes */
//        Route::model('modelo', 'App\Pattern');
//        Route::resource('modelo', 'Admin\Entity\Pattern\PatternController');
//
//        Route::resource('combustible', 'Admin\Entity\Combustible\CombustibleController');
//        /* Model binding for specific routes */
//        Route::model('cambio-de-marcha', 'App\Gearshift');
//        Route::resource('cambio-de-marcha', 'Admin\Entity\Gearshift\GearshiftController');
//        /* Model binding for specific routes */
//        Route::model('normativa-de-emision', 'App\EmissionRegulation');
//        Route::resource('normativa-de-emision', 'Admin\Entity\EmissionRegulation\EmissionRegulationController');
//        /* Model binding for specific routes */
//        Route::model('tipo-de-vehiculo', 'App\VehicleType');
//        Route::resource('tipo-de-vehiculo', 'Admin\Entity\VehicleType\VehicleTypeController');
//        /* Model binding for specific routes */
//        Route::model('traccion', 'App\Traction');
//        Route::resource('traccion', 'Admin\Entity\Traction\TractionController');
//    });
//	/*
//	* Admin Log In section
//	*/
//	Route::get('/login', 'Admin\Auth\LoginAdminController@showLoginForm')->name('admin.login');
//	Route::post('/login', 'Admin\Auth\LoginAdminController@login')->name('admin.login');
//	/*
//	* Admin Log Out section
//	*/
//	Route::get('/logout', 'Admin\Auth\LoginAdminController@logout')->name('admin.logout');
//});