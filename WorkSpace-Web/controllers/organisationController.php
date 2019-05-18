<?php
require_once('../models/config.php');
require_once('../models/Organisation.php');

class organisationController{
  public function getNewId(){
	  $res = execQuery("SELECT max(ID) from Organisation");
	  return mysqli_fetch_field($res);
  }
  public function getAll(){
    return execQuery("SELECT * from Organisation");
  }
  public function getById($id){
    return execQuery("SELECT * from Organisation Where ID=".$id);
  }
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
	  
	  $req = execQuery($req);
	  if($req)
		  return 1;
	  else
		  return 0;
  }
  
  public function del($id){
	  if(!is_numeric($id)) return -1;
	  $req = "DELETE from Organisation WHERE ID=".$id;
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
