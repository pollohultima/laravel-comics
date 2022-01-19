<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ComicController@index' )->name('comics');

Route::get('comics/{comic}', 'ComicController@show')->name('comic');/*  function ($id) {
    $comics = config('db.comics');

    if (is_numeric($id) && $id >= 0 && $id < count($comics)) {

        $comic = $comics[$id];
        return view('comics.show', compact('comic'));

    } else {
        abort(404);
    }
} */

//Mostra Lista di risorse
Route::get('admin/posts', 'Admin\PostController@index')->name('admin.posts.index');

//Mostra form per creare una nuova risorsa
Route::get('posts/create', 'Admin\PostController@create')->name('admin.posts.create');

//Salvo nel database la singola risorsa
Route::post('posts', 'Admin\PostController@store')->name('admin.posts.store');

//Mostra la singola risorsa
Route::get('posts/{post}', 'Admin\PostController@show')->name('admin.posts.show');

//Mostra un form per modificare la risorsa
Route::get('posts/{post}/edit', 'Admin\PostController@edit')->name('admin.posts.edit');

//Aggiorniamo la risorsa nel database
Route::put('posts/{post}', 'Admin\PostController@update')->name('admin.posts.update');

//Cancellare una risorsa nel database
Route::delete('posts/{post}', 'Admin\PostController@destroy')->name('admin.posts.destroy');


Route::resource('movies', 'Admin\MovieController');