<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductoController;
// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::resource('/admin', HomeController::class);
Route::resource('/admin-producto', ProductoController::class);
