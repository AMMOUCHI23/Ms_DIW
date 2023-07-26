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
     /*
        // modifier une donnée sur dans une table
        $modif = "UPDATE utilisateur SET id=10 WHERE nom='Bonjour'";
        $requete= $connexion -> prepare($modif);
        $requete-> execute();
        echo "id est modifié avec succé";
     */
     /*
       // supprimer une ligne dans une table
       $suppr= "DELETE FROM utilisateur WHERE id=8";
       $requet=$connexion -> prepare($suppr);
       $requet-> execute();
       echo "la ligne avec l'id=8 est supprimée";
    */ 
  
    //Supprimer une colonne dans une table
    $suppr="ALTER TABLE utilisateur DROP age";
    $requet=$connexion -> prepare($suppr);
    $requet-> execute();
    echo "la colonne age est supprimée";
 /*
    // supprimer la table entiere 
    $suppr="DROP TABLE utilisateur ";
    $requet=$connexion -> prepare($suppr);
    $requet-> execute();
    echo "la table utilisateur  est supprimée";
*/
    }
    catch (PDOException $e){
     echo "Echec : ".$e->getMessage();
    }
    ?>
</body>
</html>