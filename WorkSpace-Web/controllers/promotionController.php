<?php
require_once('../models/config.php');
require_once('../models/Promotion.php');

class promotionController{
  /* FUNCTION CAN RETURN NEW ID GENERATED FROM BDD */
  public function getNewId(){
	  $res = execQuery("SELECT max(idPromotion) from Promotion");
	  return mysqli_fetch_field($res);
  }
  
  /* FUNCTION CAN GET ALL PROMOTION FROM BDD THEN HE RETURN ARRAY OF ADMIN */
  public function getAll(){
    $res = execQuery("SELECT * from Promotion");
    $promos = array();
	while ($data = mysqli_fetch_assoc($res)){
        $promos[] = new Promotion($data['idPromotion'],
		                          $data['NamePromotion'],
		                          $data['TextPromotion'],
		                          $data['Image'],
		                          $data['DatePost'],
								  $data['DatePromotion'],
		                          $data['DateExpiration'],
		                          $data['idAdministrator']);
	}
	
	return $promos;
  }
  
  /* FUNCTION CAN GET PROMOTION BY HIS ID FROM BDD THEN HE RETURN ADMIN */
  public function getById($id){
	
	/* TEST IF 'ID' IS NUMERIC */
    if(!is_numeric($id)) return null;
	  
    $res = execQuery("SELECT * from Promotion Where idPromotion=".$id);
	
	/* TEST IF TABLE EXIST */
	if(!$res) return null;
	
	$data = mysqli_fetch_row($res);
	$promo = new Promotion($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7]);
    return $promo;
  }
  
  /* FUNCTION CAN INSERT NEW PROMOTION IN BDD */
  /* -1 : argument is not object */
  /*  1 : data inserted succefully */
  /*  0 : data not inserted */
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
	  
	  $res = execQuery($req);
	  if($res)
		  return 1;
	  else
		  return 0;
  }
  
  /* FUNCTION CAN DELETE PROMOTION IN BDD */
  /* -1 : argument is not numeric */
  /*  1 : data deleted succefully */
  /*  0 : data not deleted */
  public function del($id){
	  if(!is_numeric($id)) return -1;
	  
	  $req = "DELETE from Promotion WHERE idPromotion=".$id;
	  $res = execQuery($req);
	  
	  if($res)
		  return 1;
	  else
		  return 0;
  }
  
  public function update(){
	  // TODO:
  }
}
?>
