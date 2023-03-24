<?php

class Bdd
{
  private $bdd;

  public function __construct(){
    $dsn = 'mysql:dbname=all4sport_bdd;host=btsap3-mysql-container:3306';
    $dbUser = 'root';
    $dbPwd = 'MICROSOFTsucksH4RD';
    //$dbPwd = 'mlesolo1450';

    try {
      $this->bdd = new PDO($dsn, $dbUser, $dbPwd);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function getProduits()
  {
    $sql = "SELECT PRO.produit_id,PRO.produit_nom,MIN(P.photo_fichier) AS photo_fichier FROM PRODUITS AS PRO INNER JOIN PHOTOS P on P.produit_fk = PRO.produit_id Group by PRO.produit_id;";
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function getInfoProduits($produit){
    $sql = "SELECT PRO.produit_nom,PRO.produit_id,R.rayon_libelle,PRO.produit_ref,PRO.produit_description,PRO.produit_coutHT,STO.entrepot_adresse,STO.type FROM PRODUITS AS PRO INNER JOIN RAYON R on PRO.rayon_fk = R.rayon_id INNER JOIN LIEUX_STOCKAGE STO on PRO.stockage_fk = STO.lieu_id WHERE PRO.produit_id = :login;";
    $query =  $this->bdd->prepare($sql);
    $query->execute(array(":login" => $produit));
    return $query->fetchAll();
  }

  public function getInfoProduitsViaUuid($uuid){
    $sql = "SELECT PRO.produit_nom,PRO.produit_id,R.rayon_libelle,PRO.produit_ref,PRO.produit_description,PRO.produit_coutHT,STO.entrepot_adresse,STO.type FROM PRODUITS AS PRO INNER JOIN RAYON R on PRO.rayon_fk = R.rayon_id INNER JOIN LIEUX_STOCKAGE STO on PRO.stockage_fk = STO.lieu_id WHERE PRO.uuid = :login;";
    $query =  $this->bdd->prepare($sql);
    $query->execute(array(":login" => $uuid));
    return $query->fetchAll();
  }

  public function getImgProduits($produit){
    $sql ="SELECT photo_fichier FROM PHOTOS AS P INNER JOIN PRODUITS PRO on PRO.produit_id = P.produit_fk WHERE PRO.produit_id = :login;";
    $query =  $this->bdd->prepare($sql);
    $query->execute(array(":login" => $produit));
    return $query->fetchAll();
  }

  public function getInfoRayons(){
    $sql = "SELECT rayon_libelle, rayon_id FROM RAYON;";
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function getProduitR($rayon)
  {
    $sql = "SELECT PRO.produit_id,PRO.produit_nom,MIN(P.photo_fichier) AS photo_fichier FROM PRODUITS AS PRO INNER JOIN PHOTOS P on P.produit_fk = PRO.produit_id INNER JOIN RAYON R on PRO.rayon_fk = R.rayon_id  WHERE R.rayon_id = :rayon Group by PRO.produit_id;";
    $query =  $this->bdd->prepare($sql);
    $query->execute(array(":rayon" => $rayon));
    return $query->fetchAll();
  }

  public function getConnexion($login,$mdp){
        $sql = "SELECT client_id FROM CLIENT WHERE client_nomUtilisateur = :login and client_motDePasseHash = :pwd";
        $query = $this->bdd->prepare($sql);
        $query->execute(array(":login" => $login, ":pwd" => $mdp));
        return $query->fetchAll();

  }

  public function getClient($idsession){
        $sql = "SELECT client_nom,client_prenom,client_email,client_dateNaissance,client_adresse,client_dateDernierAchat FROM CLIENT WHERE client_nomUtilisateur = :idsession";
        $query = $this->bdd->prepare($sql);
        $query->execute(array(":idsession" => $idsession));
        return $query->fetchAll();

  }
public function recup_panier($client_id){
    $sql = "SELECT client_panier FROM CLIENT WHERE client_id = :client_id";
    $query = $this->bdd->prepare($sql);
    $query->execute(array(":client_id" => $client_id));
    return $query->fetchAll();
  }



    public function ajoutpanier($client_panier, $client_id){
      $sql = "UPDATE CLIENT SET client_panier = :client_panier WHERE client_id = :client_id";
    $req = $this->bdd->prepare($sql);
    $req->execute(array(
      ":client_id" => $client_id,
      ":client_panier" => $client_panier));
      return $req->fetchAll();
  }





 // function insertUser($login, $mdp, $email) {
 //   $insert = "INSERT INTO user(login, password, mail, date_inscription) VALUES(:login,:pass,:mail,:dateI ) ";

   // $d = new DateTime();
   // $bdd = getConnexion();
   // $query = $bdd->prepare($insert);
   // $query->execute(array(":login" => $login ,
   //                         ":pass" => $mdp,
  //                          ":mail" => $email ,
  //                          ":dateI" => $d->format("Y-m-d H:i:s") ));

 //  var_dump($query->errorInfo());
//}

//if ( !empty($_POST['login']) && !empty($_POST['mdp']) && !empty($_POST['mdp2']) && !empty($_POST['email'])) {

 //   if ($_POST['mdp'] != $_POST['mdp2']) {
  //      echo "Erreur, vos mots de passes ne correspondent pas ! <br>";
  //  }

 //   $hash =  hash("sha512", $_POST['mdp']);
 //   insertUser($_POST['login'], $hash ,$_POST['email'] );


//}

}
