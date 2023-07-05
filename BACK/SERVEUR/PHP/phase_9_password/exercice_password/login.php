<?php
session_start();
foreach ($_POST as $key => $value) {
  ${$key} = $value;
}

if (isset($connecter)) {
  $fp = fopen("users.txt", "r");
  while (!feof($fp)) {
    $str = fgets($fp);
    $tab = explode(",", $str);
    if ($email == $tab[2] &&  password_verify($pass, substr($tab[3],0,60))) {
      $_SESSION["auth"] = "ok";
      $_SESSION["nomPrenom"] = $tab[0] . "\t" . $tab[1];
      header("Location:script.php");
    } else {
      $erreur = "L'adresse mail ou le mot de passe non valide";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Formulaire d'authentification </title>
</head>

<body>
  <form action="" method="post" class="row g-3">
    <div class="col-md-3 mx-3 mt-5">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4">
    </div>
    <div class="col-md-3 mx-3 mt-5">
      <label for="inputPassword4" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" name="pass"  id="inputPassword4">
    </div>

    <div class="col-12 mx-3">
      <button type="submit" class="btn btn-primary" name="connecter" value="">se connecter</button>
    </div>
    <?php if (!empty($erreur)) { ?>
      <div id="message"><?php echo $erreur ?></div>
    <?php } ?>
   
    </div>
  </form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>