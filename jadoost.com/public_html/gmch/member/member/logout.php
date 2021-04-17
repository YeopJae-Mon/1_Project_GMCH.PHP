<?php
	include "../db.php";
    
	 $state_0 = mq("update member set login_state='0' where id='".$id."'");	
	    session_destroy();
	
	
?>
<meta charset="utf-8">
<script>alert("로그아웃되었습니다."); location.href="http://www.jadoost.com/gmch/index.php"; </script>
