<?php

use App\Http\Controllers\DocumentController;
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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/documents', function () {
        return view('documents.index');
    })->name('documents');    
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/documents',  function () {
//         return view('documents.index');
//     })->name('documents.index');    
// });


// Route::get('documents/', [DocumentController::class, 'index']);

// Route::put('documents/{$documento->DOC_ID}', [DocumentController::class, 'edit'])->name('document.edit');
Route::resource('/documents', DocumentController::class);

