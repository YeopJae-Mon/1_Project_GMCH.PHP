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
        <p id="id">종 류</p>
		</header>
<!-- 첫 번째 페이지 -->

	<section>



		<div>

			<ul class="list_">
				<li><a href="hot/1.php">
				            <div id="list_div">오프레서 Mk II</div></a></li>
				<li><a href="hot/2.php">
				            <div id="list_div">캐런 구루마(방탄)</div></a></li>	
				<li><a href="hot/3.php">
				            <div id="list_div">버자드 공격 헬기</div></a></li>	            
				<li><a href="hot/4.php">
				            <div id="list_div">인서전트 픽업 커스텀</div></a></li>
		        <li><a href="hot/5.php">
				            <div id="list_div">임폰테 디럭소</div></a></li>
 
			</ul>

		</div>
		 <?include '../../footer.php';?>
 	</section>


</body>

</html>
