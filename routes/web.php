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

//RUTAS DEL FRONT-END
Route::get('/', [
  'as'    =>  'front.index',
  'uses'  =>  'FrontController@index'
  ]);

Route::get('categories/{name}', [
  'uses'  => 'FrontController@searchCategory',
  'as'    => 'front.search.category'
]);

Route::get('tags/{name}', [
  'uses'  => 'FrontController@searchTag',
  'as'    => 'front.search.tag'
]);

Route::get('articles/{slug}', [
  'uses'  => 'FrontController@viewArticle',
  'as'    => 'front.view.article'
]);

//RUTAS DEL PANEL DE ADMINISTRACIÓN
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){

  Route::get('/', ['as' => 'admin.index', function(){
    return view('admin.index');
  }]);

  Route::resource('users','UsersController');
  Route::get('users/{id}/destroy',[
    'uses'  => 'UsersController@destroy',
    'as'    => 'users.destroy'
  ]);

  Route::resource('categories','CategoriesController');
  Route::get('categories/{id}/destroy',[
    'uses'  => 'CategoriesController@destroy',
    'as'    => 'categories.destroy'
  ]);

  Route::resource('tags','TagsController');
  Route::get('tags/{id}/destroy',[
    'uses'  => 'TagsController@destroy',
    'as'    => 'tags.destroy'
  ]);
  Route::resource('articles','ArticlesController');
  Route::get('articles/{id}/destroy',[
    'uses'  => 'ArticlesController@destroy',
    'as'    => 'articles.destroy'
  ]);

  Route::get('images',[
    'uses'  => 'ImagesController@index',
    'as'    => 'images.index'
  ]);

});

/*Route::get('logout',  [
  'uses'  =>  'LoginController@logout',
  'as'    => 'logout',
]);*/
Auth::routes();
Route::get('/home', 'HomeController@index');
