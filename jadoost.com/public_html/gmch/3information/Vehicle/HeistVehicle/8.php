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
			<p id="id">매머드 히드라</p>
        </header>


              
                    
                     
                 

 <section>
     
 <div>
         <table>
                    <tr> <? echo $a[21];?></tr>
                   
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
                        <td id="car_inf">10</td>
                        <td id="car_inf">5.4</td>
                        <td id="car_inf">4.5</td>
                        <td id="car_inf">4.5</td>
                        <td id="car_inf">336.76</td>
                        
                       
                    </tr>
                    
                </table>
                <table id="car_inf_shape">
                    <tr>
                        <td id="car_inf" colspan="2">가격</td>
                    </tr>
                    <tr>
                        <td id="car_inf">습격 해금가 : $3,000,000</td>
                        <td id="car_inf">기본가 :  $3,990,000</td>
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