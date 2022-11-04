<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function connexion(){
        return view('Auth.connexion') ;
    }

    public function connexionTraitement(Request $request){

        $request->validate([
            'email' => 'required' ,
            'password' => 'required'
        ]) ;

        $resultat = auth()->attempt([
            'email' => $request->email ,
            'password' => $request->password
        ]) ;
        if($resultat){
            flash("Vous etes bien connecté")->success() ;
            return redirect('/creation-tache') ;
        }else{
            flash("Veuillez entrer des données correctes")->error();
            return back() ;
        }

    }
}


