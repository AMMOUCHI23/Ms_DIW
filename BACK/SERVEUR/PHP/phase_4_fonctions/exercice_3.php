<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validité d'un mot de passe</title>
</head>

<body>
    <?php
    function complex_password($str)
    {
       if (preg_match("/^(?=.* ?[A-Z])(?=.* ?[a-z])(?=.* ?[0-9]).{8,15}$/", $str)){
       echo "Le mot de passe est valide";
       }
       else{
        echo "Le mot de passe est invalide";
       }
    }
    complex_password("TopSecret42");
    ?>

</body>

</html>