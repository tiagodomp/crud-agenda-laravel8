<?php

use App\Http\Controllers\AgendaController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('agendas/search', [AgendaController::class, 'search'])->name('agendas.search');

Route::post('/config', [AgendaController::class, 'config'])->name('config');

Route::resource('agendas', AgendaController::class)
        ->only(['index', 'store', 'update', 'destroy'])
        ->missing(function () {
            return redirect('agendas.index');
        });
