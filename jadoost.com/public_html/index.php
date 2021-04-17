<?php
include "gmch/member/db.php";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<style>
    div {text-align: center;}
    h1{text-size: 100%;}
    <?php include 'gmch/footer.css';
          include 'gmch/header.css'; 
          include 'gmch/body.css';?>
    </style> 
    
  </head>
  <body>

<header>
    <div class = "top">
        <p>GTA에서 만남을 추구할 수 있을까?</p>
    </div>
    <?php include "gmch/head.php";?>
</header>

<section>

<div> <!-- 이미지 가운데 정렬  -->
<?echo $refresh;?>
    <a href="gmch/YTApi/test.html">youtube api test</a><br>
    <a href="gmch/board/code/index.php">board</a><br>
    <a href="gmch/1news/1news.php"> <!--새소식 -->
      <img src="gmch/img/news.png" width="30%" /></a>
    <a href="gmch/2matching.html"> <!-- 매칭 -->
      <img src="gmch/img/matching.png" width="30%"/></a>
    <a href="gmch/3information/3Information.php"> <!-- gta 정보 -->
      <img src="gmch/img/information.png" width="30%"/></a>
    <br><br>
    <a href="gmch/4board/4board.php"> <!-- 게시판 -->
      <img src="gmch/img/board.png" width="30%"/></a>
    <a href="gmch/5servicecenter/5servicecenter.php"> <!-- 고객 -->
      <img src="gmch/img/service_center.png" width="30%"/></a>
    <a href="gmch/member/member/mypage.php"> <!-- 내정보  -->
      <img src="gmch/img/my_page.png" width="30%"/></a>
      <br><br>
    <a href="gmch/note/reception/note_reception.php"> <!-- 쪽지  -->
      <img src="gmch/img/my_page.png" width="30%"/></a>
      <br><br>

      


    
    </div>
    </section>
    <?php include 'gmch/footer.php';?>

  </body>
</html>
