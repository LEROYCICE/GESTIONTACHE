<?php

use App\Http\Controllers\TachesController;
use Illuminate\Support\Facades\Route;
use App\Models\Tache;

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

//Route pour la création des taches
Route::get('/creation-tache' , [TachesController::class , 'creation_tache']) ;

//Route pour récuperer les taches crées
Route::post('/sauver' , [TachesController::class , 'sauver_tache'])->name('sauver_tache') ;

//Route pour l'affichage des taches
Route::get('/affichage-taches' , [TachesController::class , 'affichage_tache']);

//Route pour voir une tache
Route::get('/show', [TachesController::class , 'show'])->name('show');

//Route pour la modification de tache
Route::get('/modification_tache/{id}' , [TachesController::class , 'modification_tache'])->name('edit') ;

//Route pour traiter la modification des taches
Route::post('/update' , [TachesController::class ,'update'])->name('update') ;

Route::delete('/supprimer_tache/{id}' , [TachesController::class , 'destroy'])->name('delete') ;

