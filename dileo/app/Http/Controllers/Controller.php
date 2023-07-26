<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function accueil() 
    {
        return view('accueil');
    }

    public function store(Request $request) 
    {
        $liste = new Liste;
        $liste->nom = $request->nom;
        $liste->prenom = $request->prenom;
        $liste->pays = $request->pays;
        $liste->ville = $request->ville;
        $liste->residence = $request->residence;
        $liste->contact = $request->contact;
        $liste->save();
        return redirect()->route('accueil')->with('success','Enregistrement effectué avec succès');
    }







    
}
