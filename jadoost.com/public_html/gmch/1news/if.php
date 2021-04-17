<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>new</title>
<style>
    <?php
     include '1.css';
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
            onclick="history.go(-1)"><p id="id">새 소식</p>
        </header>

         <iframe src="https://www.rockstargames.com/kr/newswire"
         width="100%" height="700" scrolling="yes"
         align="center">
             
         </iframe>


 <?include '../footer.php';?>
</body>

</html>
