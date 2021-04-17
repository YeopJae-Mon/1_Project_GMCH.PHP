<?php
//섹션 받아오기
include "../../member/db.php";

//로그인 확인
if(isset($idid))
    {
?>

<!--이곳부터 css가 필요합니다.-->
<!--쪽지함이동-->
<style>
   <?php 
   include// '../CSS/style.css';
   include 'note_send.css';
            include '../../header.css';
            include '../../footer.css';
            include '../../body.css'
   ?>
</style>

    <header class="top">
        <input type="button" class="img-button" 
            onclick="location.href='../../index.php'">
        <p id="id">발신</p>
        </header>

<aside>
  <ul id="note_menu">
    <li><a href="../reception/note_reception.php"><button class="button">받은쪽지함</button></a></li>
	<li><button class="button1"><a href="note_send.php">보낸쪽지함</a></button></li>
  </ul>
</aside>
<br>
<!--테이블 제목-->
<div id="main_in">
  <table class="list-table">
    <thead>
      <tr>
        <th width="15%" class="tc">받는사람</th>
        <th width="30%" class="tc">제목</th>
        <th width="25%" class="tc">날짜</th>
        <th width="20%" class="tc">수신여부</th>
        <th width="10%" class="tc"></th>
      </tr>
    </thead>
<!--CSS는 여기까지--> 
    
    <?php
    if(isset($_GET['page'])){$page = $_GET['page'];} //페이지를 불어온다
    else{ $page = 1; } //없을경우 1부터 시작
    
    //recv_note 받은쪽지함 데이터 가져오기
    //recv_note테이블에서 recv_id가 세션userid와 같은것만 가져오기
    $sql = mq("select * from s_note where send_id = '".$_SESSION['userid']."' order by idx desc");   
    
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

    //유저 페이지 변수 선언
    $sql2 = mq("select * from s_note where send_id = '".$_SESSION['userid']."' order by idx desc limit $start_num, $list");  
    
    //메일 출력
    while($recv = $sql2->fetch_array()){
      $note_title=$recv["title"]; 
      //제목이 30데이터 이상일경우 ...표시
        if(strlen($note_title)>10)
          { 
            $note_title=str_replace($recv["title"],mb_substr($recv["title"],0,10,"utf-8")."...",$recv["title"]);
          }
        ?>
<!--이곳부터 css가 필요합니다.-->
      <tbody>
        <tr>
            <td class="tc"><?php echo $recv['recv_id'];?></td> <!---받는이 -->
            <td class="tc"><a href='se_read.php?idx=<?php echo $recv['idx']; ?>'><?php echo $note_title; ?></a></td> <!---제목 -->
            <td class="tc">
                <?php
                $realtime=$recv['send_date'];
                $writetime=date("m/d H:i",strtotime($realtime));
                echo $writetime 
                ?>
            </td> <!---보낸시간 -->
          <td class="tc">
            <?php 
              if($recv['recv_chk'] == "0")
              {
                echo "읽지않음";
              }else{ 
                echo "읽음";
              }
            ?>
          </td>
          <td class="tc"><a href="se_delete.php?idx=<?php echo $recv['idx']; ?>" class="del_bt">삭제</a></td>
        </tr>
      </tbody>
    <?php } ?>
  </table>
  
      <!--페이징 번호 표시-->
      <div id="page_num">
      <ul>
        <?php
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면
            echo "<li class='fo_re'>처음</li>"; //처음이라는 글자에 빨간색 표시 
          }else{
            echo "<li><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
          }
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면 빈값
            
          }else{
          $pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
            echo "<li><a href='?page=$pre'>이전</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
          }
          for($i=$block_start; $i<=$block_end; $i++){ 
            //for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
            if($page == $i){ //만약 page가 $i와 같다면 
              echo "<li class='fo_re'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
            }else{
              echo "<li><a href='?page=$i'>[$i]</a></li>"; //아니라면 $i
            }
          }
          if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
          }else{
            $next = $page + 1; //next변수에 page + 1을 해준다.
            echo "<li><a href='?page=$next'>다음</a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
          }
          if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
            echo "<li class='fo_re'>마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
          }else{
            echo "<li><a href='?page=$total_page'>마지막</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
          }
        ?>
      </ul>
     </div>
      <!--종료-->
  
  <div id="note_bt">
      <ul>
        <li><button class="button"><a href="../write/write.php">쪽지쓰기</a></button></li>
        <li id="ri"><button class="button"><a href="se_alldelete.php?id=<?php echo $_SESSION['userid']; ?>" class="del_bt">전체삭제
        </button></a></li>
      </ul>
      <?php include '../../footer.php';?>
    </div>
  </div>
  <!--CSS는 여기까지-->
  
<!--로그인연결 실패시 메인으로 컴백-->
<?php }else{ 
echo "<script>alert('로그인을 확인하십시요.'); location.replace('https://jadoost.com/gmch/index.php');</script>"; } ?>