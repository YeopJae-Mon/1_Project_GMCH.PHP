<?php 
  include "../db.php";
  if(isset($_SESSION['userid'])){
    echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
  }else{ ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>회원가입 폼</title>
<style>
 <?php    include '../../footer.css';
          include '../../header.css'; 
          include 'member_find.css';
?>
* {margin: 0 auto;}
a {color:#333; text-decoration: none;}
.find {text-align:center; width:100%; }
</style>
</head>
<body>
        <header>
        <div class = "top">
        <input type="button" class="img-button" 
            onclick="location.href='../index.php'">
            <p id="id">계정 찾기</p>
    </div>
    </header>
  <div class="find">
    <form method="post" action="member_find_id.php">
      <h1>회원계정 찾기</h1>
        <fieldset>
          <legend>아이디 찾기</legend>
            <table height="30%" width="100%">
              <tr>
                <td>이름</td>
                <td><input type="text" size="30" name="name" placeholder="이름"></td>
              </tr>
              <tr>
                <td>이메일</td>
                <td><input type="text" size="15" name="email">@<select name="emadress"><option value="naver.com">naver.com</option><option value="nate.com">nate.com</option>
                <option value="hanmail.com">hanmail.com</option><option value="gmail.com">gmail.com</option></select></td>
              </tr>
            </table>
          <input type="submit" value="아이디 찾기" />
      </fieldset>
    </form>
  </div>
  <br><br><br><br>
  <div class="find">
      <form method="post" action="member_find_pw.php">
        <fieldset>
          <legend>비밀번호 찾기</legend>
            <table>
              <tr>
                <td>아이디</td>
                <td><input type="text" size="30" name="userid" placeholder="아이디"></td>
              </tr>
                <tr>
                <td>이름</td>
                <td><input type="text" size="30" name="name" placeholder="이름"></td>
              </tr>
              <tr>
                <td>이메일</td>
                <td><input type="text" size="17" name="email">@<select name="emadress"><option value="naver.com">naver.com</option><option value="nate.com">nate.com</option>
              
            </table>
          <input type="submit" value="비밀번호 찾기" />
      </fieldset>
    </form>
  </div>
   <?php include '../../footer.php';?>
</body>
</html>
<?php } ?>