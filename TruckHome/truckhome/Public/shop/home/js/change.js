var panelHover1=document.getElementById('panelHover1');
var panelHover2=document.getElementById('panelHover2');
panelHover1.onmouseOver()=function(){
	panelHover1.style.display='block';
	panelHover2.style.display='none';
}
panelHover2.onmouseOver()=function(){
	panelHover2.style.display='block';
	panelHover1.style.display='none';
}
