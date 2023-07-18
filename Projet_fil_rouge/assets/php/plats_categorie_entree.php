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
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
               <a href="descriptif_brochette_saumon.php"> <img src="../media/img/category/Entrées/brochettes_de_saumon.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Brochettes de saumon</h5>
                    <a href="descriptif_brochette_saumon.php"><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_brochettes_de_saumon">8.00 €</p> 
                    <label class="card-text h5 " >Quantité</label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" id="quantite">
                     <a href="#" class="btn btn-primary ajouter-panier mx-3 ">Ajouter au panier</a>
                </div>
            </div>

            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <a href="descriptif_courges_grillee.php"><img src="../media/img/category/Entrées/courges-grillees-ricotta.jpg" class="card-img-top"  alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">courges grillées ricotta</h5>
                    <a href="descriptif_courges_grillee.php"><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="courges-grillees-ricotta">9.00 €</p> 
                    <label class="card-text  h5" >Quantité</label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary ajouter-panier mx-3" >Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <a href="descriptif_rouleau_au_saumon.php"><img src="../media/img/category/Entrées/rouleaux-saumon.jpg" class="card-img-top "  alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Rouleau au saumon</h5>
                    <a href="descriptif_rouleau_au_saumon.php"><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_rouleaux-saumon">7.50 €</p> 
                    <label class="card-text h5 " >Quantité</label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary ajouter-panier mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <a href="descriptif_salade_hiver.php"><img src="../media/img/category/Entrées/salade_d'hiver.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">salade d'hiver</h5>
                    <a href="descriptif_salade_hiver.php"><small class="card-text " id="prix_salade_d'hiver">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" >4.00 €</p> 
                    <label class="card-text  h5" >Quantité</label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary ajouter-panier mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <a href="descriptif_tarte_tomate.php"><img src="../media/img/category/Entrées/tarte-tatin-de-tomates.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">tarte tatin de tomate</h5>
                    <a href="descriptif_tarte_tomate.php"><small class="card-text " id="tarte-tatin-de-tomates">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_tarte-tatin-de-tomates">12.00 €</p> 
                    <label class="card-text h5 " >Quantité</label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary ajouter-panier mx-3">Ajouter au panier</a>
                </div>
            </div>

            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <a href="descriptif_tartine_courgette.php"><img src="../media/img/category/Entrées/tartines-a-la-courgette.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">tartine à la courgette</h5>
                    <a href="descriptif_tartine_courgette.php"><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix-tartines-a-la-courgette">6.50 €</p> 
                    <label class="card-text h5 " >Quantité</label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary ajouter-panier mx-3">Ajouter au panier</a>
                </div>
            </div>

        </div>


    </div>
    <div class="container d-none d-md-block  ">
        <div class="row text-center my-5 ">
            <div class="col-6">
            <a href="categorie.php"> <button type="button" class="btn btn-primary btn-lg">Précédent</button></a>
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
        <script src="assets/javascript/panier.js"></script>
</body>

</html>