<?php
session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$name = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT `name`, `password` FROM `usertable` WHERE name = '$name' && password = '$pass'";

$res = mysqli_query($con,$sql);

$num = mysqli_num_rows($res);

if ($num == 1) {
	$_SESSION['user'] = $name;
	header('location:home.php');
}
else{

	header('location:login.php');
}
?>