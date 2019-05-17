<?php
require_once(realpath(dirname(__FILE__)) . '/Post.php');
require_once(realpath(dirname(__FILE__)) . '/Person.php');


/**
 * @access public
 * @author creative
 */
class Administrateur extends Person {
	/**
	 * @AssociationType Post
	 * @AssociationMultiplicity 0..*
	 */
	public $_manage = array();

	/**
	 * @access public
	 */

	 public function __construct(){

	 }

	 public function showArray(){
		 foreach ($this->_manage as $key => $value) {
			 echo "Value : " . $value;
		 }
	 }

	/**
	 * @access public
	 */
	public function addAdministrateur() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function showClients() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function addPost() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function deletePost() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function updatePost() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function addPromotion() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function deletePromotion() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function updatePromotion() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function updateEvent() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function addEvent() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function deleteEvent() {
		// Not yet implemented
	}
}
?>
