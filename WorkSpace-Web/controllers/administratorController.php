<?php
require_once('../models/config.php');
require_once('../models/Administrator.php');

class AdministratorController{
  /* FUNCTION CAN RETURN NEW ID GENERATED FROM BDD */
  public function getNewId(){
	  $res = execQuery("SELECT max(idAdministrator) from Administrator");
	  return mysqli_fetch_field($res);
  }
  
  /* FUNCTION CAN GET ALL ADMINISTRATOR FROM BDD THEN HE RETURN ARRAY OF ADMIN */
  public function getAll(){
    $res = execQuery("SELECT * from Administrator");
	$admins = array();
	while ($data = mysqli_fetch_assoc($res)){
        $admins[] = new Administrator($data['idAdministrator'],$data['FirstName'],$data['LastName'],$data['Birthday'],$data['Email'],$data['Password'],$data['Address']);
	}
	
	return $admins;
  }
  
  /* FUNCTION CAN GET ADMINISTRATOR BY HIS ID FROM BDD THEN HE RETURN ADMIN */
  public function getById($id){
	
	/* TEST IF 'ID' IS NUMERIC */
    if(!is_numeric($id)) return null;
	  
    $res = execQuery("SELECT * from Administrator Where idAdministrator=".$id;
	
	/* TEST IF TABLE EXIST */
	if(!$res) return null;
	
	$data = mysqli_fetch_row($res);
	$admin = new Administrator($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6]);
    return $admin;
  }
  
  /* FUNCTION CAN INSERT NEW ADMINISTRATOR IN BDD */
  /* -1 : argument is not object */
  /*  1 : data inserted succefully */
  /*  0 : data not inserted */
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
  
  /* FUNCTION CAN DELETE ADMINISTRATOR IN BDD */
  /* -1 : argument is not numeric */
  /*  1 : data deleted succefully */
  /*  0 : data not deleted */
  public function del($id){
	  if(!is_numeric($id)) return -1;
	  $req = "DELETE from Administrator WHERE idAdministrator=".$id;
	  $req = execQuery($req);
	  if($req)
		  return 1;
	  else
		  return 0;
	  
  }
  
  /* FUNCTION CAN UPDATE SOME INFORMATION OF ADMINISTRATOR IN BDD */
  /* -1 : argument is not object */
  /*  1 : data updated succefully */
  /*  0 : data not updated */
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
