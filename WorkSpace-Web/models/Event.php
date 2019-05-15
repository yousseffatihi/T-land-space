<?php
class Event extends Post{
    /* Member variables */
    private $nameEvent;
    private $dateEvent;
    private $dateExpiration;
    
    /* Constructor */
    public function __construct( $idPost, $text, $image, $datePost, $file, $nameEvent, $dateEvent, $dateExpiration){
        parent::__construct($idPost,$text,$image,$datePost,$file);
        
        $this->nameEvent = $nameEvent;
        $this->dateEvent = $dateEvent;
        $this->dateExpiration = $dateExpiration;
    }
    /**
     * @return the $nameEvent
     */
    public function getNameEvent()
    {
        return $this->nameEvent;
    }

    /**
     * @return the $dateEvent
     */
    public function getDateEvent()
    {
        return $this->dateEvent;
    }

    /**
     * @return the $dateExpiration
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * @param field_type $nameEvent
     */
    public function setNameEvent($nameEvent)
    {
        $this->nameEvent = $nameEvent;
    }

    /**
     * @param field_type $dateEvent
     */
    public function setDateEvent($dateEvent)
    {
        $this->dateEvent = $dateEvent;
    }

    /**
     * @param field_type $dateExpiration
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;
    }

    
    
}

?>