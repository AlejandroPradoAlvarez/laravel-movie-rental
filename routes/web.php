<?php
use Illuminate\Support\Facades\Auth;






	Route::get('/', 'HomeController@getHome');
	


	Route::get('catalog', 'CatalogController@getIndex');
	Route::get('catalog/create', 'CatalogController@getCreate');
	Route::post('catalog/create', 'CatalogController@postCreate');
	Route::get('catalog/show/{id}', 'CatalogController@getShow');
	Route::get('catalog/edit/{id}', 'CatalogController@getEdit');
	Route::put('catalog/edit/{id}', 'CatalogController@putEdit');
	
	Route::get('catalog/alquilar/{id}', 'CatalogController@putRented');
	
	
	Auth::routes();
	Route::get('/', 'HomeController@index');
	
	
	Route::group(['middleware' => 'auth'], function() {
		Route::get('catalog', 'CatalogController@getIndex');
		Route::get('catalog/show', 'CatalogController@getShow');
		Route::get('catalog/create', 'CatalogController@getCreate');
		Route::post('catalog/create', 'CatalogController@postCreate');
		Route::get('catalog/edit', 'CatalogController@getEdit');
		Route::put('catalog/edit', 'CatalogController@putEdit');
	});
	Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
?>
