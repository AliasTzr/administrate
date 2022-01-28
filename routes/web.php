<?php

use App\Http\Controllers\Navigation;
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

Route::get('/', [Navigation::class, 'connexion'])->name('connexion.index');
Route::post('/', [Navigation::class, 'submitForm'])->name('connexion.submit');  

Route::get('/home',  [Navigation::class, 'home'])->name('home');

Route::get('/actu', [Navigation::class, 'actualite'])->name('actualite');

Route::get('/agenda', [Navigation::class, 'agenda'])->name('agenda');

Route::get('/annuaire', [Navigation::class, 'annuaire'])->name('annuaire');

Route::get('/forum', [Navigation::class, 'forum'])->name('forum');