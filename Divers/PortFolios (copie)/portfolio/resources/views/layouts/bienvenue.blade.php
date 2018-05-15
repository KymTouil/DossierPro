@extends('portfolio')
@section('bienvenue')
  <div id="Mes Projets" class="container-fluid bg-1 text-center">
  
    <h2 >Bienvenue dans mon Univers</h2>
    <img src={{ asset('images/hakima.jpg') }} class="img-responsive img-circle margin" style="display:inline" width="150" height="200">
    <h3>Formée et Expérimentée, je souhaite relever de nouveaux challenges.<br>
        <br/ >
        Suite à une expertise fonctionnelle en système d'informations de plusieurs années,<br/ >
        <br/ >
        j'ai suivi durant plusieurs mois une formation de "Web" Développeur<br/ ><br/ >
        où j'ai pu acquérir des compétences sur différents langages de programmation.<br/ ><br/ >
        Je suis aujourd'hui Chef De Projet technico-fontionnelle orientée "AGILE".
  </div>

@include('layouts.sujet')
@include('layouts.projets')
@endsection

  
  
