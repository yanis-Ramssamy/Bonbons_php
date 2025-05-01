


<?php
include "entete.php" ;
// création de la requête 
$sql="select * from produit";


//execution de la requête 
$resultat =$bdd->query($sql);

// affichage des resultats dans un objet 

while($produit= $resultat -> fetch(PDO::FETCH_OBJ))
{
    ?>
<div class="card" style="width: 18rem;">
  <img src="images/<?= $produit->photo ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produit->nom ?> </h5>
    <p class="card-text"><?php echo $produit->prix?></p>
    <a href="supp.php?id=<?php echo $produit->id ?>" class="btn btn-primary">Supprimer</a>
    <a href="modifier.php" class="btn btn-danger">Modifier</a>
  </div>
</div>

    <?php
    
    

}

?>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>