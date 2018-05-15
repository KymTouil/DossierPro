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

<body>
<!-- @yield('formulaire') -->
  <!-- Navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand color-me">Hakima Touil</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <a href="#Mes Projets" class="btn btn-info" >Bienvenue</a>
          <a  href="#J'aime" class="btn btn-info" >À Mon Sujet</a>
          <a href="#Laravel" class="btn btn-info" >Mes Projets</a>
        </ul>
     </div>
    </div>
  </nav>
  <div id="Mes Projets" class="container-fluid bg-1 text-center">
    <h2 >Bienvenue dans mon Univers</h2>
    <img src={{ asset('images/hakima.jpg') }} class="img-responsive img-circle margin" style="display:inline" width="150" height="200">
    <h3>Formée et Expérimentée, je souhaite relever de nouveaux challenges.<br>
        <br/ >
        Suite à une expertise fonctionnelle en système d'informations de plusieurs années,<br/ >
        <br/ >
        j'ai suivi durant plusieurs mois une formation de "Web" Développeur<br/ ><br/ >
        où j'ai pu acquérir des compétences sur différents langages de programmation.<br/ >
        Je suis aujourd'hui 
  </div>

  <!-- Second Container -->
  <div id="J'aime" class="container-fluid bg-2">
    <h1>A Mon Sujet...</h1><br/ ><br/ >
    <div id="conteneur">
    <div class="element"><h3>Mon Parcours</h3><br/ ><br/ >
    <p>Diplômée en Gestion De Projet, j'ai une expérience de plusieurs<br/ ><br/ > 
       années en tant que Chef De Projet au sein de Gan Assurances La Défense. <br/ ><br/ > 
       Mes compétences technico-fonctionnelles ont été renforcées lors de ma formation "Web Développeur".<br/ ><br/ > 
       Lors de cette période, j'ai pu crée différentes applications<br/ ><br/ > 
       en utilisant la méthode agile notamment sur des postes de Scrum Master.<br/ ><br/ > 
     </p><br/ >
    </div>
    <div class="element"><br/ ><h4>Mes Compétences Techniques</h4><br/ >
    <h5>PHP LARAVEL<br/ ><br/ >
       SYMFONY JAVASCRIPT<br/ > <br/ >
       ANGULARJS NODEJS<br/ ><br/ >
       MONGO API SQL<br/ ><br/ >
       BOOTSTRAP CSS HTML WORDPRESS<br/ ><br/ >
       SIEBEL</ <h5>><br/ ><br/ >
    </div>
    <div class="element"><br/ ><h4>Mes Qualités Professionnelles</h4><br/ >
    <p>Capacité d’adaptation, Gestion du stress,<br/ ><br/ >
      Travail en équipe, Capacité à fédérer,<br/ ><br/ >
      Sens de la communication Autonomie,<br/ ><br/ >
      Capacité de décision, Sens de l’organisation,<br/ ><br/ >
      Rigueur, Force de proposition,<br/ ><br/ > 
      Curiosité, Persévérance, Prise de recul</p><br/ ><br/ >
    </div>        
</div><br/ ><br/ ><br/ ><br/ >
  <!-- Third Container (Grid) -->
  <div id="Laravel" class="container-fluid bg-3 text-center">
    <h2>Mes Projets</h2></br>
    <div class="row">
      <div class="col-sm-4">
        <h4><a href="https://www.hakimatouil.fr/">Mon Curriculum Vitae</a></h4>
        <center><a href="https://www.hakimatouil.fr/"><img src={{ asset('images/cv.png') }} class="img-responsive margin" style="width 75%" alt="Image"></a></center>  
      </div>
      <div class="col-sm-4">
        <h4><a href="https://github.com/KymTouil">GitHub's Projects</a></h4>
      <center><a href="https://github.com/KymTouil"><img src={{ asset('images/git.jpg') }} class="img-responsive margin" style="width 75%" alt="Image"></a></center>
      </div>
      <div class="col-sm-4">
        <h4><a href="https://github.com/KymTouil/Espace-Membre">Espace Membre Laravel</a></h4>
      <center><a href="https://github.com/KymTouil/Espace-Membre"><img src={{ asset('images/membre.png') }} class="img-responsive margin" style="width 75%" alt="Image"></a></center>
      </div>
 <!-- 4 Container (Grid) -->      
  </div>
</body>
</html>