<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExhibitsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// TODO: There are some options in the registration of the routes in AuthRouteMethods, like email verification etc.
//  which might be a little bit overkill
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::match(['get', 'post'],'/exhibits', [ExhibitsController::class, 'index'])->name('exhibits.index');
Route::get('/exhibits/{unique_name}', [ExhibitsController::class, 'showUnique'])->name('exhibits.unique');
