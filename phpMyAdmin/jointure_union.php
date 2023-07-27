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
       -FULL OUTER JOIN : elle n'est pas supportée par mysql on utilise union à la place
       -LEFT JOIN : elle permet de récupérer tout le contenu de la table de gauche, et seulement 
       les éléments de la table de droite qui ont une correspondance avec la table de gauche
       -RIGHT JOIN : elle fait le contraire de la jointure LEFT JOINT
       -UNION : opérateur est utilisé pour combiner le jeu de résultats de deux SELECT ou plus.
                 Chaque SELECT instruction à l'intérieur UNION doit avoir le même nombre de colonnes
                 Les colonnes doivent également avoir des types de données similaires
                 Les colonnes de chaque SELECTinstruction doivent également être dans le même ordre
                 Il envois que la premiere récurence de meme valeur (s'il ya plusieurs nom identique -> il renvois juste le premier nom)
        -UNION ALL : il renvoit toutes le récurence de meme valeure       
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

    /*  exemple avec UNION
        SELECT prenom FROM inscrit
        UNION ALLL
        SELECT commentaire FROM commentaire
    */

    }
    catch (PDOException $e){
     echo "Echec : ".$e->getMessage();
    }
    
    ?>
</body>
</html>