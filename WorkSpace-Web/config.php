<?php
$servername = "localhost";
$username = "root";
$password = "";


function getConnection(){
	
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

return $conn;
}

function execQuery($req){
	$result = mysqli_query(getConnection(), $req);
	return result;
}
?>

