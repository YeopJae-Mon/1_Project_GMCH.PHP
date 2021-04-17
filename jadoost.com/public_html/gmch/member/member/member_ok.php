<?php
	include "../db.php";
	include "../password.php";

	$userid = $_POST['userid'];
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	$nickname = $_POST['n_name'];
	$r_id = $_POST['r_id'];
	$sex = $_POST['sex'];
	$email = $_POST['email'].'@'.$_POST['emadress'];

	
	
	$searchID = mq("select * from member where id='".$userid."'");
	$member = $searchID ->fetch_array();
	
	if($member['id']==$userid && $member['n_name']==$nickname){
	    echo '
<script type="text/javascript">alert("아이디와 닉네임이 중복됩니다.");
location.href="member.php"</script>';
	}else if($member['n_name']==$nickname){
	    echo '
<script type="text/javascript">alert("닉네임이 중복됩니다.");
location.href="member.php"</script>';
	}else if($member['id']==$userid){
	    echo '
<script type="text/javascript">alert("아이디가 중복됩니다.");
location.href="member.php"</script>';
	}else if($member==0){
	    $sign = mq("insert into member (id,pw,name,r_id,sex,email,n_name) values('".$userid."','".$userpw."','".$username."','".$r_id."','".$sex."','".$email."','".$nickname."')");
        echo '
        <script type="text/javascript">alert("회원가입이 완료되었습니다.");
        location.href="../../index.php"</script>';
	}


?>
