<?php
class Subscription{
    private $idSubscription;
    private $dateSubscription;
    private $client;
    private $event;
    
    /* Constructor */
    public function __construct( $idSubscription, $dateSubscription, $client, $event){
        $this->idSubscription = $idSubscription;
        $this->dateSubscription = $dateSubscription;
        $this->client = $client;
        $this->event = $event;
    }
    
    /**
     * @return the $idSubscription
     */
    public function getIdSubscription()
    {
        return $this->idSubscription;
    }

    /**
     * @return the $dateSubscription
     */
    public function getDateSubscription()
    {
        return $this->dateSubscription;
    }

    /**
     * @return the $client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return the $event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param field_type $idSubscription
     */
    public function setIdSubscription($idSubscription)
    {
        $this->idSubscription = $idSubscription;
    }

    /**
     * @param field_type $dateSubscription
     */
    public function setDateSubscription($dateSubscription)
    {
        $this->dateSubscription = $dateSubscription;
    }

    /**
     * @param field_type $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @param field_type $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    
    
}