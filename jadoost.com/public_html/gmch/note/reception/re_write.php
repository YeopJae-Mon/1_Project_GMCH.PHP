<?php 
//섹션 연결
include "../../member/db.php";

//로그인 확인
if(isset($idid)){
  $bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
  $sql = mq("select * from r_note where idx='".$bno."'");
  $recv = $sql->fetch_array();
?>

<!--이곳부터 css가 필요합니다.-->
<style>
   <?php include '../CSS/style.css';
   include '../../header.css';
            include '../../footer.css';
            include '../../body.css';?>
</style>
    <header>
    <div class = "top">
       <input type="button" class="img-button" 
            onclick="location.href='note_reception.php'">
        <p id="id">쪽지</p>
    </div>
</header>
<aside>
	<ul id="note_menu">
		<li><button><a href="note_reception.php">받은쪽지함</a></button></li>
		<li><button><a href="../sent/note_send.php">보낸쪽지함</a></button></li>
	</ul>
</aside>
<!--글을 쓰기위한 공간-->
<div id="write_note_in">
	<form action="../write/write_ok.php" method="post" enctype="multipart/form-data">
        <div id="write_t">답장쓰기</div>
        <div id="write_form">
            <div class="wr_ip"><input type="text" name="recv_name" value="<?php echo $recv['send_id']; ?>" required readonly/></div>
            <div class="wr_ip wr_ip_top"><input type="text" name="title" value="RE:"required/></div>
            <div class="wr_ip wr_ip_top"><textarea name="content" style=" width:50%; height: 60%; padding:30px 0px 30px 0px" placeholder="내용" required></textarea></div>
            <button type="submit" class="wri_bt wr_ip_top">보내기</button>
        </div>
    </form>
</div>
<?php include '../../footer.php';?>
<!--CSS는 여기까지-->

<!--로그인연결 실패시 메인으로 컴백-->
<?php }else{ 
echo "<script>alert('로그인을 확인하십시요.'); location.replace('https://jadoost.com/gmch/index.php');</script>"; } ?>