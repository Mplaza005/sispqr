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

Route::post('login', [PqrsdController::class,'login'])->name('login.login');

Route::get('inicio', [PqrsdController::class,'index1'])->name('login.index1');

Route::get('formularios', [PqrsdController::class,'index'])->name('formulario.index');

Route::get('formularios/create',[PqrsdController::class,'create'])->name('formulario.create');

Route::post('formulario',[PqrsdController::class,'store'])->name('formulario.store');

Route::get('hola/{pqrsd}',[PqrsdController::class,'show'])->name('formulario.show');

Route::get('formularios/{pqrsd}/edit',[PqrsdController::class,'edit'])->name('formulario.edit');

Route::put('formularios/{pqrsd}',[PqrsdController::class,'update'])->name('formulario.update');

Route::get('formularios/{pqrsd}',[PqrsdController::class,'answer'])->name('formulario.answer');

Route::post('formularios',[PqrsdController::class,'sendAnswer'])->name('formulario.sendAnswer');

//Login rutas

// Route::post('login',function() {

//     $credentials = request()->only('email','password');
   
//    if(Auth::attempt($credentials)) {

//     return 'sesion iniciada';

//    }

//    return 'error en inicio de sesion';

// });



