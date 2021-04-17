<?php
	include "../db.php";
	$nick = $_GET["n_name"];
	$sql = mq("select * from member where n_name='".$nick."'");
	$member = $sql->fetch_array();
	if($member==0)
	{
?>
	<div style='font-family:"malgun gothic"';><?php echo $nick; ?>는<br> 사용가능한 닉네임입니다.</div>
<?php 
	}else{
?>
 <div style='font-family:"malgun gothic"; color:red; ' ><br><?php echo $nick; ?><br>중복된닉네임입니다.<div>
<?php
	}
?>
<button value="닫기" onclick="history.back(-1)">닫기</button>
<script>
</script>
