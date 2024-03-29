<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restaurant au cœur d'Amiens, commander en ligne parmi une large sélection de plats, manger sur place ou à emporter. Des Menus variés pour le plaisir des petis et de grands dans votre réstaurant The District">
    <title>Nos Boissons</title>
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
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <a href="descriptif_cafe_flambe.php"><img src="../media/img/category/Boissons_coocktails/cafe-flambé.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Café flambé</h5>
                    <a href="descriptif_cafe_flambe.php"><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_cafe-flambe">2.50 €</p> 
                    <label id="quantite" class="card-text h5 " >Quantité</label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>

            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <a href="descriptif_cafe_glace.php"><img src="../media/img/category/Boissons_coocktails/cafe-glace.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Café glacé</h5>
                    <a href="descriptif_cafe_glace.php"><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_cafe_glace">2.80 €</p> 
                    <label  class="card-text h5 " >Quantité</label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <a href="descriptif_lait_frouge.php"><img src="../media/img/category/Boissons_coocktails/lait_aux_fruits_rouges .jpg" class="card-img-top " alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Lait aux fruits rouges</h5>
                    <a href="descriptif_lait_frouge.php"><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_lait_aux_fruits_rouges">3.00 €</p> 
                    <label  class="card-text h5 " >Quantité</label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <a href="descriptif_lait_frappé.php"><img src="../media/img/category/Boissons_coocktails/lait_frappé_à_la_banane.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Lait frappé à la banane</h5>
                    <a href="descriptif_lait_frappé.php"><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_lait_frappé_à_la_banane">3.90 €</p> 
                    <label class="card-text h5" >Quantité</label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <a href="descriptif_limonade_brésilienne.php"><img src="../media/img/category/Boissons_coocktails/limonade-bresilienne.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Limonade bresilienne</h5>
                    <a href="descriptif_limonade_brésilienne.php"><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_limonade-bresilienne">2.20 €</p> 
                    <label class="card-text h5 " >Quantité</label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>

            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <a href="descriptif_smoothie.php"><img src="../media/img/category/Boissons_coocktails/smoothie-aux-fruits.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Smoothie aux fruits</h5>
                    <a href="descriptif_smoothie.php"><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix-smoothie-aux-fruits">3.50 €</p>
                    <label class="card-text h5 " >Quantité</label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" > 
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>

        </div>


    </div>
    <div class="container d-none d-md-block ">
        <div class="row text-center my-5 ">
            <div class="col-6">
                <a href="categorie.php"><button type="button" class="btn btn-primary btn-lg">Précédent</button></a>
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