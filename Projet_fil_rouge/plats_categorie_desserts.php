<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restaurant au cœur d'Amiens, commander en ligne parmi une large sélection de plats, manger sur place ou à emporter. Des Menus variés pour le plaisir des petis et de grands dans votre réstaurant The District">
    <title>Réstaurant The District</title>
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
                <img src="assets/media/img/category/Desserts/creme_glacee.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Crème glacée</h5>
                    <a href=""><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_creme_glacee">3.50 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>

            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Desserts/mousse_au_chocolat.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mousse au chocolat</h5>
                    <a href=""><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prx_mousse_au_chocolat">2.20 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Desserts/pets-de-soeur.jpg" class="card-img-top "  alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pets de soeur</h5>
                    <a href=""><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_pets-de-soeur">3.30 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Desserts/tarte-arachides.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tarte-arachides</h5>
                    <a href=""><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_tarte-arachides">3.90 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Desserts/tarte-bleuets.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tarte-bleuets</h5>
                    <a href=""><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_tarte-bleuets">3.00 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>

            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Desserts/tarte-rhubarbe.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tarte-rhubarbe</h5>
                    <a href=""><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix-tarte-rhubarbe">2.90 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>

        </div>


    </div>
    <div class="container d-none  d-md-block  ">
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
</body>

</html>