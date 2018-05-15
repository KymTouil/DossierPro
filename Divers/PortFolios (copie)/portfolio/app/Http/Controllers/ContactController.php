<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index()

//
{
    return view('layouts.bienvenue', ['name' => 'Touil Hakima','bienvenue' => 'Bienvenue','sujet' => 'A mon sujet','projets' => 'Projets']);
}


public function create()

{
//
}
 

//   public function store(Request $request)
//     {
//         $name = $request->input('Touil Hakima');
//         return view('portfolio');
        
//     }

 
}