<?php

namespace App\Http\Controllers;

use App\Mail\InviteTacheMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

            // Mail::to(auth()->user()->email)->send(new InviteTacheMail) ;

            flash("Vous etes bien connecté")->success() ;
            return redirect('/creation-tache') ;
        }else{
            flash("Veuillez entrer des données correctes")->error();
            return back() ;
        }

    }

    public function deconnexion(){
        auth()->logout();
        flash('Vous etes déconnecté')->success() ;
        return redirect('connexion') ;
    }
}


