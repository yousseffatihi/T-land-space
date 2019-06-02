<?php
require_once(realpath(dirname(__FILE__)) . '/Client.php');
require_once(realpath(dirname(__FILE__)) . '/Event.php');
class Subscription{
    private $dateSubscription;
    private $client;
    private $event;
    
    /* Constructor */
    public function __construct($dateSubscription, $client, $event){
        $this->dateSubscription = $dateSubscription;
        $this->client = $client;
        $this->event = $event;
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