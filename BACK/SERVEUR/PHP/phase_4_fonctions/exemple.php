<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions</title>
</head>
<body>
    <?php
    //ucfirst(). Cette fonction permettra de passer le premier caractère de la chaîne en majuscule
    $texte = ucfirst("bonjour le monde<br> ");
    echo $texte;

    // crée une fonction
    function bonjour($prenom){
        echo "Bonjour ".$prenom;
    }

    bonjour("Salim");
    // variables global et static
    $a=3; $b=4;
    function somme(){
        global $a,$b;
        $c = $a + $b;
        echo"Le resultat de la somme est: " .$c;
    }
    somme();
    //static sert dans le corps de la fonction à conserver la valeur d'une variable
    function test(){
        static $a=0;
        echo"la nouvelle valeur de a est: ". $a."<br>";
        $a++;
    }
    test();
    test();
    test();
    test();

    //Quelques fonctions utiles
    //strtr(): Recherche le premier caractère "" dans la chaîne et affiche le reste de la chaîne y compris le 'p'
    $str=strstr("la voiture de mon ami",'m');
    echo$str;
    echo "<br>";
    $p="la voiture de mon ami";
    echo strtoupper($p);
    
    ?>
    
</body>
</html>