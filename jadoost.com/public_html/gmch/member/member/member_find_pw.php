<meta charset="utf-8" />
<?php
	include "../db.php";

	$userid = $_POST['userid'];
	$username = $_POST['name'];
	$email = $_POST['email'].'@'.$_POST['emadress'];
	
if($userid == ""){
		echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
	}else{
	

$sql = mq("select * from member where id='{$userid}'");
$result = $sql->fetch_array();

if($result["id"] == $userid && $result["name"] == $username && $result["email"] == $email){
	$_SESSION['uid'] = $userid;
	echo "<script>alert('회원님의 비밀번호를 변경합니다.'); location.href='member_pw_update.php';</script>";

}else{
	echo "<script>alert('없는 계정입니다.'); history.back();</script>";

}
}
?>