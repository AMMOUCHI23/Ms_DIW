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


    <nav class="p_navbar navbar  navbar-expand-lg bg-danger-subtle">

        <div class="container-fluid text-uppercase mx-4 py-3 ">
            <img  src="assets/media/img/fond.png" class="img-responsive" id="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto  mb-lg-0 nav-fill pe-5 ">

                    <li class="nav-item px-2 ">
                        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active" aria-current="page" href="categorie.php">Catégorie</a>
                    </li>
                    <li class="nav-item px-2 ">
                        <a class="nav-link active" aria-current="page" href="plats.php">Plats</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                    </li>
                    <!--Ajouter une icone panier-->
                    <li class="nav-item px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4 " viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                          </svg>
                    </li>
                    

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-5" type="Recherche" placeholder="Rechercher..." aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Recherche</button>
                </form>
               
            </div>
        </div>
    </nav>
    <!--Section pour ajouter un parallax-->
    <section class="parallax">
    <div class="container-fluid mt-3  ">
        <div class="row">
            <div class="col">
                <!--<img class="img-fluid rounded" id="fond" src="assets/img/fond2.png" alt="image nom de réstaurant"
                    titre="image nom de réstaurant">-->
                    <video src="assets/media/video/nos_plats.mp4" loop class="object-fit-cover" autoplay width="100%" height="300px"></video>

                    
                </video>
            </div>
        </div>
    </div>


    <div class="container text-center">
        <div class="row justify-content-center ">
            <div class="col-justify-content  col-sm-6 col-md-4 my-4 survol">
               <a href="plats_categorie_entree.php"> <img id="cat1" class="img-fluid rounded " src="assets/media/img/category/Entrées/brochettes_de_saumon.jpg"
                    width="300px" height="200px" alt="image catégorie des entrées" title="image catégorie des entrées"></a>
                   <p class="categorie ">Nos Entrées</p>
                </div>
            <div class="col-12  col-sm-6  col-md-4 my-4 survol ">
                <a href="plats_catégorie_plats_principaux.php"><img class="img-fluid rounded " id="cat2"
                    src="assets/media/img/category/Plats principaux/jardinniere-quinoa.jpg" width="300px" height="200px"
                    alt="image catégorie des plats principaux" title="image catégorie des plats principaux"></a>
                    <p class="categorie ">Nos Plats principaux</p>
            </div>
           <!-- <div class="col-12  col-sm-6  col-md-4 my-4 survol ">
                <video autoplay loop muted plays-inline class="video"  width="400px" height="200px">
                    <source src="/home/ammouchi/Téléchargements/videore.mp4" type="video/mp4">
                </video>
        
            </div>-->
            <div class="col-12 col-sm-6  col-md-4 my-4 survol ">
                <a href="plats_categorie_sandwich.php"><img class="img-fluid rounded " id="cat3" src="assets/media/img/category/Sandwichs/sandwich-vietnamien.jpg"
                    width="300px" height="200px" alt="image catégorie des sandwichs " 
                    title="image catégorie des sandwichs"></a>
                    <p class="categorie">Nos sanduichs</p>
            </div>
            <div class="container col-12 col-sm-6 col-md-4 my-4  survol">
               <a href="plats_categorie_soupes.php"> <img class="img-fluid rounded position-relative " id="cat4"
                    src="assets/media/img/category/Soupes et potages/potage-de-carottes.jpg" width="300px" height="200px"
                    alt="image catégorie des soupes" title="image catégorie des soupes"></a>
                    <p class="categorie">Nos Soupes</p>   

            </div>
            <div class="col-12 col-sm-6  col-md-4 my-4 survol">
                <a href="plats_categorie_desserts.php"><img class="img-fluid rounded " id="cat5" src="assets/media/img/category/Desserts/creme_glacee.jpg"
                    width="300px" height="200px" alt="image catégorie des desserts"
                    title="image catégorie des desserts"></a>
                    <p class="categorie">Nos Desserts</p>
            </div>
            <div class="col-12 col-sm-6  col-md-4 my-4 survol">
               <a href="plats_categorie_boissons.php"> <img class="img-fluid rounded " id="cat6"
                    src="assets/media/img/category/Boissons et coocktails/cafe-flambé.jpg" width="300px" height="200px"
                    alt="image catégorie boissons" title="image catégorie des boissons"></a>
                    <p class="categorie">Nos Boissons</p>
            </div>
            <div class="col-12  col-sm-6  col-md-4 my-4 ">
                <img class="img-fluid rounded " id="cat3" src="assets/media/img/category/Desserts/tarte-rhubarbe.jpg"
                    width="300px" height="120px" alt="image plat 1" title="image plat 1">
                    <p class="categorie">Tarte-rhubarbe </p>
            </div>
            <div class="col-12 col-sm-6  col-md-4 my-4 ">
                <img class="img-fluid rounded " id="cat3"
                    src="assets/media/img/category/Soupes et potages/potage_de_petit_pois.jpg" width="300px" height="120px"
                    alt="image plat 2" title="image plat 2">
                    <p class="categorie">Potage_de_petit_pois</p>
            </div>
            <div class="col-12 col-sm-6  col-md-4 my-4 ">
                <img class="img-fluid rounded " id="cat3" src="assets/media/img/category/Sandwichs/guédille_au_homard.png"
                    width="300px" height="120px" alt="image plat 2" title="image plat 2">
                    <p class="categorie fw-bolder redressed ">Guédille_au_homard</p>
            </div>
        </div>
    </div>



   
    <?php
  require_once("footer.php");
  ?>
</section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    

</body>

</html>