<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Driver\DriverController;

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

Route::get('/', function () {
    return view('welcome');
});


//Route::resource('catalog', CatalogController::class);
Route::resource('driver', DriverController::class);
//require __DIR__.'/auth.php';