<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['login'])) {
    header('Location: produits.php');
}

$idsession = (int)$_SESSION['login'];

require_once "../Model/bdd.php";
$bdd = new Bdd();
    

  $infoclients = $bdd->getClient($idsession);
  require "../View/page_profil.php";
  ?>
