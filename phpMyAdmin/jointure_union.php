<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jointures</title>
</head>
<body>
    <?php
    /* 
       Il esxiste 4 types de jointures 
       une interne
       - INNER JOIN : retourne des résultats sauf s'il y a une correspondance entre les deux tables.
       et tois dites externes: retournent des résultats meme si il n y a pas de correspondance entre les deux tables
       -FULL OUTER JOIN
       -LEFT JOIN
       -RIGHT JOIN

    */
    
    $serveur="localhost";
    $login="root";
    $pass="Maformation";

    try{
        $connexion = new PDO ("mysql:host=$serveur;dbname=test",$login,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // jointure interne
    $jointure_int="
    SELECT inscrits.prenom, commentaires.commentaire 
    FROM inscrits 
    INNER JOIN commentaires 
    ON inscrits.id=commentaires.id_inscrit";

    $requete=$connexion->prepare($jointure_int);
    $requete-> execute();
    $resultat=$requete->fetchAll();
    echo "<pre>";
    print_r($resultat);
    echo "<pre>";

    }
    catch (PDOException $e){
     echo "Echec : ".$e->getMessage();
    }
    
    ?>
</body>
</html>