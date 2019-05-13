<?php
require_once(realpath(dirname(__FILE__)) . '/ClientReservation.php');
require_once(realpath(dirname(__FILE__)) . '/Subscription.php');
require_once(realpath(dirname(__FILE__)) . '/Person.php');

use ClientReservation;
use Subscription;
use Person;

/**
 * @access public
 * @author creative
 */
class Client extends Person {
	/**
	 * @AssociationType ClientReservation
	 * @AssociationMultiplicity 0..*
	 */
	public $_reserve = array();
	/**
	 * @AssociationType Subscription
	 * @AssociationMultiplicity 0..*
	 */
	public $_subscibe = array();

	/**
	 * @access public
	 */
	public function addReservation() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function deleteResevation() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function updateReservation() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function subsribe() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function unSubscribe() {
		// Not yet implemented
	}
}
?>