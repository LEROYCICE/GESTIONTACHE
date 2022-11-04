<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InscriptionController extends Controller
{
    public function inscription(){
        return view('Auth.inscription') ;
    }

    public function inscriptionTraitement(Request $request){

        $request->validate([
            'nom' => 'required' ,
            'email' => 'required|email|unique:auths',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required' ,

        ],[
            'password.min' => 'Pour des raisons de sécurité, vous devez entrer au minimun :min caracteres.'
        ]) ;

        $user = new Auth;
        $user->nom = $request->nom ;
        $user->email = $request->email ;
        $user->password = bcrypt($request->password);
        $user->password_confirmation = bcrypt($request->password_confirmation) ;

        $resultat = $user->save() ;

        if($resultat){
            flash('Vous venez de vous inscrire sur votre plateforme de gestion de tache') ;
            return redirect('/creation-tache') ;
        }

    }
}
