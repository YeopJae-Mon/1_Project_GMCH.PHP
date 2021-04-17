<?
include '../member/db.php';

$lockimg = "<img src='../img/lock.png' alt='lock' title='lock' with='20' height='20' />";//자물쇠 이미지

$sql = mq("select * from matching_list");
              $sql2 = mq("select * from matching_list order by m_no desc limit $start_num, $list");  
              while($match = $sql2->fetch_array())
              $title=$match["title"]; 
echo'<tbody id="red">';echo '<br>';
        echo'<tr>';
            echo'<td id="no_color" width="70" rowspan="2">';echo $match['m_no'];echo'</td>';
            
            echo'<td id="table_left" width="500" colspan="2">';
                
                echo"<a href='ck_match_in.php?m_no=";echo $match["m_no"];echo"'>";
                    
                
                    
                    if($match['head_count'] == $match[count]){
                        echo $title;echo $lockimg;
                    }
                    else if($match['lock_room']==1){
                        echo $title;echo $lockimg;
                    }else if($match['lock_room']==0){
                        echo $title;
                    }
                        
                    
                    echo' <td id="nonono" rowspan="2">'; echo $match['head_count']; echo'/'; echo $match[count]; echo'</td>';
                echo'</tr>';
            echo'<tr>';
                
            echo'<td id="table_left_line">'; 
            if($match['pay']==1){
                        $match['pay'] = '국룰';
                    }else if($match['pay'] == 2){
                        $match['pay'] = '페이협의';}
                    echo $match['pay']; echo'&#124;';
            echo $match['id'];echo'</td>';
            
            echo'</tr>';
            echo'<tr>';
            
        echo'</tr>';
    
  echo'</tbody>';
              
  ?>