<?php
require_once('../models/config.php');
require_once('../models/Subscription.php');

class subscriptionController{
  public function getAll(){
    return execQuery("SELECT * from Subscription");
  }
  public function getById($id){
    return execQuery("SELECT * from Subscription Where IdEvent=".$id);
  }
  public function add($sub){
	  if(!is_object($sub)) return -1;
	  $req = "INSERT INTO Subscription(IdClient,IdEvent,DateSubscription) VALUES('"
	  .$sub->getClient()->getIdPerson();
	  "','"
	  .$sub->getEvent()->getIdPost().
	  "','"
	  .$sub->getDateSubscription().
	  "')";
	  
	  $req = execQuery($req);
	  if($req)
		  return 1;
	  else
		  return 0;
  }
  
  public function del($id){
	  if(!is_numeric($id)) return -1;
	  $req = "DELETE from Subscription WHERE IdEvent=".$id;
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
