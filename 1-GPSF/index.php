<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Enquête De Satisfaction</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel "stylesheet" type "text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="css/global.css" type="text/css" rel="stylesheet"></link>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCrhbBxu5M4IC3udeiIf76j9NzkiVPPuuw"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
</head>

<body>
    <script type="text/javascript" src="autocomplete.js"></script>
    <div class="container-fluid bg">
        <div class="row">
            <div class="cold-md-4 col-sm-4 col-xs-12"></div>
            <div class="cold-md-4 col-sm-4 col-xs-12">
                <!-- Form start -->
                <form action="donnees.php" method="POST" class="form-container">         
                    <div class="form-group">
                        <img src="logo.png" class="logo">
                        <h4>Enquête Journal Grand Paris Sud</h4>
                        <p><i>Vos données ne sont utilisées qu'à des fins d'études et jamais à des fins commerciales.</i></p>
                        <h4><input type="radio" name="civilite" value="Madame" checked />Madame
                        <input type="radio" name="civilite" value="Monsieur" />Monsieur<br></h4>
                        <input class="form-control"  name="nom"    placeholder="Nom" required><br>
                        <input class="form-control" name="prenom"   placeholder="Prénom" required><br>
                        <input type="" style="black" class="form-control" id="user_input_autocomplete_address" placeholder="Adresse" required><br>
                        <input class="form-control" id="street_number" name="numero"><br>
                        <input class="form-control" id="route"  name="rue"><br>
                        <input class="form-control" id="locality" name="ville"><br>
                        <input type="email" class="form-control" id="emailAddress"  aria-describedby="emailHelp" name="email" placeholder="sophie@example.com" required><br>
                        
                        <label><h4>Vous recevez le Journal:</h4></label>
                                <div class="required addon">
                                <select name= "frequence" id="question" class="form-control" required>
                                <option  value="régulièrement">Régulièrement</option>
                                <option  value="parfois">Parfois</option>
                                <option  value="jamais">Jamais</option></select><br>
                                </div>
                                
                        <label><h4>Vous habitez:</h4></label>
                                <div class="required addon">
                                <select name= "habitation" id="question" class="form-control" required>
                                <option  value="appartement">Un appartement</option>
                                <option  value="maison">Une maison</option> </select><br>    
                                </div>
                        <button class="btn btn-sucess btn-block" type="submit" onclick="onPlaceChanged()">Soumettre</button>
                    </div>
                </form>
        </div>
    </div>
</body>
</html>