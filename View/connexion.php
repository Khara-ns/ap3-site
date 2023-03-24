
<div class="masque">
  <div>
    <div class="message">
      connexion
      <form method="post" action="">
		   <label for="login">login</lable>
		   <input type="text" name="login" id="login" required>
		   <br><br>
		   <label for="mdp">Mot de passe</lable>
		   <input type="password" name="mdp" id="mdp" required> <br>
		   <br>
            <input type="submit" value="ce connecté" />

	   </form>
      <button id="close">Fermer</button>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript">

            $(document).ready(function() {
                $("#connexion").click(function() {
                $(".masque").fadeIn();
                $(".message").slideDown();
                });

                $("#close").click(function() {
                $(".message").slideUp();
                $(".masque").fadeOut();
                });
            });
        </script>