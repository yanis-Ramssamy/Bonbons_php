<?php

require "config.php";
$bdd=connect();
//recuperer le POST*

$nom=$_POST["nom"];
$prix=$_POST["prix"];

//recupération du nom de l'image
$nom_image = basename($_FILES["pj"]['name']);²
//dossier où on doit déplacer l'image
$chemin_destination = 'images/' . $nom_image;
//téléchargement de l'image dans le bon dossier
move_uploaded_file($_FILES['pj']['tmp_name'], $chemin_destination);


// modif de la requête 
$sql="insert into produit(nom, prix , photo) values ('$nom', $prix, '$nom_image' )";
//echo $sql ;
//execution de la requete 
$bdd->exec($sql);

//retour à l'accueil
header("location:accueilAdmin.php") ;
?>