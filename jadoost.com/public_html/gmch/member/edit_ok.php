<meta charset="utf-8" />
<?php	
	include "db.php";
	
$e_id = $_POST['id'];
$e_lv = $_POST['lv'];
echo $e_id;
echo $e_lv;
echo $_POST['lv'];
$sql = mq("update member SET lv = '".$_POST['lv']."' WHERE id='".$e_id."'");


?>