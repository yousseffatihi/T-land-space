<?php
class Workspace{
    private $idWorkSpace;
    private $city;
    private $capacity;
    private $address;
    private $reservation = array();
    
    /* Constructor */
    public function __construct( $idWorkSpace, $city, $capacity, $address){
        $this->idWorkSpace = $idWorkSpace;
        $this->city = $city;
        $this->capacity = $capacity;
        $this->address = $address;
    }
    
    /**
     * @return the $idWorkSpace
     */
    public function getIdWorkSpace()
    {
        return $this->idWorkSpace;
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
