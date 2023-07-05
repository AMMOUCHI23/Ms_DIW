<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Les capitales</title>
</head>

<body>
    <?php
    $capitales = array(
        "Bucarest" => "Roumanie",
        "Bruxelles" => "Belgique",
        "Oslo" => "Norvège",
        "Ottawa" => "Canada",
        "Paris" => "France",
        "Port-au-Prince" => "Haïti",
        "Port-d'Espagne" => "Trinité-et-Tobago",
        "Prague" => "République tchèque",
        "Rabat" => "Maroc",
        "Riga" => "Lettonie",
        "Rome" => "Italie",
        "San José" => "Costa Rica",
        "Santiago" => "Chili",
        "Sofia" => "Bulgarie",
        "Alger" => "Algérie",
        "Amsterdam" => "Pays-Bas",
        "Andorre-la-Vieille" => "Andorre",
        "Asuncion" => "Paraguay",
        "Athènes" => "Grèce",
        "Bagdad" => "Irak",
        "Bamako" => "Mali",
        "Berlin" => "Allemagne",
        "Bogota" => "Colombie",
        "Brasilia" => "Brésil",
        "Bratislava" => "Slovaquie",
        "Varsovie" => "Pologne",
        "Budapest" => "Hongrie",
        "Le Caire" => "Egypte",
        "Canberra" => "Australie",
        "Caracas" => "Venezuela",
        "Jakarta" => "Indonésie",
        "Kiev" => "Ukraine",
        "Kigali" => "Rwanda",
        "Kingston" => "Jamaïque",
        "Lima" => "Pérou",
        "Londres" => "Royaume-Uni",
        "Madrid" => "Espagne",
        "Malé" => "Maldives",
        "Mexico" => "Mexique",
        "Minsk" => "Biélorussie",
        "Moscou" => "Russie",
        "Nairobi" => "Kenya",
        "New Delhi" => "Inde",
        "Stockholm" => "Suède",
        "Téhéran" => "Iran",
        "Tokyo" => "Japon",
        "Tunis" => "Tunisie",
        "Copenhague" => "Danemark",
        "Dakar" => "Sénégal",
        "Damas" => "Syrie",
        "Dublin" => "Irlande",
        "Erevan" => "Arménie",
        "La Havane" => "Cuba",
        "Helsinki" => "Finlande",
        "Islamabad" => "Pakistan",
        "Vienne" => "Autriche",
        "Vilnius" => "Lituanie",
        "Zagreb" => "Croatie"
    );

    ?>



    <div class="contenaire mx-3 my-5">
        <div class="raw ">
            <div class="col-md-3">
                <h3 class=" my-3"><small>1.Liste des capitales (par ordre alphabétique) suivie du nom du pays</small></h3>
                <table class=" table table-info table-striped  table-hover   text-center ">
                    <tr>
                        <th>Capitale</th>
                        <th>Pays</th>
                    </tr>

                    <?php
                    ksort($capitales);
                    foreach ($capitales as $capitale => $pays) {
                        echo '<tr>';
                        echo '<td>' . $capitale . '</td>';
                        echo '<td>' . $pays . '</td>';
                        echo '</tr>';
                    }
                    ?>


                </table>
            </div>
            <div class="col-md-3">
                <h3 class=" mt-5"><small>2.Liste des pays (par ordre alphabétique) suivie du nom de la capitale</small></h3>
                <table class="table table-warning   table-hover text-center ">
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                    </tr>

                    <?php
                  $capitales= array_flip ($capitales);
                  ksort($capitales);
                   

                    foreach ($capitales as $capitale =>$pays ) {
                        echo '<tr>';
                        echo '<td>' .$capitale.'</td>';
                        echo '<td>' .$pays. '</td>';
                        echo '</tr>';
                    }
                    ?>


                </table>
            </div>
        </div>
        <h3 class="mt-4"><small>3.Affichez le nombre de pays dans le tableau</small></h3>
        <?php
        echo "Le nombre de pays dans le tableau est " . count($capitales);
        ?>
       
    
       <div class="col-md-3">
                <h3 class=" my-3"><small>4.Supprimer du tableau toutes les capitales commençant par la lettre 'B' et afficher le tableau</small></h3>
                <table class=" table table-info table-striped  table-hover   text-center ">
                    <tr>
                        <th>Capitale</th>
                        <th>Pays</th>
                    </tr>

                    <?php
     $capitales= array_flip ($capitales);
     ksort($capitales);
    array_splice($capitales, 5, 9);
    foreach ($capitales as $key => $value) {
        echo '<tr>';
        echo '<td>' . $key . '</td>';
        echo '<td>' . $value . '</td>';
        echo '</tr>';
    }
    ?>


                </table>
            </div>
    
    </div>

    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>