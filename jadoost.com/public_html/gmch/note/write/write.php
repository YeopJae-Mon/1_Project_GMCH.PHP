<?php 
//섹션 받아오기
include "../../member/db.php";

//로그인확인
if(isset($idid))
    { 
?>

<!--이곳부터 css가 필요합니다.-->
<html>
<head>
<meta charset="utf-8" />
<style>
   <?php 
   include '../CSS/style.css';
   include 'write.css';
   include '../../header.css';
            include '../../footer.css';
            include '../../body.css';
   ?>
   
   
</style>
<script>
function insert(){
        if(doubleSubmitCheck()) return;
        alert("댓글이 등록되었습니다.");
    }
</script>
</head>
<body>
    
<header>
    <div class = "top">
       <input type="button" class="img-button" 
            onclick="location.href='../sent/note_send.php'">
        <p id="id">쪽지</p>
    </div>
</header>

<!--쪽지쓰는창-->
<div id="write_note_in">
	<form action="write_ok.php" method="post" enctype="multipart/form-data">
        
        <div id="write_form">
            회원이 아닐경우 쪽지발송이 되지 않습니다.
            <br>
            <br>
            
            <div class="wr_ip">받는 사람 : <input type="text" style=" width:40%; height: 5px; padding:10px 0px 10px 0px" name="recv_name" placeholder="받는사람" id="uid" required />
                <input type="hidden" value="0" name="chs" /></div>
                <br>
            <div class="wr_ip wr_ip_top">제목 : <input type="text" 
            style=" width:48%; height: 5px; padding:10px 0px 10px 0px" name="title" placeholder="제목" required/></div>
            <br>
            <div class="wr_ip wr_ip_top"><textarea name="content" 
            style=" width:60%; height: 60%; padding:30px 0px 30px 0px" placeholder="내용" required></textarea></div>
            <br><br>
            <button type="submit" class="wri_bt wr_ip_top" id="button" onclick=insert();>보내기</button>
        </div>
    </form>
</div>
     <?php include '../../footer.php';?>
    </body>
    </html>
<!--CSS는 여기까지-->

<!--로그인연결 실패시 메인으로 컴백-->
<?php }else{ 
echo "<script>alert('로그인을 확인하십시요.'); location.replace('https://jadoost.com/gmch/index.php');</script>"; } ?>
