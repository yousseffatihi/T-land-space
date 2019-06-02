<?php
class Person {
    /* Member variables */
    private $idPerson;
    private $firstName;
    private $lastName;
    private $birthday;
    private $email;
    private $password;
    private $address;
    
    /* Constructor */
    public function __construct( $idPerson, $firstName, $lastName, $birthday, $email, $password, $address){
        $this->idPerson = $idPerson;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthday = $birthday;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
        
    }
    
    /**
     * @return the $idPerson
     */
    public function getIdPerson()
    {
        return $this->idPerson;
    }

    /**
     * @return the $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return the $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return the $birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return the $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return the $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param field_type $idPerson
     */
    public function setIdPerson($idPerson)
    {
        $this->idPerson = $idPerson;
    }

    /**
     * @param field_type $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param field_type $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param field_type $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @param field_type $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param field_type $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param field_type $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
    
    /**
     * @return the $email
     */
    public function ObserveReservation(){
        /* TODO */
    }

}
?>