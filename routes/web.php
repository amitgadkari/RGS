<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


	//Main home page
	Route::group(['namespace'=>'Admin\Location','prefix' => 'Admin/Location','middleware'=>['web','auth']], function (){

        // Controllers Within The "App\Http\Controllers\Dashboard" Namespace
    	
        Route::group(['namespace' => 'Region','prefix' => 'Region'], function() {
            Route::get('/', 'RegionController@index');
            Route::get('create',['uses' => 'RegionController@create']);
            Route::post('save',['uses' => 'RegionController@store']); 

        });

        Route::group(['namespace' => 'Subregion','prefix' => '{region}/Subregion'], function() {
            Route::get('/', 'SubregionController@index');
            Route::get('/create',['uses' => 'SubregionController@create']);
            Route::post('/save',['uses' => 'SubregionController@store']); 

        });

    //To add new city and to save it

    	Route::get('City/new','Admin\Location\CityController@create');
    	Route::post('City/save','Admin\Location\CityController@store');

    //To edit and update the details of region

    	Route::post('Region/edit/{id}','RegionController@edit');
    	Route::post('Region/update','RegionController@update');

    //To edit and update the details of subregion

    	Route::post('Subregion/editsub/{id}','RegionController@editsub');
    	Route::post('Subregion/updatesub','RegionController@updatesub');

    //To edit and upadate the deatils of city

    	Route::post('city/edit/{id}','CityController@edit');
    	Route::post('city/update','CityController@update');

    //To search the region
    	Route::post('Region/search/{id}','RegionController@search');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
