<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Exercice 3</title>
</head>

<body>
    <?php
    $departements = array(
        "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
        "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
        "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
        "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    );
    ?>
    <div class="contenaire mx-3 my-5">
        <div class="raw">
            <div class="col-md-6">
                <h2>1. Liste des régions et leurs département</h2>
                <table class=" table table-info   table-hover">
                    <?php
                    ksort($departements);
                    foreach ($departements as $region => $departement) {
                        echo '<tr>';
                        echo "<td><h3>" . $region . "</h3>";
                        foreach ($departement as $ville) {
                            echo $ville.", \t" ;
                        }
                        echo "</td>";
                        echo '</tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div class="contenaire mx-3 my-5">
        <div class="raw">
            <div class="col-md-4 text-center">
                <h2>2. Liste des régions avec nombre de département</h2>
                <table class=" table table-info   table-hover">
                    <tr>
                        <th>Régions</th>
                        <th>Nombre de départements</th>
                    </tr>

                    <?php

                    foreach ($departements as $region => $departement) {
                        echo '<tr>';
                        echo '<td>' . $region . '</td>';
                        echo '<td>' . (count($departement)) . '</td>';
                        echo '</tr>';
                    }
                    ?>


                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>