<!--- 게시글 수정 -->
<?php
	include "../../../member/db.php";
	
 ?>
 
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<style>
<?php include '../../css/style.css';?>
</style>
</head>
<body>
    <header>
    <div class = "top">
        <h1>자유게시판</h1>
    </div>

</header>
<section>
    
    <div id="board_write">
        
        <h4>글을 수정합니다.</h4>
      
            <div id="write_area">
                <form action="modify_ok.php?b_no=<?php echo $bno; ?>" method="post">
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required><?php echo $board['title']; ?></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
                    <textarea  rows="1" cols="55" placeholder="<?echo $id?>"  disabled></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required><?php echo $board['content']; ?></textarea>
                    </div>
                    <div class="bt_se">
                        <button type="submit">수정</button>
                    </div>
                </form>
            </div>
        </div>
        </section>
        <?php include '../../../footer.php'; ?>
    </body>
    <?
            echo "<script>history.go(-2)</script>"; ?>
</html>