<?php
require_once(realpath(dirname(__FILE__)) . '/Post.php');
require_once(realpath(dirname(__FILE__)) . '/Person.php');

class Administrator extends Person {
    
    private $posts = array();
    
    /* Constructor */
    public function __construct( $idPerson, $firstName, $lastName, $birthday, $email, $password, $address){
        parent::__construct($idPerson,$firstName,$lastName,$birthday,$email,$password,$address);
    }
    
    /* Member Methods */
    public function showClients(){
        
    }
    
    public function addPost(){
        
    }
    
    public function deletePost(){
        
    }
    
    public function updatePost(){
        
    }
    
    public function addEvent(){
        
    }
    
    public function deleteEvent(){
        
    }
    
    public function updateEvent(){
        
    }
    
    public function addPromotion(){
        
    }
    
    public function deletePromotion(){
        
    }
    
    public function createAdmin(){
        
    }
}
?>