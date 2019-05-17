<?php
require_once('../Classes/database.php');

class administrateurController extends database {
  public function getAll(){
    return $this->select("SELECT * FROM `Administrator`");
  }
}
?>
