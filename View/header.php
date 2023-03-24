<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/style.css"/>
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>All4Sport</title>
  </head>
  <body>
    <header>
      <a href="#" class="logo">All<span>4</span>Sport</a>
      <div class="menuToggle" onclick="toggleMenu();"></div>
      <ul class="navbar">
          <li><a href="#banniere" onclick="toggleMenu();">Accueil</a></li>
          <li><a href="#informations" onclick="toggleMenu();">Informations</a></li>
          <li><a href="#produits" onclick="toggleMenu();">Produits</a></li>
          <li><a href="#magasin" onclick="toggleMenu();">Magasin</a></li>
          <li><a href="#commentaires" onclick="toggleMenu();">Commentaires</a></li>
          <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
          <?php if (!isset($_SESSION['login'])){ ?>
          <a href="../login.php" class="btn-reserve"onclick="toggleMenu();">Connexion</a> <?php }?>
           <?php if (isset($_SESSION['login'])){ ?>
          <a href="../View/page_panier.php"><img src="../image/shop.png" alt="Panier" class="panier"></a>
	<a href="../Controller/page_profil.php"><img src="../image/profil.png" alt="Profil" class="panier"></a>
     	<?php } ?>
	 </ul>
    </header>

    <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });

     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }
 </script>
</body>
</html>
