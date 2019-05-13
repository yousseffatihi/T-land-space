<?php
require_once(realpath(dirname(__FILE__)) . '/Client.php');
require_once(realpath(dirname(__FILE__)) . '/Event.php');

use Client;
use Event;

/**
 * @access public
 * @author creative
 */
class Subscription {
	/**
	 * @AttributeType int
	 */
	private $_idSubscription;
	/**
	 * @AttributeType Date
	 */
	private $_dateSubscription;
	/**
	 * @AssociationType Client
	 * @AssociationMultiplicity 1
	 */
	public $_subscibe;
	/**
	 * @AssociationType Event
	 * @AssociationMultiplicity 1
	 */
	public $_unnamed_Event_;
}
?>