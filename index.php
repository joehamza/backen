<title>Complex silo portuaire</title>
<link rel="icon" href="ecran 3D.ico" >
<style>
body{
background-color:#dddd99;
}
    table{background-color:#ddd;}
	.h{align-items:center;justify-content:center;display:flex;}
	th,td{padding:5px;}
    .aaa{
position:absolute;
background-color:#9999FF;
width:0px;
height:0px;
margin:auto;
overflow:hidden;
top:19px;

align-items:center;justify-content:center;display:flex;
transition:transform 0.5s 0.7s ,width 1.3s 0.7s,height 0.5s 0.2s,border-radius 0.5s 1.3s; }
/*transition:transform 0.5s 0.7s ,width 0.5s 0.4s,height 0.5s 0.2s;}*/

.txt{
color:#fff;
font-size:35px;
transform:translateX(1000px);}
.text2{
transition:transform 0.5s 1.5s;
transform:translateX(0);
}
</style>
<div class="h">
<div class="aaa"><em class="txt">UCA DE SKIKDA</em></div></div></div>
<img src="11.jpg"  style="width: 60px; height: 85px; position:absolute; left:100px;top:17px;" />
<br><br><br><br>
<?php include 'refresh.php'; ?>
	    <script src="jquery.js"></script>
	    <script>
setInterval('loadm()',1000);
function loadm(){
$("#message").load('refresh.php');}
</script>
    <script>
var aa=document.querySelector(".aaa");
var tx=document.querySelector(".txt");
window.addEventListener("contextmenu",f);
function f(e){
e.preventDefault();
}
window.addEventListener('load',f2);
function f2(){
    aa.style.transform="rotate(720deg)";
    aa.style.width="300px";
	aa.style.height="80px";
	aa.style.borderRadius="100px";
tx.classList.add("text2");
setTimeout(()=>{
	aa.style.transform="rotate(0deg)";
         aa.style.width="0px";
         aa.style.height="0px";
		aa.style.borderRadius="0px";	 
tx.classList.remove("text2");
    }, 5500);
    
	setTimeout("f2()",10500);
}
</script>
<script>
	window.addEventListener('online',f3);
function f3(){
alert("Vous êtes en ligne");
}
window.addEventListener('offline',f4);
function f4(){
alert("Vous êtes hors ligne");
}
	</script>
	   
