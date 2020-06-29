

<?php
$nom_produit = "T-shirt simple" ;
$couleur = "Blanc" ;
$prix = 10.50 ;
$disponible ="true" ;
$quantite = 10 ;
$phrase1 ="Le nom du produit est :" .$nom_produit ;
$phrase2 ="Il reste ".$quantite. " en stock" ;
$phrase3 ="Le produit " .$nom_produit. " est de couleur " .$couleur ;
$phrase4 ="Acheter 3 produits couterait " .(3* $prix);
$phrase5 ="Acheter la totalité des produits disponibles coûterait " .(10 * $prix) ;
$phrase6 ="Si 3 produits sont vendus il reste " .($quantite - 3). " produits en stock." ;?>

<h3><?php echo $phrase1 ; ?></h3>
<h3><?php echo $phrase2 ; ?></h3>
<h3><?php echo $phrase3 ; ?></h3>       

<h4><?php echo $phrase4 ; ?></h4>
<h4><?php echo $phrase5 ; ?></h4>
<h4><?php echo $phrase6 ; ?></h4>  
    



<p><?php if ($disponible == true) {echo " Le produit $nom_produit est disponible en ligne.";} 
else  echo " Le produit $nom_produit n’est malheureusement plus disponible.";  ?></p>

<p><?php if ($quantite > 5) {echo "Il reste $quantite produits en magasin." ;}
if ($quantite < 5) {echo "Il ne reste plus que $quantite produits en magasin.";}
if ($quantite == 1) {echo "Il ne reste qu’un produit en magasin.";}
if ($quantite == NULL) {echo " Il ne reste qu’un produit en magasin.";}?></p>


