<?php

require_once "../Model/bdd.php";

$bdd = new Bdd();

 $rayons = $bdd->getInfoRayons();

if (!isset($_GET['rayon'])) { 
  $produits = $bdd->getProduits();
 
  
} else {
  $produits = $bdd->getProduitR($_GET['rayon']);
}

require "../View/view_produits.php";
