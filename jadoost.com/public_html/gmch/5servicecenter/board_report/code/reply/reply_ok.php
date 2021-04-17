<?php
include '../../../../member/db.php';

    $bno = $_GET['idx'];
    
//세션에 $id가 있을경우 (로그인)
if(isset($id)){
            if($bno && $_POST['content']){
                $sql = mq("insert into report_reply(report_b_num,name,content) values('".$bno."','".$id."','".$_POST['content']."')");
                echo "<script>history.back();</script>";
            }else{ //오류
                echo "<script>alert('ERROR!! 관리자에게 문의해주세요!.'); history.back();</script>";
            }
}else{//세션 id가 없음 (비로그인)
    echo "<script>alert('권한이 없습니다.'); history.back();</script>";
}
	
?>