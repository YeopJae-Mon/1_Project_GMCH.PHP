
<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Information</title>
<style>
     <?php include 'heist.css';
        include '../../footer.css';
        include '../../body.css';
        include '../../header.css';?>
</style>



</head>

<body>
<header class="top">
    <input type="button" class="img-button" 
            onclick="location.href='../3Information.php'">
        <p id="id">습격</p>
        </header>


<!-- 첫 번째 페이지 -->

	<section>

<div class="section">
     <button type="button" class="button" onClick="location.href='oldheist.php'">구습격</button><br><br>
      <button type="button" class="button" onClick="location.href='newheist.php'">신습격</button>&nbsp;&nbsp;&nbsp;
           <button type="button" class="button" onClick="location.href='casinoheist.php'">카습격</button>
</div> 

	<!--	<div>

			<ul class="list_">
				<li><a href="oldheist.php"><div id="list_div">
                            구 습격
                        </div></a></li>
				<li><a href="newheist.php"><div id="list_div">
                            신 습격
                        </div></a></li>
				<li><a href="casinoheist.php"><div id="list_div">
                           카지노 습격
                        </div>
				</a></li>
				
			</ul>

		</div> -->




	</section>
      <? include '../../footer.php';?>
</body>

</html>
