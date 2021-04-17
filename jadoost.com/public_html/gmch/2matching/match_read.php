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
       
    /**
     * 중복서브밋 방지 스크립트
     * @returns {Boolean}
     */
    var doubleSubmitFlag = false;
    function doubleSubmitCheck(){
        if(doubleSubmitFlag){
            return doubleSubmitFlag;
        }else{
            doubleSubmitFlag = true;
            return false;
        }
    }
    function insert(){
        if(doubleSubmitCheck()) return;
        location.href="ck_match_out.php?m_no=<?php echo $mno?>"
        alert("채팅방리스트 이동합니다.");
    }

  function player_list(){//플레이어 리스트 실시간화
      $.ajax({
        type : "GET",
        url : "player_list.php?m_no=<?echo $mno;?>",
        dataType : "text",
        error : function() {
          alert('통신실패!!');
        },
        success : function(data) {
          $('#player_list').html(data);
        }
 
      });
      timerID = setTimeout("player_list()", 2000); // 2초 단위로 갱신 처리
    }
 
    player_list();
    
    function player_count(){//인원수 실시간
      $.ajax({
        type : "GET",
        url : "player_count.php?m_no=<?echo $mno;?>",
        dataType : "text",
        error : function() {
          alert('통신실패!!');
        },
        success : function(data) {
          $('#player_count').html(data);
        }
 
      });
      timerID = setTimeout("player_count()", 2000); // 2초 단위로 갱신 처리
    }
player_count();


</script>
</head>
<body>






	
<!-- 글 불러오기 -->


    <header class="top">
        <input type="button" class="img-button" 
            onclick="insert();">
    <p id="id">[ <?php echo $match['title']; ?> ]대기실</p>
    </header>
    <section>
    
<div id= "player_count"><!--현재 참가 인원-->
</div>        
<div id= "player_list"><!--현재 참가인원 명단-->
</div>


<hr>
<div id= "chat_area" style="overflow:auto">
</div>

</div>


<hr>
click =  / 엔터키 = 사용금지
<?//method="post" action="chat_send.php?m_no=<?php echo $mno;?>
	<form id=chat_send name="form">
		<input type="hidden" id ="mno"name="mno" value="<?echo $mno;?>">
		<input type="hidden" id="user" name="user"  value = "<?echo $id?>">
		<input type="text" id="chat" size="11" name="Chat" >
		<input type="button" id="send" value = "전송" onclick="chat_send();">
	</form>
<div>

</div><br>
<div>
    <input type="button" onclick="insert();" value="나가기">
</div>

</section>


</body>
</html>