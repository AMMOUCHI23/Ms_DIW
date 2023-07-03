<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération d'un fichier distant</title>
</head>
<body>
<table>
        <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Adresse mail</th>
            <th>Adresse IP</th>
            <th>City</th>
            <th>Etat</th>
        
        </tr>
    <?php 
    //extraire le continue de fichier des utilisateurs
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
</body>
</html>