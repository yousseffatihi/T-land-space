<?php
require_once(realpath(dirname(__FILE__)) . '/Client.php');
require_once(realpath(dirname(__FILE__)) . '/WorkSpace.php');

use Client;
use WorkSpace;

/**
 * @access public
 * @author creative
 */
class ClientReservation {
	/**
	 * @AttributeType int
	 */
	private $_idReservation;
	/**
	 * @AttributeType Date
	 */
	private $_dateReservation;
	/**
	 * @AssociationType Client
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