<?php
	include "../../../member/db.php";

$bno = $_GET['b_no'];
$title = $_POST['title'];
$content = $_POST['content'];


$sql = mq("update board set title='".$title."',content='".$content."' where b_no='".$bno."'"); 
   echo "<script>
    alert('수정되었습니다.');
    history.go(-2);</script>";
?>
