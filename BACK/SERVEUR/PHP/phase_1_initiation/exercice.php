<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>
</head>
<body>
<?php
// Exercice sur les variable de systeme 
echo "L'addresse IP de serveur est: ".$_SERVER["SERVER_ADDR"]; // permet d'afficher l'addresse IP de serveur
echo "<br>";
echo "L'addresse IP de client est: ". $_SERVER["REMOTE_ADDR"]; // permet d'afficher l'addresse IP de client
?>

</body>
</html>