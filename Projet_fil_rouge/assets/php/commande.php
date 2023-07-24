<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restaurant au cœur d'Amiens, commander en ligne parmi une large sélection de plats, manger sur place ou à emporter. Des Menus variés pour le plaisir des petis et de grands dans votre réstaurant The District">
    <title>Ma Commande</title>
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
              <input type="number" class="text-center quantite" placeholder="1"  id="quantite">
              </div>
            </div>
          </div>
        </div>
      </div>
    <form method="post" id="commande" class="row g-3 my-5 ms-3">
        <div class="row justify-content-center">
            <div class="col-md-4 my-3">
                <label for="inputNom" class="form-label">Nom<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nom" id="inputNom">
                <p id="nom_inv" style="color: red;"></p>
            </div>
            <div class="col-md-4 my-3">
                <label for="inputPrenom" class="form-label">Prénom<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="prenom" id="inputPrenom">
                <p id="prenom_inv" style="color: red;"></p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 my-3">

                <label for="inputEmail4" class="form-label">Email<span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email"  id="inputEmail4">
                <p id="email_inv" style="color: red;"></p>
            </div>
            <div class="col-md-4 my-3">
                <label for="inputTelephone" class="form-label">Téléphone<span class="text-danger">*</span></label>
                <input type="tel" class="form-control" name="telephone" id="inputTelephone">
                <p id="telephone_inv" style="color: red;"></p>
            </div>
        </div>
    
    <div class="row  justify-content-center">
        <div class="col-md-8 my-3">
        <label for="text" class="">Votre demande<span class="text-danger">*</span></label> 
        <textarea class="form-control" name="text" id="floatingTextarea2" placeholder="Votre demande..."  style="height: 100px"></textarea>
        <p id="text_inv" style="color: red;"></p>
        <p id="obligatoire"> <span class="text-danger">*</span> Champs Obligatoires</p>
      </div>
        </div>
    
    <div class="row justify-content-end" >
        <div class="col-3 mt-3" >
            <button type="submit" name="envoyer" class="btn btn-primary btn-lg">Envoyer</button>
            
        </div>
    </div>
    </form>
    <?php
  require_once("footer.php");
  ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
        <script src="../javascript/commande.js"></script>
</body>

</html>