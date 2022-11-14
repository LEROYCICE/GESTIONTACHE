<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth ;

class CompteController extends Controller
{
    public function infoDuCompte(){
        
        $utilisateur = auth()->user() ;

        return view('mon-compte' , compact('utilisateur')) ;
    }


    public function avatar(Request $request){

        $request->validate([
            'avatar' => 'required|image',
        ]) ;

        $path = $request->avatar->store('avatars', 'public') ;

        auth()->user()
              ->update([
            'avatar' => $path ,
        ]);

        flash("Votre avatar est bien enrégistré") ;
         return back();

    }


}


