<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('location:index.php');
}
require_once('url.class.php');
$urlShortener = new URLShortener;

?>

<!DOCTYPE html>
<html>
<head>
	<title>URL Shortener</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
	<a href="logout.php">Log Out</a>

	<h1>Welcome <?php echo $_SESSION['user'];?></h1>
	</div>

	<?php
		 
		 echo $urlShortener -> mainForm();
	?>

</body>
</html>