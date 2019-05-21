<?php
require_once('../models/config.php');
require_once('../models/Post.php');

class postController{
  /* FUNCTION CAN RETURN NEW ID GENERATED FROM BDD */
  public function getNewId(){
	  $res = execQuery("SELECT max(idPost) from Post");
	  return mysqli_fetch_field($res);
  }
  
  /* FUNCTION CAN GET ALL POST FROM BDD THEN HE RETURN ARRAY OF ADMIN */
  public function getAll(){
    $res = execQuery("SELECT * from Post");
    $posts = array();
	while ($data = mysqli_fetch_assoc($res)){
        $posts[] = new Post($data['idPost'],$data['NamePost'],$data['TextPost'],$data['Image'],$data['DatePost'],$data['File'],$data['idAdministrator']);
	}
	
	return $posts;
  }
  
  /* FUNCTION CAN GET POST BY HIS ID FROM BDD THEN HE RETURN ADMIN */
  public function getById($id){
	
	/* TEST IF 'ID' IS NUMERIC */
    if(!is_numeric($id)) return null;
	  
    $res = execQuery("SELECT * from Post Where idPost=".$id);
	
	/* TEST IF TABLE EXIST */
	if(!$res) return null;
	
	$data = mysqli_fetch_row($res);
	$post = new Post($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6]);
    return $post;
  }

  /* FUNCTION CAN INSERT NEW POST IN BDD */
  /* -1 : argument is not object */
  /*  1 : data inserted succefully */
  /*  0 : data not inserted */
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
	  
	  $res = execQuery($req);
	  if($res)
		  return 1;
	  else
		  return 0;
  }
  
  /* FUNCTION CAN DELETE POST IN BDD */
  /* -1 : argument is not numeric */
  /*  1 : data deleted succefully */
  /*  0 : data not deleted */
  public function del($id){
	  if(!is_numeric($id)) return -1;
	  
	  $req = "DELETE from Post WHERE idPost=".$id;
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
