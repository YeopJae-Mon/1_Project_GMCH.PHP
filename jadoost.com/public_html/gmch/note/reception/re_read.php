<?php 
//섹션 불러오기
include "../../member/db.php";

//로그인상태 확인
if(isset($idid))
{
  //받아온 읽기값 출력
  $bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/

  $sql = mq("select * from r_note where idx='".$bno."'");
  $recv = $sql->fetch_array();

  $re_da = $recv['send_date']; //$re_da변수에 send_date값 넣음
  $recv_chk = 1; // rec_chk에 1을 넣음
  $fet = mq("update s_note set recv_chk = '".$recv_chk."' where send_date = '".$re_da."'");
  // send_note테이블의 recv_chk를 1로, send_date가 $re_da와 같은 데이터에 업데이트한다. 1은 수신확인을 위해 바꾼다
?>

<!--이곳부터 css가 필요합니다.-->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>쪽지</title>
<style>
   <?php 
   include '../CSS/style.css';
   include 're_read.css';
   include '../../header.css';
            include '../../footer.css';
            include '../../body.css';
   ?>
   #note_read_bt {
    text-align: right;   
   }
   #bo_content{
    padding : 15px;
   }
   #user_info{
       padding : 3%;
       background-color:white;
       border-radius:30%;
   }
   
</style>
</head>
<header>
    <div class = "top">
       <input type="button" class="img-button" 
            onclick="location.href='note_reception.php'">
        <p id="id">쪽지</p>
    </div>
</header>
<aside>
	<ul id="note_menu">
		<li><button class="button"><a href="note_reception.php">받은쪽지함</a></button></li>
		<li><button class="button"><a href="../sent/note_send.php">보낸쪽지함</a></button></li>
	</ul>
</aside>
<div id="note_read">
	<div id="note_read_bt">
		<button class="button"><a href="re_delete.php?idx=<?php echo $recv['idx']; ?>" class="del_bt">삭제</a></button>
		<button class="button"><a href="re_write.php?idx=<?php echo $recv['idx']; ?>" class="dap_bt">답장</a></button>
	</div>
	<div id="no_ri_line"></div>
	<div id="note_info">
		<div id="user_info">
			<ul>
			    <li><b>쪽지제목</b>&nbsp;&nbsp;&nbsp;<?php echo $recv['title']; ?></li><br>
				<li><b>보낸사람</b>&nbsp;&nbsp;&nbsp;<?php echo $recv['send_id']; ?></li><br>
				<li><b>받은시간</b>&nbsp;&nbsp;&nbsp;<?php echo $recv['send_date']; ?></li><br>
			</ul>
			<div id="no_ri_line"></div>
		</div>
		<div id="bo_content">
			<?php echo nl2br("$recv[content]"); ?>
		</div>
	</div>
	
</div>
<?php include '../../footer.php';?>
<!--CSS는 여기까지-->

<!--로그인연결 실패시 메인으로 컴백-->
<?php }else{ 
echo "<script>alert('로그인을 확인하십시요.'); location.replace('https://jadoost.com/gmch/index.php');</script>"; } ?>