<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>new</title>
<style>
    <?php
     include '4.css';
     include '../body.css';
     include '../header.css';
     include '../footer.css';
     ?> 

</style>

<!--<link rel="stylesheet" href="http://www.jadoost.com/gmch/css/frame.css?after-32" type="text/css"
media="screen" title="no title" charset="utf-8" />-->

</head>

<body>


        <header class="top">
            <input type="button" class="img-button" 
            onclick="location.href='../index.php'"><p id="id">게시판</p>
        </header>

<!-- 첫 번째 페이지 -->
	<section>
<div class="section">
     
    <button type="button" class="button" 
    onClick="location.href='board_free/code/index.php'">자유게시판</button>
    
    <br><br><br>
     
    <button type="button" class="button" 
    onClick="location.href='board_flex/code/index.php'">자랑게시판</button>
         

      
      
</div>  
	    

   
	</section>

 <?include '../footer.php';?>
</body>

</html>
