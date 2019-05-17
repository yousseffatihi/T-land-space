<?php
require_once('../models/config.php');

class AdministratorController{
  public function getNewId(){
	  $res = execQuery("SELECT max(idAdministrator) from Administrator");
	  return mysqli_fetch_field($res);
  }
  public function getAll(){
    return execQuery("SELECT * from Administrator");
  }
  public function getById($id){
    return execQuery("SELECT * from Administrator Where idAdministrator=".$id);
  }
  public function add($admin){
	  if(!is_object($admin)) return -1;
	  $req = "INSERT INTO Administrator(FirstName,LastName,Birthday,Email,Password,Address) VALUES('"
	  .$admin->getFirstName().
	  "','"
	  .$admin->getLastName().
	  "','"
	  .$admin->getBirthday().
	  "','"
	  .$admin->getEmail().
	  "','"
	  .$admin->getPassword().
	  "','"
	  .$admin->getAddress().
	  "')";
	  
	  $req = execQuery($req);
	  if($req)
		  return 1;
	  else
		  return 0;
	  
  }
  public function del($id){
	  if(!is_numeric($id)) return -1;
	  $req = "DELETE from Administrator WHERE idAdministrator=".$id;
	  $req = execQuery($req);
	  if($req)
		  return 1;
	  else
		  return 0;
	  
  }
  
  public function update($admin){
	  if(!is_object($admin)) return -1;
	  $req = "UPDATE Administrator SET 
	  FirstName=".$admin->getFirstName().
	  "LastName=".$admin->getLastName().
	  "Birthday=".$admin->getBirthday().
	  "Email=".$admin->getEmail().
	  "Password=".$admin->getPassword().
	  "Address=".$admin->getAddress().
	  "WHERE idAdministrator=".$admin->getIdPerson();
	  
	  $req = execQuery($req);
	  if($req)
		  return 1;
	  else
		  return 0;
	  
  }
  
}
?>
