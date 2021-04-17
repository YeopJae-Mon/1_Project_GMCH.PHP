<?php
	include "../../../../member/db.php";

$bno = $_GET['report_b_no']; /* bno함수에 idx값을 받아와 넣음*/
$sql = mq("select * from report_board where report_b_no='".$bno."'"); /* 받아온 idx값을 선택 */
$report_board = $sql->fetch_array();



if($id==$report_board['id'] || $lv >= 4){?>
				<script type="text/javascript">location.replace("read.php?report_b_no=<?php echo $report_board["report_b_no"]; ?>");</script>
				
			<?php }else{ ?>
				<script type="text/javascript">alert('권한이 없습니다.');  location.href= history.go(-1);</script>
			<?php } ?>
