<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciceController extends Controller
{
    public function accueil(){
        return view('accueil');
    }
 
    public function about(){
        return view('about');
    }
 
    public function produits(){
        return view('produits');
    }
 
    public function boutique(){
        return view('boutique');
    }
    public function contactForm(Request $request){
        return view('accueil', ['data' => $request]);
    }
}

?>