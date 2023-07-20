<?php
// récupérer les données saisies par l'utilisateur
$nom = @$_POST["nom"];
$prenom = @$_POST["prenom"];
$email = @$_POST["email"];
$pass = @$_POST["pass"];
$cpass = @$_POST["cpass"];
//Parcourir les donnée de post
foreach ($_POST as $key => $value) {
  ${$key} = $value;
}
$erreur = "";
// tester la variable $connecter
if (isset($connecter)) {
  //vérifier la compatibilité du nom, prenom, email et mot de passe avec leurs expressions regulieres
  if (!preg_match("/^[a-zA-Z \-éèê]+$/", $nom)) {
    $erreur = "Nom non valide";
  } elseif (!preg_match("/^[a-zA-Z \-éèê.@]+$/", $prenom)) {
    $erreur = "Prénom non valide";
  } elseif (!preg_match("/^[a-zA-Z0-9.\-_]+@{1}[a-zA-Z_-]+[.]{1}[a-zA-Z]{2,3}$/", $email)) {
    $erreur = "email non valide";
  } elseif (!preg_match("/^(?=.* ?[A-Z])(?=.* ?[a-z])(?=.* ?[0-9]).{8,15}$/", $pass)) {
    $erreur = "Mot de passe non valide";
    // vérifier si la confirmtion de mot de passe est identique avec le mot de passe
  } elseif (!preg_match("#" . $cpass . "#", $pass)) {
    $erreur = "Mots de passe non identiques";
  } else {
    // cryptage du mot de passe
    $passHash = password_hash($pass, PASSWORD_DEFAULT);
    //ouvrir le fichier users.txt pour la lécture et écriture
    $fp = fopen("users.txt", "a+");
    //lire tout le fichier users.txt
    $fj = fgets($fp, 400);
    //vérifier si le nom et le prenom existent dans le fichier users.txt
    if (preg_match("#" . $nom . "#", $fj) && preg_match("#" . $prenom . "#", $fj)) {
      $erreur = "Un compte existe déja ce nom et prenom";
    }
    //vérifier si l'adresse mail existe dans le fichier users.txt
    else if (preg_match("#" . $email . "#", $fj)) {
      $erreur = "Un compte existe déja avec cette adresse mail";
    }
    //enregestrer le nom, prenom, email et le mot de passe dans le fichier users.txt
    else {
      fputs($fp, $nom . "," . $prenom . "," . $email . "," . $passHash . "\n");
    }
  }
}
/*while (!feof($fp)) {
    $fj = fgets($fp, 400);
    //vérifier si le nom et le prenom existent dans le fichier users.txt
    if (preg_match("#" . $nom . "#", $fj) && preg_match("#" . $prenom . "#", $fj)) {
      $erreur = "Un compte existe déja ce nom et prenom";
      fclose("users.txt");
      break;
    }
    //vérifier si l'adresse mail existe dans le fichier users.txt
    else if (preg_match("#" . $email . "#", $fj)) {
      $erreur = "Un compte existe déja avec cette adresse mail";
      break;
      //enregestrer le nom, prenom, email et le mot de passe dans le fichier users.txt

    }
    else {
      fputs($fp, $nom . "," . $prenom . "," . $email . "," . $passHash . "\n");
      
    }
  }*/

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
  <h1 style="color:blue;" class="mx-3 mt-5">Inscription</h1>
  <form action="" method="post">
    <div class="row g-3">
      <div class="col-md-3 mx-3 mt-5">
        <label for="inputNom4" class="form-label">Nom*</label>
        <input type="text" class="form-control" name="nom" id="inputNom" placeholder="Entrer votre nom">
      </div>
      <div class="col-md-3 mx-3 mt-5">
        <label for="inputPrenom4" class="form-label">Prénom*</label>
        <input type="text" class="form-control" name="prenom" id="inputPrenom" placeholder="Entrer votre prénom">
      </div>

    </div>
    <div class="row g-3">
      <div class="col-md-3 mx-3 mt-5">
        <label for="inputEmail4" class="form-label">Email*</label>
        <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="toto@hotmail.com">
      </div>
      <div class="col-md-3 mx-3 mt-5">
        <label for="inputPassword4" class="form-label">Mot de passe*</label>
        <input type="password" class="form-control" name="pass" id="inputPassword4">
      </div>
      <div class="col-md-3 mx-3 mt-5">
        <label for="inputPassword" class="form-label">Confirmation de mot de passe*</label>
        <input type="password" class="form-control" name="cpass" id="inputPassword">
      </div>

      <div class="col-12 mx-3 mx-3 mt-3">
        <button type="submit" class="btn btn-lg btn-primary" name="connecter" value="">se connecter</button>
      </div>

      <div class="mx-3" id="message" style="color: red;"><?php echo $erreur; ?></div>

    </div>
    </div>
  </form>
  <div class="col-12 mx-3 mx-3 mt-3">
    <label for="">Pour se connecter à votre compte cliquez</label>
    <a href="login.php">ici </a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>