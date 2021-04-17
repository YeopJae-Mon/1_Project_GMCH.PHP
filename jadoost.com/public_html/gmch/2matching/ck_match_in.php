<?php
	include "../member/db.php";//db.php 에 변수있음

//들어가려는 방의 정보를 $room에다가 저장
$sql2 = mq("select * from match_room where r_no='".$mno."'"); /* match_room 값 $room에 저장 */
$room = $sql2->fetch_array();
$p1 = $room['host'];
$p2 = $room['2player'];
$p3 = $room['3player'];
$p4 = $room['4player'];
 /* lock_room 이 1일 경우 입장 불가 */
if($match['lock_room'] == 1) {
echo "<script>alert('방이 꽉 찼습니다');history.back();</script>"; 
/* lock_room 이 0이 아닌 경우 입장 가능 */
} else if($match['lock_room'] == 0){
    $temp_count = $head_count + 1;/* 입장 가능한 상황일 경우 내가 들어가는 경우 + 1 추가 */
    if($count >= $temp_count) {/* 내가 들어갈 때, 현재 채팅방 인원수와 허용가능한 채팅방 인원수가 같게 되면...  */
        ?><script type="text/javascript">location.replace("match_read.php?m_no=<?php echo $match["m_no"]; ?>");</script><?;
        //현재인원 db에 업데이트
        $head_count_update = mq("update matching_list set head_count = head_count + 1 where m_no = '".$mno."'");
        //들어갔는 데 현재인원=원하는인원 일경우 방 잠굼
        if($count==$temp_coumt){
        $lock_update = mq("update matching_list set lock_room = '1' where m_no = '".$mno."'");}
        //방에 player 넣기
    if(empty($p1)){
}else if(empty($p2)){
    $update_p2 = mq("update match_room set 2player='".$id."' where r_no='".$mno."'");
}else if(empty($p3)){
    $update_p3 = mq("update match_room set 3player='".$id."' where r_no='".$mno."'");
}else if(empty($p4)){
    $update_p4 = mq("update match_room set 4player='".$id."' where r_no='".$mno."'");
}
       
   
   } else {/* 내가 들어가도 허용가능한 채팅방 인원수 미만이면... */
        ?>
        <script type="text/javascript">location.replace("match_list.php");alert('방이 꽉찼습니다.')</script><?
   }
}
?>  
