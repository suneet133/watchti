<?php

use App\Channel;
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
    $channels = Channel::latest()->get();
    return view('welcome', compact('channels'));
});

Route::get('/update-ti-channels','ChannelsController@index');
Route::post('/addchannel','ChannelsController@create');
Route::post('/updatechannel/{id}','ChannelsController@update');
