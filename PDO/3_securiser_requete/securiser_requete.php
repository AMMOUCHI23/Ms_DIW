<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bdd </title>
</head>
<body>
    <?php
  
     
    $DB_DSN= "mysql:host=localhost;dbname=test";
    $DB_USER= "root";
    $DB_PASS= "Maformation";
    // mode de gestion des erreurs (seront gérées comme des exceptions)
    $option= [PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION];

    try
    {
     // query(): permet de renvoyer les données repondant à une ou plusieurs conditions
      $pdo = new PDO ($DB_DSN,$DB_USER,$DB_PASS,$option);
      echo "connexion à la base de données réussie";
    }
     catch (PDOException $e)
     {
      echo "Erreur :".$e->getMessage();
     }
    ?>
</body>
</html>