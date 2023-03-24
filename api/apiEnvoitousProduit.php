<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

    require_once "../Model/bdd.php";
 //$_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'login')
if ( "sqdfdsjlkdfhqshdfjkhdqkjhdsfjhfdgojesfgnmnsfhfdhjkshfhjfsiops" ==($_POST['test']))    {
    $bdd = new Bdd();
    $log = $bdd->getProduits();
    
    if (!empty($log)) {
        $response = array($log);
    } else {
        $response = array('success' => false, 'error' => 'erreur Produit');
    }
}else{
    $response = array('success' => false, 'error' => 'BDD erreur');
}
echo json_encode($response);
?>