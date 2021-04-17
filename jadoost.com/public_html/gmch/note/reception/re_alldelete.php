<?php
    //섹션연결
	include "../../member/db.php";
	
	//idx받아온 후 삭제
	$bno = $_GET['id'];
	$sql = mq("delete from r_note where recv_id='$bno';");
?>

<!--전체삭제 메세지 후 돌아오기-->
<script type="text/javascript">alert("전체 삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=note_reception.php" />