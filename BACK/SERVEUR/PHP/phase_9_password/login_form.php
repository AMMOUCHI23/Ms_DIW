<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Formulaire d'authentification </title>
</head>
<body>
    <form action="login_script.php" method="post" class="row g-3">
  <div class="col-md-3 mx-3 mt-5">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control"name="email" id="inputEmail4">
  </div>
  <div class="col-md-3 mx-3 mt-5">
    <label for="inputPassword4" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" name="password" id="inputPassword4">
  </div>
  <div class="col-12 mx-3">
    <button type="submit" class="btn btn-primary">Connexion</button>
  </div>
    </form>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>