<?php
require_once(realpath(dirname(__FILE__)) . '/Subscription.php');
require_once(realpath(dirname(__FILE__)) . '/Post.php');

use Subscription;
use Post;

/**
 * @access public
 * @author creative
 */
class Event extends Post {
	/**
	 * @AttributeType String
	 */
	private $_nameEvent;
	/**
	 * @AttributeType Date
	 */
	private $_dateEvent;
	/**
	 * @AttributeType Date
	 */
	private $_dateExpiration;
	/**
	 * @AssociationType Subscription
	 * @AssociationMultiplicity 0..*
	 */
	public $_unnamed_Subscription_ = array();
}
?>