<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page D'acceuil</title>
    <link href="CSS/index.css" rel="stylesheet">
    <script src="JS/jquery-3.5.1.js"></script>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/leaflet.css" rel="stylesheet">
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/leaflet.js"></script>
    <script src="/JS/poppers.min.js"></script>
    <script src="./JS/index.js"></script>
    <link rel="stylesheet" href="/leaflet/leaflet.css"/>
    <script src="./leaflet/leaflet.js"></script>
    <link rel="stylesheet" href="./CSS/all.css" />
    <style>
        #map { 
          display:flex;
          align-items: center;
          justify-content: center;
          height: 400px;
          width: 1000px; 
        }
    </style>
</head>
<body>  
<header>  
  <!--Nav Bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary " style="background-color:blue" id="navbartop">
  <a class="navbar-brand" href="#">Projet Biere</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.html">Acceuil</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catégories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Bières Blonde</a>
          <a class="dropdown-item" href="#">Bières Brune</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Autres Bières</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Edition</a>
      </li>
    </ul>
    <div id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownconnect" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Connexion
          </a>
          <div class="dropdown-menu" id="dropdown-connect" aria-labelledby="navbarDropdown">
            <form class="form-connect">
              <label for="nom">Entrez votre Pseudo</label>
              <input type="text" class="form-control input-connect" id="Pseudo" placeholder="Pseudo">
            <div class="dropdown-divider"></div>
            <label for="nom">Entrez votre Mot de passe</label>
              <input type="text" class="form-control input-connect" id="Mot De Passe" placeholder="Mot de Passe">
            <div class="dropdown-divider"></div>
            <div id="connexion">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Connexion</button>
            </div>
            <div>
            <a href="#" id="inscription" class="text-center">Pas encore inscrit</a>
            </div>
            </form>
          </div>
  </div>
    <form class="form-inline my-2 my-lg-1">
      <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
    </form>
    
  </nav>
<!--Breadcrum-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav> 
</header>
<main>
  <!--Carousel-->
  <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/banniere 1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/banniere 2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/banniere 3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>