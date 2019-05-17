<?php
require_once('../Classes/Administrateur.php');
require_once('../controllers/clientController.php');

$a = new clientController();
$values = $a->getAll();

foreach ($values as $value)
{
  echo "<li>" . $value['IdClient'] ."</li>";
  echo "<li>" . $value['FirstName'] ."</li>";
  echo "<li>" . $value['LastName'] ."</li>";
  echo "<li>" . $value['Birthday'] ."</li>";
  echo "<li>" . $value['Email'] ."</li>";

}
?>
