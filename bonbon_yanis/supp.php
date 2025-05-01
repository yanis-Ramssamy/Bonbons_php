<?php
include "entete.php" ;
include "config.php";
$bdd = connect() ;
// recupere l'id pour evitr de prendre deux fois le meme produit
$idmodif =$_GET["id"];
//requete pour supprimer 
$sqlsupp="DELETE FROM produit where id=$idmodif";
//execution de la requete 
$resultatprod=$bdd->query($sqlsppr);

hader("location: index.php")



// il faut utiliser un get et prendr l'id pour de suuprimer des bonbons avec les memes noms puis utiliser une requet DELETE ET ENFIN L4EXCETUER ET AU CAS UNE UNE ALERT BOOTSTRAP POUR ETRE SUR DE SON CHOIX 
?>