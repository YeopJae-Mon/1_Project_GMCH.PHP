<?php
include 'db.php';
?>

<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>회원정보 수정</title>
    <style>
            <?php
     include 'mg_edit.css';
     include '../body.css';
     include '../header.css';
     include '../footer.css';
     
     ?> 
.inph{
    width:90%;
}
    
   

    </style>
  </head>
    <section>
  <body>
              <header class="top">
            <p>회원정보 수정</p>
        </header>
        
        
        <table style="margin-left: auto; margin-right: auto; border: 1px solid #444444; text-align:left; 
        background-color: #ffffff; ">
            <tr>
                <td>0 비매너</td>
                <td>읽기 전용</td>
            </tr>
            <tr>
                <td>1 비인증</td>
                <td>읽기 전용 (초기값)</td>
            </tr>
            <tr>
                <td>2 인증</td>
                <td>칭/ 글쓰기/ 댓글 사용가능</td>
            </tr>
            <tr>
                <td>3 우수회원</td>
                <td>테마 설정 or 메달색깔변경</td>
            </tr>
            <tr>
                <td>4 관리자</td>
                <td>글삭제, 댓글 삭제, 등급변경(0~2)</td>
            </tr>
            <tr>
                <td>5 스트리머</td>
                <td>sa</td>
            </tr>
            <tr>
                <td>6 관리자</td>
                <td>sa</td>
            </tr>
        </table>


    <form method="post" action="edit_ok.php">
    
    <table style="margin-left: auto; margin-right: auto;">


    <tr>
        <td>아이디</td>
        <td>LV</td>
    </tr><br>
    <tr style="width:100%">
    	<td colspan="1"> 
    	<input type="text" name="id" class="inph">
    	</td>
    	<td colspan="1"> 
    	<input type="text" name="lv" class="inph">
    	</td>
    	<!-- <td><button type="submit" id="btn" >수정</button></td> -->
    </tr>


    </table>
    <br>
        <button type="submit" id="btn" >수정</button>
    </body>
        </section>
         <?include '../footer.php';?>
</html>