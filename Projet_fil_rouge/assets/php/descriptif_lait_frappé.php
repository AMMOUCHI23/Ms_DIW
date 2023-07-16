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
    

      <div class="contenaire mt-5 mx-3">
        <div class="row justify-content-center">
            <div class="col-md-4 mx-3">
                <img src="../media/img/category/Boissons et coocktails/lait_frappé_à_la_banane.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col-md-5 mx-3">
                <h2 class="text-primary">Lait frappé à la banane</h2>
                <h4 class="py-3">3.90 €</h4>
                <label class="card-text text-end  " for="quantite"><h5>Quantité</h5></label>
              <input type="number" class="text-center quantite" placeholder="1" name="quantite" >
              <h5 class="text-primary mt-3">Ingrédients :</h5>
              <p>viande fumée, pain de seigle, moutarde à l’ancienne, et  poivre concassé.</p>
              <a href="#" class="btn btn-primary my-2">Ajouter au panier</a><br>
              <a href="plats_categorie_soupes.php" class="btn btn-lg btn-primary my-5 " >Continuer les achats <command></a>
                <a href="#" class="btn btn-lg btn-success  ms-md-5 " >Passer la commande <command></a>
            </div>
        </div>
      </div>


    </div>
    <div class="container d-none">
        <div class="row text-center my-5 ">
            <div class="col-6">
                <button type="button" class="btn btn-primary btn-lg">Précédent</button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary  btn-lg">Suivant</button>
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