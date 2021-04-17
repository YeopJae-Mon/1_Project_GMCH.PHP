<?php 
//섹션받아오기
include "../../member/db.php";

header("Progma:no-cache");
  header("Cache-Control:no-cache,must-revalidate");

//받아온 값들 데이터 집어넣기 변수
$uid = $_POST["recv_name"];
$sql = mq("select * from member where id='".$uid."'");
$member = $sql->fetch_array();
$time = date("Y-m-d H:i:s",time());

//보내는 사람이 회원이 아닐경우(더미데이터 제작 방지)
if($member==0)
{echo "<script>alert('보내는 사람이 회원이 아닙니다.'); location.href='https://jadoost.com/gmch/note/write/write.php';</script>";

//로그인 연결확인
}else if(isset($idid)){

//보낸메일데이터에 저장
$sql = mq("insert into s_note(recv_id,send_id,title,content,recv_chk,send_date) values('".$_POST['recv_name']."','".$_SESSION['userid']."','".$_POST['title']."','".$_POST['content']."','0','".$time."')");

//수신메일데이터에 저장
$sql2 = mq("insert into r_note(recv_id,send_id,title,content,send_date) values('".$_POST['recv_name']."','".$_SESSION['userid']."','".$_POST['title']."','".$_POST['content']."','".$time."')");

//쪽지보내는거에 성공할 경우
echo "<script>alert('쪽지를 보냈습니다.'); location.href='../sent/note_send.php'</script>"; 

//로그인연결 실패시 메인으로 컴백
}else{ 
echo "<script>alert('로그인을 확인하십시요.'); location.replace('https://jadoost.com/gmch/index.php');</script>"; } ?>
