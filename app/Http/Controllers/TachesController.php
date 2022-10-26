<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache ;

class TachesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creation_tache()
    {
        return view('creation_tache') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sauver_tache(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'delai'=> 'required'
        ]);

        $tache = new Tache ;
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
