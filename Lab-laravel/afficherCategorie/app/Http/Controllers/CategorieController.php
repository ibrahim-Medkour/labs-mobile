<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

class CategorieController extends Controller
{
    public function index()
    {
        // TODO: Vérifier si l'email est valide
        $categories = Categorie::all();
        // FIXME: Vérifier si l'email est valide
        // BUG: Vérifier si l'email est valide
        return view('categories', compact('categories'));
        

    }
}