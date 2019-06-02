<?php
require_once(realpath(dirname(__FILE__)) . '/org_reservation.php');
require_once(realpath(dirname(__FILE__)) . '/client_reservation.php');

class Workspace{
    private $idWorkspace;
    private $city;
    private $capacity;
    private $address;
    private $org_reservation = array();
	private $client_reservation = array();
    
    /* Constructor */
    public function __construct( $idWorkspace, $city, $capacity, $address){
        $this->idWorkspace = $idWorkspace;
        $this->city = $city;
        $this->capacity = $capacity;
        $this->address = $address;
    }
    
    /**
     * @return the $idWorkSpace
     */
    public function getIdWorkspace()
    {
        return $this->idWorkspace;
    }

    /**
     * @return the $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return the $capacity
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @return the $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return the $reservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * @param field_type $idWorkSpace
     */
    public function setIdWorkSpace($idWorkSpace)
    {
        $this->idWorkSpace = $idWorkSpace;
    }

    /**
     * @param field_type $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @param field_type $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @param field_type $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param multitype: $reservation
     */
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;
    }

    
    
}
