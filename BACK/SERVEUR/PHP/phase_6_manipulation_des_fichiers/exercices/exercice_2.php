<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Récupération d'un fichier distant</title>
</head>
<body>
<table class="table table-info table-hover">
        <tr>
            <th>Prénoms</th>
            <th>Noms</th>
            <th>Adresses mails</th>
            <th>Adresses IP</th>
            <th>Ville</th>
            <th>Etats</th>
        
        </tr>
    <?php 
    //extraire le contenue du fichier des utilisateurs
    $donnee=file("customers.csv");
    foreach ($donnee as $lins => $utilisateurs) 
    {
            $utilisateur=explode(",",$utilisateurs);
            echo"<tr>";
        foreach ($utilisateur as $key => $value){
                echo "<td>". $value."</td>";
             }
             echo"</tr>";
            }
        


    ?>
   

   </table>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   
</body>
</html>