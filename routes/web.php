<?php

use App\Http\Controllers\AccidentController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/accident/create',[AccidentController::class,'create'])->name('accident.create');
Route::post('/accident/store',[AccidentController::class,'store'])->name('accident.store');
Route::get('/accident/list',[AccidentController::class,'index'])->name('accident.index');
Route::get('/accident/{accident}',[AccidentController::class,'show'])->name('accident.show');
Route::get('/accident/{accident}/edit',[AccidentController::class,'edit'])->name('accident.edit');
Route::put('/accident/{accident}',[AccidentController::class,'update'])->name('accident.update');
Route::delete('/accident/{accident}',[AccidentController::class,'destroy'])->name('accident.destroy');
