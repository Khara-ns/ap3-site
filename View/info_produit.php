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
    <title>Produit</title>
    <link rel="stylesheet" href="../View/css/page_produit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  </head>
  <body>
    <div class="contours">
    <div class="flex-box">
        <div class="left">
            <div class="big-img">
                 <?php
            echo "<img src='../imageproduit/" . $imgproduits[0][0] ."' onclick='showImg(this.src)'>";?>
            </div>
            <div class="images">
                <div class="small-img">
           <?php
            echo "<img src='../imageproduit/" . $imgproduits[0][0] ."' onclick='showImg(this.src)'>";?>
                </div>
                <div class="small-img">
                 <?php
            echo "<img src='../imageproduit/" . $imgproduits[1][0] ."' onclick='showImg(this.src)'>";?>
                </div>
                <div class="small-img">
                <img src="../image/logo.jpg" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                <img src="../image/logo.jpg" onclick="showImg(this.src)">
                </div>
                
            </div>
        </div>
        <div class="right">
          <div class="url"><a href="../">Accueil ></a></div>
          <div class="pname">    <?php
    echo $infoproduits[0][0];
    ?></div>
          <div class="ref">    <?php
    echo $infoproduits[0][3];
    ?> </div>
          <div class="ratings">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>    <?php
    echo $infoproduits[0][4];
    ?></p>
          <div class="price">    <?php
    echo $infoproduits[0][5];
    ?> </div>
          <div class="rayon">
            <p>Rayon :</p>    <?php
    echo $infoproduits[0][2];
    ?>
          </div>
          </div>
          <form method="post" action="achat_control.php" target="_self">
          <div class="quantity">
            <p>Quantité :</p>
            <input type="number" min="0" max="999999" value="1" name="quantite">
          </div>
          <input type="hidden" value="<?php echo $nomproduit;?>" name="produit">
          <input type="hidden" value="<?php echo $_SESSION['login'];?>" name="user">
          <div class="btn-box">
            <button class="cart-btn">Stockage :     <?php
    echo $infoproduits[0][6];
    ?></button>
            <button>
            <input type="submit" value="Acheter"  class="buy-btn"/></button>
          </div>
          </form>
        </div>
    </div>
    </div>
    <script>
      let bigImg = document.querySelector('.big-img img');
      function showImg(pic) {
        bigImg.src = pic;
      }
    </script>
  </body>
</html>
