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

// Admin routes
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
{
    Route::group(['middleware' => 'auth'], function() 
    {
    	#USER MODEL
        // List Resources
        Route::get(OogleeCConfig::get('config.routes.base_uri_admin'), ['as' => 'admin.cms.index', 'uses' => 'DashboardController@getIndex']);
    });
});
