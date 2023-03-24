<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if ( !empty($_POST['username']) && !empty($_POST['password']) )
    {
        $login = $_POST['username'];
        $mdp =  hash("sha256", $_POST['password']);

        require_once "../Model/bdd.php";
        $bdd = new Bdd();
        $log = $bdd->getConnexion($login,$mdp);
        if (!empty($log)){
            $log = $log[0]['client_id'];
        }
    }

    if (!empty($log)) {
      
    session_start([]);

    $_SESSION["login"] = $log;

        header("Location: produits.php");
        echo "Vous êtes connecté !";
    } else {
        $_GET['error'] = "Erreur , le login et le mot de passe ne correspondent pas.";
        echo "Erreur,  Vous allez etre redirigé";
        header("Refresh: 2; ../login.php?error=". htmlspecialchars($_GET['error']));
        exit;
    }
