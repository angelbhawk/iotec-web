<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DeviceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('iotec');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/device', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('device');

Route::get('/apps', function () {
    return view('apps');
})->middleware(['auth', 'verified'])->name('apps');

Route::middleware('auth')->group(function () {
    Route::get('/device/{id}', [DeviceController::class, 'mostrar'])->name('device.mostrar');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/getdevices', [ProfileController::class, 'getDevices'])->name('profile.devices');
    Route::get('/getdevices', [ProfileController::class, 'getDevices'])->name('profile.devices');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/device', [App\Http\Controllers\ProfileController::class, 'getDevice'])->name('device');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
