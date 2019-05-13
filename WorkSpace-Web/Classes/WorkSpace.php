<?php
require_once(realpath(dirname(__FILE__)) . '/OrganisationReservation.php');

use OrganisationReservation;

/**
 * @access public
 * @author creative
 */
class WorkSpace {
	/**
	 * @AttributeType int
	 */
	private $_idWorkSpace;
	/**
	 * @AttributeType String
	 */
	private $_city;
	/**
	 * @AttributeType int
	 */
	private $_capacity;
	/**
	 * @AttributeType String
	 */
	private $_address;
	/**
	 * @AssociationType OrganisationReservation
	 * @AssociationMultiplicity 0..*
	 */
	public $_has = array();
}
?>