<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-esqiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil</title>
    <link rel="stylesheet" href="../View/css/page_profil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  </head>
  <body>
<?php print_r($_SESSION['login']); ?>
    <div class="contours">
      <div class="center">
        <div class="url">
          <a href="../Controller/produits.php">Accueil > Produit</a>
        </div>
        <br>
        <br>
        <h1>Code Client :</h1>
        <p>CLI - <?= rand(00000001,99999999) ?></p>
        <br>
        <h1>Nom / Prénom :</h1>
        <p>Ananou Robin</p>
        <br>
        <h1>Adresse :</h1>
        <p>67 bis rue Baudouin l'Edifieur, 59300 Valenciennes</p>
        <br>
        <h1>Email :</h1>
        <p>robin2.ra8@gmail.com</p>
        <br>
        <h1>Téléphone :</h1>
        <p>07 83 08 30 19</p>
        <br>
        <h1>Date de Naissance :</h1>
        <p>06 Septembre 2002</p>
        <br>
        <h1>Nombres d'enfants :</h1>
        <p>1</p>
        <br>
        <h1>Âge des enfants :</h1>
        <p>11 ans</p>
        <br>
        <h1>Sport(s) Pratiqué(s) :</h1>
        <p>Badminton</p>
      </div>
    </div>
  </body>
</html>
