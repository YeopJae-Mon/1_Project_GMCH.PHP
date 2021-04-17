<?php

include '../member/db.php';

$head_count_sql = mq("select * from match_room where r_no='".$mno."'"); /* match_room 값 $room에 저장 */
$room = $head_count_sql->fetch_array();

$chat_sql = "select * from match_chat where match_r_no='".$mno."'";
$result = mysqli_query( $db, $chat_sql );
    while( $con = mysqli_fetch_array( $result ) ) {
    
             echo
           '<div>
          <tr>
            <td class="name" width="50%">' .$con['name']. ':</td>
            <td class="content">'.$con['content'].'</td>
            </tr>
            </div>';
          }
          ?>
         