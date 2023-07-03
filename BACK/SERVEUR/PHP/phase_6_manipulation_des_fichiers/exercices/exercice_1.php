<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liens hypertextes</title>
</head>
<body>
    <h3>liste de sites indispensables à la compréhension du monde moderne.</h3>
    <?php
    // Extraire le contenu du fichier et le stocker sous forme d'un tableau
    $liens=file("lien.txt");

    //Afficher les liens hypertextes
    foreach ($liens as $lines => $line) {
       echo '<ul>';
        
        echo'<li> <a href='.$line.'>'.$line.'</a></li>';
        echo'</ul>';
    }
    ?>

    
</body>
</html>