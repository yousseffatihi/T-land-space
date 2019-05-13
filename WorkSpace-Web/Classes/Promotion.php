<?php
require_once(realpath(dirname(__FILE__)) . '/Post.php');

use Post;

/**
 * @access public
 * @author creative
 */
class Promotion extends Post {
	/**
	 * @AttributeType String
	 */
	private $_namePromotion;
	/**
	 * @AttributeType Date
	 */
	private $_datePromotion;
	/**
	 * @AttributeType Date
	 */
	private $_dateExpiration;
}
?>