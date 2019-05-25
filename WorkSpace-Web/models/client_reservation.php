<?php
require_once(realpath(dirname(__FILE__)) . '/Client.php');
require_once(realpath(dirname(__FILE__)) . '/Workspace.php');

class client_reservation{
    /* Member variables */
	private $client;
	private $workspace;
	private $dateResevation;
	private $numplace;
	private $status;
	
    /* Constructor */
    public function __construct($client, $workspace, $dateResevation, $numplace, $status){
        $this->dateResevation = $dateResevation;
		$this->client = $client;
		$this->workspace = $workspace;
		$this->numplace = $numplace;
		$this->status = $status;
    }
    /**
     * @return the $client
     */
    public function getClient()
    {
        return $this->client;
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
     * @param field_type $client
     */
    public function setClient($client)
    {
        $this->client = $client;
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