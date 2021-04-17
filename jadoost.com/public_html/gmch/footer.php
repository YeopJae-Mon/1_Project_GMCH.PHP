<footer id="footer">
            <div>  <!-- 하단 3버튼 -->
<!--<meta http-equiv=refresh content="10" /><!--10초 새로고침--> 
            <table id="bottom_button">
                
                <tbody><tr><td id="bottom_button_td" onclick="location.href='http://jadoost.com/gmch/member/member/mypage.php'">
                    <img id="buttom_size" src="/gmch/img/bottom_my_page.png">
                <br>my page</td>
                
                
                <td id="bottom_button_td" onclick="location.href='http://jadoost.com/gmch/index.php'">
                    <img id="buttom_size" src="/gmch/img/bottom_home.png">
                <br>home</td>
            
                
                 <td id="bottom_button_td" onclick="location.href='https://jadoost.com/gmch/2matching/match_list.php'">
                     <img id="buttom_size" src="/gmch/img/bottom_matching.png">
                <br>match</td>
            </tr></tbody></table>
        </div>
        </footer>
        
  <script>
var keydownCtrl = 0;
var keydownShift = 0;
document.onkeydown=keycheck;
document.onclick=clickcheck;
document.onkeyup=uncheckCtrlShift;
function keycheck()
{
      switch(event.keyCode){
        case 123:event.keyCode='';return false; break;
        case 16:event.keyCode='';keydownShift=1;return false; break;
        case 17:event.keyCode='';keydownCtrl=1;return false; break;
      }
      if(keydownCtrl) return false;
}
function clickcheck()
{
      if(keydownShift) return false;
}
function uncheckCtrlShift()
{
      if(event.keyCode==17)      keydownCtrl=0;
      if(event.keyCode==16)      keydownShift=0;
}
	function click()
{
    if ((event.button==2) || (event.button==2)) 
		{alert('원하는 메시지를 입력해주세요.');}
}
document.onmousedown=click;
</script>
    