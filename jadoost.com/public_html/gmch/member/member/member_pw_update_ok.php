<meta charset="utf-8" />
<?php

include "../db.php";
include "../password.php";

$userpw = $_POST['pw'];
$userpw2 = $_POST['pw2'];

if($userpw == $userpw2){
$userpw3 = password_hash($userpw, PASSWORD_DEFAULT);
$sql = mq("update member set pw='".$userpw3."' where id = '".$_SESSION['uid']."'");
    session_destroy();
    echo "<script>alert('비밀번호를 변경했습니다.'); location.href='http://jadoost.com/gmch';</script>";
}else{
    echo "<script>alert('두 비밀번호가 다름니다.'); location.href='http://jadoost.com/gmch';</script>";
}
?>