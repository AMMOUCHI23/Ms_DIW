<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditios et boucles</title>
</head>
<body>
    <?php
    //*******************************Les conditions*********************
    $age=18;
     if ($age>=18)
    {
       $reponse="majeur" ;
       echo "Vous etes: ".$reponse;
    }
    else
    {
       $reponse=" mineur " ;
       echo "Vous etes: ".$reponse;
    }

    //Opérateur ternaire
    echo "<br>";
    $message=($age>=18)? ("Vous etes majeur"):("Vous etes mineur");
    echo $message;
    echo "<br>";
    //Instruction switch
    $a = 5; 

switch ($a) { 
  case 0 : 
    echo"a = 0"; 
  break; 

  case 1 : 
    echo "a = 1"; 
  break; 

  case 2 : 
     echo "a = 2"; 
  break; 
  default : 
    echo "a n'est pas égale à 0,1 ou 2"; 
} 

 //*******************************Les boucles*********************

 //1-Boucle for
 echo "<br>";
 for ($a = 1; $a < 10; $a++) { 
    echo $a."\t"; 
} 

//1-Instruction foreach
echo "<br>";

$tab=[0,1,2,3,4,5,6,7,8,9];
foreach ($tab as $element => $value) {
    echo$value."\t";
}
    


    ?>
    
    
</body>
</html>