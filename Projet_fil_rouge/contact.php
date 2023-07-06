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
    
    <form method="post" action="" name="contact" class="row g-3 my-5 ms-3">
        <div class="row justify-content-center">
            <div class="col-md-4 my-3">
                <label for="inputNom" class="form-label">Nom*</label>
                <input type="text" class="form-control" name="nom" id="inputNom">
                <p id="nom_inv" style="color: red;"></p>
            </div>
            <div class="col-md-4 my-3">
                <label for="inputPrenom" class="form-label">Prénom*</label>
                <input type="text" class="form-control" name="prenom" id="inputPrenom">
                <p id="prenom_inv" style="color: red;"></p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 my-3">

                <label for="inputEmail" class="form-label">Email*</label>
                <input type="email" class="form-control" name="email" id="inputEmail">
                <p id="email_inv" style="color: red;"></p>
            </div>
            <div class="col-md-4 my-3">
                <label for="inputTelephone" class="form-label">Téléphone*</label>
                <input type="tel" class="form-control" name="telephone" id="inputTelephone">
                <p id="telephone_inv" style="color: red;"></p>
            </div>
        </div>
        </div>
        <div class="row  justify-content-center">
            <div class="col-md-8 my-3">
                <label for="text" class="">Votre demande*</label>
                <textarea class="form-control" placeholder="Votre demande..." name="text" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                <p id="text_inv" style="color: red;"></p>
                <p id="obligatoire"> * Champs Obligatoires</p>
            </div>
        </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-3 mt-3">
                <button type="submit" id="envoi" class="btn btn-primary btn-lg">Envoyer</button>

            </div>
        </div>
    </form>

    <?php
  require_once("footer.php");
  ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="assets/javascript/script.js"></script>
</body>

</html>