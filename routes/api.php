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

Route::middleware('api')->get('/{string}', 'TranslatorController@translate')->name('traslate');

Route::middleware('api')->get('/', function () {
    return redirect()->route('traslate',['string'=> 'Please enter a string to be translated.']);
});
