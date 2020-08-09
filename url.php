<?php
require_once('config.php');

$url = isset($_GET['url']) ? $_GET['url'] : '';

$db = new Connect;

$getLongUrl = $db->prepare('SELECT long_url FROM shortened_urls WHERE short_url = :short_url');

$getLongUrl -> ececute([
	'short_url' => $url;
]);

$num = $getLongUrl -> fetchAll(PDO::FETCH_COLUMN);

if (count($num) != 0) {
	header("Location: ".$num[0]);
}else{
	echo "This url does not exist.";
}

?>