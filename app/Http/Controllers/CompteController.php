<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function infoDuCompte(){
        
        $utilisateur = auth()->user() ;

        return view('mon-compte' , compact('utilisateur')) ;
    }
}
