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
    
    <div class="card my-5   container  " style="max-width: 540px;">
        <div class="row g-0  ">
          <div class="col-md-4 py-3 ">
            <img src="../media/img/food/spaghetti-legumes.jpg" class="img-fluid rounded" alt="Spaghetti aux légumes">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">Spaghetti aux légumes</h3>
              <p class="card-text">Spaghettis, courgette, poivron, oignon, Ail, herbe de provence, sel, poivre et huile d’olive.</p>
              <div class="text-end">
              <label class="card-text text-end mx-2 " for="quantite"><h5>Quantité</h5></label>
              <input type="number" class="text-center" placeholder="1" name="quantite" id="quantite">
              </div>
            </div>
          </div>
        </div>
      </div>
    <form class="row g-3 my-5 ms-3">
        <div class="row justify-content-center">
            <div class="col-md-4 my-3">
                <label for="inputNom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="inputNom">
                <p Ce class="c_obligatoire">Ce champs est obligatoire.</p>
            </div>
            <div class="col-md-4 my-3">
                <label for="inputPrenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="inputPrenom">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 my-3">

                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-4 my-3">
                <label for="inputTelephone" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" id="inputTelephone">
                <p class="c_obligatoire">Ce champs est obligatoire.</p>
            </div>
        </div>
    </div>
    <div class="row  justify-content-center">
        <div class="col-md-8 my-3">
        <label for="text" class="">Votre demande</label> 
        <textarea class="form-control" placeholder="Votre demande..." id="floatingTextarea2" style="height: 100px"></textarea>
        </div>
        </div>
    </div>
    <div class="row justify-content-end" >
        <div class="col-3 mt-3" >
            <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
            
        </div>
    </div>
    </form>
    <?php
  require_once("footer.php");
  ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>