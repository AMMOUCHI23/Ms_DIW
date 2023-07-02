<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  echo "Bonjour Abdallah \" \t \t \t";
  $bonjour = "Bonjour le monde";
  echo "<b>$bonjour</b>";


  ?>
  <?php
  echo "<br>";
  $euro = 6.55957;
  printf($euro);
  echo "<br>";
  printf("%.4f <br />", $euro);
  echo "<br>";

  echo "la valeur de euro est" . $euro;
  $money1 = 68.75;
  $money2 = 54.35;
  $money = $money1 + $money2;
  // echo $money affichera "123.1";
  echo "affichage sans printf : " . $money . "<br />";
  $monformat = sprintf("%01.2f", $money);

  // echo $monformat affichera "123.10"
  echo "affichage avec printf : " . $monformat . "<br />";

  $year = "2002";
  $month = "4";
  $day = "5";
  $varDate = sprintf("%04d-%02d-%02d", $year, $month, $day);

  // echo $varDate affichera "2002-04-05"
  echo "affichage avec sprintf : " . $varDate;
  echo "<br>";
  $couleur[] = "red";
  $couleur[] = "blue";
  $couleur[] = "white";
  $couleur[] = "black";

  // pour afficher la valeur "white", on écrira :
  echo $couleur[2]
  ?>
  <?php
  //Forcer le type d'une variable
  $a = 15.125863;
  settype($a, "int");
  echo "la valeur de a est: " . $a;
  ?>

  <?php
  //Les constantes
  //on utilise pas le signe $ pour le nom de la constante
  define("PI", 3.14);
  echo "La valeur de la constante PI est: " . PI;
  echo "<br>";
  echo "<br>";

  // __FILE__ : indique dans quel fichier on se trouve (peut être utilisé hors des classes, dans n'importe quel fichier PHP).
  // Dans la même veine, __LINE__ donne le numéro de ligne.
  echo "Fichier : " . __FILE__ . ", ligne : " . __LINE__;
  echo $_SERVER["SCRIPT_FILENAME"];
  echo "<br>";

  //La fonction var_dump()  permet d'afficher des informations (nom, type, valeur, longueur/nombre d'éléments si tableau) 
  //sur n'importe quelle variable, tous types compris (scalaire, tableau, objet...) 
  $myVar = "bonjour";
  var_dump($myVar);

  /*La fonction error_log()
La fonction error_log() permet d'ajouter volontairement des informations (messages d'erreurs personnalisés)
 au fichier php_error.log contenant les logs natifs de PHP, situé dans C:/wamp/logs :*/
  echo "<br>";
  $myVar = "KO";

  if ($myVar == "OK") {
    echo "C'est bon<br>";
  } else {
    echo"Ouh la la pas bien !<br>"; // Message affiché dans la page web
    $message = "Ouh la la pas bien ".__FILE__." ".__LINE__;        
    error_log($message);  // le message d'erreur enregistré dans php_error.log indique le chemin complet du fichier bonjour.
                          //php et le numéro de ligne du code exécuté.
     
  //Les variables système
    echo $_SERVER["SERVER_NAME"]; // affiche le nom de l'hôte (= serveur), localhost pour Wamp
   echo var_dump($_SERVER); //affiche toutes les variables du tableau $_SERVER
  }
  ?>


</body>

</html>