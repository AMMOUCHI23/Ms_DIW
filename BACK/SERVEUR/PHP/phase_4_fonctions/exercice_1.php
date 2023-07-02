<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générer un lien</title>
</head>
<body>
    <?php
    // La fonction qui génére un lien
    function lien($adresse,$titre){
       echo htmlentities( "<a href=".$adresse.">".$titre."</a>");
    }
    lien("https://www.reddit.com/", "Reddit Hug");
    ?>
    
    
</body>
</html>