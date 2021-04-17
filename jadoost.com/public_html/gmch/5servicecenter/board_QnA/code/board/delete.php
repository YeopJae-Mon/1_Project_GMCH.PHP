<?php
	include "../../../../member/db.php";
	$bno = $_GET['qna_b_no'];

if($id==$qna_board['id'] || $lv >= 4){
	$sql = mq("delete from qna_board where qna_b_no='$bno';"); // 게시글삭제
	$sql2 = mq("delete from qna_reply where qna_b_num='$bno';"); //게시글 속 댓글 삭제
	 echo "<script>
    alert('삭제되었습니다.');
    location.href='../index.php';</script>";
}else{
   echo "<script>
    alert('삭제 권한이 없습니다.');
    location.href='../index.php';</script>";}
?>



