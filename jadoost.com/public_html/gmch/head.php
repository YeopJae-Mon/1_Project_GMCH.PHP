    <html>
    
<!--<meta http-equiv=refresh content="5" /> <!--//5초 자동새로고침-->
    <?php //$idid = sql문으로 쏘기위한 ID
    $idid = $_SESSION['userid'];
    ?>
    <?php // sql 문으로 idid 에 해당하는 lv을 뽑아서 $lv에 저장
    $sql = mq("SELECT * FROM member where id = '{$idid}'");
    $mysql = $sql->fetch_array();
    $eml = '&nbsp';
    
    ?>
    <?php //userid가 있으면 id값 / 없으면($sid=0) 비회원  출력
     if(isset($_SESSION['userid'])){
         echo $_SESSION['userid'];
     }
    else{
       $sid = '0';
        echo '비인증 회원';
    }
     ?>님 
    <br>
    <? //lv별 등급 출력w
    $lv = $mysql['lv'];
    echo '등급 : ';
    if($lv=='1'){
        echo '비인증';
    }else if($lv =='2'){
        echo '인증 회원';   
    }else if($lv >= '3'){
        echo '매니저';}
    ?>
    /
    <?
    echo '현상금 : ';
    $exp = $mysql['exp'];
    echo $exp;
    
    
    ?>
    <br>

     
     <?php if($sid=='0'){//로그인 안한 상태 = 로그인 버튼 출력
        
    echo '<a href="index.php">로그인</a>';?>&nbsp;
<? //
   // echo '<a href="member/member/member.php">회원가입</a>';
    }?>  
    
    <?php if(isset($_SESSION['userid'])){ 
        // 로그인 한 상태 = 로그아웃 버튼 출력
    echo '<a href="logout.php">로그아웃</a>';
    }
    echo $eml;
    echo $eml;
     // 관리자권한일 시 회원관리 화면 이동가능
    if($lv['lv']==4){
        echo '<a href="../mg.php">회원관리</a>';}
    ?>
    </html>