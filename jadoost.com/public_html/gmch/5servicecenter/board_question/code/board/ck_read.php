<?php
	include "../../../../member/db.php";

$bno = $_GET['question_b_no']; /* bno함수에 idx값을 받아와 넣음*/
$sql = mq("select * from question_board where question_b_no='".$bno."'"); /* 받아온 idx값을 선택 */
$question_board = $sql->fetch_array();



if($id==$question_board['id'] || $lv >= 4){?>
				<script type="text/javascript">location.replace("read.php?question_b_no=<?php echo $question_board["question_b_no"]; ?>");</script>
				
			<?php }else{ ?>
				<script type="text/javascript">alert('권한이 없습니다.');  location.href= history.go(-1);</script>
			<?php } ?>
