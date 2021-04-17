<?php
	include "../../../member/db.php";
	$bno = $_GET['b_no'];

if($id==$board['id'] || $lv >= 4){
	$sql = mq("delete from board where b_no='$bno';"); // 게시글삭제
	$sql2 = mq("delete from reply where con_num='$bno';"); //게시글 속 댓글 삭제
	 echo "<script>
    alert('삭제되었습니다.');
    location.href='../index.php';</script>";
}else{
   echo "<script>
    alert('삭제 권한이 없습니다.');
    location.href='../index.php';</script>";}
?>



