<?
	
$user = $_POST['user'];
	$chat = $_POST['chat'];
	
mysql_query("INSERT INTO table (user, chat, date) VALUES ('$user', '$chat', '$date’)");
?>