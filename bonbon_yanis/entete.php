<?php

//connexion à la bdd
require "config.php";
$bdd=connect();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <h1><a href="index.php" class="text-decoration-none text-dark">Le coin des Gourmands</a></h1>

    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand"></a>
        <li class="nav-item">
          <a class="btn btn-outline-light text-dark" href="ajouter.php">Ajouter un nouveau produit</a>
        </li>
        <form class="d-flex" role="search" method="POST" action="recherche.php">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="recherche">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </body>
</html>