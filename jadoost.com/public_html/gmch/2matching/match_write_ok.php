<?php

include "../member/db.php";

//각 변수에 write.php에서 input name값들을 저장한다


$mission = $_POST['mission'];  
$count = $_POST['count'];
$pay = $_POST['pay'];

if(isset($_POST['lockpost'])){
	$lo_post = '1';
}else{
	$lo_post = '0';
}



$mission2 = $mission;
$count2 = $count;

if($mission2 == '1'){
    $mission2 = '구습격';
}else if($mission2 =='2'){
    $mission2 = '신습격';
}else if($mission2 == '3'){
    $mission2 = '카습격';
}
$title = $mission2.$count;


$mqq = mq("alter table matching_list auto_increment =1"); //auto_increment 값 초기화

if($id && $mission && $count && $pay){
    $sql = mq("insert into matching_list(id,title,mission,count,pay,head_count) values('".$id."','".$title."','".$mission."','".$count."','".$pay."','1')"); 
        echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='match_plus_player.php';</script>";
}else{
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    location.href='../index.php';</script>";
}

?>