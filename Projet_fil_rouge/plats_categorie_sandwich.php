<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fil Rouge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style1.css">
</head>

<body>
<?php
    require_once("header.php");
  ?>
    
    <div class="container text-center ">
        <div class="row justify-content-center ">
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Sandwichs/guédille_au_homard.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Guédille au homard</h5>
                    <a href="descriptif_guedille.php"><small class="card-text " id="guédille_au_homard">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_guédille_au_homard">7.50 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>

            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Sandwichs/hotdog_a_la_choucroute.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hotdog à la choucroute</h5>
                    <a href="descriptif_hotdog.php"><small class="card-text " id="hotdog_a_la_choucroute">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prx_hotdog_a_la_choucroute">6.80 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Sandwichs/pate-crabe.jpg" class="card-img-top "  alt="...">
                <div class="card-body">
                    <h5 class="card-title">Paté crabes</h5>
                    <a href="descriptif_pates_crabes.php"><small class="card-text " id="pate-crabe">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_pate-crabe">4.50 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Sandwichs/sandwich-poulet.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sandwich au poulet</h5>
                    <a href="descriptif_sandwich_poulet.php"><small class="card-text " id="sandwich-poulet">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_sandwich-poulet">6.00 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Sandwichs/sandwich-vietnamien.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sandwich vietnamien</h5>
                    <a href="descriptif_sandwich_veitnamien.php"><small class="card-text " id="sandwich-vietnamien">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_sandwich-vietnamien">7.00 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>

            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Sandwichs/sandwich_en_viande_fumee.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sandwich à la viande fumée</h5>
                    <a href="descriptif_sandwich_viandefum.html"><small class="card-text " id="sandwich_en_viande_fumee">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix-sandwich_en_viande_fumee">7.90 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>

        </div>


    </div>
    <div class="container d-none d-md-block ">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>