<?php
require_once(realpath(dirname(__FILE__)) . '/Post.php');
class Promotion extends Post{
    /* Member variables */
    private $datePromotion;
    private $dateExpiration;
    
    /* Constructor */
    public function __construct( $idPost, $title, $text, $image, $datePost, $datePromotion, $dateExpiration, $admin){
        parent::__construct($idPost,$title,$text,$image,$datePost,'',$admin);
        
        $this->datePromotion = $datePromotion;
        $this->dateExpiration = $dateExpiration;
    }
    /**
     * @return the $datePromotion
     */
    public function getDatePromotion()
    {
        return $this->datePromotion;
    }

    /**
     * @return the $dateExpiration
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * @param field_type $datePromotion
     */
    public function setDatePromotion($datePromotion)
    {
        $this->datePromotion = $datePromotion;
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