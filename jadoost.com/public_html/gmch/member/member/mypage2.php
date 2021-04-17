<?php  
	include "../db.php";
	if(isset($_SESSION['userid'])){
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8" />
<title>내 정보</title>
<style>
* {margin: 0 auto;}
a {color:#333; text-decoration: none;}
.find {text-align:center; width:100%; margin-top:30px; }
input{width:80%;}
td#title{
    line-height:170%;
}
<? include "member.css" ?>
</style>
</head>
<body>
	<div class="find">
		<form method="post" action="member_update.php">
			<?php
				$sql = mq("select * from member where id='{$_SESSION['userid']}'");
				while($member = $sql->fetch_array()){
					?>
		<header class="top">
            <div><h1>내 정보</h1></div>
        </header>
				<div class="find">
				<fieldset>
					<legend>마이페이지</legend>
						<table>
							<tr>
								<td id="title">아이디</td>
								<td><input type="text" size="35" name="userid" value="<?php echo $_SESSION['userid'];?>" disabled></td>
							</tr>
							<tr>
								<td size="35" >비밀<br> 번호</td>
								<td><input type="password" size="35" name="userpw" placeholder="비밀번호" required></td>
							</tr>
							<tr>
								<td>이름</td>
								<td><input type="text" size="35" name="name" placeholder="이름" value="<?php echo $member['name']; ?>"></td>
							</tr>
							<tr>
								<td>락스타<br> 아이디</td>
								<td><input type="text" size="35" name="r_id" placeholder="락스타 아이디" value="<?php echo $member['r_id']; ?>"></td>
							</tr>
							<tr>
								<td>닉네임</td>
								<td><input type="text" size="35" name="n_name" placeholder="닉네임" value="<?php echo $member['n_name']; ?>"></td>
							</tr>
							<tr>
								<td>이메일</td>
								<td><input type="text" size="35" name="email" placeholder="이메일" value="<?php echo $member['email']; ?>"></td>
							</tr>
								<tr>
							    <td>등급</td>
							    <td>
							    <input type="text" size="35" name="lv" placeholder="등급" 
							    value="<?if($lv==1){
							    echo '비매너회원';
							    }else if($lv==2){
							    echo '일반회원';
							    }else if($lv==3){
							    echo '우수회원';
							    }else if($lv==4){
							        echo '관리자';
							    }
							    ?>"disabled></td>
							</tr>
							<tr>
							    <td>보유머니</td>
							    <td><input type="text" size="35" name="lv" placeholder="보유머니" value="<?php echo $member['exp']; ?>"disabled></td>
							</tr>
							
						</table>
						
						<?php 
						?>
					<input type="submit" value="완료" />
					<input type="button" onclick="location.href='mypage.php'" value="이전페이지">
			</fieldset>
			<?php } ?>
		</form>
	</div>
	<? include '../../footer.php';?>
</body>
</html>
<?php }else{
	echo "<script>alert('로그인이 필요합니다.'); history.back();</script>";
}