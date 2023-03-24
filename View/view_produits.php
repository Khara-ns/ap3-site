<?php
include "../View/header.php"
?>
<section class="banniere" id="banniere">
      <div class="contenu">
          <h2>Chez All4Sport, tout pour le sport !</h2>
          <p>All4Sport vous accompagne dans votre démarche sportive et ce peu importe le sport pratiqué !</p>
          <a href="#produits" class="btn1">Nos Produits</a>
          <?php if (!isset($_SESSION['login'])){ ?>
          <a href="../login.php" class="btn2">Connexion</a> <?php }?>
      </div>
    </section>
    <section class="informations" id="informations">
        <div class="row">
            <div class="col50">
                <h2 class="titre-texte"><span>I</span>nformations</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class="col50">
                <div class="img">
                    <img src="../image/vitrine.jpg" alt="image">
                </div>
            </div>
        </div>
    </section>
    <section class="produits" id="produits">
      <div class="titre">
          <h2 class="titre-texte"><span>P</span>roduits</h2>
          <p>Voici des articles, de quoi convenir à tous vos besoins !</p>
      </div>

      <div id="menu-1">
        <div id="menup">Rayon</div>
          <div id="menu1" style = "display:none;">
                <?php 
                    foreach ($rayons as $rayon) {?>
                    <a href='produits.php?rayon=<?= $rayon['rayon_id'] ?>'>
                        <?php echo "<div class='bouton'>" . $rayon['rayon_libelle']. "<br></div>";}?>
                    <a>
                
          </div>
      </div>

      <div class="contenu">

    <?php
    foreach ($produits as $produit) {?>
        <a href='info_produit.php?produit=<?php echo ($nomproduit = $produit['produit_id'])?>'>
        <div class="box">    
            <div class="imbox">
            <?php
            echo "<img src='../imageproduit/" . $produit['photo_fichier'] ."'>";?>
            </div>
            <div class="text">

                  <?php echo " <h3>"  . str_replace("_", ' ',$produit['produit_nom']) . "</h3> ";?>
            </div>
        </div></a>
      <?php } ?>
      </div>
      </div>
    </section>
    <section class="magasin" id="magasin">
      <div class="titre">
          <h2 class="titre-texte">Nos <span>M</span>agasins</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
      </div>
      <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="../image/logo.jpg" alt="">
            </div>
            <div class="text">
                <h3>Valenciennes</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="../image/logo.jpg" alt="">
            </div>
            <div class="text">
                <h3>Saint-Saulve</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="../image/logo.jpg" alt="">
            </div>
            <div class="text">
                <h3>Marly</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="../image/logo.jpg" alt="">
            </div>
            <div class="text">
                <h3>Vicq</h3>
            </div>
        </div>
        </div>
     </div>
    </section>
    <section class="commentaires" id="commentaires">
    <div class="titre blanc">
        <h2 class="titre-texte">Vos <span>C</span>ommentaires</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="../image/logo.jpg" alt="">
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <h3>Commentaires1</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="../image/logo.jpg" alt="">
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <h3>Commentaires2</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="../image/logo.jpg" alt="">
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <h3>Commentaires3</h3>
            </div>
        </div>
    </div>
 </section>
 <section class="contact" id="contact">
     <div class="titre noir">
         <h2 class="titre-text"><span>C</span>ontact</h2>
         <p>Des questions ? Vous pouvez nous contacter a l'aide du formulaire ci-dessous !</p>
     </div>
     <div class="contactform">
         <h3>Envoyer un message</h3>
         <div class="inputboite">
             <input type="text" placeholder="Nom">
         </div>
         <div class="inputboite">
            <input type="text" placeholder="email">
         </div>
         <div class="inputboite">
            <textarea placeholder="message"></textarea>
         </div>
         <div class="inputboite">
             <input type="submit" value="envoyer">
         </div>
     </div>
 </section>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript">

        $(document).ready(function() {
            var visible1 = false;

            $('#menu-1').mouseover(function() {
                if (visible1 == false){
                    $("#menu1").css("display", "block");
                    visible1 = true;
                }
            });
            $('#menu-1').mouseleave(function() {
                if (visible1 == true){
                    $("#menu1").css("display", "none");
                    visible1 = false;
                }
            });
            $('.bouton').mouseover(function() {
                   $(this).css('background-color', '#999999');
            });
            $('.bouton').mouseleave(function() {
                  $(this).css('background-color', '#ffffff');
            });

        });
      </script>
