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
    return view('welcome');
});

use App\Http\Controllers\FormController;

Route::post('/processar-formulario', [FormController::class, 'processarFormulario']);


use App\Http\Controllers\PdfController;

Route::get('/exportar-pdf', [PdfController::class, 'generate']);
Route::get('/Portifólio-pdf', [PdfController::class, 'viewPdf']);



   


