<?php
//ouvrir une session
session_start();
//parcourir les donnée de $_POST
foreach ($_POST as $key => $value) {
  ${$key} = $value;
}
$erreur="";
// tester le variable $connecter
if (isset($connecter)) {
  // ouvrire le fichier users.txt pour lire
  $fp = fopen("users.txt", "r");
  // tester si le corseur n'est pas à la fin de fichier
  while (!feof($fp)) {
    //lire une line de fichier users.txt
    $str = fgets($fp);
    //stocker les données de la ligne dans un tableau tab avec une séparation ","
    $tab = explode(",", $str);
    //tester la variable email, et comparer le mot de passe taper par l'utilisateur à celui enregestré crypté
    if ($email == @$tab[2] &&  password_verify($pass, substr(@$tab[3], 0, 60))) {
      // donner un nom et une valeur à notre session
      $_SESSION["auth"] = "ok";
      // enregestrer la valeur de nomPrenom dans la session
      $_SESSION["nomPrenom"] = $tab[0] . "\t" . $tab[1];
      //se dériger à la page script.php
      header("Location:script.php");
    } else {
      //afficher l'erreur si le mail ou le mot de passe ne correspond pas
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
  <h1 style="color:blue;" class="mx-3 mt-5">Authentification</h1>
  <form action="" method="post" class="row g-3">
    <div class="col-md-3 mx-3 mt-5">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4">
    </div>
    <div class="col-md-3 mx-3 mt-5">
      <label for="inputPassword4" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" name="pass" id="inputPassword4">
    </div>

    <div class="col-12 mx-3">
      <button type="submit" class="btn btn-primary" name="connecter" value="">se connecter</button>
    </div>

    <div class="mx-3" id="message" style="color: red; "><?php echo $erreur; ?></div>

  </form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>