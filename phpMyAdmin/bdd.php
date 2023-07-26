<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>base de données</title>
</head>
<body>

    <?php
    $serveur= "localhost";
    $login="root";
    $pass="Maformation";

    $nom="bim','bam','boum'),('pif', 'paf', 'pouf'),('a";
    $prenom="eeee";
    $email="jythreg";
    try{
    $connexion = new PDO("mysql:host=$serveur;dbname=test", $login, $pass);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $insertion = "INSERT INTO utilisateur(nom,prenom,email)
               VALUES ('$nom','$prenom', '$email')";
  //exec($insertion) exécute la commande insertion
  $connexion -> exec ($insertion);
   echo"valeurs bien insérées";
  
  }
  
    catch (PDOException $e ) {
      echo"Echec!  ".$e->getMessage();
    }
    ?>
</body>
</html>