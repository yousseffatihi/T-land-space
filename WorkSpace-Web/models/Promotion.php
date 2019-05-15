<?php
class Promotion extends Post{
    /* Member variables */
    private $namePromotion;
    private $datePromotion;
    private $dateExpiration;
    
    /* Constructor */
    public function __construct( $idPost, $text, $image, $datePost, $file, $namePromotion, $datePromotion, $dateExpiration){
        parent::__construct($idPost,$text,$image,$datePost,$file);
        
        $this->namePromotion = $namePromotion;
        $this->datePromotion = $datePromotion;
        $this->dateExpiration = $dateExpiration;
    }
    /**
     * @return the $namePromotion
     */
    public function getNamePromotion()
    {
        return $this->namePromotion;
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
     * @param field_type $namePromotion
     */
    public function setNamePromotion($namePromotion)
    {
        $this->namePromotion = $namePromotion;
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