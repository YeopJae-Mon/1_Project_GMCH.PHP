<?php 
header('Content-Type: text/html; charset=UTF-8');

include('simple/simple_html_dom.php'); 

$data = file_get_html("https://namu.wiki/w/GTA%20%EC%98%A8%EB%9D%BC%EC%9D%B8/%EC%8A%B5%EA%B2%A9/%EC%9D%B4%EB%8F%99%20%EC%88%98%EB%8B%A8");

$a = $data -> find("img.wiki-image");
$b = $data -> find("div.wiki-table-wrap");
$c = $data -> find("div.wiki-paragraph");

?>
<!DOCTYPE html>

<html>
<head>

<meta charset="UTF-8">

<title>Information</title>
<link rel="stylesheet" href="a.css?after-21" type="text/css"
media="screen" title="no title" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


    

        <header>
            <div class="top"><h1>캐런 구르마 (방탄)</h1></div>
        </header>

              
                    
                     
                 

 <section>
     
 <div>
         <table>
                     <tr> <? echo $a[5];?></tr>
                     <tr>개방형</tr>
                     <tr> <? echo $a[5];?></tr>
                     <tr>밀폐형</tr>
                 </table>

                    <table id="car_inf_shape">
                    <tr id="car_inf">
                        <td id="car_inf">스피드</td>
                        <td id="car_inf">브레이크</td>
                        <td id="car_inf">가속</td>
                        <td id="car_inf">핸들링</td>
                        <td id="car_inf">최고속도</td>
                    

                    </tr>
                    <tr id="car_inf">
                        <td id="car_inf">2.10</td>
                        <td id="car_inf">4</td>
                        <td id="car_inf">2.45</td>
                        <td id="car_inf">4</td>
                        <td id="car_inf">2</td>
                        
                       
                    </tr>
                    
                </table>
                <table id="car_inf_shape">
                    <tr>
                        <td id="car_inf" colspan="2">가격</td>
                    </tr>
                    <tr>
                        <td id="car_inf">습격 해금가 : $1,500,000</td>
                        <td id="car_inf">기본가 :  $1,500,600</td>
                    </tr>
                </table>
                
                
            <br>
            <br>
            <br>
            <br>

            
        </div>
        </section>
 
        <footer id="footer">


            <div>  <!-- 하단 3버튼 -->

    <table id="bottom_button">
                <td id="bottom_button_td" onclick="location.href='www.naver.com'">
                    <img id="buttom_size" src="http://www.jadoost.com/gmch/img/bottom_my_page.png"  />
                </img><br>my page</td>
                <td id="bottom_button_td" onclick="location.href='http://jadoost.com/gmch/'">
                    <img id="buttom_size" src="http://www.jadoost.com/gmch/img/bottom_home.png"  />
                </img><br>home</td>
                 <td id="bottom_button_td" onclick="location.href='www.naver.com'">
                     <img id="buttom_size" src="http://www.jadoost.com/gmch/img/bottom_matching.png"  />
                </img><br>match</td>

            </table>


        </footer>
        <br>

    

</body>

</html>