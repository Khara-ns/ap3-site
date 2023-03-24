<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

require_once "../Model/bdd.php";
if ( empty($_POST['uuid'])){
    $response = array(null);
}else{
    $uuid = $_POST['uuid'];
    $bdd = new Bdd();
    $log = $bdd->getInfoProduitsViaUuid($uuid);
    $response = $log;
    }
echo json_encode($response);

?>