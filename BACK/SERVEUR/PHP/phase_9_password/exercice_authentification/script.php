<?php
//démarré la session
session_start();

//tester la variable de la session auth
if($_SESSION["auth"]!="ok"){
    // se dériger vers la page login.php
    header("Location:login.php");
    
    
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire d'authentification</title>
</head>
<body>
<h1  style="color:blue;"class="mx-3 mt-5">Nouvelle page</h1>
    <p>Félécitation vous étes authentifié avec succès</p>
    
</body>
</html>