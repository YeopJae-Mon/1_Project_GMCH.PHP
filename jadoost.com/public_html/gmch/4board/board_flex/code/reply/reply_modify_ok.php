<?php
include "../../../../member/db.php";
$rno = $_POST['flex_r_no'];//댓글번호
$sql = mq("select * from flex_reply where flex_r_no='".$rno."'"); //reply테이블에서 idx가 rno변수에 저장된 값을 찾음
$flex_reply = $sql->fetch_array();

$bno = $_POST['flex_b_no']; //게시글 번호
$sql2 = mq("select * from flex_board where flex_b_no='".$bno."'");//board테이블에서 idx가 bno변수에 저장된 값을 찾음
$flex_board = $sql2->fetch_array();


$sql3 = mq("update flex_reply set content='".$_POST['content']."' where flex_r_no = '".$rno."'");//reply테이블의 idx가 rno변수에 저장된 값의 content를 선택해서 값 저장
?> 

<script type="text/javascript">alert('수정되었습니다.'); location.replace("read.php?flex_b_no=<?php echo $bno; ?>");</script>