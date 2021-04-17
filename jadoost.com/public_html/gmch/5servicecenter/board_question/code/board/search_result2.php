<?php 
  include "../../../member/db.php";
  $write = "write.php";
 //댓글 수 카운트
$sql2 = mq("select * from reply where con_num='".$board['b_no']."'"); //reply테이블에서 con_num이 board의 b_no와 같은 것을 선택
$rep_count = mysqli_num_rows($sql2); //num_rows로 정수형태로 출력

?>
<!doctype html>
<head>
<meta charset="UTF-8">
<style>
    <?php include '../../css/style.css';?>

</style> 
</head>
<body>

<header>
    <div class = "top">
        <h1>자유게시판</h1>
    </div>

</header>    
<section>
<div id="board_area"> 
<!-- 18.10.11 검색 추가 -->
<?php
 
  /* 검색 변수 */
  $catagory2 = $_GET['catgo2'];
  $search_con2 = $_GET['search2'];
?>
  <h4><?php echo $catagory2; ?>에서 '<?php echo $search_con2; ?>'검색결과</h4>
  <h4 style="margin-top:30px;"><a href="/">홈으로</a></h4>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <th width="100">조회수</th>
            </tr>
        </thead>
        <?php
         if(isset($_GET['page'])){
          $page = $_GET['page'];
            }else{
              $page = 1;
            }
              $sql = mq("select * from board");
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

             
          $sql2 = mq("select * from board where $catagory2 like '%$search_con2%' order by b_no desc limit $start_num, $list");
          while($board = $sql2->fetch_array()){
           
          $title=$board["title"]; 
                if(strlen($title)>10)//글자수
                { 
                  $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
                }
                $sql3 = mq("select * from reply where con_num='".$board['b_no']."'");
                $rep_count = mysqli_num_rows($sql3);
              ?>
      <tbody>
    <tr>
      <td width="70"><?php echo $board['b_no']; ?></td>
      <td width="500"><?php 
        $lockimg = "<img src='../../image/lock.png' alt='lock' title='lock' with='20' height='20' />";
        if($board['lock_post']=="1"){ ?>
          <a href='ck_read.php?b_no=<?php echo $board["b_no"];?>'><?php echo $title; ?><span class="re_ct">[<?php echo $rep_count; ?>]</span><? echo $lockimg;
            }else{    
            $boardtime = $board['date']; //$boardtime변수에 board['date']값을 넣음
            $timenow = date("Y-m-d"); //$timenow변수에 현재 시간 Y-M-D를 넣음
            
            if($boardtime==$timenow){
            $img = "<img src='../../image/new.png' alt='new' title='new' />";
          }else{
            $img ="";
          }?>
        <a href='read.php?b_no=<?php echo $board["b_no"]; ?>'><?php echo $title;?><span class="re_ct">[<?php echo $rep_count; ?>]<?php echo $img; ?></span><? }?>
        </a></td>
      <td width="120"><?php echo $board['id']?></td>
      <td width="100"><?php echo $board['date']?></td>
      <td width="100"><?php echo $board['hit']; ?></td>
    </tr>
  </tbody>
      <?php } ?>
    </table>
    <!-- 18.10.11 검색 추가 -->
    <div id="search_box2">
      <form action="search_result1.php" method="get">
      <select id="catgo">
        <option value="title">제목</option>
        <option value="id">글쓴이</option>
        <option value="content">내용</option>
      </select>
      <input type="text" id="search" size="40" required="required"/> <button>검색</button>
    </form>
  </div>
  <!---페이징 넘버 --->
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
</div>
</section>
</body>
</html>