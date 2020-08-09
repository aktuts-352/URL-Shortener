<?php

session_start();
header('location:index.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'url_shortener');

$name = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT `name`, `password` FROM `usertable` WHERE name = '$name'";

$res = mysqli_query($con,$sql);

$num = mysqli_num_rows($res);

if ($num == 1) {
	echo "username already taken";
}
else{

	$reg = "INSERT INTO `usertable`(`name`, `password`) VALUES ('$name','$pass')";

	mysqli_query($con,$reg);
	echo "Registration Successfull!"; 
}

?>