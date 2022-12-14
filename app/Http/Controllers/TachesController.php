<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache ;
use App\Models\Auth ;

class TachesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function affichage_taches()
    {
        $taches = auth()->user()->taches;
        
        return view('affichage_tache' , compact('taches')) ;
    }

    public function creation_tache(){ 
        
        return view('creation_tache') ;
    }


    public function sauver_tache(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'delai'=> 'required'
        ]);

        $tache = new Tache ;
        $tache->auth_id = auth()->user()->id;
        $tache->titre = $request->titre ;
        $tache->contenu = $request->contenu ;
        $tache->delai = $request->delai ;

        $resultat = $tache->save() ;

        if($resultat){
            flash('Vous venez d\'ajouter avec succès une tache')->success() ;

            return back() ;
        }else{
            flash('Votre tache n\'est pas ajouté, veuillez recommencer')->error();
            return back();
        }
    }

    public function show($id)
    {
        $tache = Tache::findOrFail($id) ;
        return view('show_tache' , compact('tache')) ;
    }


    public function edit($id)

    {    $tache = Tache::findOrFail($id) ;

        return view('modification_tache' , compact('tache')) ;
    }

    public function update(Request $request, $id)
    { 
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required' ,
             'delai' => 'required'
        ]) ;

        $tache = Tache::findOrFail($id) ;

        $tache->titre = $request->titre ;
        $tache->contenu = $request->contenu ;
        $tache->delai = $request->delai ;

        $resultat = $tache->update() ;
        if($resultat){
            flash('Vous venez de modifier avec succès votre tache') ;

            return redirect('/affichage-taches');
        }
      
    }


    public function destroy($id)
    {
        $tache = Tache::findOrFail($id);
        $resultat = $tache->delete() ;
        if($resultat){
            flash('Vous venez de supprimer votre tache d\'id '.$tache->id.'avec succes')->success() ;
            return redirect('/affichage-taches');
        }
    }
}
