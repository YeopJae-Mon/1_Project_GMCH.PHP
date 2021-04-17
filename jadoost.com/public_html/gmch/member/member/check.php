<?php
	include "../db.php";
	$uid = $_GET["userid"];
	$sql = mq("select * from member where id='".$uid."'");
	$member = $sql->fetch_array();
	if($member==0)
	{
?>
	<div style='font-family:"malgun gothic"';><?php echo $uid; ?>는 사용가능한 아이디입니다.</div>
<?php 
	}else{
?>
	<div style='font-family:"malgun gothic"; color:red;'><?php echo $uid; ?>는 <br>중복된아이디입니다.<div>
<?php
	}
?>
<button value="닫기" onclick="history.back(-1)">닫기</button>
<script>
</script>