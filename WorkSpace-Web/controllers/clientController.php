<?php
require_once('../Classes/database.php');

class clientController extends database {
  public function getAll(){
    return $this->select("SELECT * FROM Client");
  }
}
?>
