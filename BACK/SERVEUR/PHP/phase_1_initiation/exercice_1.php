<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre impaire</title>
</head>
<body>
    <?php
    //Script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant
    echo "Les nombre impairs entre 0 et 150 sont: <br>";
    for ($i=1; $i <150 ; $i+=2) { 
        echo ($i."\t");
    }

    ?>
    
</body>
</html>