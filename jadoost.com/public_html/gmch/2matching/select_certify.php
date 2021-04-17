<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>습격</title>
<style>
    <?php

     include '../body.css';
     include '../header.css';
     
     
     ?> 

</style>


</head>

<body>


        <header class="top">
            <input type="button" class="img-button" 
            onclick="location.href='match_list.php'"><p id="id">습격선택</p>
        </header>

<!-- 첫 번째 페이지 -->
	<section>
<div class="section">
    <input type="image" value="구습격" src="img/old.png" onClick="location.href='select_certify_old.php'" /><br><br>
    
    <input type="image" value="신습격" src="img/new.png" onClick="location.href='select_certify_new.php'" /><br><br>
    
    <input type="image" value="카지노습격" src="img/casino.png" onClick="location.href='select_certify_casino.php'" /><br><br>

    <input type="image" value="패리코습격" src="img/perico.png" onClick="location.href='select_certify_perico.php'" /><br><br>
      
      
</div>  
	    

   
	</section>

 
</body>

</html>
