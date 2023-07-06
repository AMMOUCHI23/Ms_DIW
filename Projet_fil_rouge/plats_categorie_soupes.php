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
                <img src="assets/media/img/category/Soupes et potages/potage-de-carottes.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Potage de carottes</h5>
                    <a href=""><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_potage-de-carottes">5.50 €</p> 
                    <a href="#" class="btn btn-primary">Ajouter au panier</a>
                </div>
            </div>

            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Soupes et potages/potage_de_petit_pois.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Potage de petit pois</h5>
                    <a href=""><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prx_potage_de_petit_pois">3.80 €</p> 
                    <a href="#" class="btn btn-primary">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Soupes et potages/soupe-lasagne.jpg" class="card-img-top " height="230px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">soupe-lasagne</h5>
                    <a href=""><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_soupe-lasagne">4.50 €</p> 
                    <a href="#" class="btn btn-primary">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Soupes et potages/chaudree-fruits-de-mer.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Chaudrée de fruits de mer</h5>
                    <a href=""><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_chaudree-fruits-de-mer">5.90 €</p> 
                    <a href="#" class="btn btn-primary">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Soupes et potages/creme-de-brocoli.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sandwich vietnamien</h5>
                    <a href=""><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_creme-de-brocoli">4.00 €</p> 
                    <a href="#" class="btn btn-primary">Ajouter au panier</a>
                </div>
            </div>

            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Soupes et potages/soupe-cremeuse-haricots.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Soupe cremeuse aux haricots</h5>
                    <a href=""><small class="card-text " >Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix-soupe-cremeuse-haricots">4.90 €</p> 
                    <a href="#" class="btn btn-primary">Ajouter au panier</a>
                </div>
            </div>

        </div>


    </div>
    <div class="container d-none  ">
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