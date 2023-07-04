<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passer des variables par l'URL (Method GET)</title>
</head>
<body>
<form action="<?php print $_SERVER["PHP_SELF"] ?>"method="post">
  <input type="text" name="zoneDeTexte" size="40" maxlength="40">
  <input type="submit" name="btnEnvoyer" value="envoyer">
</form>

<?php

echo $_POST["zoneDeTexte"];
?>
    
</body>
</html>