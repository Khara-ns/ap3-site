<?php
if (!isset($_GET)) {
    header('Location: produits.php');
}

$nomproduit = (int)$_GET['produit'];
if ($nomproduit == 0) {
  header('Location: produits.php');
}

require_once "../Model/bdd.php";
$bdd = new Bdd();
    

  $infoproduits = $bdd->getInfoProduits($nomproduit);
  $imgproduits = $bdd->getImgProduits($nomproduit);
  require "../View/info_produit.php";
  ?>