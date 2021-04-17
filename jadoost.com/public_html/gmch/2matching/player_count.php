<?php

include '../member/db.php';
//match_room 의 방번호 정보 배열
$head_count_sql = mq("select * from match_room where r_no='".$mno."'"); /* match_room 값 $room에 저장 */
$room = $head_count_sql->fetch_array();
//matching_list의 방번호 정보 배열
$matching_list = mq("select * from matching_list where m_no='".$mno."'");
$list = $matching_list -> fetch_array();

echo'<span>현재 인원 : ';echo $match['head_count'];echo'/';echo $match['count'];echo'<br></span>';echo'<br>';
if($list['state']==0){//시작전
    if(empty($room['host'])){ //호스트가 없는경우
        echo 'Host가 경찰에 잡혔습니다!';
        ?><br><input type="button" value="도망가기" onclick="location.href='match_list.php'"><?
    }else if(isset($room['host'])){//호스트가 있는경우
        if($match['head_count']==$match['count']){
            if($id==$room['host']){
        ?><br><input type="button" value="매칭종료" onclick="location.href='finish_match.php?m_no=<?echo $mno?>'"><?
            }
        }
    }
}else if($list['state']==1){//(호스트가 시작버튼 클릭 시)
    if($id!=$room['host']){
        ?><br><input type="button" value="매칭종료" onclick="location.href='finish_match.php?m_no=<?echo $mno?>'"><?
    }
}
?>