<?php
include "../db.php";
if($_POST["name"] == "" || $_POST["email"] == ""){
		echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
	}else{

	$username = $_POST['name'];
	$email = $_POST['email'].'@'.$_POST['emadress'];


$sql = mq("select * from member where name = '{$username}' && email = '{$email}'");

$result = $sql->fetch_array();

if($result["name"] == $username && $result["email"] == $email){
	echo "<script>alert('회원님의 ID는 ".$result['id']."입니다.'); history.back();</script>";
}else{
echo "<script>alert('없는 계정입니다.'); history.back();</script>";
}
}
?>