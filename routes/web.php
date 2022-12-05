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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//ホーム画面
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//朝食画面
Route::get('/morning', [App\Http\Controllers\MenuController::class, 'morning'])->name('morning');
//昼食画面
Route::get('/lunch', [App\Http\Controllers\MenuController::class, 'lunch'])->name('lunch');
//夕食画面
Route::get('/dinner', [App\Http\Controllers\MenuController::class, 'dinner'])->name('dinner');
//間食画面
Route::get('/snack', [App\Http\Controllers\MenuController::class, 'snack'])->name('snack');
//アカウント編集画面
Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit');
//アカウント編集
Route::post('/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update');
//記録一覧画面
Route::get('/record', [App\Http\Controllers\RecordController::class, 'record'])->name('record');
//記録編集画面
Route::get('/record_edit/{id}', [App\Http\Controllers\RecordController::class, 'record_edit'])->name('record_edit');
//記録編集
Route::post('/record_update', [App\Http\Controllers\RecordController::class, 'record_update'])->name('record_update');
//記録入力画面
Route::get('/add', [App\Http\Controllers\RecordController::class, 'add'])->name('add');
//記録入力
Route::post('/record_add', [App\Http\Controllers\RecordController::class, 'record_add'])->name('record_add');