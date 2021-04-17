<?php
    //섹션 저장 불러오기
	include "../../member/db.php";
	
	//삭제할 아이디 불러오기 및 삭제
	$bno = $_GET['id'];
	$sql = mq("delete from s_note where send_id='$bno';");
?>
<!--삭제 보이기 및 롤백-->
<script type="text/javascript">alert("전체 삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=note_send.php" />