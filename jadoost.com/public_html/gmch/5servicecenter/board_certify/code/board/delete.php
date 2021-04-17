<?php
	include "../../../../member/db.php";
	$bno = $_GET['certify_b_no'];
    $sql2 = mq("select * from certify_board where certify_b_no = '".$bno."'");  
    $certify_board = $sql2->fetch_array();


if($id==$certify_board['id'] || $lv >= 4){
	$sql = mq("delete from certify_board where certify_b_no='$bno';"); // 게시글삭제
	$sql2 = mq("delete from certify_reply where certify_b_num='$bno';"); //게시글 속 댓글 삭제
	 echo "<script>
    alert('삭제되었습니다.');
    location.href='../index.php';</script>";
}else{
   echo "<script>
    alert('삭제 권한이 없습니다.');
    location.href='../index.php';</script>";}
?>



