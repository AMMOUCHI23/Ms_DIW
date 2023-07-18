<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restaurant au cœur d'Amiens, commander en ligne parmi une large sélection de plats, manger sur place ou à emporter. Des Menus variés pour le plaisir des petis et de grands dans votre réstaurant The District">
    <title>Réstaurant The District</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style1.css">
</head>

<body>
<?php
  require_once("header.php");
  ?>
    
    <div class="container text-center ">
        <div class="row justify-content-center ">
            <div class="col-justify-content  col-sm-6 col-md-4 my-4">
                <img id="plat1" class="img-fluid rounded "
                    src="../media/img/category/Plats_principaux/boulettes_farcies.jpg" width="300" height="200"
                    alt="image catégorie des entrées" title="image catégorie des entrées">
                    <p class="categorie1 ">Boulettes farcies</p>
            </div>
            <div class="col-12  col-sm-6  col-md-4 my-4">
                <img class="img-fluid rounded " id="plats2"
                    src="../media/img/category/Plats_principaux/courgettes-farcies-au-riz-sauvage.jpg" width="300"
                    height="200" alt="image catégorie des plats principaux"
                    title="image catégorie des plats principaux">
                    <p class="categorie1 ">Courgettes farcies</p>
            </div>
            <div class="col-12 col-sm-6  col-md-4 my-4">
                <img class="img-fluid rounded " id="plat3"
                    src="../media/img/category/Plats_principaux/jardinniere-quinoa.jpg" width="300" height="200"
                    alt="image catégorie des sandwichs" title="image catégorie des sandwichs">
                    <p class="categorie1 ">Jardinniere quinoa</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 my-4">
                <img class="img-fluid rounded " id="plat4" src="../media/img/category/Plats_principaux/pate-chinois.jpg"
                    width="300" height="200" alt="image catégorie des soupes" title="image catégorie des soupes">
                    <p class="categorie1 ">Pàte chinois</p>
            </div>
            <div class="col-12 col-sm-6  col-md-4 my-4">
                <img class="img-fluid rounded " id="plat5" src="../media/img/category/Plats_principaux/poulet_en_sauce.jpg"
                    width="300" height="200" alt="image catégorie des desserts"
                    title="image catégorie des desserts">
                    <p class="categorie1 ">Poulet en sauce</p>
            </div>
            <div class="col-12 col-sm-6  col-md-4 my-4">
                <img class="img-fluid rounded " id="plat6"
                    src="../media/img/category/Plats_principaux/saumon-wellington.jpg" width="300" height="200"
                    alt="image catégorie boissons" title="image catégorie des boissons">
                    <p class="categorie1 ">Saumon wellington</p>
            </div>

        </div>


    </div>
    <div class="container d-none d-md-block ">
        <div class="row text-center my-5 ">
            <div class="col-6">
                <button type="button" class="btn btn-primary btn-lg">Précédent</button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary btn-lg">Suivant</button>
            </div>

        </div>

    </div>
    <?php
  require_once("footer.php");
  ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>