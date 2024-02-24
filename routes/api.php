<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::namespace('App\Http\Controllers')->group(function(){
    //showing data through the api..............................
    Route::get('users/{id?}','APIController@getUsers');

    //showing data through the api & Secure get api..............................
    Route::get('users-list','APIController@getUsersList');

    //post api for single users.................................
    Route::post('add-users','APIController@addUsers');

    //Register user API Token post api.................................
    Route::post('register-users','APIController@registerUsers');

    //Register user API Token and token generate by passport.........................
    Route::post('register-users-with-passport','APIController@registerUsersWithPassport');

    //post api for multiple users.................................
    Route::post('add-multiple-users','APIController@addMultipleUsers');
    //put api for update one and more records.................................
    Route::put('update-user-details/{id}','APIController@updateUserDetails');
    //patch API for update one recoard........................................
    Route::patch('update-user-name/{id}','APIController@updateUserName');
    //delete API for recoard single user for param............................
    Route::delete('deleteuser/{id}','APIController@deleteUser');
    //delete API for recoard single user for json............................
    // Route::delete('deleteuser-json/{id}','APIController@deleteUserjson');
    Route::delete('delet-multiple-users/{ids}','APIController@deletMultipleUsers');

    //Login API Token and update users token.................................
    Route::post('login-user','APIController@loginUsers');

    //Login API Token and update users with passport.................................
    Route::post('login-user-passport','APIController@loginUsersPassport');


    //Logout API Token and update users token.................................
    Route::post('logout-user','APIController@logoutUsers');

    //Post api update stock.................................
    Route::post('update-stock','APIController@updateStock');

    });
