<?
include "../../../../member/db.php";
    $bno=$_SESSION['bno'];
    
		$sql = mq("select * from certify_board where certify_b_no='".$bno."'"); /* 받아온 idx값을 선택 */
		$certify_board = $sql->fetch_array();
		
	$board_member = mq("SELECT * FROM member where id = '".$certify_board['id']."'");
$b_m = $board_member->fetch_array();
	
	if($b_m['lv']==1){
	    $up = mq("UPDATE member set lv='2' where id='".$certify_board['id']."'");
	    $ok = mq("UPDATE certify_board set state='1' where certify_b_no='".$certify_board['certify_b_no']."' ");
	echo("<script>location.href='../index.php';</script>");}
?>