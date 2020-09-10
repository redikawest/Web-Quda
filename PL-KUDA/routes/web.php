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
    return view('login');
});

Route::get('/PL-Kuda/beranda','KudaController@beranda');
Route::get('/PL-Kuda/race','KudaController@race');
Route::get('/PL-Kuda/sell','KudaController@sell');
Route::get('/PL-Kuda/news','KudaController@news');
Route::get('/PL-Kuda/mnews/{id}/viewn','KudaController@viewnews');
Route::get('/PL-Kuda/about','KudaController@about');
Route::get('/PL-Kuda/horse','KudaController@horse');



Route::get('/PL-Kuda/login','AuthController@login')->name('login');
Route::post('/PL-Kuda/postlogin','AuthController@postlogin');
Route::get('/PL-Kuda/logout','AuthController@logout');

Route::group(['middleware'=>['auth','checkRole:admin']],function(){


Route::get('/PL-Kuda/mheader','KudaController@manageheader');
Route::get('/PL-Kuda/mheader/{id}/edith','KudaController@editheader');
Route::post('/PL-Kuda/mheader/{id}/updateh','KudaController@updateheader');


Route::get('/PL-Kuda/mevent','KudaController@manageevent');
Route::post('/PL-Kuda/createe','KudaController@createevent');
Route::get('/PL-Kuda/mevent/{id}/edite','KudaController@editevent');
Route::post('/PL-Kuda/mevent/{id}/updatee','KudaController@updateevent');
Route::get('/PL-Kuda/mevent/{id}/deletee','KudaController@deleteevent');


Route::get('/PL-Kuda/mhorse','KudaController@managehorse');
Route::post('/PL-Kuda/createho','KudaController@createhorse');
Route::get('/PL-Kuda/mhorse/{id}/editho','KudaController@edithorse');
Route::post('/PL-Kuda/mhorse/{id}/updateho','KudaController@updatehorse');
Route::get('/PL-Kuda/mhorse/{id}/deleteho','KudaController@deletehorse');


Route::get('/PL-Kuda/mnews','KudaController@managenews');
Route::post('/PL-Kuda/createn','KudaController@createnews');
Route::get('/PL-Kuda/mnews/{id}/editn','KudaController@editnews');
Route::post('/PL-Kuda/mnews/{id}/updaten','KudaController@updatenews');
Route::get('/PL-Kuda/mnews/{id}/deleten','KudaController@deletenews');

Route::get('/PL-Kuda/mmember','KudaController@managemember');
Route::post('/PL-Kuda/createm','KudaController@createmember');
Route::get('/PL-Kuda/mmember/{id}/editm','KudaController@editmember');
Route::post('/PL-Kuda/mmember/{id}/updatem','KudaController@updatemember');
Route::get('/PL-Kuda/mmember/{id}/deletem','KudaController@deletemember');
Route::get('/PL-Kuda/mmember/{id}/viewm','KudaController@viewmember');


Route::get('/PL-Kuda/logout','AuthController@logout');

});


Route::group(['middleware'=>['auth','checkRole:admin,member']],function(){
    Route::get('/PL-Kuda/dashboard','DashboardController@dash');
    
    Route::get('/PL-Kuda/mhorse','KudaController@managehorse');
    Route::post('/PL-Kuda/createho','KudaController@createhorse');
    
    Route::get('/PL-Kuda/logout','AuthController@logout');

});    