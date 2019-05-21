<?php

function getConnection(){
$servername = "localhost";
$username = "root";
$password = "";	
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conn,"tland");
return $conn;
}

function execQuery($req){
	$result = mysqli_query(getConnection(), $req);
	return $result;
}
?>

