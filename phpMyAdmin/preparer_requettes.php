<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>base de données</title>
</head>
<body>

    <?php
    //preparer ses requettes veut dire préformater ses requettes dans l'objectif
    // de minimiser le risque d'injection de sql et le risque de faille
    // et l'exécution rapide de nos requettes avec plus d'efficacité
    // La préparation de la requette passe par trois phases 
    // la préparation, la compélation puis l'éxécution
    $serveur= "localhost";
    $login="root";
    $pass="Maformation";

    
    try{
    $connexion = new PDO("mysql:host=$serveur;dbname=test", $login, $pass);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete=$connexion-> prepare(
        //créer des marqueurs
        "INSERT INTO utilisateur(nom, prenom, email)
        VALUES(:nom, :prenom, :email)"
    );
    //lier les marqueurs à des variable
    $requete-> bindParam(':nom',$nom);
    $requete-> bindParam(':prenom',$prenom);
    $requete-> bindParam(':email',$email);
    // inserer des entrées
    $nom="BONJOUR";
    $prenom="Robert";
    $email="bonjour.robert@lyahoo.fr";
    //éxicuter les entrées
    $requete-> execute();
    echo "requete éxicutée";

  
  }
  
    catch (PDOException $e ) {
      echo"Echec!  ".$e->getMessage();
    }
    ?>
</body>
</html>