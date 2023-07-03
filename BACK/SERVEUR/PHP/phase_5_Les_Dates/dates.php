<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les dates</title>
</head>
<body>
    <?php
    // Afficher le nombre de seconde depuis le 10/01/1970
    echo "Le nombre de seconde écoulé depuis le 10/01/1970 est: ".time()." secondes <br>";

    //Afficher la date hd'aujourd'hui et l'heure
    echo "Nous sommes le ".date("d/m/Y   H:i:s <br>");

    echo"<br>";
    // la fonction strtotime()
    $tsp= strtotime("1987/01/01");
    echo$tsp;
    echo"<br>";
    $tsp1=strtotime("now");
    echo  $tsp1;
    $monAge=($tsp1-$tsp)/(3600*24*360);
    echo "<br> Mon age est: ".$monAge;
    echo "<br> jour: ".date("l d");
    echo"<br>";

    
   if (checkdate(02,29,2021)){
    echo "date valide";
   }else{ echo"date non valide";}
    


    // L'objet DateTime
    $oDate = new DateTime();
    var_dump($oDate);
    echo"<br>";
    $oDate1=new DateTime("13-12-2022");
    print_r($oDate1);

    echo"<br>";

    //Formater une date
    $oDate = new DateTime($macolonne_sql);
    echo $oDate->format("d/m/Y H:h:i");
    
    //Vérifier une date
     echo"<br>";
    $datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
$date = "2015-09-06";

if (preg_match($datePattern, $date))
{
    echo "Date ".$date." valide.<br>";
}
else
{
    echo "Date ".$date." erronée.<br>";
}

$oDate =  DateTime::createFromFormat("d/m/Y H:i:s", "17/11/1966 03:42:11");

$errors = DateTime::getLastErrors();

if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "ARGHHHH !";
}
else{
    echo" La date est valide";
}
echo"<br>";
   echo$oDate; 


    


    ?>
</body>
</html>