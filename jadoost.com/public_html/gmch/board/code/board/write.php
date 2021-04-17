<!-- 변수 정리
maxlength="x"  최대 x숫자까지 제한.
disabled = 입력제한
required = 필수입력 -->

<?php include  '../../../member/db.php'; 
if($lv>=2){
?>
<!doctype html>
<head>
<style>
<?php   include '../../css/s.css';
        include '../../../header.css';
        include '../../../footer.css';
        include '../../../body.css';
?>
#ucontent{
    width: 50%;
	height: 4%;
	padding: 1%;
	box-sizing: border-box;
	border: solid 2px #1E90FF;
	border-radius: 5px;
	font-size: 16px;
	resize: both;
}
input[type="text"]{
    width:60%;
}


</style>
<meta charset="UTF-8">


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
        alert("게시글이 등록되었습니다.");
        if else{
        alert("게시글을 등록할 수 없습니다.");    
        }
    }
    </script>

<header>
    <div class = "top">
        <input type="button" class="img-button" 
            onclick="location.href='https://jadoost.com/gmch/board/code/index.php'">
        <p id="id">자유게시판</p>
    </div>

</header>

<body>

<section>
    <div id="board_write">
        
        <br><br>
            <div id="write_area">
                <form action="write_ok.php" method="post" enctype="multipart/form-data">
                    <div id="in_title">
                        <input type="text" name="title" id="utitle" rows="1" cols="40" placeholder="제목"  maxlength="10" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_id">
                        <input type="text"  rows="1" cols="40" placeholder="<?echo $id?>"   disabled></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" 
                         placeholder="내용"  maxlength="1200" required 
                         style="margin: 0px; width: 60%; height: 200px;"></textarea>
                    </div>
                     <div id="in_file">
                       <input type="file" value="1" name="myfile" accept="image/*" />
                    </div>
                     <div id="in_lock">
                        <input type="checkbox" value="1" name="lockpost" />해당글을 잠급니다.
                    </div>
                    <div class="bt_se">
                        <button type="submit" onclick="insert();">글 작성</button>
                    </div>
                </form>
            </div>
        </div>
        </section>
    <?php include '../../../footer.php'; ?>
    </body>
</html>
<?php }else{
   echo "<script>alert('권한이 없습니다.'); document.location.href='../index.php';</script>";
}?>