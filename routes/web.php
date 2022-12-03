<?php

use App\Http\Controllers\CompteController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\MembresController;
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

// Mes routes

Route::get('/', function () {
    return view('welcome');
});

//Route pour la création des taches
Route::get('/creation-tache' , [TachesController::class , 'creation_tache'])->middleware('App\Http\Middleware\Auth') ;

//Route pour récuperer les taches crées
Route::post('/sauver' , [TachesController::class , 'sauver_tache'])->name('sauver_tache') ;

//Route pour l'affichage des taches
Route::get('/affichage-taches' , [TachesController::class , 'affichage_taches'])->name('taches')->middleware('App\Http\Middleware\Auth');

//Route pour voir une tache
Route::get('/show/{id}', [TachesController::class , 'show'])->name('show');

//Route pour la modification de tache
Route::get('/modification-tache/{id}' , [TachesController::class , 'edit'])->name('edit') ;

//Route pour traiter la modification des taches
Route::patch('/modification-tache/{id}' , [TachesController::class ,'update'])->name('update') ;

//Route pour supprimer une tache
Route::delete('/supprimer-tache/{id}' , [TachesController::class , 'destroy'])->name('delete') ;


//Route pour mon compte
Route::get('/mon-compte' ,[CompteController::class , 'infoDuCompte'])->name('mon-compte')->middleware('App\Http\Middleware\Auth') ;

Route::post('/mon-compte' , [CompteController::class , 'avatar'])->name('avatar')->middleware('App\Http\Middleware\Auth') ;

// Route pour à propos de moi
Route::get('/a-propos' , function(){
    return view('a-propos') ;
})->name('a-propos');

//Route pour les contacts

Route::get('/contact' , function(){
    return view('contact') ;
})->name('contact') ;


// Cette partie c'est pour l'authentification

Route::get('/inscription' , [InscriptionController::class , 'inscription']);

Route::post('/inscription' , [InscriptionController::class , 'inscriptionTraitement'])->name('inscription') ;

Route::get('/connexion' , [ConnexionController::class , 'connexion']) ;
Route::post('/connexion' , [ConnexionController::class , 'connexionTraitement'])->name('connexion') ;

Route::get('/deconnexion' , [ConnexionController::class , 'deconnexion']) ;

//Creation de middleware pour gérer la connexion

// Route pour afficher tous les utilisateurs
Route::get('/les-utilisateurs', [MembresController::class , 'lesUtilisateurs'])->name('utilisateurs');

//Route pour afficher l'utilisateur à inviter
Route::get('/les-utilisateurs/{nom}' , [MembresController::class , 'afficherUtilisateur']) ;

Route::get('/les-utilisateurs/{nom}/invites' , [MembresController::class , 'InviterUtilisateur']) ;
