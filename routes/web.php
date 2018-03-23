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
    return view('welcome');
})->middleware('token');

Route::post('hi', function () {
    return 'this is post method';
});

Route::match(['get','post'],'match', function () {
    return 'this is match method';
});

Route::any('hello_one',function(){
    return 'this is any method';
});

Route::get('hello/{name?}', function ($name = '') {
    return 'Hello,'.$name.'!';
})->where('name','\d+');

Route::get('hello/{age}{name?}', function ($age = 0,$name = '') {
    return 'Hello,'.$name.','.$age.'!';
})->where(['name' => '[A-Za-z]+','id'=>'\d+']);

Route::get('user/member-center',['as' => 'center',function(){
    return route('center');
}]);

Route::group(['prefix' => 'member'],function(){
    Route::get('info/{id?}', [
        'uses' => 'MemberController@info',
        'as' => 'member-info',
    ])->where('id','\d+');
});

Route::group(['prefix' => 'news'],function(){
    Route::get('/',function (App\Models\News $news){
        return $news->getNormalNewsList();
    });
    Route::get('/{id}', [
        'uses' => 'NewsController@info',
        'as' => 'news-info',
    ])->where('id','\d+');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//TestController
Route::get('test/add','TestController@add');
