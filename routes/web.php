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

Route::resource('pqrsds', PqrsdController::class);

//Rutas para contestar pqrsd

 Route::get('pqrsd/{pqrsd}',[PqrsdController::class,'answer'])->name('pqrsds.answer');
 Route::post('pqrsd',[PqrsdController::class,'sendAnswer'])->name('pqrsds.sendAnswer');






//Login rutas

// Route::post('login',function() {

//     $credentials = request()->only('email','password');
   
//    if(Auth::attempt($credentials)) {

//     return 'sesion iniciada';

//    }

//    return 'error en inicio de sesion';

// });



