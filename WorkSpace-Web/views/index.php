<?php

$firstName = $_POST['firstname'];

$myArr = array($firstName, "Mary", "Peter", "Sally");

$myJSON = json_encode($myArr);

echo $myJSON;

 ?>
