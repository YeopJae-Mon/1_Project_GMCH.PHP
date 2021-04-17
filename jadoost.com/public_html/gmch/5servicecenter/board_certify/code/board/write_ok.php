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
	

// 오류 확인
//if( $error != UPLOAD_ERR_OK ) {
//	switch( $error ) {
//		case UPLOAD_ERR_INI_SIZE:
//		case UPLOAD_ERR_FORM_SIZE:
//			echo "파일이 너무 큽니다. ($error)";
//			break;
//		case UPLOAD_ERR_NO_FILE:
//			echo "파일이 첨부되지 않았습니다. ($error)";
//			break;
//		default:
//			echo "파일이 제대로 업로드되지 않았습니다. ($error)";
//	}
//    exit;
//}
 
// 확장자 확인
//if( !in_array($ext, $allowed_ext) ) {
//	echo "허용되지 않는 확장자입니다.";
//	exit;
//}

    



// 파일 이동
move_uploaded_file( $_FILES['myfile']['tmp_name'], "$uploads_dir/$convert_name");

//파일업로드
//$tmpfile =  $_FILES['b_file']['tmp_name'];
//$o_name = $_FILES['b_file']['name'];

//$f_name = rename($o_name,time());



//$folder = "../../upload/".$f_name;
//move_uploaded_file($tmpfile,$folder);


$mqq = mq("alter table certify_board auto_increment =1"); //auto_increment 값 초기화

if($id && $title && $content){
    $sql = mq("insert into certify_board(id,title,content,date, lock_post,file) values('".$id."','".$title."','".$content."','".$date."','".$lo_post."','".$convert_name."')"); 
    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='../index.php';</script>";
}else{
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    location.href='../index.php';</script>";
}

?>