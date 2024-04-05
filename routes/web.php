<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Application;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

/*FRONT*/
use App\Http\Controllers\frontinicioController;
use App\Http\Controllers\fronttallerController;
use App\Http\Controllers\fronttunningController;
use App\Http\Controllers\fronttiendaController;
use App\Http\Controllers\frontforoController;
use App\Http\Controllers\frontdetailingController;
use App\Http\Controllers\frontpoliticadecookiesController;
use App\Http\Controllers\frontprivacidadwebController;
use App\Http\Controllers\frontavisolegalController;
use App\Http\Controllers\frontcontactanosController;
use App\Http\Controllers\frontmoodboardController;
use App\Http\Controllers\frontFormularioTallerController;


/*BACK*/
use App\Http\Controllers\backinicioController;
use App\Http\Controllers\backusuariosController;
use App\Http\Controllers\backcitasController;
use App\Http\Controllers\backtiendaController;
use App\Http\Controllers\backforoController;
use App\Http\Controllers\backtextoController;


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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



/*FRONT*/
/*CUANDO TERMINE AGRUPARLOS COMO ME ENSEÑARON*/
Route::get('/Inicio',[frontinicioController::class,'invoke'])->name('frontinicio');
Route::get('/Taller', [fronttallerController::class, 'invoke'])->name('fronttaller');
Route::get('/Tunning', [fronttunningController::class, 'invoke'])->name('fronttunning');
Route::get('/Tienda', [fronttiendaController::class, 'invoke'])->name('fronttienda');
Route::get('/Foro', [frontforoController::class, 'invoke'])->name('frontforo');
Route::get('/Detailing', [frontdetailingController::class, 'invoke'])->name('frontdetailing');
Route::get('/Politica de cookies', [frontpoliticadecookiesController::class, 'invoke'])->name('frontpoliticadecookies');
Route::get('/Aviso legal', [frontavisolegalController::class, 'invoke'])->name('frontavisolegal');
Route::get('/Privacidad web', [frontprivacidadwebController::class, 'invoke'])->name('frontprivacidadweb');
Route::get('/Contáctanos', [frontcontactanosController::class, 'invoke'])->name('frontcontactanos');
Route::get('/Moodboard', [frontmoodboardController::class, 'invoke'])->name('frontmoodboard');
Route::post('/ContactoFormulario', 'App\Http\Controllers\ContactoFormularioController@ContactoFormulario')->name('ContactoFormulario');
Route::view('/contacto-confirmacion', 'frontcontacto-confirmacion')->name('frontcontacto-confirmacion');
Route::view('/contacto-error', 'frontcontacto-error')->name('frontcontacto-error');
Route::post('/UsuariosFormulario', 'App\Http\Controllers\UsuariosFormularioController@UsuariosFormulario')->name('UsuariosFormulario')->middleware('auth');
Route::get('/FormularioTaller', [frontFormularioTallerController::class, 'invoke'])->name('fronttaller-lugar')->middleware('auth');


/*BACK A TODOS PONER MIDDLEWARE*/
Route::get('/BackInicio',[backinicioController::class,'invoke'])->name('backinicio')->middleware('auth');
Route::get('/BackUsuarios', [backusuariosController::class, 'invoke'])->name('backusuario')->middleware('auth');
Route::get('/BackCitas', [backcitasController::class, 'invoke'])->name('backcita')->middleware('auth');
Route::get('/BackTienda', [backtiendaController::class, 'invoke'])->name('backtienda')->middleware('auth');
Route::get('/BackForo', [backforoController::class, 'invoke'])->name('backforo')->middleware('auth');
Route::get('/BackTexto', [backtextoController::class, 'invoke'])->name('backtexto')->middleware('auth');



