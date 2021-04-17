<?php

include '../member/db.php';

$head_count_sql = mq("select * from match_room where r_no='".$mno."'"); /* match_room 값 $room에 저장 */
$room = $head_count_sql->fetch_array();
$matching_list = mq("select * from matching_list where m_no='".$mno."'");//matching_list 값$list에 배열화
$list = $matching_list -> fetch_array();
$_member = mq("select * from member where id='".$id."'");
$member = $_member->fetch_array();

$exp=$member['exp'];

if($list['state']==0 && $room['host']==$id){
$start_state = mq("update matching_list set state='1' where m_no='".$mno."'");
    $exp = $exp + 10;
$update_exp = mq("update member set exp='".$exp."' where id='".$id."'");    
echo '<script>alert("방장이 시작버튼 클릭."); location.href="match_list.php";</script>';
}else if($list['state']==1 && $room['host']!=$id){
    $exp = $exp + 5;
    $update_exp = mq("update member set exp='".$exp."' where id='".$id."'");
    echo '<script>alert("팀원들이 시작버튼 누름."); location.href="match_list.php";</script>';
}

$delete_chat = mq("delete from match_chat where match_r_no='".$mno."'");
?>