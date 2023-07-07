
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
                <div class="dropdown">
                    <a class="btn  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Plats
                    </a>
                  
                    <ul class="dropdown-menu bg-danger-subtle">
                      <li><a class="dropdown-item" href="plats_categorie_entree.php">Entrées</a></li>
                      <li><a class="dropdown-item" href="plats_catégorie_plats_principaux.php">Plats principaux</a></li>
                      <li><a class="dropdown-item" href="plats_categorie_sandwich.php">sanduichs</a></li>
                      <li><a class="dropdown-item" href="plats_categorie_soupes.php">Soupes</a></li>
                      <li><a class="dropdown-item" href="plats_categorie_desserts.php">Desserts</a></li>
                      <li><a class="dropdown-item" href="plats_categorie_boissons.php">Boissons</a></li>
                    </ul>
                  </div>
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
<div class="container-fluid mt-3">
        <div class="row">
            <div class="col">
                <img class="img-responsive img-fluid rounded" id="fond" src="assets/media/img/fond2.png" alt="image nom de réstaurant" titre="image nom de réstaurant">
            </div>
        </div>
    </div>