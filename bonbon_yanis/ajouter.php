<?php
 include "entete.php";




?>




<form class="d-flex" role="search" method="POST" action="ajout_envoi.php" enctype="multipart/form-data" >
Nom du produit :<br>
<input type="text" name="nom" >
<br>
Prix du produit :<br>
<input type="text" name="prix" >

Image du produit :<br>
<input type="file" name="pj" value="fichier" >

<input type="submit" value="enregistrer">
</form>

