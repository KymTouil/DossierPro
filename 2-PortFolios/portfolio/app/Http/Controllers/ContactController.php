<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\competences;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //

    public function index()

//
{
    $parcours = DB::table('competences')->get();
    $techniques = DB::table('competences')->get();
    $qualites = DB::table('competences')->get();
    return view('layouts.bienvenue', ['name' => 'Touil Hakima','name1' => 'Bienvenue','name2' => 'A mon sujet','name3' => 'Mes Réalisations', 'parcours'=>$parcours,'techniques'=>$techniques, 'qualites'=>$qualites]);
   
}


public function create()

{
//
}
 

 public function store()
    {
        
    }
    }    
       