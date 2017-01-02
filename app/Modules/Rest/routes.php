<?php 

/*
|--------------------------------------------------------------------------
| ModuleOne Module Routes
|--------------------------------------------------------------------------
|
| All the routes related to the ModuleOne module have to go in here. Make sure
| to change the namespace in case you decide to change the 
| namespace/structure of controllers.
|
*/
Route::group(['prefix' => 'api', 'namespace' => 'App\Modules\Rest\Controllers'], function () {
	Route::get('/', ['as' => 'rest.index', 'uses' => 'IndexController@index']);
	Route::get('model-test', ['as' => 'rest.modelTest', 'uses' => 'IndexController@modelTest']);
});
