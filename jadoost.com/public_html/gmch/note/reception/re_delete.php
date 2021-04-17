<?php
    //섹션정보 획득
	include "../../member/db.php";
	
	//idx정보 받고 삭제
	$bno = $_GET['idx'];
	$sql = mq("delete from r_note where idx='$bno';");
?>

<!--확인후 수신함으로 돌아오기-->
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=note_reception.php" />