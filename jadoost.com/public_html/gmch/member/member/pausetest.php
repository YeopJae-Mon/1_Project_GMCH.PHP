<?php
	include "../db.php";
    
    $andid=$_POST["id"];
    //DB에 login_state = 0으로 바꿈(로그아웃)
    $logout_state = mq("update member set login_state='0' where id='".$andid."'");
 
    session_destroy();
?>
