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
                <img src="assets/media/img/category/Plats principaux/boulettes_farcies.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Boulettes farcie</h5>
                    <a href="descriptif_boulettes_farcie.php"><small class="card-text " id="prix_boulettes_farcies">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_boulettes_farcies">9.00 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>

            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Plats principaux/courgettes-farcies-au-riz-sauvage.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Courgettes farcies</h5>
                    <a href="descriptif_courgette_farcie.php"><small class="card-text " id="prix_boulettes_farcies">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_boulettes_farcies">9.00 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Plats principaux/jardinniere-quinoa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jardinniere quinoa</h5>
                    <a href="descriptif_jardinniere quinoa.php"><small class="card-text " id="prix_boulettes_farcies">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_boulettes_farcies">9.00 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Plats principaux/pate-chinois.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pàte chinois</h5>
                    <a href="descriptif_pate_chinois.php"><small class="card-text " id="prix_boulettes_farcies">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_boulettes_farcies">9.00 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Plats principaux/poulet_en_sauce.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Poulet en sauce</h5>
                    <a href="descriptif_pollet.php"><small class="card-text " id="prix_boulettes_farcies">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_boulettes_farcies">9.00 €</p> 
                    <label class="card-text  " for="quantite"><h5>Quantité</h5></label>
                 <input type="number" class="quantite text-center" placeholder="1" name="quantite" >
                    <a href="#" class="btn btn-primary mx-3">Ajouter au panier</a>
                </div>
            </div>

            <div class="card col-justify-content  col-sm-6 col-md-4 my-4">
                <img src="assets/media/img/category/Plats principaux/saumon-wellington.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Saumon wellington</h5>
                    <a href="descriptif_saumon.php"><small class="card-text " id="prix_boulettes_farcies">Cliquer pour plus de détails</small> </a>
                    <p class="card-text" id="prix_boulettes_farcies">9.00 €</p> 
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>