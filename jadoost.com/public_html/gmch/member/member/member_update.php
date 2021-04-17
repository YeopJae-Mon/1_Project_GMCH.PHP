<meta charset="utf-8" />
<?php

include "../db.php";
include "../password.php";

$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
$username = $_POST['name'];
$r_id = $_POST['r_id'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$nickname = $_POST['n_name'];

$sql = mq("update member SET pw = '".$userpw."', name='".$username."', r_id='".$r_id."', n_name='".$nickname."',email='".$_POST['email']."' where id='".$_SESSION['userid']."'");


echo "<script> location.href='../../index.php'</script>";

?>

