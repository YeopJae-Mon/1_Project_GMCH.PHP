
<?$write = "'board/write.php'";
include '../../../member/db.php';
 //댓글 수 카운트
$sql2 = mq("select * from qna_reply where qna_b_num='".$qna_board['qna_b_no']."'"); //reply테이블에서 con_num이 board의 b_no와 같은 것을 선택
$rep_count = mysqli_num_rows($sql2); //num_rows로 정수형태로 출력
$img = "<img src='../image/new.png' alt='new' title='new' />";
?>

  
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<style>

    <?php
       include '../css/s.css';
       include '../../../header.css';
       include '../../../footer.css';
       include '../../../body.css';?>
       ?>

</style>
</head>
    <header>
        <div class="top">
    <input type="button" class="img-button" 
            onclick="location.href='../../5servicecenter.php'">
        <p id="id">자주 묻는 질문</p>
        </div>
        </header>
<body>


<div id="board_area">
    <DIV id="a">
    <table class="list-table">

     
         <?php
         if(isset($_GET['page'])){
          $page = $_GET['page'];
            }else{
              $page = 1;
            }
              $sql = mq("select * from qna_board");
              $row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
              $list = 10; //한 페이지에 보여줄 개수
              $block_ct = 5; //블록당 보여줄 페이지 개수

              $block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
              $block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
              $block_end = $block_start + $block_ct - 1; //블록 마지막 번호

              $total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
              if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
              $total_block = ceil($total_page/$block_ct); //블럭 총 개수
              $start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

              $sql2 = mq("select * from qna_board order by qna_b_no desc limit $start_num, $list");  
              while($qna_board = $sql2->fetch_array()){
              $title=$qna_board["title"]; 
                
               
              ?>
   <tbody id="red">
    <tr>
      <td id="no_color" width="70" rowspan="2"><?php echo $qna_board['qna_b_no']; ?></td>
      <td id="table_left" width="500" colspan="2" >
        
        <a href='board/read.php?qna_b_no=<?php echo $qna_board["qna_b_no"]; ?>'><?php echo $title;?>
        </a></td>
    <tr>
      <td id="table_left_line"/>
          
       
    </tr>
  </tbody>
      <?}?>
    </table>
    
    </DIV>
 <br>

 
       <?php
 if($lv >= '4'){echo '<button type="button" onClick="location.href=';
  echo $write;
  echo '">글쓰기</button>';}
 ?>
    </form>
    </div>
    
    <br>

<!---페이징 --->
    <div>
      <ul id="page_num">
          <li>
 <?php
         /* if($page <= 1)
          { //만약 page가 1보다 크거나 같다면
            echo "<li class='fo_re'>처음</li>"; //처음이라는 글자에 빨간색 표시 
          }else{
            echo "<li><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
          }  */
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면 빈값
            "&#32;";
          }else{
          $pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
            echo "<a href='?page=$pre'>이전</a>&#32;"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
          }
          for($i=$block_start; $i<=$block_end; $i++){ 
            //for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
            if($page == $i){ //만약 page가 $i와 같다면 
              echo "[$i]&#32;"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
            }else{
              echo "<a href='?page=$i'>[$i]</a>&#32;"; //아니라면 $i
            }
          }
          if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈값
          }else{
            $next = $page + 1; //next변수 page + 1을 해준다.
            echo "<a href='?page=$next'>다음</a>&#32;"; //다음글자에 next변수를 링크 현재 4페이지에 있다면 +1하여 5페이지로 이동
          }
          
          ?>
          </li>
          <br>
          <?php
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면
            echo "<li class='fo_re'>처음</li>"; //처음이라는 글자에 빨간색 표시 
          }else{
            echo "<li><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
          }
          if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
            echo "<li class='fo_re'>마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
          }else{
            echo "<li><a href='?page=$total_page'>마지막</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
          }
        ?>
      </ul>
    </div> 
    
  </div>
  <?php include '../../../footer.php';?>
</body>
</html>