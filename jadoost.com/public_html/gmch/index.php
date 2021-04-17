<?php
include "member/db.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

<style>
#easteregg {
  text-decoration:none 
}
    div {text-align: center;}
    h1{text-size: 100%;}
    <?php 
          
          include 'footer.css';
          include 'header.css'; 
          include 'body.css';?>

          #id{
              padding-right:15%;
}
    </style> 
    
  </head>
  <body>



<header>
    <div class = "top">
       
        <p>지 만 추</p>
    </div>
    
</header>

<section>
<div id = MyState>
    <?
        if(isset($id)){
        ECHO $nname.'님 환영합니다';
        }else{
            echo '<a href="member/index.php";>로그인</a>이 필요합니다';
           
        }
        ?><a id="easteregg" href="member/member/logout.php">.</a>
</div>
<div> <!-- 이미지 가운데 정렬  -->
 
<br><br>
<br><br>
        
        <Table style=" width:100%">
            <tr>
                <td> 
                <a href="1news/1news.php" > <!--새소식 -->
                    <img src="testimg/1.png" width="80%"/></a>
                </td>
                <td>    
                <a href="2matching/match_list.php"> <!-- 매칭 -->
                    <img src="testimg/2.png" width="80%"/>
                </a>
                </td>
                <td>  <a 
                    href="3information/3Information.php"> <!-- gta 정보 -->
                    <img src="testimg/3.png" width="80%"/>
                    </a>
                 </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    새소식
                </td>
                <td>
                    매칭
                </td>
                <td>
                    정보
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td> 
                <a href="4board/4board.php"> <!-- 게시판 -->
      <img src="testimg/4.png" width="80%" /></a>
                </td>
                <td>    
                <a href="5servicecenter/5servicecenter.php"> <!-- 고객 -->
      <img src="testimg/5.png" width="80%" /></a>
                </a>
                </td>
                <td>  <a href="member/member/mypage.php"> <!-- 내정보  -->
      <img src="testimg/6.png" width="80%"/></a><br>
                    </a>
                 </td>
            </tr>
            
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
                <td>
                    자유게시판
                </td>
                <td>
                    고객센터
                </td>
                <td>
                    내정보
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td> 
                
                </td>
                <td>    
                <a href="note/reception/note_reception.php"> <!-- 쪽지  -->
      <img src="testimg/7.png" width="80%"/></a>
                
                </td>
                
                   
                 </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                   
                </td>
                <td>
                    쪽지
                </td>
                <td>
                    
                </td>
            </tr>
        </Table>
    
    
 


    
    </div>
    </section>
    <?php include 'footer.php';?>

  </body>
</html>
