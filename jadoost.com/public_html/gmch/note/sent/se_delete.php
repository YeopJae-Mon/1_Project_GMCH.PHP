<?php
    //섹션 불러오기
	include "../../member/db.php";
	
	//글 아이디 불러오기 및 삭제
	$bno = $_GET['idx'];
	$sql = mq("delete from s_note where idx='$bno';");
?>
<!--글삭제 알림 및 돌아가기-->
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=note_send.php" />