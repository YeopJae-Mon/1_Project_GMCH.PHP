<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>탈 것</title>

<style>

     <? 
        include 'Vehicle.css';
        include '../../footer.css';
        include '../../body.css';
        include '../../header.css';
      ?>
</style>


</head>

<body>

	<header class="top">
	<input type="button" class="img-button" 
            onclick="history.go(-1)">
        <p id="id">탈 것</p>	
		</header>

<!-- 첫 번째 페이지 -->

	<section>
<div class="section">
     <button type="button" class="button" onClick="location.href='hot.php'">HOT!한 탈것</button><br><br>
      <button type="button" class="button" onClick="location.href='HeistVehicle.php'">습격 이동 수단</button>
</div>  
	<!--	<div>

			<ul class="list_">
			    
			    <li><a href="hot.php"><div id="list_div">HOT!한 탈것</div></a></li>
				<li><a href="HeistVehicle.php"><div id="list_div">습격 이동 수단</div></a></li>
				<!--<li><a href="recommendation.php"><div id="list_div">추천 탈것</div></a></li>
			</ul>

		</div> -->
 </section>
      <?php include "../../footer.php";?>
	

</body>

</html>
