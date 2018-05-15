<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Mon PortFolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


  <div id="J'aime" class="container-fluid bg-2">
    <h1>A Mon Sujet :</h1><br/ ><br/ >
    <div id="conteneur">
    <div class="element"><h3>Mon Parcours</h3><br/ >
    @foreach($parcours as $parcour)
        {!!$parcour->parcours!!}
    @endforeach 
    </div>
    <div class="element"><br/ ><h3>Mes Compétences Techniques</h3><br/ >
    @foreach($techniques as $technique)
        {!!$technique->techniques!!}
    @endforeach 
    </div>
    <div class="element"><br/ ><h3>Mes Qualités Professionnelles</h3><br/ >
    @foreach($qualites as $qualite)
        {!!$qualite->qualites!!}
    @endforeach
    </div>      
    </div><br/ ><br/ ><br/ ><br/ >


