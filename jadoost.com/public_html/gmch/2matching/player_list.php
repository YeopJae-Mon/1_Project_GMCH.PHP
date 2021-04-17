<?php

include '../member/db.php';

$head_count_sql = mq("select * from match_room where r_no='".$mno."'"); /* match_room 값 $room에 저장 */
$room = $head_count_sql->fetch_array();


  
    
    //인원 명단리스트
    echo'<table class="table_a">';echo'<br>';
       
        echo'<tr class="tr_w">';
            echo'<td class="td_d">방장</td>';
            echo'<td class="td_w">';echo $room['host'];echo'</td>';
        
            echo'<td class="td_d">2</td>';
            echo'<td class="td_w">';echo $room['2player'];echo'</td>';
        echo'</tr>';
        echo'<tr class="tr_w">';
            echo'<td class="td_d">3</td>';
            echo'<td class="td_w">';echo $room['3player'];echo'</td>';
        
            echo'<td class="td_d">4</td>';
            echo'<td class="td_w">';echo $room['4player'];echo'</td>';
        echo'</tr>';
echo'</table>';



?>