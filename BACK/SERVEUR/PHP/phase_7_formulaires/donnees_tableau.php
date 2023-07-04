<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transmettre des champs de formulaire sous la forme d'un tableau</title>
</head>
<body>
<form action ="check.php" method="post"> 
    Tu utilises internet plutôt le :<br /> 
    <input type="checkbox" name="jours[]" value="Lundi" />Lundi<br />
    <input type="checkbox" name="jours[]" value="Mardi" />Mardi<br />
    <input type="checkbox" name="jours[]" value="Mercredi" />Mercredi<br />
    <input type="checkbox" name="jours[]" value="Jeudi" />Jeudi<br />
    <input type="checkbox" name="jours[]" value="Vendredi" />Vendredi<br />
    <input type="submit" name="Envoyer" value="ENVOYER" /> 
</form> 

<h2>L'UTILISATION DES CHAMPS CACHES</h2>
<p>L'utilisation du type "hidden" permet de passer des variables discrètement, 
    sans qu'elles soient affichées à l'écran, mais elles sont visibles dans le code.</p>
<form action="page.php" method="post">
    Votre e-mail : <input type="text" name="email" />
    <input type="hidden" name="secret" value="texte à passer discrètement" />
    <input type="submit" value="OK" />
</form> 
    
</body>
</html>