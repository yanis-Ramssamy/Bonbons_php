
<?php
session_start().
include "entete.php" ;

include "config.php";
$bdd=connect();

$produit=$_Post["produit"];
$nom=$_POST["nom"];
$prix=$_POST["prix"];
$iprod=$_POST["id"];
$sqlmodif = "UPDATE produit
SET nom = '$nom', prix = '$prix', photo = '$img'
WHERE id = '$id' ";
$resultatupdate=$bdd->query($sqlupdate);
$idmemo=$_SESSION;



header("location:index.php");





?>