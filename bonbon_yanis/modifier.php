
<?php
session_start();
include "entete.php";
include " config.php";
$bdd=connect();
$idprod=$_GET["id"];
$sqlid= "select * from produit where id=$idprod ";
$bonbon=$bdd->query($sqlid);
$_SESSION['idmemo']=$id;


?>


<form action="page_modifier.php" method="POST">
    Produit: <input type="text" name="nom" value="<?=$produit->nom?>">
    Prix : <input type="text" name="prix" value="<?=$produit->prix?>">
    Image : <input type="text" name="photo" value="<?=$produit->photo?>">
    <input type="submit">
</form>
    

