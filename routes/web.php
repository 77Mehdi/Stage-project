<?php

use App\Http\Controllers\CollecteDesExression as ControllersCollecteDesExression;
use App\Http\Controllers\ExpressionDesBessoins;
use App\Http\Controllers\PDFMaker;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard',['type'=>'home']);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::resource('expresion',ExpressionDesBessoins::class)->middleware(['auth']);
Route::get('/collecte',[ControllersCollecteDesExression::class,'index'])->middleware(['auth']);
Route::post('/collecte',[ControllersCollecteDesExression::class,'storee'])->middleware(['auth'])->name('collecte');
Route::delete('/collecte/{id}',[ControllersCollecteDesExression::class,'delete'])->middleware(['auth'])->name('delete');
Route::get('/resoltes',[ControllersCollecteDesExression::class,'storee'])->middleware(['auth'])->name('Res');
//pdf route
Route::get('/expresions',[PDFMaker::class,'MYPDF'])->middleware(['auth'])->name('expresions');
Route::get('/OpenPDF',[PDFMaker::class,'OpenPDF'])->middleware(['auth'])->name('OpenPDF');
Route::get('/DownlodPDF',[PDFMaker::class,'DownlodPDF'])->middleware(['auth'])->name('DownlodPDF');
// //////
Route::get('/realisation',[ControllersCollecteDesExression::class,'index'])->middleware(['auth']);
Route::post('/realisation',[ControllersCollecteDesExression::class,'updateReslisation'])->middleware(['auth'])->name('updateReslisationName');
Route::post('/emeilSend',[ControllersCollecteDesExression::class,'EmeilSend'])->middleware(['auth'])->name('EmeilSend');
