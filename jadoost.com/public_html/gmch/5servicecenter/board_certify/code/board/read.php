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
	    $bno = $_GET['certify_b_no']; /* bno함수에 idx값을 받아와 넣음*/
	    $sql2 = mq("select * from certify_reply where certify_b_num='".$bno."'"); 
        $rep_count = mysqli_num_rows($sql2);
		$sql = mq("select * from certify_board where certify_b_no='".$bno."'"); /* 받아온 idx값을 선택 */
		$certify_board = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div>
    <header class="top">
<input type="button" class="img-button" 
            onclick="location.href='https://jadoost.com/gmch/5servicecenter/board_certify/code/index.php'">
        <p id="id">인증게시판</p>
    </header>
        <header>
            <div id="title"><h1>[ <?php echo $certify_board['title']; ?> ]</h1></div>
        </header>
<br>
		<div>
		    <table style="width:100%">
		      <tr>
		          <!--이거 오타 아님 -->


		      


		        </tr>
		        <tr>
		        <td><div id="id_mm-dd_hit">
		            작성자 : <?php echo $certify_board['id']; ?> &#124;
		            작성일 : <?php echo $certify_board['date']; ?> &#124; 
		            상태 : <?if($certify_board['state']==0){
		            echo '처리중';
		            }else if($certify_board['state']==1){
		            echo '완료';
		            }else if($certify_board['state']==2){
		            echo '실패';
		            };
		            ?>
		            
		            <?if ($lv>=4){?>

<input type='button' name='<?echo $bno;?>' value= '등급↑'onclick="location.href='state_up.php'"/>
<input type='button' name='<?echo $bno;?>' value= '가결'onclick="location.href='state_no.php'"/>
<?}?>
		            </div>
		          <div id="delete">
		            <a href="modify.php?certify_b_no=<?echo $certify_board["certify_b_no"];?>">[수정]</a>
                    <a href="delete.php?certify_b_no=<?echo $certify_board["certify_b_no"];?>">[글삭제]</a>
                    </div>
		        
                    </td>
		        </tr>
		        
		    </table>
<hr>
			<!--	<div id="bo_line">
				    
				</div> -->
			</div>
			<br>
			<div class="read"> <!-- 내용 -->
				<?php echo nl2br("$certify_board[content]"); ?>
			</div>

</div>
<div style="text-align: center; width: 100%;">
    <img  style="width: 90%; " src='../../upload/<?php echo $certify_board['file'];?>'/>
</div>

          

<hr>
<!--- 댓글 불러오기 -->
<div class="reply_view">
	<h3>댓글목록 [<?php echo $rep_count;?>]</h3>
	<hr>
		<?php
			$sql3 = mq("select * from certify_reply where certify_b_num='".$bno."' order by certify_r_no desc");
			while($certify_reply = $sql3->fetch_array()){ 
		?>
		
		<div class="dap_lo">
		    <!--아이디-->
		    <div class="name_date_delete">
			<div class="name"><b><?php echo $certify_reply['name'];?></b></div>
			<!--날짜-->
			<div class="rep_me_dap_to">(<?php echo $certify_reply['date']; ?>)</div>
			<div class="rep_me rep_menu"></div>
			<!--댓글삭제-->
			<td><a href="../reply/reply_delete.php?certify_r_no=<?php echo $certify_reply['certify_r_no'];?>">[댓글삭제]</a></td>
			</div>
			<!--내용-->
			<div class="dap_to_comt_edit"><?php echo nl2br("$certify_reply[content]"); ?></div>
			<?echo $board['file'];?>
			<br>
			

	
	    </div>
		    <br>
			<hr>
</div>
			
	<?php } ?>

	<!--- 댓글 입력 폼 -->
	<div class="dap_ins">
		<form action="../reply/reply_ok.php?idx=<?php echo $bno; ?>" method="post">
			<!--<div style="margin-top:10px; ">-->
			<table  style=" border: 1px solid #bcbcbc; width:100%;">
			    <tbody>
			        
			        <tr >
			            <td style="margin:0px; padding:10px; width:80%;">
			                <textarea name="content" class="reply_content" id="re_content" 
				              style=" width:100%; height: 15px; padding:30px 0px 30px 0px"></textarea>
				        </td>
				        <td style="margin:0px; padding:0px;width:20%;">
				            <button id="rep_bt" class="re_bt" onclick=insert();
				               style="text-align:center; text-size:70%; width:100%;
				               padding:28px 0px 30px 0px;" 
				               >등록</button>
				        </td>
			        </tr>
			    </tbody>
			</table>

			</div>
		</form>
	</div>
</div><!--- 댓글 불러오기 끝 -->

	<!-- 목록, 수정, 삭제 -->
	<div>
	   <table id="ul">
			<td class="line"><a href="javascript:history.back()">[목록으로]</a></td>
			<?if($id==$certify_board['id'] || $lv>=4){?>
            <td class="line"><a href="delete.php?certify_b_no=<?php echo $certify_board['certify_b_no'];?>">[삭제]</a></td>
		<?}?>
		</table>
	</div>

<?php include '../../../../footer.php';?>
</body>
</html>