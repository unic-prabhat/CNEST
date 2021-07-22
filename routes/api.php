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

Route::post('loginuser','API\LoginController@loginuser');
Route::post('registeruser','API\RegistrationController@registeruser');
Route::get('sendemailverify/{email}','API\LoginController@sendemailverify');
Route::get('verifyActivation/{code}','API\LoginController@verifyActivation');
Route::post('forgetpassword','API\ForgetPassword@forgetpassword');
Route::get('passreset/{code}','API\ForgetPassword@passreset');
Route::post('setnewpassword','API\ForgetPassword@setnewpassword');
