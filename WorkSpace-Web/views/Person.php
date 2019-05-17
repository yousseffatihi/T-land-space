<?php 
require_once('../models/Administrator.php');
require_once('../controllers/administratorController.php');
$a = new AdministratorController();
$values = $a->getAll();
?>
<html><head><title>Person TEST</title>
</head>
<body>

<h1>Add Admininistrator</h1>
<form method="GET" action="">
    <input type="text" name="FirstName" /><br>
	<input type="text" name="LastName" /><br>
	<input type="date" name="BirthDay" values="yy-MM-dd" min="1950-01-01" max="2015-12-31" /><br>
	<input type="email" name="Email" /><br>
	<input type="password" name="Password" /><br>
	<input type="text" name="Address" /><br>
	
	<input type="submit" name="addAdmin" />
</form>

<?php
if(isset($_GET['addAdmin'])){
	$firstname = $_GET['FirstName'];
	$lastname = $_GET['LastName'];
	$birthday = $_GET['BirthDay'];
	$email = $_GET['Email'];
	$password = $_GET['Password'];
	$address = $_GET['Address'];
	
	$admin = new Administrator($a->getNewId(),$firstname,$lastname,$birthday,$email,$password,$address);
	
	$res = $a->add($admin);
	if($res == -1) echo "Wrong Data";
	if($res == 1) echo "Succesfully";
	if($res == 0) echo "Failed";
}
?>
<br><br>

<h1>Delete/Update Administrator</h1>
<?php
$array = array();
echo "<table border=1px><tr><th>Id</th><th>FirstName</th><th>LastName</th><th>Birthday</th><th>Email</th><th>Password</th><th>Address</th>";
foreach ($values as $value)
{
  $admin = new Administrator($value['idAdministrator'],$value['FirstName'],$value['LastName'],$value['Birthday'],$value['Email'],$value['Password'],$value['Address']);
  $array[] = $admin;
  echo "<tr>";
  echo "<td>".$admin->getIdPerson()."</td>";
  echo "<td>".$admin->getFirstName()."</td>";
  echo "<td>".$admin->getLastName()."</td>";
  echo "<td>".$admin->getBirthday()."</td>";
  echo "<td>".$admin->getEmail()."</td>";
  echo "<td>".$admin->getPassword()."</td>";
  echo "<td>".$admin->getAddress()."</td>";
  echo "<td><a href=?action=delAdmin&Id=".$admin->getIdPerson().">Delete</a></td>";
  echo "<td><a href=?action=updAdmin&Id=".$admin->getIdPerson().">Update</a></td>";
}

if(isset($_GET['action']) && $_GET['action'] == "delAdmin") $a->del($_GET['Id']);
//if(isset($_GET['action']) && $_GET['action'] == "delAdmin") $a->update($_GET['id']);
?>

