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
    <div class="flex-box">
        <div class="left">
            <div class="big-img">
                <img src="../image/logo.jpg" alt="Produit_Image_1">
            </div>
            <div class="images">
                <div class="small-img">
                <img src="../image/logo.jpg" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                <img src="../image/logo.jpg" onclick="showImg(this.src)">
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
          <div class="url">Accueil > Produit</div>
          <div class="pname">Titre</div>
          <div class="ratings">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="price">0,00 €</div>
          <div class="size">
            <p>Niveau :</p>
            <div class="psize active">D</div>
            <div class="psize">I</div>
            <div class="psize">E</div>
            <div class="psize">M</div>
          </div>
          <div class="quantity">
            <p>Quantité :</p>
            <input type="number" min="1" max="5" value="1">
          </div>
          <div class="btn-box">
            <button class="cart-btn">Ajouter la carte</button>
            <button class="buy-btn">Acheter</button>
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