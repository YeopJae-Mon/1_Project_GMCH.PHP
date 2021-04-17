<?php
include "../member/db.php";//db.php 에 변수있음
	
$user = $_POST['user'];
$mno = $_POST['mno'];
$chat = $_POST['chat'];

$send = mq("insert into match_chat (match_r_no,name,content) values('".$mno."','".$user."','".$chat."')");
?>
