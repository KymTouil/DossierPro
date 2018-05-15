<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- key=AIzaSyCrhbBxu5M4IC3udeiIf76j9NzkiVPPuuw -->
    <title>Enquête De Satisfaction</title>
    <link rel="shortcut icon" type="image/x-icon" href="logo.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel "stylesheet" type "text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="css/global.css" type="text/css" rel="stylesheet"></link>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
</head>

<body>
    <div class="container-fluid bg">
        <div class="row">
            <div class="cold-md-4 col-sm-4 col-xs-12"></div>
            <div class="cold-md-4 col-sm-4 col-xs-12">
            <!-- Form start -->
            <form action="donnees.php" method="POST" class="form-container">         
            <div class="form-group">
            <img src="logo.png" class="logo">
<h4><center>
<?php
require("config.php");

$sel=$_POST['civilite'];

if(isset($_POST['nom']))      $nom=$_POST['nom'];
else      $nom="";

if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
else      $prenom="";

if(isset($_POST['numero']))      $numero=$_POST['numero'];
else      $numero="";

if(isset($_POST['rue']))      $rue=$_POST['rue'];
else      $rue="";

if(isset($_POST['ville']))      $ville=$_POST['ville'];
else      $ville="";

if(isset($_POST['email']))      $email=$_POST['email'];
else      $email="";

$frequence=$_POST['frequence'];

$habitation=$_POST['habitation'];

// prepare and bind
//Note Khalid : mettre NULL au lieu de "sss" ou alors rien comme suit (bind_param(,$sel,$nom,etc...)

$stmt = $conn->prepare("INSERT INTO habitants (civilite, nom, prenom, numero, rue, ville, email, frequence, habitation) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss",$sel, $nom, $prenom, $numero, $rue, $ville, $email, $frequence, $habitation);

$stmt->execute();

echo "Merci $sel $nom $prenom pour vos réponses!";

$stmt->close();
$conn->close();
?>

</div>
</form
</h4></center>          
</div>
</div>
</body>
</html>