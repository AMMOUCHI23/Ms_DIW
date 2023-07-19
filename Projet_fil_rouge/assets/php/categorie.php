<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restaurant au cœur d'Amiens, commander en ligne parmi une large sélection de plats, manger sur place ou à emporter. Des Menus variés pour le plaisir des petis et de grands dans votre réstaurant The District">
    <title>Catégories des plats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style1.css">
</head>

<body>
  <?php
  require_once("header.php");
  ?>
    
    <div class="container text-center">
        <div class="row justify-content-center ">
            <div class="col-justify-content  col-sm-6 col-md-4 my-5 survol">
           <a href="plats_categorie_entree.php"> <img id="cat1" class="img-fluid rounded " src="../media/img/category/Entrées/brochettes_de_saumon.jpg"
                 width="300" height="200" alt="image catégorie des entrées" title="image catégorie des entrées"></a>
                 <p class="categorie1 ">Nos Entrées</p>
            </div>
            <div class="col-12  col-sm-6  col-md-4 my-5 survol">
                <a href="plats_catégorie_plats_principaux.php"><img class="img-fluid rounded " 
                    src="../media/img/category/Plats_principaux/jardinniere-quinoa.jpg" width="300" height="200"
                    alt="image catégorie des plats principaux" title="image catégorie des plats principaux"></a>
                    <p class="categorie1  ">Nos Plats Principaux</p>
                </div>
            <div class="col-12 col-sm-6  col-md-4 my-5 survol">
                <a href="plats_categorie_sandwich.php"><img class="img-fluid rounded " src="../media/img/category/Sandwichs/sandwich-vietnamien.jpg"
                    width="300" height="200" alt="image catégorie des sandwichs"
                    title="image catégorie des sandwichs"></a>
                    <p class="categorie1 ">Nos Sandwichs</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 my-4 survol">
                <a href="plats_categorie_soupes.php"><img class="img-fluid rounded " 
                    src="..//media/img/category/Soupes_potages/potage-de-carottes.jpg" width="300" height="200"
                    alt="image catégorie des soupes" title="image catégorie des soupes"></a>
                    <p class="categorie1 ">Nos Soupes</p>
            </div>
            <div class="col-12 col-sm-6  col-md-4 my-4  survol">
                <a href="plats_categorie_desserts.php"><img class="img-fluid rounded " src="../media/img/category/Desserts/creme_glacee.jpg"
                    width="300" height="200" alt="image catégorie des desserts"
                    title="image catégorie des desserts"></a>
                    <p class="categorie1 ">Nos Desserts</p>
            </div>
            <div class="col-12 col-sm-6  col-md-4 my-4  survol">
                <a href="plats_categorie_boissons.php"><img class="img-fluid rounded " 
                    src="../media/img/category/Boissons_coocktails/cafe-flambé.jpg" width="300" height="200"
                    alt="image catégorie boissons" title="image catégorie des boissons"></a>
                    <p class="categorie1 ">Nos Boissons</p>
            </div>

        </div>

    </div>
    <div class="container d-none  d-md-block ">
        <div class="row text-center my-5 ">
            <div class="col-6">
                <a href="../../index.php"><button type="button" class="btn btn-primary btn-lg">Précédent</button></a>
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