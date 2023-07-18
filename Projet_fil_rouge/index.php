<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restaurant au cœur d'Amiens, commander en ligne parmi une large sélection de plats, manger sur place ou à emporter. Des Menus variés pour le plaisir des petis et de grands dans votre réstaurant The District">
    <title>Réstaurant The District</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style1.css">
</head>

<body>


    <nav class="p_navbar navbar  navbar-expand-lg bg-danger-subtle">

        <div class="container-fluid text-uppercase mx-4 py-3 ">
            <img src="assets/media/img/fond.png" class="img-responsive" id="logo" alt="image de logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto  mb-lg-0 nav-fill pe-5 ">

                    <li class="nav-item px-2 ">
                        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active" aria-current="page" href="assets/php/categorie.php">Catégorie</a>
                    </li>
                    <li class="nav-item px-2 ">
                        <div class="dropdown">
                            <a class="btn  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Plats
                            </a>

                            <ul class="dropdown-menu bg-danger-subtle">
                                <li><a class="dropdown-item" href="assets/php/plats_categorie_entree.php">Entrées</a></li>
                                <li><a class="dropdown-item" href="../assets/php/plats_catégorie_plats_principaux.php">Plats principaux</a></li>
                                <li><a class="dropdown-item" href="../assets/php/plats_categorie_sandwich.php">sanduichs</a></li>
                                <li><a class="dropdown-item" href="../assets/php/plats_categorie_soupes.php">Soupes</a></li>
                                <li><a class="dropdown-item" href="../assets/php/plats_categorie_desserts.php">Desserts</a></li>
                                <li><a class="dropdown-item" href="../assets/php/plats_categorie_boissons.php">Boissons</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active" aria-current="page" href="assets/php/contact.php">Contact</a>
                    </li>
                    <!--Ajouter une icone panier-->
                    <li class="nav-item px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4 " viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg>
                    </li>


                </ul>
                <form class="d-flex" role="search">

                    <input class="form-control me-5" type="text" placeholder="Rechercher..." aria-label="Search">
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
                    <video src="assets/media/video/nos_plats.mp4" loop class="object-fit-fill" autoplay></video>
                </div>
            </div>
        </div>


        <div class="container text-center">
            <div class="row justify-content-center ">
                <div class="col-justify-content  col-sm-6 col-md-4 my-4 survol">
                    <a href="assets/php/plats_categorie_entree.php"> <img id="cat1" class="img-fluid rounded " src="assets/media/img/category/Entrées/brochettes_de_saumon.jpg" width="300" height="200" alt="image catégorie des entrées" title="image catégorie des entrées"></a>
                    <p class="categorie ">Nos Entrées</p>
                </div>
                <div class="col-12  col-sm-6  col-md-4 my-4 survol ">
                    <a href="assets/php/plats_catégorie_plats_principaux.php"><img class="img-fluid rounded " id="cat2" src="assets/media/img/category/Plats_principaux/jardinniere-quinoa.jpg" width="300" height="200" alt="image catégorie des plats principaux" title="image catégorie des plats principaux"></a>
                    <p class="categorie ">Nos Plats Principaux</p>
                </div>
                <!-- <div class="col-12  col-sm-6  col-md-4 my-4 survol ">
                <video autoplay loop muted plays-inline class="video"  width="400px" height="200px">
                    <source src="/home/ammouchi/Téléchargements/videore.mp4" type="video/mp4">
                </video>
        
            </div>-->
                <div class="col-12 col-sm-6  col-md-4 my-4 survol ">
                    <a href="assets/php/plats_categorie_sandwich.php"><img class="img-fluid rounded " id="cat3" src="assets/media/img/category/Sandwichs/sandwich-vietnamien.jpg" width="300" height="200" alt="image catégorie des sandwichs " title="image catégorie des sandwichs"></a>
                    <p class="categorie">Nos Sandwichs</p>
                </div>
                <div class="container col-12 col-sm-6 col-md-4 my-4  survol">
                    <a href="assets/php/plats_categorie_soupes.php"> <img class="img-fluid rounded position-relative " id="cat4" src="assets/media/img/category/Soupes_potages/potage-de-carottes.jpg" width="300" height="200" alt="image catégorie des soupes" title="image catégorie des soupes"></a>
                    <p class="categorie">Nos Soupes</p>

                </div>
                <div class="col-12 col-sm-6  col-md-4 my-4 survol">
                    <a href="assets/php/plats_categorie_desserts.php"><img class="img-fluid rounded " id="cat5" src="assets/media/img/category/Desserts/creme_glacee.jpg" width="300" height="200" alt="image catégorie des desserts" title="image catégorie des desserts"></a>
                    <p class="categorie">Nos Desserts</p>
                </div>
                <div class="col-12 col-sm-6  col-md-4 my-4 survol">
                    <a href="assets/php/plats_categorie_boissons.php"> <img class="img-fluid rounded " id="cat6" src="assets/media/img/category/Boissons_coocktails/cafe-flambé.jpg" width="300" height="200" alt="image catégorie boissons" title="image catégorie des boissons"></a>
                    <p class="categorie">Nos Boissons</p>
                </div>
                <div class="description text-white redressed   text-capitalize fst-italic  justify-content-center align-items-center col-12  col-md-5 my-4 py-5">
                    <h1 class="fs-2 bg-danger" id="change-position">The District</h1>
                    <h3>Au cœur d'Amiens, notre Restaurant Gastronomique propose une cuisine raffinée, élaborée à partir de produits locaux et de saison. </h3>

                </div>

                <div id="carouselExampleAutoplaying" class="carousel slide justify-content-center col-10 col-md-5 my-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/media/img/category/Desserts/tarte-rhubarbe.jpg" class="img-fluid rounded d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/media/img/category/Soupes_potages/potage_de_petit_pois.jpg" class="img-fluid rounded d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/media/img/category/Desserts/tarte-arachides.jpg" class="img-fluid rounded d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/media/img/category/Entrées/courges-grillees-ricotta.jpg" class="img-fluid rounded d-block w-100" alt="...">
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div>
        </div>



        <?php
        require_once("footer.php");
        ?>


    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>

</html>