<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;

class MembresController extends Controller
{
    public function lesUtilisateurs()
    {
        
        $utilisateurs = Auth::all() ;

        return view('utilisateurs' , compact('utilisateurs')) ;

    }

    public function suivreUtilisateur(){
        
    }
}
