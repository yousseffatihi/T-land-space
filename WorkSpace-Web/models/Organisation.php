<?php
class Organisation{
    /* Member variables */
    private $nameOrganisation;
    private $responsible;
    private $email;
    private $password;
    private $dateOrganisation;
    
    /* Constructor */
    public function __construct( $nameOrganisation, $responsible, $email, $password, $dateOrganisation){
        $this->nameOrganisation = $nameOrganisation;
        $this->responsible = $responsible;
        $this->email = $email;
        $this->password = $password;
        $this->dateOrganisation = $dateOrganisation;
    }
    /**
     * @return the $nameOrganisation
     */
    public function getNameOrganisation()
    {
        return $this->nameOrganisation;
    }

    /**
     * @return the $responsible
     */
    public function getResponsible()
    {
        return $this->responsible;
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
     * @return the $dateOrganisation
     */
    public function getDateOrganisation()
    {
        return $this->dateOrganisation;
    }

    /**
     * @param field_type $nameOrganisation
     */
    public function setNameOrganisation($nameOrganisation)
    {
        $this->nameOrganisation = $nameOrganisation;
    }

    /**
     * @param field_type $responsible
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;
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
     * @param field_type $dateOrganisation
     */
    public function setDateOrganisation($dateOrganisation)
    {
        $this->dateOrganisation = $dateOrganisation;
    }

    
    
    
}
?>