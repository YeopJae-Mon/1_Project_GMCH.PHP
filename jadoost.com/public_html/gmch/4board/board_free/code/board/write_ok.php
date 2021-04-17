<?php

include "../../../../member/db.php";

//각 변수에 write.php에서 input name값들을 저장한다

$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');

if(isset($_POST['lockpost'])){
	$lo_post = '1';
}else{
	$lo_post = '0';
}



// 설정
$uploads_dir = '../../upload';
$allowed_ext = array('jpg','jpeg','png');

// 변수 정리
$error = $_FILES['myfile']['error'];
$name = $_FILES['myfile']['name'];
$time = time();
$ext = array_pop(explode('.', $name));

$convert_name = $name + $time;

$server_name = rename($name, $convert_name);
	



    



// 파일 이동
move_uploaded_file( $_FILES['myfile']['tmp_name'], "$uploads_dir/$convert_name");



$mqq = mq("alter table free_board auto_increment =1"); //auto_increment 값 초기화

if($id && $title && $content){
    $sql = mq("insert into free_board(id,nick_name,title,content,date, lock_post,file) values('".$id."','".$nname."','".$title."','".$content."','".$date."','".$lo_post."','".$convert_name."')"); 
    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='../index.php';</script>";
}else{
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    location.href='../index.php';</script>";
}

?>