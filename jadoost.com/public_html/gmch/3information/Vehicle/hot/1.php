<?php 
header('Content-Type: text/html; charset=UTF-8');

include('simple/simple_html_dom.php'); 

$data = file_get_html("https://namu.wiki/w/GTA%205/%EC%9D%B4%EB%8F%99%20%EC%88%98%EB%8B%A8/2%EB%A5%9C%20%C2%B7%20ATV");

$a = $data -> find("img.wiki-image");
$b = $data -> find("div.wiki-table-wrap");
$c = $data -> find("div.wiki-paragraph");

?>
<!DOCTYPE html>

<html>
<head>

<meta charset="UTF-8">

<title>Information</title>
<style>
         <? 
        include 'a.css';
        include '../../../footer.css';
        include '../../../body.css';
        include '../../../header.css';
      ?>
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


    


        <header class="top">
           <input type="button" class="img-button" 
            onclick="history.go(-1)">
        <p id="id">오프레서 Mk II</p>
        </header>

              
                    
                     
                 

 <section>
     
 <div>
         <table>
                     <tr> <? echo $a[87];?></tr>
                     

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
                        <td id="car_inf">7.9</td>
                        <td id="car_inf">4.0</td>
                        <td id="car_inf">9.5</td>
                        <td id="car_inf">6.3</td>
                        <td id="car_inf">205.59</td>
                        
                       
                    </tr>
                    
                </table>
                <table id="car_inf_shape">
                    <tr>
                        <td id="car_inf" colspan="2">가격</td>
                    </tr>
                    <tr>
                        <td id="car_inf">습격 해금가 : $2,925,000</td>
                        <td id="car_inf">기본가 :  $3,890,250</td>
                    </tr>
                </table>
                
                
            <br>
            <br>
            <br>
            <br>

            
        </div>
        </section>
 
        <?php include "../../../footer.php";?>
        

    

</body>

</html>