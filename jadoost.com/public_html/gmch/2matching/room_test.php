<?php
	include "../member/db.php";
   
//db.php 에 변수있음

 /* lock_room 이 1일 경우 입장 불가 */
if($match['lock_room'] == 1) {
echo "<script>alert('방이 꽉 찼습니다');history.back();</script>"; 
   
/* lock_room 이 0이 아닌 경우 입장 가능 */
} else if($match['lock_room'] == 0){
   
    $temp_count = $head_count + 1;/* 입장 가능한 상황일 경우 내가 들어가는 경우 + 1 추가 */
   
   if($count == $temp_count) {/* 내가 들어갈 때, 현재 채팅방 인원수와 허용가능한 채팅방 인원수가 같게 되면...  */
        ?><script type="text/javascript">location.replace("match_read.php?m_no=<?php echo $match["m_no"]; ?>");</script><?;
        $head_count_update = mq("update matching_list set head_count = head_count + 1 where m_no = '".$mno."'");
        $lock_update = mq("update matching_list set lock_room = '1' where m_no = '".$mno."'");
       
   
   } else {/* 내가 들어가도 허용가능한 채팅방 인원수 미만이면... */
        ?><script type="text/javascript">location.replace("match_read.php?m_no=<?php echo $match["m_no"]; ?>");</script><?
        $head_count_update = mq("update matching_list set head_count = head_count + 1 where m_no = '".$mno."'");
       
   }
}




?>    
<!--<script type="text/javascript">location.replace("match_read.php?m_no=<?php //echo $match["m_no"]; ?>");</script>-->
<??>


