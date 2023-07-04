<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //La fonction PHP password_hash()
    //permet d’utiliser des algorithmes de cryptage en PHP et 
    //donc de générer le hash d’une chaîne de caractères

     $password_hash = password_hash("valise", PASSWORD_DEFAULT);
    echo $password_hash; 

    echo"<br>";
    echo (strlen($password_hash)); 
    //La fonction PHP password_verify()
    //Pour vérifier si un mot de passe saisi est bien celui enregistré en base
    password_verify($chaine_saisie_en_clair, $hash_stocke_en_bdd);
    ?>
</body>
</html>