<?php
class Post{
    /* Member variables */
    private $idPost;
    private $text;
    private $image;
    private $datePost;
    private $file;
    
    public function __construct( $idPost, $text, $image, $datePost, $file){
        $this->idPost = $idPost;
        $this->text = $text;
        $this->image = $image;
        $this->datePost = $datePost;
        $this->file = $file;
    }
    
    /**
     * @return the $idPost
     */
    public function getIdPost()
    {
        return $this->idPost;
    }

    /**
     * @return the $text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return the $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return the $datePost
     */
    public function getDatePost()
    {
        return $this->datePost;
    }

    /**
     * @return the $file
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param field_type $idPost
     */
    public function setIdPost($idPost)
    {
        $this->idPost = $idPost;
    }

    /**
     * @param field_type $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @param field_type $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @param field_type $datePost
     */
    public function setDatePost($datePost)
    {
        $this->datePost = $datePost;
    }

    /**
     * @param field_type $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

     
}
?>