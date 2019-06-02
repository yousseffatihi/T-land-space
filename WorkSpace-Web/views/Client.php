<?php 
require_once('../controllers/clientController.php');
?>
<html>
<head>
<title>Person TEST</title>
<style type="text/css">
form input{
	margin-bottom:5px;
	width:200px;
	height:20px;
}
</style>
</head>
<body>

<center><h1>GetAll TEST</h1>

<table border="1px">
<tr>
    <th>ID</th>
	<th>FirstName</th>
	<th>LastName</th>
	<th>Birthday</th>
	<th>Email</th>
	<th>Password</th>
	<th>Address</th>
</tr>
<?php
    $cc = new clientController();
    $clients = $cc->getAll();
	foreach($clients as $client){
		echo "<tr><td>".$client->getIdPerson()."</td>";
		echo "<td>".$client->getFirstName()."</td>";
        echo "<td>".$client->getLastName()."</td>";
        echo "<td>".$client->getBirthday()."</td>";
        echo "<td>".$client->getEmail()."</td>";
        echo "<td>".$client->getPassword()."</td>";
        echo "<td>".$client->getAddress()."</td></tr>";
	}
?>
</table>
<br>
<h1>GetById (In This Case Id=1)</h1>
<table border="1px">
<tr>
    <th>ID</th>
	<th>FirstName</th>
	<th>LastName</th>
	<th>Birthday</th>
	<th>Email</th>
	<th>Password</th>
	<th>Address</th>
</tr>
<?php
    $client = $cc->getById(1);
		echo "<tr><td>".$client->getIdPerson()."</td>";
		echo "<td>".$client->getFirstName()."</td>";
        echo "<td>".$client->getLastName()."</td>";
        echo "<td>".$client->getBirthday()."</td>";
        echo "<td>".$client->getEmail()."</td>";
        echo "<td>".$client->getPassword()."</td>";
        echo "<td>".$client->getAddress()."</td></tr>";
?>
</table>
<br>
<h1>Add Client</h1>
<form method="POST" action="">
    <input type="text" name="firstName" placeholder="firstname"><br>
	<input type="text" name="lastName" placeholder="lastname"><br>
	<input type="date" name="birthDay" placeholder="birthday"><br>
	<input type="email" name="email" placeholder="email"><br>
	<input type="password" name="password" placeholder="password"><br>
	<input type="text" name="address" placeholder="address"><br>
	
	<input type="submit" name="addClient" value="Ajouter">
</form>

<?php
if(isset($_POST['addClient'])){
$newclient = new Client($cc->getNewId(),$_POST['firstName'],$_POST['lastName'],$_POST['birthDay'],$_POST['email'],$_POST['password'],$_POST['address']);
$msg_number = $cc->add($newclient);
if($msg_number == -1) echo "WRONG DATA";
else if($msg_number == 0) echo "INSERT FAILED";
else if($msg_number == 1) echo "INSERT SUCCESFULLY";
}
?>
</body>
</html>