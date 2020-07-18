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
Route::get('/', 'HomeController@index')->name('home');

/*
 *
 * AppController
 */
Route::post('/app/create', 'AppController@create')->name('app.create.post');
/*
 * MigrationController
 *
 * Routes for migration controller
 *
 */
Route::get('create/table', 'MigrationController@createTable')->name('migration.create.table');
