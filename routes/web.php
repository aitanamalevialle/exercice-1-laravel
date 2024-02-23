<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciceController;

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

Route::get('/accueil', [ExerciceController::class, 'accueil']);
Route::get('/about', [ExerciceController::class, 'about']);
Route::get('/produits', [ExerciceController::class, 'produits']);
Route::get('/boutique', [ExerciceController::class, 'boutique']);
Route::post('/accueil',[ExerciceController::class, 'accueil']);
Route::post('/accueil',[ExerciceController::class, 'contactForm']);

?>