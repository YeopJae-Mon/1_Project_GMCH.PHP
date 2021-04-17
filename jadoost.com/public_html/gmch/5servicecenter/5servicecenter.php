<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>게시판</title>
<style>
    <?php
     include '5.css';
     include '../body.css';
     include '../header.css';
     include '../footer.css';
     
     ?> 
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>

<header>
    <div class = "top">
       <input type="button" class="img-button" 
            onclick="location.href='../index.php'">
        <p id="id">고객센터</p>
    </div>
</header>


<body>

<!-- 첫 번째 페이지 -->

	<section>

<div class="section">
     <button type="button" class="button" onClick="location.href='help.php'">
        도움말</button>&nbsp;&nbsp;
     <button type="button" class="button" onClick="location.href='board_report/code/index.php'">
         신고</button><br><br>
      <button type="button" class="button" onClick="location.href='board_certify/code/index.php'">인증</button>&nbsp;&nbsp;
           <button type="button" class="button" onClick="location.href='board_question/code/index.php'">문의</button>
           <br><br>
           
    <button type="button" class="button2" onClick="location.href='board_QnA/code/index.php'">
         자주묻는 질문</button><br><br>
</div>         

	

    


	</section>
      <? include '../footer.php';?>
</body>

</html>
