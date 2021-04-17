<?php
	include "../../../../member/db.php";
	?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" href="style.css?after-914" type="text/css"
media="screen" title="no title" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

	.read{
	        text-align : left;
	}
	<?php
	include "../../css/s.css";
	include "../../../../header.css";
	include "../../../../body.css";
	include "../../../../footer.css";
	?>
</style>

</head>

<script>
    /**
     * 중복서브밋 방지 스크립트
     * @returns {Boolean}
     */
    var doubleSubmitFlag = false;
    function doubleSubmitCheck(){
        if(doubleSubmitFlag){
            return doubleSubmitFlag;
        }else{
            doubleSubmitFlag = true;
            return false;
        }
    }
    function insert(){
        if(doubleSubmitCheck()) return;
        alert("댓글이 등록되었습니다.");
    }
    
    </script>


<body>
	<?php
	    /*댓글 카운팅*/
	    $bno = $_GET['qna_b_no']; /* bno함수에 idx값을 받아와 넣음*/
	    $sql2 = mq("select * from qna_reply where qna_b_num='".$bno."'"); 
        $rep_count = mysqli_num_rows($sql2);
        $hit = mysqli_fetch_array(mq("select * from qna_board where qna_b_no ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = mq("update qna_board set hit = '".$hit."' where qna_b_no = '".$bno."'");
		$sql = mq("select * from qna_board where qna_b_no='".$bno."'"); /* 받아온 idx값을 선택 */
		$qna_board = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div>
    <header class="top">
<input type="button" class="img-button" 
            onclick="location.href='../index.php'">
        <p id="id">자주 묻는 질문</p>
    </header>
        <header>
            <div id="title"><h1>[ <?php echo $qna_board['title']; ?> ]</h1></div>
        </header>
<br>
		<div>
		    <table style="width:100%">
		      <tr>
		          <!--이거 오타 아님 -->


		      


		        </tr>
		        <tr>
		        <td><div id="id_mm-dd_hit">
		            작성자 : <?php echo $qna_board['id']; ?> &#124;
		            작성일 : <?php echo $qna_board['date']; ?> &#124; 
		            조회수 : <?php echo $qna_board['hit'];?>
		            </div>
		            <?if($id==$qna_board['id']){?>
		            <div id="delete">
		            <a href="modify.php?qna_b_no=<?php echo $qna_board['qna_b_no'];?>">[수정]</a>
                    <a href="delete.php?qna_b_no=<?php echo $qna_board['qna_b_no'];?>">[글삭제]</a>
                    </div>
                    <?}?>
                    </td>
		        </tr>
		        
		    </table>
<hr>
			<!--	<div id="bo_line">
				    
				</div> -->
			</div>
			<br>
			<div class="read"> <!-- 내용 -->
				<?php echo nl2br("$qna_board[content]"); ?>
			</div>

</div>
<div style="text-align: center; width: 100%;">
    
    <img  style="width: 90%; " src='../../upload/<?php echo $qna_board['file'];?>'/>
</div>

          

<hr>


<?php include '../../../../footer.php';?>
</body>
</html>