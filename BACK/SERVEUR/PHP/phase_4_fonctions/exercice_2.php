<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somme des valeurs du tableau</title>
</head>
<body>
<?php
    // La fonction qui calcul la somme des élément du tableau
    function somme($tab){
        $resultat=0;
       foreach ($tab as  $value) {
        $resultat+=$value;
       }
       echo "La somme des élements du tableau est: ". $resultat;
    }
    somme( array(4, 3, 8, 2));
    ?>
    
</body>
</html>