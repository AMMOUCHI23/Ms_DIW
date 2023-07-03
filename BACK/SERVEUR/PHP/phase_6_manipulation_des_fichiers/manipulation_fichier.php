<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulation des fichiers</title>
</head>
<body>
    <?php
    // crer un fichier et ecrire dessus
    
    $fp = fopen("essaie.txt", "r"); 

// Boucle jusqu'à la fin du fichier
while (!feof($fp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    $ligne = fgets($fp, 4096); 
    echo $ligne."<br>"; 
} 
    // la fonction copy() pour copier un fichier dans un autre
    $file="essaie.txt";
    $newfile="toto.txt";
    if(!copy($file,$newfile)){
        echo "la copie de ".$file." à echouer!!";

    }else{ echo "le fichier été recopié avec succé";}

    echo "<br>";

    // La fonction file() permet de lire un fichier et de le stocker dans un tableau
    $lines=file("toto.txt");
    foreach ($lines as $line => $value) {
        echo $value."<br>";
    }

    ?>

    
</body>
</html>