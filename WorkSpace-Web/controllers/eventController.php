<?php
require_once('../models/config.php');
require_once('../models/Event.php');

class eventController{
  public function getNewId(){
	  $res = execQuery("SELECT max(IdEvent) from Event");
	  return mysqli_fetch_field($res);
  }
  public function getAll(){
    return execQuery("SELECT * from Event");
  }
  public function getById($id){
    return execQuery("SELECT * from Event Where idEvent=".$id);
  }
  public function add($event,$ownerId){
	  if(!is_object($event)) return -1;
	  $req = "INSERT INTO Event(NameEvent,TextEvent,Image,DatePost,File,DateEvent,DateExpiration,idAdministrator) VALUES('"
	  .$event->getTitle().
	  "','"
	  .$event->getText().
	  "','"
	  .$event->getImage().
	  "','"
	  .$event->getDatePost().
	  "','"
	  .$event->getFile().
	  "','"
	  .$event->getDateEvent().
	  "','"
	  .$event->getDateExpiration().
	  "','"
	  .$ownerId.
	  "')";
	  
	  $req = execQuery($req);
	  if($req)
		  return 1;
	  else
		  return 0;
  }
  
  public function del($id){
	  if(!is_numeric($id)) return -1;
	  $req = "DELETE from Event WHERE IdEvent=".$id;
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
