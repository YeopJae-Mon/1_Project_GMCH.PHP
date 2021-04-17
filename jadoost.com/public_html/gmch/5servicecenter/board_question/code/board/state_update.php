<?
include "../../../../member/db.php";
    $bno=$_SESSION['bno'];
    
	
	echo $bno;
	
		$sql = mq("select * from question_board where question_b_no='".$bno."'"); /* 받아온 idx값을 선택 */
		$question_board = $sql->fetch_array();
	
	if($question_board['state']==0){
	$ok = mq("UPDATE question_board set state='1' where question_b_no='".$question_board['question_b_no']."' ");
	 echo("<script>location.href='../index.php';</script>");
	}else if($question_board['state']==1){
	 $no = mq("UPDATE question_board set state='0' where question_b_no='".$question_board['question_b_no']."' ");
    echo("<script>location.href='../index.php';</script>");
	};
?>