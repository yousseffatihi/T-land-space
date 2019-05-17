<?php
require_once('../models/config.php');
require_once('../models/Post.php');

class postController{
  public function getNewId(){
	  $res = execQuery("SELECT max(IdPost) from Post");
	  return mysqli_fetch_field($res);
  }
  public function getAll(){
    return execQuery("SELECT * from Post");
  }
  public function getById($id){
    return execQuery("SELECT * from Post Where idPost=".$id);
  }
  public function add($post,$ownerId){
	  if(!is_object($post)) return -1;
	  $req = "INSERT INTO Post(NamePost,TextPost,Image,DatePost,File,idAdministrator) VALUES('"
	  .$post->getTitle().
	  "','"
	  .$post->getText().
	  "','"
	  .$post->getImage().
	  "','"
	  .$post->getDatePost().
	  "','"
	  .$post->getFile().
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
	  $req = "DELETE from Post WHERE IdPost=".$id;
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
