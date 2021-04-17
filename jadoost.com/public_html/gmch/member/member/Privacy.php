<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />
<style>
    div {text-align: center;}
    h1{text-size: 100%;}
    <?php include '../../footer.css';
          include '../../header.css'; 
          include '../../body.css';
          include '../../member1.css';?>
          input[type=submit] {
    padding:15px 100px 15px 100px;
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}

input[type=reset] {
    padding:15px 100px 15px 100px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
    </style> 
<script>
function checkid(){
	var userid = document.getElementById("uid").value;
	if(userid)
	{
		url = "check.php?userid="+userid;
			window.open(url,"chkid","width=300,height=100");
		}else{
			alert("아이디를 입력하세요");
		}
	}
function checknick(){
	var n_name = document.getElementById("nick").value;
	if(n_name)
	{
		url = "checknick.php?n_name="+n_name;
			window.open(url,"nickname","width=300,height=100");
		}else{
			alert("닉네임를 입력하세요");
		}
	}
    // F12 버튼 방지


</script>
</head>
<body>

    <header>
        <div class = "top">
        <input type="button" class="img-button" 
            onclick="location.href='../index.php'">
            <p id="id">회원가입</p>
    </div>
    </header>
    <section>
        개인정보 동의서<br><br>
        <iframe src="1.php" size="10"
        width="90%" 
        height="450" scrolling="yes">
           </iframe><br><br>

            위 사항을 모두 동의 하십니까?<br>
            <input type="checkbox" name="xxx" value="yyy"
                onClick="location.href='member.php'"/>
            
           
	</section>
	  <?php include '../../footer.php';?>
</body>
</html>