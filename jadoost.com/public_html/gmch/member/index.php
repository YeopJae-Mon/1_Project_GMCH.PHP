<?php   
include "db.php";

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>회원가입 및 로그인 사이트</title>
<style>
 
    <?php include '../footer.css';
          include '../header.css'; 
          include '../body.css';
          include 'login.css';?>
    </style>
    
    <script>
        function getString(){
            John.getString(userid.value);
        }
    </script>
    
</head>
<body>
<header>
    <div class = "top">
        <input type="button" class="img-button" 
            onclick="location.href='../index.php'">
            <p id="id">로그인</p>
    </div>
</header>  
   <section>  
	<div id="login_box">
			<br>
			<Br>
			<form method="post" action="member/login_ok.php">
				<table align="center" border="0" cellspacing="0" id="ta_width">
        			<tr>
            			<td> 
            			<!--id 확인-->
                		<input type="text" id="userid" value="" name="userid" class="inph"  placeholder="아이디" >
                		<hr>
            		</td>
            		
        		</tr>
        		<tr>
            		<td > 
               		<input type="password" id="password" name="userpw" class="inph" placeholder="비밀번호">
               		<hr>
            	</td>
            	
        	</tr>
        	<Tr>
        	    <td  align="center" > 
            		<!--onclick확인-->
                		<button onclick="getString()" class="btn" type="submit" id="btn">로그인</button>
                		<br><br>
            		</td>
        	</Tr>
        	<tr>
        	    
           		<td  align="center" class="mem" id="tda"> 
              	<Br>
              	<a href="member/Privacy.php" id="decoration">회원가입</a>
              	&nbsp;
              	&#124;
              	&nbsp;
                <a href="member/member_find.php" id="decoration">아이디/비밀번호 찾기</a>
                &nbsp;
                &#124;
                &nbsp;
                <a href="../index.php" id="decoration">홈으로</a>
                
           </td>
        </tr>
    </table>
  </form>
  <br>
</div>
</section>
<?php include '../footer.php';?>
</body>
</html>