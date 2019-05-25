<?php
require_once('../models/client_reservation.php');

class clientresevationController{
  /* FUNCTION CAN GET ALL CLIENT-RESERVATION FROM BDD THEN HE RETURN ARRAY OF RES */
  public function getAll(){
    $res = execQuery("SELECT * from client_reservation");
	$allres = array();
	while ($data = mysqli_fetch_assoc($res)){
        $allres[] = new client_reservation($data['idClient'],$data['idWorkspace'],$data['DateReservation'],$data['NumberOfPlaces'],$data['status']);
	}
	
	return $allres;
  }
  
  /* FUNCTION CAN GET ADMINISTRATOR BY HIS ID FROM BDD THEN HE RETURN ADMIN */
  public function getById($id){
	
	/* TEST IF 'ID' IS NUMERIC */
    if(!is_numeric($id)) return null;
	  
    $res = execQuery("SELECT * from client_reservation Where idClient=".$id);
	
	/* TEST IF TABLE EXIST */
	if(!$res) return null;
	
	$data = mysqli_fetch_row($res);
	$cres = new client_reservation($data[0],$data[1],$data[2],$data[3],$data[4]);
    return $cres;
  }
  
  /* FUNCTION CAN INSERT NEW ADMINISTRATOR IN BDD */
  /* -1 : argument is not object */
  /*  1 : data inserted succefully */
  /*  0 : data not inserted */
  public function add($cres){
	  if(!is_object($cres)) return -1;
	  /* Verification S'il le nomber de place est disponible pour ce client */
	  $numplaces = execQuery("select SUM(NumberOfPlaces) from client_reservation where dateReservation = ".date("y-m-d"));
	  $numfinal = $cres->getWorkspace()->getCapacity() - $numplaces;
	  if($numfinal <= $cres->getNumplace()) return -1;
	  
	  /* Vericiation s'il exist deja une reservation sur la meme date */
	  
	  $cres_already = execQuery("select count(idClient) from client_reservation where dateReservation=".date("y-m-d")." and idClient=".$cres->getClient()->getIdPerson());
	  if($cres_already > 0) return -1;
	  
	  $req = "INSERT INTO client_reservation(idClient,idWorkspace,DateReservation,NumberOfPlaces,status) VALUES('"
	  .$cres->getClient()->getIdPerson().
	  "','"
	  .$cres->getWorkspace()->getIdWorkspace().
	  "','"
	  .$cres->getDateResevation().
	  "','"
	  .$cres->getNumplace().
	  "','"
	  .$cres->getStatus().
	  "')";
	  
	  $res = execQuery($req);
	  
	  if($res)
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
	  
	  $req = "DELETE from client_reservation WHERE idClient=".$id;
	  $res = execQuery($req);
	  
	  if($res)
		  return 1;
	  else
		  return 0;
	  
  }
  
  /* FUNCTION CAN UPDATE SOME INFORMATION OF ADMINISTRATOR IN BDD */
  /* -1 : argument is not object */
  /*  1 : data updated succefully */
  /*  0 : data not updated */
  public function update($cres){
	  if(!is_object($cres)) return -1;
	  
	  $req = "UPDATE client_reservation SET 
	  FirstName=".$cres->getFirstName().
	  "LastName=".$cres->getLastName().
	  "Birthday=".$cres->getBirthday().
	  "Email=".$cres->getEmail().
	  "Password=".$cres->getPassword().
	  "Address=".$cres->getAddress().
	  "WHERE idClient=".$cres->getIdPerson();
	  
	  $res = execQuery($req);
	  
	  if($res)
		  return 1;
	  else
		  return 0;
	  
  }
  
}
?>
