<?php
require_once(realpath(dirname(__FILE__)) . '/Post.php');
require_once(realpath(dirname(__FILE__)) . '/Person.php');

class Administrator extends Person {
    
    private $posts = array();
    
    /* Constructor */
    public function __construct($idPerson, $firstName, $lastName, $birthday, $email, $password, $address){
        parent::__construct($idPerson,$firstName,$lastName,$birthday,$email,$password,$address);
    }
    
    public function getPosts(){
        return $posts;
    }
	public function setPosts($posts){
         $this->posts = $posts;
    }
}
?>