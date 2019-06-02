<?php
require_once(realpath(dirname(__FILE__)) . '/Organisation.php');
require_once(realpath(dirname(__FILE__)) . '/Workspace.php');

class org_reservation{
    /* Member variables */
    private $org;
	private $workspace;
    private $dateResevation;
	private $numplace;
	private $status;
	
    /* Constructor */
    public function __construct($dateResevation, $org, $workspace, $numplace, $status){
        $this->dateResevation = $dateResevation;
		$this->org = $org;
		$this->workspace = $workspace;
		$this->numplace = $numplace;
		$this->status = $status;
    }
    /**
     * @return the $org
     */
    public function getOrg()
    {
        return $this->org;
    }

    /**
     * @return the $workspace
     */
    public function getWorkspace()
    {
        return $this->workspace;
    }

    /**
     * @return the $dateResevation
     */
    public function getDateResevation()
    {
        return $this->dateResevation;
    }

    /**
     * @return the $numplace
     */
    public function getNumplace()
    {
        return $this->numplace;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param field_type $org
     */
    public function setOrg($org)
    {
        $this->org = $org;
    }

    /**
     * @param field_type $workspace
     */
    public function setWorkspace($workspace)
    {
        $this->workspace = $workspace;
    }

    /**
     * @param field_type $dateResevation
     */
    public function setDateResevation($dateResevation)
    {
        $this->dateResevation = $dateResevation;
    }

    /**
     * @param field_type $numplace
     */
    public function setNumplace($numplace)
    {
        $this->numplace = $numplace;
    }

    /**
     * @param field_type $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    
    
}
?>   