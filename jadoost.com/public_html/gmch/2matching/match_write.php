<!-- 변수 정리
maxlength="x"  최대 x숫자까지 제한.
disabled = 입력제한
required = 필수입력 -->

<?php 
include '../member/db.php';
?>
<!doctype html>
<head>
<style>
<?php
        include '../footer.css';
        include '../body.css';
        include '../header.css';
?>

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
        alert("방을 생성하였습니다..");
        if else{
        alert("방을 생성 할 수 업습니다..");    
        }
    }
    </script>



<body>
<header>
       <header class="top">
           <p>매칭방</p>
        </header>


<section>
    <div id="board_write">
        
        <br><br>
            <div id="write_area">
                <form action="match_write_ok.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>방만들기</legend> <?// 센터로?>
                            <table>
                                <tr>
                                    <td>습격종류</td>
                                    <td><select name="mission">
                                        <option value="1">플리카</option>
                                        <option value="2">탈옥</option>
							            <option value="3">휴메인</option>
							            <option value="4">시리즈 A</option>
                                        <option value="5">퍼시픽 스탠다드</option>
							            <option value="6">정보약탈</option>
							            <option value="7">보그단문제</option>
                                        <option value="8">심판의날</option>
							            <option value="9">비밀작전</option>
							            <option value="10">대 사기극</option>
                                        <option value="11">공격전술</option>
							            </select>
					        		</td>
                                </tr>
                               
                                <tr>
                                    <td>인원</td>
                                    <td><select name="count">
                                        <!--<option value="1">1 명</option>-->
                                        <option value="2">2 명</option>
							            <option value="3">3 명</option>
							            <option value="4">4 명</option></select>
							        </td>
                                </tr>
                                
                                <tr>
                                    <td>배분</td>
                                    <td><select name="pay">
                                        <option value="1">국룰</option>
                                        <option value="2">협의 후 조정</option></select>
                                    </td>
                                </tr><br>
                                <tr>
                                    <td><input type="submit" value="방만들기" />&nbsp;<input type="button" value="뒤로가기" onclick="history.back()"></td>
                                </tr>
                                
                            </table>
                        </fieldset>
                </form>
            </div>
        </div>
        </section>
    <?php include '../footer.php'; ?>
    </body>
</html>