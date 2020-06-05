<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'APIFrontEnd'], function(){
    Route::get('country-list', 'RegistrationController@getCountryList');
    Route::get('city-list/{country_id}', 'RegistrationController@cityList');
    Route::post('find-users', 'HomeController@search');
    Route::apiResources([
        'registration' => 'RegistrationController',
        'front-users' => 'HomeController',
    ]);
});
