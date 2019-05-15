<?php
require_once(realpath(dirname(__FILE__)) . '/Reservation.php');
require_once(realpath(dirname(__FILE__)) . '/Subscription.php');
require_once(realpath(dirname(__FILE__)) . '/Person.php');
include('config.php');

use Reservation;
use Subscription;
use Person;

class Client extends Person {
    private $reserve = array();
    private $subscibe = array();
    
    /* Constructor */
    public function __construct( $idPerson, $firstName, $lastName, $birthday, $email, $password, $address){
        parent::__construct($idPerson,$firstName,$lastName,$birthday,$email,$password,$address);
    }
    
    /* Member Methods */
    public function addReservation($reserve){
           $this->reserve[] = $reserve;
		   
		   /* Verification S'il le nomber de place est disponible pour ce client */
		   $numplaces = execQuery("select count(NumberOfPlaces) from Reservation where dateReservation = ".date("d/m/Y"));
		   if($numplaces < $reserve[3]) return -1;
		   
           /* Insertion de la reserve sur la table client_reservation */
		   $result = execQuery("INSERT INTO client_reservation values($reserve[0],$reserve[1],$reserve[2],$reserve[3])");
		   if($result)
			   return 1;
		   else
			   return 0;
		   
    }
    
    public function deleteReservation(){
        
    }
    
    public function updateReservation(){
        
    }
    
    public function subscribe(){
        
    }
    
    public function unSubscribe(){
        
    }
}
?>