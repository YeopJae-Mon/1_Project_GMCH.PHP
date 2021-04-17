<?php
	include "../member/db.php";//db연결
	$match_out_no = $mno;
    
    $roomsql = mq("select * from match_room where r_no='".$mno."'"); /* match_room 값 $room에 저장 */
	$room = $roomsql->fetch_array();
	?>
	


<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style>
         <?php
        include 'match_read.css';
        include '../footer.css';
        include '../body.css';
        include '../header.css';
      ?>
</style>


<script>


function chat_send(){
    var form_data = { 
         user: $("#user").val(), 
         chat: $("#chat").val(), 
         mno: $("#mno").val()
        }; 
        console.log(form_data);
    $.ajax({
        type: "post",
        url : "chat_send.php",
        dataType:"text",
        data: form_data,
        error : function() {
        alert('통신실패!!');
        },
        success : function(data) {
        $('#chat_area').append(form_data.user+ " : " +form_data.chat + "<?echo '<br>';?>");
        }
    });
 }
 
 
 //나가기 버튼 클릭 시 
    function insert(){
        location.href="ck_match_out.php?m_no=<?php echo $mno?>"
        alert("채팅방리스트 이동합니다.");
    }
    function start(){
        location.href="start_game.php?m_no=<?echo $mno?>"
        aleft("화이팅!");
    }

//head_count 실시간화

 function chat(){
      
      $.ajax({
        type : "GET",
        url : "chat.php?m_no=<?echo $mno;?>",
        dataType : "text",
        error : function() {
          alert('통신실패!!');
        },
        success : function(data) {
          $('#chat_area').html(data);
        }
      });
      timerID = setTimeout("chat()", 2000); // 2초 단위로 갱신 처리
      
    }
    chat();
       
    
</script>
</head>
<body>

<!--<div id="area"><br></div>-->
<!-- 글 불러오기 -->


    <header class="top">
    <p>채팅방</p>
    </header>
    <section>
    <div>
        <header>
            <div id="title"><h1>[ <?php echo $match['title']; ?> ]</h1></div>
        </header>
<br>


<br><br><br>
<div id= "chat_area" style="overflow:auto">
</div>

</div>


<hr>
click = 전송 / 엔터키 = 사용금지
<?//method="post" action="chat_send.php?m_no=<?php echo $mno;?>
	<form id=chat_send name="form">
		<input type="hidden" id ="mno"name="mno" value="<?echo $mno;?>">
		<input type="hidden" id="user" name="user"  value = "<?echo $id?>">
		<input type="text" id="chat" size="11" name="Chat" >
		<input type="button" id="send" value = "click" onclick="chat_send();">
	</form>
<hr>
<div>

</div><br>
<div>
    <a>원하는 멤버일경우 시작을 클릭해주세요!</a><br>
    <input type="button" onclick="insert();" value="나가기">
    <input type="button" onclick="start();" value="시작"></div>
</div>
</section>


</body>
</html>