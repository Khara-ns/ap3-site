<?php

require_once "../Model/bdd.php";


if (isset($_POST['quantite']) && isset($_POST['produit']) && isset($_POST['user'])) { 
   $bdd = new Bdd();
   $quantite = strval($_POST['quantite']);
   $idproduit = strval($_POST['produit']);
   $client_id = (int)$_POST['user'];
    $client_panier = $bdd->recup_panier($client_id);
    
    
    $client_panier = $client_panier[0]['client_panier'];
    $client_panier .= $idproduit.":".$quantite.",";
    $client_panier = htmlentities($client_panier);
    
   $vérif2 = $bdd->ajoutpanier($client_panier,$client_id);
    
   header('Location: produits.php');
  }else{
    print("ERREUR !!!!!!!!!!");
  }

?>