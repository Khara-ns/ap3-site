<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

    require_once "../Model/bdd.php";
 //$_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'login')
if ( !empty($_POST['username']) && !empty($_POST['password']))    {
    $login = $_POST['username'];
    $mdp =  hash("sha256", $_POST['password']);
    $bdd = new Bdd();
    $log = $bdd->getConnexion($login,$mdp);
    if (!empty($log)){
        $log = $log[0]['client_id'];
    }
    
    if (!empty($log)) {
        $response = array('success' => true);
    } else {
        $response = array('success' => false, 'error' => 'Mauvais identifiants ou mot de passe');
    }
}else{
    $response = array('success' => false, 'error' => 'BDD erreur');
}
echo json_encode($response);
?>

