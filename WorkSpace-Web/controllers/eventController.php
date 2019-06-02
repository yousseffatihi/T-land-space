<?php
require_once('../models/config.php');
require_once('../models/Event.php');

class eventController{
  /* FUNCTION CAN RETURN NEW ID GENERATED FROM BDD */
  public function getNewId(){
	  $res = execQuery("SELECT max(idEvent) from Event");
	  return mysqli_fetch_field($res);
  }
  
  /* FUNCTION CAN GET ALL EVENT FROM BDD THEN HE RETURN ARRAY OF ADMIN */
  public function getAll(){
    $res = execQuery("SELECT * from Event");
    $events = array();
	while ($data = mysqli_fetch_assoc($res)){
        $events[] = new Event($data['idEvent'],
		                      $data['NameEvent'],
		                      $data['TextEvent'],
		                      $data['Image'],
		                      $data['DatePost'],
							  $data['DateEvent'],
		                      $data['DateExpiration'],
		                      $data['idAdministrator']);
	}
	
	return $events;
  }
  
  /* FUNCTION CAN GET EVENT BY HIS ID FROM BDD THEN HE RETURN ADMIN */
  public function getById($id){
	
	/* TEST IF 'ID' IS NUMERIC */
    if(!is_numeric($id)) return null;
	  
    $res = execQuery("SELECT * from Event Where idEvent=".$id);
	
	/* TEST IF TABLE EXIST */
	if(!$res) return null;
	
	$data = mysqli_fetch_row($res);
	$event = new Event($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7]);
    return $event;
  }
  
  /* FUNCTION CAN INSERT NEW EVENT IN BDD */
  /* -1 : argument is not object */
  /*  1 : data inserted succefully */
  /*  0 : data not inserted */
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
	  
	  $res = execQuery($req);
	  if($res)
		  return 1;
	  else
		  return 0;
  }
  
  /* FUNCTION CAN DELETE EVENT IN BDD */
  /* -1 : argument is not numeric */
  /*  1 : data deleted succefully */
  /*  0 : data not deleted */
  public function del($id){
	  if(!is_numeric($id)) return -1;
	  
	  $req = "DELETE from Event WHERE idEvent=".$id;
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
