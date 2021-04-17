<?php
include "../../../../member/db.php";

$rno = $_GET['question_r_no'];
$question_sql = mq("select * from question_reply where question_r_no='".$rno."'");//reply테이블에서 idx가 rno변수에 저장된 값을 찾음
$question_reply = $question_sql->fetch_array();




if($id==$question_reply['name'] || $lv >= 4)
	{
		$sql = mq("delete from question_reply where question_r_no='".$rno."'"); ?>

	<script type="text/javascript">alert('댓글이 삭제되었습니다.');history.back() ;</script>
	<?php 
	}else{ ?>
		<script type="text/javascript">alert('댓글을 삭제할 수 없습니다.');history.back();</script>
	<?php }?>
	
	
	