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

Route::any('/', ['uses' => 'HomeController@index', 'as' => 'home']);
Route::post('/', ['uses' => 'HomeController@contact', 'as' => 'contact']);

Route::any('/admin', ['uses' => 'Admin\AdminController@index', 'as' => 'admin']);
Route::any('/incoming', ['uses' => 'Admin\MessageController@incoming', 'as' => 'incoming']);
Route::any('/outgoing', ['uses' => 'Admin\MessageController@outgoing', 'as' => 'outgoing']);
Route::any('/message/{id}', ['uses' => 'Admin\MessageController@message', 'as' => 'message'],
    function($id) {
        return $id;
    });
Route::any('/message/delete/{id}', ['uses' => 'Admin\MessageController@messagedelete', 'as' => 'messagedelete'],
    function($id) {
        return $id;
    });
Route::any('/openmessagedelete/delete/{id}', ['uses' => 'Admin\MessageController@openmessagedelete', 'as' => 'openmessagedelete'],
    function($id) {
        return $id;
    });
Route::any('/mymessage/{id}', ['uses' => 'Admin\MessageController@mymessage', 'as' => 'mymessage'],
    function($id) {
        return $id;
    });
Route::any('/mymessage/delete/{id}', ['uses' => 'Admin\MessageController@mymessagedelete', 'as' => 'mymessagedelete'],
    function($id) {
        return $id;
    });
Route::any('/openmymessagedelete/delete/{id}', ['uses' => 'Admin\MessageController@openmymessagedelete', 'as' => 'openmessagedelete'],
    function($id) {
        return $id;
    });
Route::any('/answer/{id}', ['uses' => 'Admin\MessageController@answer', 'as' => 'answer'],
    function($id) {
        return $id;
    });
Route::post('/answer/{id}', ['uses' => 'Admin\MessageController@sendmail', 'as' => 'sendmail']);

Route::any('/category', ['uses' => 'Admin\CategoryController@index', 'as' => 'category']);
Route::post('/category', ['uses' => 'Admin\CategoryController@save', 'as' => 'saveCategory']);
Route::any('/category/delete/{id}', ['uses' => 'Admin\CategoryController@delete', 'as' => 'deleteCategory'],
    function($id) {
        return $id;
    });
Route::post('/category/newcategory', ['uses' => 'Admin\CategoryController@newcategory', 'as' => 'newcategory']);
Route::any('/categoryload', ['uses' => 'Admin\WorkController@categoryload', 'as' => 'categoryload']);
Route::any('/loadworks/{id}', ['uses' => 'Admin\WorkController@loadworks', 'as' => 'loadworks'],
    function($id) {
        return $id;
    });
Route::post('/load/{id}', ['uses' => 'Admin\WorkController@load', 'as' => 'loadworks'],
    function($id) {
        return $id;
    });
Route::any('/editworks', ['uses' => 'Admin\WorkController@editworks', 'as' => 'editworks']);
Route::any('/editworks/delete/{id}', ['uses' => 'Admin\WorkController@delete', 'as' => 'deletework'],
    function($id) {
        return $id;
    });
Route::post('/edit', ['uses' => 'Admin\WorkController@edit', 'as' => 'edit']);


