var sre1=document.getElementById("sre1");
var sre2=document.getElementById("sre2");
var sre3=document.getElementById("sre3");
var samew1=document.getElementById("samew1");
var samew2=document.getElementById("samew2");
var samew3=document.getElementById("samew3");
//samew1.style.display="none";
samew2.style.display="none";
samew3.style.display="none";
sre1.onmouseover=function(){
	samew1.style.display="block";
	samew2.style.display="none";
	samew3.style.display="none";	
}
sre2.onmouseover=function(){
	samew2.style.display="block";
	samew1.style.display="none";
	samew1.style.display="none";	
}
sre3.onmouseover=function(){
	samew3.style.display="block";
	samew2.style.display="none";
	samew1.style.display="none";	
}
ser1.onmouseout=function(){
	//samew1.style.display="none";
}