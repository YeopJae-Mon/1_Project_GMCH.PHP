<?php
	include "../../../../member/db.php";
	$bno = $_GET['report_b_no'];
    $sql2 = mq("select * from report_board where report_b_no = '".$bno."'");  
    $report_board = $sql2->fetch_array();


if($id==$report_board['id'] || $lv >= 4){
	$sql = mq("delete from report_board where report_b_no='$bno';"); // 게시글삭제
	$sql2 = mq("delete from report_reply where report_b_num='$bno';"); //게시글 속 댓글 삭제
	 echo "<script>
    alert('삭제되었습니다.');
    location.href='../index.php';</script>";
}else{
   echo "<script>
    alert('삭제 권한이 없습니다.');
    location.href='../index.php';</script>";}
?>



