<?php
include '../../../../member/db.php';

    $bno = $_GET['idx'];
    

//등급 2이상
if($lv>=2){
            if($bno && $_POST['content']){
                $sql = mq("insert into free_reply(free_b_num,id,nick_name,content)
                values('".$bno."','".$id."','".$nname."','".$_POST['content']."')");
                echo "<script>history.back();</script>";
            }else{ //오류
                echo "<script>alert('ERROR!! 관리자에게 문의해주세요!.'); history.back();</script>";
            }
}else{//등급 2이 상이 아닐경우
    echo "<script>alert('권한이 없습니다.'); history.back();</script>";
}
	
?>