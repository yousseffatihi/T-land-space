<?php
require_once('../models/config.php');
require_once('../models/Promotion.php');

class promotionController{
  public function getNewId(){
	  $res = execQuery("SELECT max(IdPromotion) from Promotion");
	  return mysqli_fetch_field($res);
  }
  public function getAll(){
    return execQuery("SELECT * from Promotion");
  }
  public function getById($id){
    return execQuery("SELECT * from Promotion Where IdPromotion=".$id);
  }
  public function add($promo){
	  if(!is_object($promo)) return -1;
	  $req = "INSERT INTO Promotion(NamePromotion,TextPromotion,Image,DatePost,File,DatePromotion,DateExpiration,idAdministrator) VALUES('"
	  .$promo->getTitle().
	  "','"
	  .$promo->getText().
	  "','"
	  .$promo->getImage().
	  "','"
	  .$promo->getDatePost().
	  "','"
	  .$promo->getFile().
	  "','"
	  .$promo->getDatePromotion().
	  "','"
	  .$promo->getDateExpiration().
	  "','"
	  .$ownerId.
	  "')";
	  
	  $req = execQuery($req);
	  if($req)
		  return 1;
	  else
		  return 0;
  }
  
  public function del($id){
	  if(!is_numeric($id)) return -1;
	  $req = "DELETE from Promotion WHERE IdPromotion=".$id;
	  $req = execQuery($req);
	  if($req)
		  return 1;
	  else
		  return 0;
  }
  
  public function update(){
	  // TODO:
  }
}
?>
