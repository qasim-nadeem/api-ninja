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

/*
 *
 * HomeController
 */
Route::get('/', 'Guest\HomeController@index')->name('home');

/*
 *
 * AppController
 */
Route::post('/app/create', 'Guest\AppController@create')->name('app.create.post');

/*
 *
 * TableController
 */
Route::get('app/{id}/table/create', 'Guest\TableController@index')
    ->middleware('checkGuestAppAccess')
    ->name('table.create.get');
Route::post('app/{id}/table/create', 'Guest\TableController@create')
    ->middleware('checkGuestAppAccess')
    ->name('table.create.post');
/*
 * MigrationController
 *
 * Routes for migration controller
 *
 */
Route::get('create/table', 'MigrationController@createTable')->name('migration.create.table');

/*
 * ApiController
 *
 * routes related to the final api
 *
 */
Route::get('api/show/{appId}/{tableName}', 'Guest\ApiController@index')->name('api.index.get');
