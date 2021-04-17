<?php
include "../../../../member/db.php";
$rno = $_POST['free_r_no'];//댓글번호
$sql = mq("select * from free_reply where free_r_no='".$rno."'"); //reply테이블에서 idx가 rno변수에 저장된 값을 찾음
$free_reply = $sql->fetch_array();

$bno = $_POST['free_b_no']; //게시글 번호
$sql2 = mq("select * from free_board where free_b_no='".$bno."'");//board테이블에서 idx가 bno변수에 저장된 값을 찾음
$free_board = $sql2->fetch_array();

$reply_content=$_POST['content'];

$sql3 = mq("update free_reply set content='".$reply_content."' where free_r_no = '".$rno."'");//reply테이블의 idx가 rno변수에 저장된 값의 content를 선택해서 값 저장
?> 

<script type="text/javascript">alert('수정되었습니다.'); location.replace("read.php?free_b_no=<?php echo $bno; ?>");</script>