<?php
include "../../../../member/db.php";

$rno = $_GET['report_r_no'];
$report_sql = mq("select * from report_reply where report_r_no='".$rno."'");//reply테이블에서 idx가 rno변수에 저장된 값을 찾음
$report_reply = $report_sql->fetch_array();



if($id==$report_reply['name']){
	    $sql = mq("delete from report_reply where report_r_no='".$rno."'"); 
	    echo '<script type="text/javascript">alert("댓글이 삭제되었습니다.");history.back() ;</script>';
	}else{ 
		echo '<script type="text/javascript">alert("댓글을 삭제할 수 없습니다.");history.back();</script>';
	}?>
	
	
	