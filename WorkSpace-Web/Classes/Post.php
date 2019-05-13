<?php
require_once(realpath(dirname(__FILE__)) . '/Administrateur.php');

use Administrateur;

/**
 * @access public
 * @author creative
 */
class Post {
	/**
	 * @AttributeType int
	 */
	private $_idPost;
	/**
	 * @AttributeType String
	 */
	private $_text;
	/**
	 * @AttributeType String
	 */
	private $_image;
	/**
	 * @AttributeType Date
	 */
	private $_datePost;
	/**
	 * @AttributeType String
	 */
	private $_file;
	/**
	 * @AssociationType Administrateur
	 * @AssociationMultiplicity 1
	 */
	public $_manage;
}
?>