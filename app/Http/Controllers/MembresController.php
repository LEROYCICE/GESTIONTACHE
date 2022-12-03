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

    public function afficherUtilisateur(Request $request){

        $nom = $request->nom ;
        $user = Auth::where('nom', $nom)->first() ;

        return view('invitation.inviter' , compact('user')) ;
        
    }

    public function InviterUtilisateur(Request $request)
    {
        $userQuiVaInviter = auth()->user();

        $userQuiVaEtreInvite = Auth::where('nom' , $request->nom)->firstOrFail() ;

        $userQuiVaInviter->invites()->attach($userQuiVaEtreInvite) ;

        flash('Vous suivez bien l\'autre');
        
        return back() ;

    }
}
