<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Exercice</title>
</head>
<body>
    <?php
    // Créer une fonction pour sécuriser le formulaire pour supprimer les espaces les slaches et les balise html de données récupérées
    function securisation($donnee){
        $donnee=trim($donnee);
        $donnee=stripslashes($donnee);
        $donnee=strip_tags($donnee);
        return $donnee;
    }
    ?>
    <table class="table table-info table-hover">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Demande</th>
        </tr>
        <tr>
            <td><?php echo securisation($_REQUEST["nom"]);?></td>
            <td><?php echo securisation($_REQUEST["prenom"]);?></td>
            <td><?php echo securisation($_REQUEST["email"]);?></td>
            <td><?php echo securisation($_REQUEST["telephone"]);?></td>
            <td><?php echo securisation($_REQUEST["text"]);?></td>
        </tr>
    </table>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>