<?php
require_once('../models/config.php');
require_once('../models/Client.php');

class clientController{
  public function getNewId(){
	  $res = execQuery("SELECT max(idClient) from Client");
	  return mysqli_fetch_field($res);
  }
  public function getAll(){
    return execQuery("SELECT * from Client");
  }
  public function getById($id){
    return execQuery("SELECT * from Client Where idClient=".$id);
  }
  public function add($client){
	  if(!is_object($client)) return -1;
	  $req = "INSERT INTO Client(FirstName,LastName,Birthday,Email,Password,Address) VALUES('"
	  .$client->getFirstName().
	  "','"
	  .$client->getLastName().
	  "','"
	  .$client->getBirthday().
	  "','"
	  .$client->getEmail().
	  "','"
	  .$client->getPassword().
	  "','"
	  .$client->getAddress().
	  "')";
	  
	  $req = execQuery($req);
	  if($req)
		  return 1;
	  else
		  return 0;
  }
  
  public function del($id){
	  if(!is_numeric($id)) return -1;
	  $req = "DELETE from Client WHERE idClient=".$id;
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
