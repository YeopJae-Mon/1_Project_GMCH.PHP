<?php
include '../../../member/db.php';

    $bno = $_GET['idx'];
    $exp3 = $exp + 3;

    
    if($lv >= 2){
    if($bno && $_POST['content']){
        $sql = mq("insert into reply(con_num,name,content) values('".$bno."','".$id."','".$_POST['content']."')");
        $exp_plus = mq("update member set exp = '".$exp3."' where id = '".$id."'");
        echo "<script>history.back();</script>";
    }else{
        echo "<script>alert('댓글 작성에 실패했습니다.'); 
        history.back();</script>";
    }}else{echo "<script>alert('로그인이 필요합니다.'); 
        histroy.back();</script>";}
	
?>