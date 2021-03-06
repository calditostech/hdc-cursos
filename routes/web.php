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
 use App\Http\Controllers\EventCtrl;

Route::get('/',[EventCtrl::class, 'index']);
Route::get('/eventos/create', [EventCtrl::class, 'create'])->middleware('auth');
Route::get('/eventos/{id}', [EventCtrl::class, 'show']);
Route::post('/eventos', [EventCtrl::class, 'store']);
Route::delete('/events/{id}',[EventCtrl::class, 'destroy']);


Route::get('/contatos/{id}', function ($id){
    return view('contatos', ['id' => $id]);
});

Route::get('/dashboard', [EventCtrl::class, 'dashboard'])->middleware('auth');


