<?php
require_once('../models/config.php');
require_once('../models/Organisation.php');

class organisationController{
  /* FUNCTION CAN RETURN NEW ID GENERATED FROM BDD */
  public function getNewId(){
	  $res = execQuery("SELECT max(ID) from Organisation");
	  return mysqli_fetch_field($res);
  }
  
  /* FUNCTION CAN GET ALL ORGANISATION FROM BDD THEN HE RETURN ARRAY OF ADMIN */
  public function getAll(){
    $res = execQuery("SELECT * from Organisation");
    $orgs = array();
	while ($data = mysqli_fetch_assoc($res)){
        $orgs[] = new Organisation($data['Id'],$data['NameOrganisation'],$data['Responsible'],$data['Email'],$data['Password'],$data['DateOrganisation']);
	}
	
	return $orgs;
  }
  
  /* FUNCTION CAN GET ORGANISATION BY HIS ID FROM BDD THEN HE RETURN ADMIN */
  public function getById($id){
	
	/* TEST IF 'ID' IS NUMERIC */
    if(!is_numeric($id)) return null;
	  
    $res = execQuery("SELECT * from Organisation Where Id=".$id);
	
	/* TEST IF TABLE EXIST */
	if(!$res) return null;
	
	$data = mysqli_fetch_row($res);
	$org = new Organisation($data[0],$data[1],$data[2],$data[3],$data[4],$data[5]);
    return $org;
  }
  
  /* FUNCTION CAN INSERT NEW ORGANISATION IN BDD */
  /* -1 : argument is not object */
  /*  1 : data inserted succefully */
  /*  0 : data not inserted */
  public function add($org){
	  if(!is_object($org)) return -1;
	  $req = "INSERT INTO Organisation(NameOrganisation,Responsible,Email,Password,DateOrganisation) VALUES('"
	  .$org->getNameOrganisation().
	  "','"
	  .$org->getResponsible().
	  "','"
	  .$org->getEmail().
	  "','"
	  .$org->getPassword().
	  "','"
	  .$org->getDateOrganisation().
	  "')";
	  
	  $res = execQuery($req);
	  
	  if($res)
		  return 1;
	  else
		  return 0;
  }
  
  /* FUNCTION CAN DELETE ORGANISATION IN BDD */
  /* -1 : argument is not numeric */
  /*  1 : data deleted succefully */
  /*  0 : data not deleted */
  public function del($id){
	  if(!is_numeric($id)) return -1;
	  
	  $req = "DELETE from Organisation WHERE Id=".$id;
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
