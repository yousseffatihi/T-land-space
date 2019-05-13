<?php
require_once(realpath(dirname(__FILE__)) . '/OrganisationReservation.php');

use OrganisationReservation;

/**
 * @access public
 * @author creative
 */
class Organisation {
	/**
	 * @AttributeType int
	 */
	private $_idOrganisation;
	/**
	 * @AttributeType String
	 */
	private $_nameOrganisation;
	/**
	 * @AttributeType String
	 */
	private $_responsible;
	/**
	 * @AttributeType String
	 */
	private $_email;
	/**
	 * @AttributeType String
	 */
	private $_password;
	/**
	 * @AttributeType String
	 */
	private $_dateOrganisation;
	/**
	 * @AssociationType OrganisationReservation
	 * @AssociationMultiplicity 0..*
	 */
	public $_reserve = array();

	/**
	 * @access public
	 */
	public function addReservation() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function observeResevervation() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function deleteReservation() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function updateReservation() {
		// Not yet implemented
	}
}
?>