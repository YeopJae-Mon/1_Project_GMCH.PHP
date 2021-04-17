<?php
	include "../../../../member/db.php";

$bno = $_GET['free_b_no'];
$title = $_POST['title'];
$content = $_POST['content'];


$sql = mq("update free_board set title='".$title."',content='".$content."' where free_b_no='".$bno."'"); 
   echo "<script>
    alert('수정되었습니다.');
    history.go(-2);</script>";
?>
