<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('code/{pattern}', 'SearchController@byCode');
Route::get('name/{pattern}', 'SearchController@byName');
Route::get('search/{pattern}', 'SearchController@byBoth');


// http://localhost/postcode_api-master/public/api/search/stuttgart