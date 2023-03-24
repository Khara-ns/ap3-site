<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css" media="screen" type="text/css" />
    <title>Connexion</title>
  </head>
  <body>
    <div id="container">
            <form method="POST"  action="Controller/gestion_connexion.php">
                <h1>Connexion</h1>
                <br>
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                <br>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <br>
                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if (isset($_GET['error'])){ ?>
                  <div class="alert" role="alert">
                  <?php echo $_GET['error']; ?>
                  </div>
                <?php }?>
                </div>
            </form>
        </div>
  </body>
</html>
