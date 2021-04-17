<?php
    include "../member/db.php";

    $sql = mq("select * from matching_list where m_no='".$mno."'"); /* match_room 값 $room에 저장 */
	$host_info = $sql->fetch_array();
    $sql2 = mq("select * from match_room where r_no='".$mno."'"); /* match_room 값 $room에 저장 */
    $room = $sql2->fetch_array(); 

    $delete2 = mq("update match_room set 2player='' where 2player='".$id."'");
    $delete3 = mq("update match_room set 3player='' where 3player='".$id."'");
    $delete4 = mq("update match_room set 4player='' where 4player='".$id."'");
    

    

 
if($host_info['id']==$id){//호스팅이 나가면 db펑
        $delete_chat=mq("delete from match_chat where match_r_no='".$mno."'");
        $destroyed_list=mq("delete from matching_list where m_no='".$mno."'");
        $destroyed_room=mq("delete from match_room where r_no='".$mno."'");  
       ?><script type="text/javascript">location.replace("match_list.php");</script><?;
}else{ // 호스팅id가아닌경우 안펑
    if($count == $head_count) {/* 풀방에서 나갈경우 인원 -1 lock = 0  */
        $head_count_update = mq("update matching_list set head_count = head_count -1  where m_no = '".$mno."'");
        $lock_update = mq("update matching_list set lock_room = '0' where m_no = '".$mno."'");
        ?><script type="text/javascript">location.replace("match_list.php");</script><?;
    }else {/* 내가 들어가도 허용가능한 채팅방 인원수 미만이면... */
        $head_count_update = mq("update matching_list set head_count = head_count -1  where m_no = '".$mno."'");
        ?><script type="text/javascript">location.replace("match_list.php");</script><?;
   }
}
?>
