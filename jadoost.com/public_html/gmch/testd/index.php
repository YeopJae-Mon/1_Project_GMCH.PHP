<!DOCTYPE html></p>
<p><title>jQuery AJAX</title></p>
<p><meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=3.0, user-scalable=yes"/></p>
<p><script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script> >
<script type="text/javascript"> 
$(document).ready(function() { //이 HTML도큐먼트가 로드되면 실행되는 함수 
	$("#send").click(function() { //#send 의 클릭 이벤트 발생시 
		var form_data = { //POST로 보낼 formdata를 ajax형태로 생성해줌. 
			user: $("#user").val(), 
			chat: $("#chat").val(), 
			is_ajax: 1 >
		}; >
		$.ajax({ //Jquery에서 지원하는 AJAX 
			type: "POST", 
			url: "post.php", 
			data: form_data 
		}); 
		return false; 
	}); 
});</p>
<p>function ajax_request(url) //이 함수는 Jquery를 사용하지 않은 AJAX >
{ 
	var xhr = new XMLHttpRequest(); 
	xhr.open(‘get’, url);</p>
<p>	xhr.onreadystatechange = function(){ 
		if(xhr.readyState === 4){ 
				if(xhr.status === 200){</p>
<p>				$("#chatLog").html(xhr.responseText);</p>
<p>			}else{ 
				if (xhr.status != 0) 
					alert(‘Error: ‘+xhr.status); 
			} 
		} 
	} 
	xhr.send(null) 
}</p>
<p>var timer = setInterval(function () { //인터벌 500인 타이머 생성후 코드 반복 실행 
	ajax_request("log.php"); //0.5초마다 log.php의 내용을 불러온다.</p>
<p>	}, 500); 
</script></p>
<p><form id="form1" name="form1" action="login_ok.php" method="post"> 
	<input type=’text’ id=’user’ name=’user’ /> 
	<input type=’text’ id=’chat’ name=’chat’ /> 
	<input type="submit" id="send"> 
</form></p>
<p><div id="chatLog"></div></p>
<p></html></p>
<p>