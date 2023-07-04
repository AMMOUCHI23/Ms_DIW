<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données de formulaire sous forme d'un tableau</title>
</head>
<body>
    <?php
    echo "Tu surfes sur le web en semaine plutôt le : "; 

    // Lecture du tableau 
    foreach (($_REQUEST["jours"]) as $jour)      
    { 
        echo " $jour - "; 
    } 
    ?>
    
</body>
</html>