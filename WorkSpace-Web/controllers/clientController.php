<?php
require_once('../models/config.php');
require_once('../models/Client.php');

class clientController{
  /* FUNCTION CAN RETURN NEW ID GENERATED FROM BDD */
  public function getNewId(){
	  $res = execQuery("SELECT max(idClient) from Client");
	  return mysqli_fetch_field($res);
  }

  /* FUNCTION CAN GET ALL CLIENT FROM BDD THEN HE RETURN ARRAY OF ADMIN */
  public function getAll(){
    $res = execQuery("SELECT * from Client");
	$clients = array();
	while ($data = mysqli_fetch_assoc($res)){
        $clients[] = new Client($data['idClient'],$data['FirstName'],$data['LastName'],$data['Birthday'],$data['Email'],$data['Password'],$data['Address']);
	}

	return $clients;
  }

  /* FUNCTION CAN GET CLIENT BY HIS ID FROM BDD THEN HE RETURN ADMIN */
  public function getById($id){

	/* TEST IF 'ID' IS NUMERIC */
    if(!is_numeric($id)) return null;

    $res = execQuery("SELECT * from Client Where idClient=".$id;

	/* TEST IF TABLE EXIST */
	if(!$res) return null;

	$data = mysqli_fetch_row($res);
	$client = new Client($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6]);
    return $client;
  }

  /* FUNCTION CAN INSERT NEW CLIENT IN BDD */
  /* -1 : argument is not object */
  /*  1 : data inserted succefully */
  /*  0 : data not inserted */
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

	  $res = execQuery($req);
	  if($res)
		  return 1;
	  else
		  return 0;
  }

  /* FUNCTION CAN DELETE CLIENT IN BDD */
  /* -1 : argument is not numeric */
  /*  1 : data deleted succefully */
  /*  0 : data not deleted */
  public function del($id){
	  if(!is_numeric($id)) return -1;

	  $req = "DELETE from Client WHERE idClient=".$id;
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
