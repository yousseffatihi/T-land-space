<?php
require_once(realpath(dirname(__FILE__)) . '/Client.php');
require_once(realpath(dirname(__FILE__)) . '/WorkSpace.php');

use Client;
use WorkSpace;

class Reservation{
    /* Member variables */
    private $idReservation;
    private $dateResevation;
	private $client;
	private $workplace;
	private $numplace;
	
    /* Constructor */
    public function __construct( $idReservation, $dateResevation, $client, $workplace, $numplace){
        $this->idReservation = $idReservation;
        $this->dateResevation = $dateResevation;
		$this->client = $client;
		$this->workplace = $workplace;
		$this->numplace = $numplace;
    }
    /**
     * @return the $idReservation
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * @return the $dateResevation
     */
    public function getDateResevation()
    {
        return $this->dateResevation;
    }

    /**
     * @param field_type $idReservation
     */
    public function setIdReservation($idReservation)
    {
        $this->idReservation = $idReservation;
    }

    /**
     * @param field_type $dateResevation
     */
    public function setDateResevation($dateResevation)
    {
        $this->dateResevation = $dateResevation;
    }
    /**
     * @return the $client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return the $workplace
     */
    public function getWorkplace()
    {
        return $this->workplace;
    }

    /**
     * @param field_type $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @param field_type $workplace
     */
    public function setWorkplace($workplace)
    {
        $this->workplace = $workplace;
    }
    /**
     * @return the $numplace
     */
    public function getNumplace()
    {
        return $this->numplace;
    }

    /**
     * @param field_type $numplace
     */
    public function setNumplace($numplace)
    {
        $this->numplace = $numplace;
    }


    
    
    
}
?>   