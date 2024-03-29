<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon panier</title>
</head>

<body>
  <?php
  require_once("header.php");
  ?>
  <section class="container flex" id="basket">
    <div class="flex-start" id="titrePanier">

      <h2 id="titre-panier">Le panier est vide <br>
        Veuillez ajouter des plats au panier </h2>

      <table class="table">
        <thead>
          <tr>
            <th>Image du plat</th>
            <th>Nom du plat</th>
            <th>Quantté</th>
            <th>Prix</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><img src="assets/media/img/burger.jpg" alt="..." width="100" height="70"></th>
            <td>Burger</td>
            <td>
              <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">-</button>
                <input type="text" placeholder="0">
                <button class="btn btn-primary" type="button">+</button>
              </div>
            </td>
            <td>7.00 € </td>
            <td>7.00 € </td>
          </tr>

        </tbody>
      </table>

    </div>
  </section>
  <?php
  require_once("footer.php");
  ?>

  <script src="assets/javascript/panier.js"></script>
</body>

</html>