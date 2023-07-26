<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupérer les données</title>
</head>
<body>
    <?php
    $serveur="localhost";
    $login="root";
    $pass="Maformation";

    try{
        $connexion = new PDO ("mysql:host=$serveur;dbname=test",$login,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*$requete="
     ALTER TABLE utilisateur ADD age INT(100)";
     $connexion->exec($requete);
     echo "Collone age ajoutée";*/
     $requete1=$connexion->prepare(
     "SELECT prenom From utilisateur where age<10"
     );
     $requete1->execute();
     $resultat=$requete1->fetchAll();
     echo "<pre>";
     print_r( $resultat);
     echo "<pre>";
    }
    catch (PDOException $e){
     echo "Echec : ".$e->getMessage();
    }
    ?>
</html>