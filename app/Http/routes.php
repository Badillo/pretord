<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'CompanyController@webpage']);
Route::get('/membership', ['uses' => 'CompanyController@membership']);
Route::get('/catalog', ['uses' => 'CompanyController@catalog']);
Route::get('/register', ['uses' => 'CompanyController@register']);
Route::get('/products/{collection_id?}', ['uses' => 'CompanyController@products']);
Route::get('/productDetail/{product_id}', ['uses' => 'CompanyController@productDetail']);

Route::group(['middleware' => 'guest'], function(){
		Route::get('/admin/login', function(){
			return view('login');
		});
	});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::get('index', ['uses' => 'CompanyController@index']);
	Route::post('store', ['uses' => 'CompanyController@store']);

	Route::group(['prefix' => 'categories'], function(){
		Route::get('index', ['uses' => 'CategoryController@index']);
		Route::post('store', ['uses' => 'CategoryController@store']);
		Route::post('edit', ['uses' => 'CategoryController@edit']);
		Route::post('delete', ['uses' => 'CategoryController@delete']);
	});

	Route::group(['prefix' => 'collections'], function(){
		Route::get('index', ['uses' => 'CollectionController@index']);
		Route::post('store', ['uses' => 'CollectionController@store']);
		Route::post('edit', ['uses' => 'CollectionController@edit']);
		Route::post('delete', ['uses' => 'CollectionController@delete']);
	});

	Route::group(['prefix' => 'products'], function(){
		Route::get('index', ['uses' => 'ProductController@index']);
		Route::post('store', ['uses' => 'ProductController@store']);
		Route::post('edit', ['uses' => 'ProductController@edit']);
		Route::post('delete', ['uses' => 'ProductController@delete']);
	});

	/*
	Route::group(['prefix' => 'customers'], function(){
		Route::post('store', ['uses' => 'CustomersController@store']);
		Route::post('delete', ['uses' => 'CustomersController@delete']);
		Route::get('create', ['uses' => 'CustomersController@create']);
		Route::post('change', ['uses' => 'CustomersController@changeStatus']);
	});

	Route::group(['prefix' => 'types'], function(){
		Route::get('index', ['uses' => 'TypeController@index']);
		Route::post('store', ['uses' => 'TypeController@store']);
		Route::post('edit', ['uses' => 'TypeController@edit']);
		Route::post('delete', ['uses' => 'TypeController@delete']);
	});

	Route::group(['prefix' => 'users'], function(){
		Route::post('store', ['uses' => 'UserController@store']);
		Route::post('delete', ['uses' => 'UserController@delete']);
		Route::get('create', ['uses' => 'UserController@create']);
		Route::post('change', ['uses' => 'UserController@changeStatus']);
	});
	*/

});

//Grupo para inicios de sesión y reseteo de contraseña
Route::group(['prefix' => 'auth'], function(){

	//Rutas de autenticacion
	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', 'Auth\AuthController@postLogin');
	Route::get('logout', 'Auth\AuthController@getLogout');

	//Rutas de registro
	Route::get('register', 'Auth\AuthController@getRegister');
	Route::post('register', 'Auth\AuthController@postRegister');
});