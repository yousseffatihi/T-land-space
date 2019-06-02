<?php
class Post{
    /* Member variables */
    private $idPost;
	private $title;
    private $text;
    private $image;
    private $datePost;
    private $file;
	private $admin;
    
    public function __construct( $idPost, $title, $text, $image, $datePost, $file, $admin){
        $this->idPost = $idPost;
		$this->title = $title;
        $this->text = $text;
        $this->image = $image;
        $this->datePost = $datePost;
        $this->file = $file;
		$this->admin = $admin;
    }
    
    /**
     * @return the $idPost
     */
    public function getIdPost()
    {
        return $this->idPost;
    }
    
	public function getAdmin()
    {
        return $this->admin;
    }
	public function setAdmin($admin)
    {
        $this->admin = $admin;
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
     * @param field_type $file
     */
    public function getTitle()
    {
        return $this->title;
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
	
	/**
     * @param field_type $datePost
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    

     
}
?>