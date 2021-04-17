<?
include "../../../../member/db.php";
    $bno=$_SESSION['bno'];
    
	
	echo $bno;
	
		$sql = mq("select * from certify_board where certify_b_no='".$bno."'"); /* 받아온 idx값을 선택 */
		$certify_board = $sql->fetch_array();

	
	 $no = mq("UPDATE certify_board set state='2' where certify_b_no='".$certify_board['certify_b_no']."' ");
    echo("<script>location.href='../index.php';</script>");
	
?>