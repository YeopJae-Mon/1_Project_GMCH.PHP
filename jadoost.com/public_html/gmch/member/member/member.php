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
	<form method="post" action="member_ok.php" name="memform">
		
			<fieldset>
				<legend>입력사항</legend>
					<table>
						<tr>
							<td id="td1">아이디</td>
							<td id="td2"><input type="text" size="11" name="userid" id="uid" placeholder="아이디" required>
								<input type="button" value="중복검사" onclick="checkid();" />
								<input type="hidden" value="0" name="chs" />
							</td>
						</tr>
						<tr>
							<td id="td1">락스타<br>아이디</td>
							<td id="td2"><input type="text" size="11" name="r_id" placeholder="락스타 아이디" required></td>
						</tr>
						<tr>
							<td id="td1">닉네임</td>
							<td id="td2"><input type="text" size="11" name="n_name" id="nick" placeholder="닉네임" required>
							    <input type="button" value="중복검사" onclick="checknick();" />
							    <input type="hidden" value="0" name="chs" />
							</td>
						</tr>
						<tr>
							<td id="td1">비밀번호</td>
							<td id="td2"><input type="password" size="11" name="userpw" placeholder="비밀번호" required></td>
						</tr>
						<tr>
							<td id="td1">이름</td>
							<td id="td2"><input type="text" size="11" name="name" placeholder="이름" required></td>
						</tr>
						
						<tr>
							<td id="td1">성별</td>
							<td id="td2">남<input type="radio" name="sex" value="남"> 여<input type="radio" name="sex" value="여"></td>
						</tr>
						<tr>
							<td id="td1">이메일</td>
							<td id="td2"><input type="text" size="11" name="email" required>@<select name="emadress"><option value="naver.com">naver.com</option><option value="gmail.com">gmail.com</option><option value="daum.net">daum.net</option><option value="nate.com">nate.com</option>
							<option value="hanmail.com">hanmail.com</option></select></td>
						</tr>
					</table>
				<input type="submit" value="가입하기" />
				<br>
				<br><input type="reset" value="다시쓰기" />
		</fieldset>
	</form>
	</section>
	  <?php include '../../footer.php';?>
</body>
</html>