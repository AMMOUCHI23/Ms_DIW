<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Exercice 1</title>
</head>

<body>
    <?php
    $annee = array(
        "janvier" => 31,
        "février" => 28,
        "mars" => 31,
        "avril" => 30,
        "mail" => 31,
        "juin" => 30,
        "juillet" => 31,
        "aout" => 31,
        "septembre" => 30,
        "octobre" => 31,
        "novembre" => 30,
        "decembre" => 31
    );

    ?>
    <h3 class="mx-5 my-3"><small>Tableau de nombre de jour par mois</small></h3>
    <div class="contenaire mx-5 my-3">
        <table class="table-bordered text-center ">
            <tr>
                <th>Mois</th>
                <th>Nombre de jour</th>
            </tr>

            <?php
            foreach ($annee as $mois => $value) {
                echo '<tr>';
                echo '<td>' . $mois . '</td>';
                echo '<td>' . $value . '</td>';
                echo '</tr>';
            }
            ?>


        </table>
    </div>
    <?php
    //Tri du tableau par ordre décroissant
    arsort($annee);


    ?>
    <br>
    <br>
    <h3 class="mx-5 my-3"><small>Afficher le tableau par ordre décroissant</small></h3>
    <div class="contenaire mx-5 my-3">
        <table class="table-bordered text-center ">
            <tr>
                <th>Mois</th>
                <th>Nombre de jour</th>
            </tr>

            <?php
            foreach ($annee as $mois => $value) {
                echo '<tr>';
                echo '<td>' . $mois . '</td>';
                echo '<td>' . $value . '</td>';
                echo '</tr>';
            }
            ?>


        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>