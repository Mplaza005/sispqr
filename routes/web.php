<?php

use App\Http\Controllers\PqrsdController;
use Illuminate\Support\Facades\Auth;
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

// Rutas para la gestion de los formularios//



// Route::post('login', [PqrsdController::class,'login'])->name('login.login');

// Route::get('login', [PqrsdController::class,'inicio']);

// Route::post('login', [PqrsdController::class,'login'])->name('login');

// Route::get('formularios', [PqrsdController::class,'index'])->name('formulario.index')->middleware('auth');



Route::get('listarPqrsds', [PqrsdController::class,'index'])->name('pqrsds.index');

Route::get('pqrsds/create',[PqrsdController::class,'create'])->name('pqrsds.create');

Route::post('pqrsds',[PqrsdController::class,'store'])->name('pqrsds.store');

Route::get('pqrsds/{pqrsd}',[PqrsdController::class,'show'])->name('pqrsds.show');

Route::get('pqrsds/{pqrsd}/edit',[PqrsdController::class,'edit'])->name('pqrsds.edit');

Route::put('pqrsds/{pqrsd}',[PqrsdController::class,'update'])->name('pqrsds.update');

Route::delete('pqrsds/{pqrsd}',[PqrsdController::class,'destroy'])->name('pqrsds.destroy');



// Route::get('pqrsds/{pqrsd}',[PqrsdController::class,'answer'])->name('pqrsds.answer');

// Route::post('pqrsds',[PqrsdController::class,'sendAnswer'])->name('pqrsds.sendAnswer');

Route::post('pqrsds/{pqrsd}',[PqrsdController::class,'viewPdf'])->name('pqrsds.viewPdf');










//Login rutas

// Route::post('login',function() {

//     $credentials = request()->only('email','password');
   
//    if(Auth::attempt($credentials)) {

//     return 'sesion iniciada';

//    }

//    return 'error en inicio de sesion';

// });



