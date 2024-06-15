<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AdminController::class,'dashboard'])->name('dashboard');
Route::get('/admin/dataUser', [UserController::class,'dataUser'])->name('dataUser');
Route::get('/admin/dataAdmin', [AdminController::class,'dataAdmin'])->name('dataAdmin');
Route::get('/admin/event', [AdminController::class,'event'])->name('event');

Route::get('/tiket', [AdminController::class,'tampil'])->name('admin.tiket');

Route::post('/tiket/add', 'AdminController@addTicket')->name('admin.addTicket');


Route::get('/admin/event/{namaEvent}', [AdminController::class,'detailEvent'])->name('detailEvent');

Route::post('/tambahEvent', [AdminController::class,'tambahEvent'])->name('tambahEvent');

