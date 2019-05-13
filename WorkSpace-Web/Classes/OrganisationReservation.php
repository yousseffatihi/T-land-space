<?php
require_once(realpath(dirname(__FILE__)) . '/Organisation.php');
require_once(realpath(dirname(__FILE__)) . '/WorkSpace.php');

use Organisation;
use WorkSpace;

/**
 * @access public
 * @author creative
 */
class OrganisationReservation {
	/**
	 * @AttributeType int
	 */
	private $_idReservation;
	/**
	 * @AttributeType Date
	 */
	private $_dateReservation;
	/**
	 * @AssociationType Organisation
	 * @AssociationMultiplicity 1
	 */
	public $_reserve;
	/**
	 * @AssociationType WorkSpace
	 * @AssociationMultiplicity 1
	 */
	public $_has;
}
?>