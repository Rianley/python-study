var divtu=document.getElementById("D1pic1").getElementsByTagName("div");
var divsz=document.getElementById("D1fBt").getElementsByTagName("a");
var i=0;
var s=null;
function run()
{
	s=setInterval(function(){
		for(var j=0;j<divtu.length;j++){
			divtu[j].style.display="none";
			divsz[j].style.backgroundColor="#0F5489";	
			divsz[j].style.opacity="0.6";
		}
		divtu[i].style.display="block";
		divsz[i].style.backgroundColor="#F60";	
		divsz[i].style.opacity="1";
		i++;
		if(i>=divtu.length){
			i=0;
		}
	},1000)
	
}
run();
for(var m=0;m<divtu.length;m++){
	divtu[m].onmouseover=function(){
		clearInterval(s);
	}
	divtu[m].onmouseout=function(){
		run();
	}
	divsz[m].onmouseover=function(){
		clearInterval(s);
		for(var x=0;x<divsz.length;x++){
			divtu[x].style.display="none";
			divsz[x].style.backgroundColor="#0F5489";
			divsz[x].style.opacity="0.6";
			
		}
		i=this.getAttribute('data');
		divtu[i].style.display="block";
		divsz[i].style.backgroundColor="#F60";
		divsz[i].style.opacity="1";
	}
	divsz[m].onmouseout=function(){
		run();
	}
	
}








