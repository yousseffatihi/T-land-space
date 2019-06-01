<?php
require_once(realpath(dirname(__FILE__)) . '/Post.php');

class Event extends Post{
    /* Member variables */
    private $dateEvent;
    private $dateExpiration;
    
    /* Constructor */
    public function __construct($idPost, $title, $text, $image, $datePost, $dateEvent, $dateExpiration,$admin){
        parent::__construct($idPost,$title,$text,$image,$datePost,'',$admin);
        
        $this->dateEvent = $dateEvent;
        $this->dateExpiration = $dateExpiration;
    }

    /**
     * @return the $dateExpiration
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }
     
	/**
     * @param field_type $dateExpiration
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;
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
}
    

?>