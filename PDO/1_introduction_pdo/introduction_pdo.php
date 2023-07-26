<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction PDO </title>
</head>
<body>
    <?php
    // afficher toutes les erreures
    ini_set("display_errors",1);
    /* 
    La PDO (PHP Data Object) est une interface qui permet de travailler et de manipuler une base de données 
    quelque soit le systeme de gestion de base de données qu'on utilise
    */
     
    $DB_DSN= "mysql:host=localhost;dbname=test";
    $DB_USER= "root";
    $DB_PASS= "Maformation";

    try
    {
      $pdo = new PDO ($DB_DSN,$DB_USER,$DB_PASS);
      echo "connexion établie";
    }
     catch (PDOException $e)
     {
      echo "Erreur :".$e->getMessage();
     }
    ?>
</body>
</html>