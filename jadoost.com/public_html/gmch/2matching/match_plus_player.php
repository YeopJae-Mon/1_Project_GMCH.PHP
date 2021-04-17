<?php
include "../member/db.php";

//방만들고 바로 방으로 들어가기위해 방번호 찾는변수
$myroomsql = mq("select * from matching_list where state ='0' and id = '".$id."'");
$myroom = $myroomsql->fetch_array();
$mno = $myroom['m_no'];
//방만들면 match_room에 아이디추가하기위해 만든 변수
$roomsql = mq("select * from match_room where r_no='".$mno."'"); /* match_room 값 $room에 저장 */
$room = $roomsql->fetch_array();

$match_room_update = mq("insert into match_room(r_no,host) values('".$mno."','".$myroom['id']."')"); 


?><script type="text/javascript">location.replace("match_read.php?m_no=<?php echo $mno; ?>");</script>

