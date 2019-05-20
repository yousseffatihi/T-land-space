<?php
require_once('../models/config.php');
require_once('../models/Subscription.php');

class subscriptionController{
  /* FUNCTION CAN GET ALL SUBSCRIPTION FROM BDD THEN HE RETURN ARRAY OF ADMIN */
  public function getAll(){
    $res = execQuery("SELECT * from Subscription");
    $subs = array();
	while ($data = mysqli_fetch_assoc($res)){
        $subs[] = new Subscription($data['idClient'],$data['idEvent'],$data['DateSubscription']);
	}
	
	return $subs;
  }
  
  /* FUNCTION CAN GET SUBSCRIPTION BY HIS ID FROM BDD THEN HE RETURN ADMIN */
  public function getById($id){
	
	/* TEST IF 'ID' IS NUMERIC */
    if(!is_numeric($id)) return null;
	  
    $res = execQuery("SELECT * from Subscription Where idEvent=".$id);
	
	/* TEST IF TABLE EXIST */
	if(!$res) return null;
	
	$data = mysqli_fetch_row($res);
	$sub = new Subscription($data[0],$data[1],$data[2]);
    return $sub;
  }
  
  /* FUNCTION CAN INSERT NEW SUBSCRIPTION IN BDD */
  /* -1 : argument is not object */
  /*  1 : data inserted succefully */
  /*  0 : data not inserted */
  public function add($sub){
	  if(!is_object($sub)) return -1;
	  
	  $req = "INSERT INTO Subscription(idClient,idEvent,DateSubscription) VALUES('"
	  .$sub->getClient()->getIdPerson();
	  "','"
	  .$sub->getEvent()->getIdPost().
	  "','"
	  .$sub->getDateSubscription().
	  "')";
	  
	  $res = execQuery($req);
	  if($res)
		  return 1;
	  else
		  return 0;
  }
  
  /* FUNCTION CAN DELETE SUBSCRIPTION IN BDD */
  /* -1 : argument is not numeric */
  /*  1 : data deleted succefully */
  /*  0 : data not deleted */
  public function del($id){
	  if(!is_numeric($id)) return -1;
	  
	  $req = "DELETE from Subscription WHERE idEvent=".$id;
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
