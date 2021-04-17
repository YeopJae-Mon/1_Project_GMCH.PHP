<!DOCTYPE html> <!-- html5 작성된 문서임을 알림 -->
<html> <!-- html 태그 시작 -->
<head> <!-- head 태그 시작 -->
<meta charset="UTF-8" /> <!-- 문자 utf-8 코드로 셋팅 -->
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- 장치의 폭에 따라 페이지의 폭을 설정해주는 기능. 초기줌은 1  -->
<style> /* style태그 시작 */
/* 테두리 상자를 포함하여 박스 크기를 변경한다. */
* {
box-sizing: border-box;
}
@media only screen and (min-width:0px) { /* 창의 최소 너비 0px부터 */
	.left,.right { /* left 또는 right라는 이름의 클래스를 사용하는 영역의 너비는 창 너비의 10%이다. */
	width:10%;
	}
	.center { /* center라는 이름의 클래스를 사용하는 영역의 너비는 창 너비의 80%이다. */
	width:80%;
	}
}
@media only screen and (min-width:500px) { /* 창의 최소 너비 500px 부터 */
 .left,.right { /* left 또는 right라는 이름의 클래스를 사용하는 영역의 너비는 창 너비의 15%이다. */
	width:15%;
	}
	.center { /* center라는 이름의 클래스를 사용하는 영역의 너비는 창 너비의 70%이다. */
	width:70%;
	}
}
@media only screen and (min-width:1000px) { /* 창의 최소 너비 1000px 부터 */
 .left,.right { /* left 또는 right라는 이름의 클래스를 사용하는 영역의 너비는 창 너비의 20%이다. */
	width:20%;
	}
	.center { /* center라는 이름의 클래스를 사용하는 영역의 너비는 창 너비의 60%이다. */
	width:60%;
	}
}

/* h2태그에 background라는 이름의 클래스를 사용할 경우 적용될 스타일 속성 */
h2.background { 
color:white; /* 기본색상 : 흰색 */
background: black; /* 배경 : 검정색  */
border:1px solid black; /* 테두리 : 1px크기의 검정색 실선을 지닌 테두리. */
border-radius:5px 5px 0px 0px; /* 테두리-반경 : 좌측 및 우측 상단 5px크기의 반경을 지님. 
우측 및 좌측 하단은 0px크기의 반경을 지님. */
text-align:center; /* 텍스트 정렬 : 가운데  */
margin-bottom:0px; /* 해당 요소 바로 하단에 있는 다른 요소 상단과의 여백 : 0px */
text-shadow:1px 1px 1px blue; /* 텍스트 그림자 : 텍스트 좌측 상단 기준점으로부터 우측으로 1px만큼, 
하단으로 1px만큼 떨어진 거리에 1px만큼의 흐림도를 가진 파랑색 그림자를 그려줌. */
}

/* textarea태그에 적용될 스타일 속성 */
textarea {
width:100%; /* 너비 : 100% */
  padding: 10px; /* 테두리와 내용물 사이의 여백 : 10px */
  font-size: 20px; /* 폰트 크기 : 20px */
  height:200px; /* 높이 : 200px */
  resize: none; /* 사이즈 변경 : 불가능  */
}

/* div태그에 chatcontent라는 이름의 클래스를 사용할 경우 적용될 스타일 속성 */
div.chatcontent {
  padding: 10px; /* 테두리와 내용물 사이의 여백 : 10px */
  font-size: 20px; /* 폰트 크기 : 20px */
  height:200px; /* 높이 : 200px */
}

/* div태그에 input라는 이름의 클래스를 사용할 경우 적용될 스타일 속성 */
div.input {
  padding: 10px; /* 테두리와 내용물 사이의 여백 : 10px */
  font-size: 20px; /* 폰트 크기 : 20px */
  border:1px solid; /* 테두리 : 1px크기의 실선을 지닌 테두리  */
}

/* left 또는 right 또는 center라는 이름의 클래스를 사용할 경우 적용될 스타일 속성. */
.left, .right {
float:left; /* 유동 : 왼쪽  */
border:1px solid; /* 테두리 : 1px크기의 실선을 지닌 테두리  */
opacity:0; /* 불투명도 : 0 */
}

.center{
float:left; /* 유동 : 왼쪽  */
}

/* dropdown-content라는 이름의 클래스를 사용할 경우 적용될 스타일 속성. */
.dropdown-content {
  display: none; /* 내용을 없는 것 취급하게 만들어줌. */
  position: absolute; /*  위치: 절대적  */
  min-width: 20px;  /* 최소 너비 : 20px */
  z-index: 1; /* z축으로 1만큼 앞에 내용물을 표시 */
}

/* emoticon라는 이름의 클래스를 사용하는 영역에 마우스를 올리면 
dropdown-content클래스에 있는 없는 것 취급한 내용을 보여준다. */
.emoticon:hover .dropdown-content {
display: block;
}

</style> <!-- style태그 닫기 -->
</head> <!--  head태그 닫기 -->
<body> <!-- body태그 시작 -->
<audio id="myAudio"> <!-- audio 태그 시작. 태그 id 값은 myAudio -->
  <source src="cute.mp3" type="audio/mpeg">
  <!-- mp3 소스 경로는 test.html파일과 같은 경로에 있으므로 cute.mp3라고만 입력하면 된다. 
  형식은 오디오/mpeg로 설정 -->
</audio> <!-- audio 태그 닫기 -->
<div class="left"><!-- left라는 이름의 클래스를 가진 div태그 시작 -->
</div><!-- left라는 이름의 클래스를 가진 div태그 닫기 -->
<div class="center"><!-- center라는 이름의 클래스를 가진 div태그 시작 -->
<h2 class="background"><!-- background라는 이름의 클래스를 가진 h2태그 시작 -->
공돌이광식의 실시간 익명 방명록 게시판
</h2><!-- background라는 이름의 클래스를 가진 h2태그 닫기 -->
<div class="chatcontent" style="border:1px solid; line-height: 1.5em;
overflow-y:auto" id="demo">
<!-- chatcontent라는 이름의 클래스를 가진 div태그 시작. 스타일은 테두리 1px 실선. 줄간격 1.5em.
y축 스크롤은 자동. 이 태그는 demo라는 아이디 값을 가짐. -->
</div><!-- chatcontent라는 이름의 클래스를 가진 div태그 닫기 -->
<div class="input"><!-- input라는 이름의 클래스를 가진 div태그 시작 -->
 <div id="demo3"><!-- demo3라는 이름의 아이디를 가진 div태그 시작 -->
 비밀번호를 4자리 이상 입력하세요.
 </div><!-- demo3라는 이름의 아이디를 가진 div태그 닫기 -->
 닉네임 : 
 <input type="text" style="border:1px solid; padding:5px; 
 border-radius:5px;" id="user" name="nickname" onkeyup="nickname(this.value)" 
 placeholder="가명을 입력하세요" maxlength="30">
 <!-- 텍스트 형식. 1px크기의 실선 테두리. 요소와 컨텐츠 사이의 여백 5px.
 테두리 반경은 5px. user라는 이름의 아이디를 가진 input태그. nickname이라는 이름을 부여. 
 입력란에 키를 놓을 때 nickname()함수를 실행. 공란이면 가명을 입력하라는 안내 문구가 떠 있는다.
 입력 가능한 최대 길이는 30. -->
 <br><!-- br태그 -->
  비밀번호 : 
  <input type="password" style="border:1px solid; padding:5px; 
  border-radius:5px;" id="id1" name="password" onkeyup="password(this.value)" 
  placeholder="최대 10자리" maxlength="10">
  <!-- 비밀번호 형식. 1px크기의 실선 테두리. 요소와 컨텐츠 사이의 여백 5px.
 테두리 반경은 5px. id1이라는 이름의 아이디를 가진 input태그. password라는 이름을 부여. 
 입력란에 키를 놓을 때 password()함수를 실행. 공란이면 최대10자리라는 안내 문구가 떠 있는다.
 입력 가능한 최대 길이는 10. -->
 <br><!-- br태그 -->
 (방명록 달기 및 삭제시 적용됩니다.)
 <br><!-- br태그 -->
 <br><!-- br태그 -->
 방명록에 남길 내용:
 <br><!-- br태그 -->
 <div class="emoticon" style='width:20px;'>
 <!-- emoticon이라는 이름의 클래스를 가진 div태그 시작. 너비는 20px. -->
 <img src='1.png' style='width:20px; height:20px;'>
 <!-- 1.png이미지 파일을 너비, 높이 각각 20px크기로 화면에 표시해줌. -->
 <div class="dropdown-content">
 <!-- dropdown-content라는 이름의 클래스를 가진 div태그 시작. -->
 <div style="float:left;" title="(화남)" onclick="add('(화남)')">
 <!-- 유동:왼쪽 , 이 div영역에 마우스를 올려놓으면 (화남)이라는 문구가 뜬다.
 이 div영역을 클릭할 경우 add(emoticon)함수를 실행하며, add(emoticon)함수에 (화남)이라는 값을 전달한다. -->
 <img src='1.png' style='width:20px; height:20px;'>
 <!-- 1.png이미지 파일을 너비, 높이 각각 20px크기로 화면에 표시해줌. -->
 </div><!-- div태그 닫기 -->
 <div style="float:left;" title="(놀람)" onclick="add('(놀람)')">
 <!-- 유동:왼쪽 , 이 div영역에 마우스를 올려놓으면 (놀람)이라는 문구가 뜬다.
 이 div영역을 클릭할 경우 add(emoticon)함수를 실행하며, add(emoticon)함수에 (놀람)이라는 값을 전달한다. -->
 <img src='2.png' style='width:20px; height:20px;'>
 <!-- 2.png이미지 파일을 너비, 높이 각각 20px크기로 화면에 표시해줌. -->
 </div><!-- div태그 닫기 -->
 </div><!-- dropdown-content라는 이름의 클래스를 가진 div태그 닫기. -->
 </div><!-- emoticon이라는 이름의 클래스를 가진 div태그 닫기. -->
  <textarea id="id2" name="text" placeholder="Write something.." 
  onkeyup="replace()"></textarea>
  <!-- id2라는 이름의 아이디 값을 가진 textarea태그. text라는 이름을 지님. 공란일 경우 write somting이라는
  문구가 뜬다. 키를 입력할 경우 replace()함수를 실행한다. -->
  <button style="border:1px solid; width:100%; background:white;" onclick="apply()">
  방명록 등록</button>
  <!-- button태그. 1px 실선 테두리. 너비 100%. 배경 흰색. 클릭시 apply()함수 실행. -->
  <p id="demo2"></p><!-- demo2라는 아이디 값을 가진 p태그. -->
</div><!-- input라는 이름의 클래스를 가진 div태그 닫기. -->
</div><!-- center라는 이름의 클래스를 가진 div태그 닫기. -->
<div class="right"><!-- right라는 이름의 클래스를 가진 div태그 시작 -->
</div><!-- right라는 이름의 클래스를 가진 div태그 닫기 -->
<script>//스크립트 태그 시작
var music = document.getElementById("myAudio"); //myAudio라는 아이디 값을 지닌 요소의 정보를 변수 music에 저장
var count = 1; //변수 count의 초기값은 1
var a,b,txt = ""; //a와 b라는 이름의 변수 선언
var height, height2, height3, height4; //height~height4까지의 이름을 지닌 변수 선언
var l1, l2; //l1,l1라는 이름의 변수 선언
var myVar = setInterval(myTimer, 1000); //myVar변수는 Interval 셋팅값에 의해 1초 간격으로 myTimer()함수 실행한다.
function myTimer() {//myTimer()함수
	var obj, dbParam, xmlhttp, myObj, x; 
	//obj, dbParam, xmlhttp, myObj, x라는 이름의 변수 선언 및 txt변수의 경우 초기 함수실행시마다 초기 값으로 빈값을 가짐.
	obj = {"table":"tableforchat"}; //obj에 자바스크립트 객체 값을 저장함
	dbParam = JSON.stringify(obj); //dbParam에 obj에 담긴 자바스크립트 객체의 값을 JSON형식의 문자열로 저장함.
	xmlhttp = new XMLHttpRequest(); //서버에 데이터를 요청한 값을 xmlhttp변수에 저장함
	xmlhttp.onreadystatechange = function() { 
		//onreadystatechange는 xmlhttpRequest 객체의 상태가 변할 때마다 자동으로 호출할 함수를 저장함
	  if (this.readyState == 4 && this.status == 200) {//readyState 값이 4이고, status값이 200이라면 if문 안에 있는 내용을 실행함
	    myObj = JSON.parse(this.responseText);//응답받은 JSON형식의 문자열을  자바스크립트 객체 값으로 myObj에 저장
	    l1 = myObj.length;//myObj객체에 담긴 배열의 길이를 l1에 저장
	    if(l1 != l2) txt=""; //l1과 l2의 값이 같지 않을 경우 txt는 빈값을 가지게 만듦.
	    if(txt=="") { //txt가 빈값이라면 if문 안에 있는 내용을 실행함
	    for (x in myObj) { //myObj에 저장한 자바스크립트 객체의 배열의 길이 값만큼 반복한다.
	    	  txt += //txt에 아래의 값들을 더해준다.
	    		  "<span style='font-size: 15px;'>"+myObj[x].chatuser.replace(/ /g,"&nbsp").replace(/</g,"&lt")
	    	  .replace(/>/g,"&gt")+" :<br>"+"</span>"
	    	  //닉네임에 관한 글자를 15px 크기로 화면에 표시한다. 닉네임에 담긴 띄어쓰기 값은 &nbsp로, <는 &lt로, >는 &gt로 각각 변경해준다. 
	    	  //닉네임 : 형식으로 표시해준 후 줄바꿈을 해준다.
	    	  +myObj[x].chattext.replace(/ /g,"&nbsp").replace(/</g,"&lt")
	    	  .replace(/>/g,"&gt").replace(/\n/g,"<br>")
	    	  .replace(/\(화남\)/g,"<img src='1.png' style='width:20px; height:20px;'>")
	    	  .replace(/\(놀람\)/g,"<img src='2.png' style='width:20px; height:20px;'>")
	    	  .replace(/\r\n/g,"<br>")
	    	  //방명록에 남길 내용에 담긴 띄어쓰기 값은 &nbps로, <는 &lt로, >는 &gt로, \n 및 \r\n은 <br>로,
	    	  //(화남)은 가로,세로 20px크기의 1.png이미지로, (놀람)은 가로,세로 20px크기의 2.png로 변경해준다.
	    	  //방명록에 남길 내용을 화면에 표시해준 후 줄바꿈을 해준다.
	    	  +"<button style='float:right;' onclick='new textdelete("
	    			  +'\"'+myObj[x].num+'\"'+","
	    			  +'\"'+myObj[x].chatpassword+'\"'+")'>삭제</button>"+"<br>"
	    			  //삭제 버튼을 추가해준다. 버튼 클릭시 textdelete(num,password)함수를 실행시키며, myObj[x]에 담긴 번호와 비밀번호를 전달한다.
	    			  //삭제 버튼 추가 후 줄바꿈을 해준다.
	    			  +"<span style='font-size: 10px;'>"+myObj[x].chattime+"</span>"+"<br>";
	    			  //방명록을 등록했던 날짜 및 시간 정보를 10px크기로 화면에 표시해준 후 줄바꿈을 해준다.
	      } //for (x in myObj)에 관한 for문 종료
	  } //if(txt=="")에 관한 if문 종료
	    document.getElementById("demo").innerHTML = txt; //demo 아이디를 가진 요소의 html콘텐츠 값을 txt에 저장된 값으로 바꾸어준다.
	    height2 = document.getElementById("demo").scrollTop; //height2는 demo 아이디를 가진 요소의 스크롤 탑 값을 저장한다.
	    height4 = document.getElementById("demo").scrollHeight; //heigt4는 demo 아이디를 가진 요소의 스크롤 높이 값을 저장한다.
	    if(height2 < height) {count = 0;}//height2의 값이 height의 값보다 작다면 count의 값은 0이 된다.
	    if((height2 + height3 + 10)>= height4) { //height2+height3+10을 더한 값이 height4보다 크거나 같다면 count의 값은 1이 된다.
	    	count = 1;
	    }
	    if(count == 1) {//count의 값이 1이 된다면, demo 아이디를 가진 요소의 스크롤 탑은 스크롤 높이 값과 같은 값을 가진다.
	    	document.getElementById("demo").scrollTop =  
	    		document.getElementById("demo").scrollHeight;
	    	test(); //test()함수를 실행한다.
	    }
	    if(height < height4-height3) { //height 값이 height4-height3 값보다 작다면
	    	document.getElementById("demo2").innerHTML="새로운 방명록이 달렸습니다.";
	    //demo2 아이디 값을 가진 html 콘텐츠 값은 "새로운 방명록이 달렸습니다." 로 교체된다.
	    	if(l1 != l2) music.play(); //l1 과 l2가 같은 값을 가지고 있지 않다면, 오디오 파일을 실행한다.
	    	l2=l1; //12는 11의 값을 가진다.
	    } else { //height 값이 height4-height3 값보다 작지 않다면
	    	document.getElementById("demo2").innerHTML="";
	    //demo2 아이디 값을 가진 html 콘텐츠 값은 빈 값으로 교체된다.
	    }
	    l2=l1;//12는 l1의 값을 가진다.
	    }
	};
	xmlhttp.open("GET", "json_demo_db.php?content=" + dbParam, true);
	//요청 유형을 지정한다.(get방식, url, 비동기 방식)
	xmlhttp.send();
	//서버에 요청을 보낸다.
}

function add(emoticon) { //add(emoticon) 함수
	document.getElementById("id2").value += emoticon;
	//i2라는 아이디 값을 가진 요소의 값에 emoticon에 있는 값을 더해준다.
}

function nickname(user) { //nickname(user) 함수
	document.getElementById("user").value=document.getElementById("user")
	.value.replace("+","＋").replace(/#/g,"＃").replace(/&/g,"＆").replace(/=/g,"＝")
	.replace(/\\/g,"＼");
	//user라는 아이디 값을 가진 요소의 값은 +는 ＋로, #은 ＃로, &는 ＆로, =은 ＝로 교체된다.
}

function password(pw) { //password(pw) 함수
	document.getElementById("id1").value=document.getElementById("id1").value
	.replace("+","＋").replace(/#/g,"＃").replace(/&/g,"＆").replace(/=/g,"＝")
	.replace(/\\/g,"＼");
	//id1라는 아이디 값을 가진 요소의 값은 +는 ＋로, #은 ＃로, &는 ＆로, =은 ＝로 교체된다
	if(pw.length>=4) {//pw 값의 길이가 4보다 크거나 같다면
			 document.getElementById("demo3").innerHTML = ""; 
	//demo3 아이디 값을 가진 html 콘텐츠 값은 빈 값으로 교체된다.
		} else { //pw 값의 길이가 4보다 작다면
			document.getElementById("demo3").innerHTML = "비밀번호를 4자리 이상 입력하세요.";
			//demo3 아이디 값을 가진 html 콘텐츠 값은 비밀번호를 4자리 이상 입력하라는 값으로 교체된다.
		}
	}
	
function test() { //test() 함수
	height = document.getElementById("demo").scrollTop;
	//height는 demo 아이디 값을 가진 요소의 스크롤 탑 값을 가진다.
	height2 = height; //height2는 height의 값을 가진다.
	height3 = document.getElementById("demo").scrollHeight 
	- document.getElementById("demo").scrollTop;
	//height3는 demo 아이디 값을 가진 요소의 (스크롤 높이 - 스크롤 탑)의 값을 가진다.
}

function textdelete(num, password) { //textdelete(num, password) 함수
	  var obj, dbParam, xmlhttp; //obj, dbParam, xmlhttp 라는 이름을 지닌 변수
	  obj = {"table":"tableforchat","num":num,"chatpassword":document
			  .getElementById("id1").value};
		//obj에 자바스크립트 객체 값을 저장함
	  dbParam = JSON.stringify(obj); //dbParam에 obj에 담긴 자바스크립트 객체의 값을 JSON형식의 문자열로 저장함.
	  xmlhttp = new XMLHttpRequest(); //서버에 데이터를 요청한 값을 xmlhttp변수에 저장함
	  if (password == document.getElementById("id1").value) {
		  //password와 id1이라는 아이디를 가진 요소의 값이 같다면
		  xmlhttp.open("GET", "json_demo_db3.php?content=" + dbParam, true);
		//요청 유형을 지정한다.(get방식, url, 비동기 방식)
		  xmlhttp.send(); //서버에 요청을 보낸다.
	  } else { //password와 id1이라는 아이디를 가진 요소의 값이 같지 않다면
		  alert("비밀번호가 틀렸습니다.");
		  //비밀번호가 틀렸다는 경고문이 뜬다.
	  }
}

function apply() { //apply() 함수
	  var x = document.getElementById("id1").value;
	  // x는 id라는 아이디를 가진 요소의 값을 가진다.
	  var x2 = document.getElementById("id2").value;
	  // x2는 id2라는 아이디를 가진 요소의 값을 가진다.
	  var x3 = document.getElementById("user").value;
	  // x3는 user라는 아이디를 가진 요소의 값을 가진다.
	  var x4 = new Date();
	  // x4는 시간 및 날짜 정보를 가진다.
	  var days = ["일요일 ","월요일 ","화요일 ","수요일 ","목요일 ","금요일 ","토요일 "];
	  // days에 일요일~토요일까지의 문자열의 값을 담은 배열을 저장한다.
	  var time;
	  // time이라는 이름을 가진 변수를 선언한다.
	  
	  time = x4.getFullYear()+"년 "+(x4.getMonth()+1)+"월 "+x4.getDate()+"일 "
	  +days[x4.getDay()]
	  +x4.getHours()+"시 "+x4.getMinutes()+"분";
	  // time에 년,월,일,요일,시,분에 대한 정보를 담는다.
	  
	  var obj, dbParam, xmlhttp; //obj, dbParam, xmlhttp 라는 이름을 지닌 변수
	  obj = {"table":"tableforchat","chatuser":x3,"chattext":x2,
			  "chatpassword":x,"chattime":time};
	//obj에 자바스크립트 객체 값을 저장함
	  dbParam = JSON.stringify(obj);
	//dbParam에 obj에 담긴 자바스크립트 객체의 값을 JSON형식의 문자열로 저장함.
	  xmlhttp = new XMLHttpRequest(); //서버에 데이터를 요청한 값을 xmlhttp변수에 저장함
	  if (x.length < 4) { //x값의 길이가 4보다 작다면
		  alert("비밀번호를 4자리 이상 입력하세요."); //비밀번호를 4자리 이상 입력하라는 알림창을 띄운다.
		  return false; //return false를 한다.
	  }
	  if (x3.trim() == "") { //x3의 값이 빈 값이라면
		    alert("닉네임을 입력하세요."); //닉네임을 입력하라는 알림창을 띄운다.
		    return false; //return false를 한다.
		  }
	  if (x2.trim() == "") { //x2의 값이 빈 값이라면
	    alert("입력된 텍스트가 없습니다."); //입력된 텍스트가 없다는 알림창을 띄운다.
	    return false; //return false를 한다.
	  } else { //x2의 값이 빈 값이 아니라면
		  count = 1; //count의 값은 1이 된다.
		  document.getElementById("id2").innerHTML = "";
		  document.getElementById("demo").scrollTop =  document.getElementById("demo")
		  .scrollHeight;
		  //demo 아이디를 가진 요소의 스크롤 탑은 스크롤 높이 값과 같은 값을 가진다.
		  xmlhttp.open("GET", "json_demo_db2.php?content=" + dbParam, true);
		//요청 유형을 지정한다.(get방식, url, 비동기 방식)
		  xmlhttp.send(); //서버에 요청을 보낸다.
	  }
	}
	
function replace() { //replace() 함수
	document.getElementById("id2").value=document.getElementById("id2").value
	.replace("+","＋").replace(/#/g,"＃").replace(/&/g,"＆").replace(/=/g,"＝")
	.replace(/\\/g,"＼");
	//id2라는 아이디 값을 가진 요소의 값은 +는 ＋로, #은 ＃로, &는 ＆로, =은 ＝로,\는 ＼로 교체된다.
}
</script> <!-- script 태그 닫기 -->
</body> <!-- body 태그 닫기 -->
</html> <!-- html 태그 닫기 -->