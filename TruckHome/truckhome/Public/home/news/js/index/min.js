function show_intronew(pree,pre, n, select_n, sp) {
    for (i = 1; i <= n; i++) {
        var intro = document.getElementById(pre + i);
        var cha = document.getElementById(pree + i);
        var csp = document.getElementById(sp + i);
        csp.style.display = "none";
        intro.style.display = "none";
        cha.className="menu_off";
        if (i == select_n) {
            intro.style.display = "block";
            cha.className="menu_on";
            csp.style.display = "block";
        }
    }
}


function show_intro(pree,pre, n, select_n,sp) {
    for (i = 1; i <= n; i++) {
        var intro = document.getElementById(pre + i);
        var cha = document.getElementById(pree + i);
        intro.style.display = "none";
        cha.className="menu_off";
        if (i == select_n) {
            intro.style.display = "block";
            cha.className="menu_on";
        }
    }
}

function cararticle_over(index){
for(var i=1;i<=3;i++){
document.getElementById("articlemenu"+i.toString()).className ='tab_right11';
document.getElementById("articlelayer"+i.toString()).style.display = 'none';

}
document.getElementById("articlelayer"+index.toString()).style.display = 'block';
document.getElementById("articlemenu"+index.toString()).className ='tab_left2';

}

function carnotes_over(index){
for(var i=1;i<=2;i++){
document.getElementById("notesmenu"+i.toString()).className ='tab_right12';
document.getElementById("noteslayer"+i.toString()).style.display = 'none';

}
document.getElementById("noteslayer"+index.toString()).style.display = 'block';
document.getElementById("notesmenu"+index.toString()).className ='tab_left22';

}

function swicth()
{
var str = document.getElementById("keyword").value;
window.open("http://so.360che.com/cse/search" + "?q=" + EncodeUtf8(str) + "&s=3494890232603857038&nsid=0");
}

function hswicth(str)
{
window.open("http://so.360che.com/cse/search" + "?q=" + EncodeUtf8(str) + "&s=3494890232603857038&nsid=0");
}

function kswicth()
{
var event = event ? event : (window.event ? window.event : null);
var key=event.keyCode || event.which;
if (key == 13)
{
swicth();
return false;
}
}

function swicthsearch(j,num,labelid,css1,css2)//显示第几个，总共数，标签ID,表格ID,选中样式，非选种样式
{
	for(var i=1;i<=num;i++)
	{
		document.getElementById(labelid+i).className=css2;
	}
	document.getElementById(labelid+j).className=css1;
//	var oform=document.getElementById("soform");
//	if (!oform)return;
//	if(j==1)oform.action="http://so.360che.com/artsearch.php";
//	else if (j==2)oform.action="http://so.360che.com/modsearch.php";
//	else if (j==3)oform.action="http://so.360che.com/bbssearch.php";
//	else oform.action="http://so.360che.com/modsearch.php";
//	if(j==1)oform.action="http://s.360che.com/index.php";
//	else if (j==2)oform.action="http://s.360che.com/modsearch.php";
//	else if (j==3)oform.action="http://s.360che.com/bbssearch.php";
//	else oform.action="http://s.360che.com/modsearch.php";
	
	
	if(j==1)strurl="http://s.360che.com/index.php";
	else if (j==2)strurl="http://s.360che.com/modsearch.php";
	else if (j==3)strurl="http://s.360che.com/bbssearch.php";
	else strurl="http://s.360che.com/modsearch.php";
	
}


//中文转换utf-8
function EncodeUtf8(s1)
{
      var s = escape(s1);
      var sa = s.split("%");
      var retV ="";
      if(sa[0] != "")
      {
         retV = sa[0];
      }
      for(var i = 1; i < sa.length; i ++)
      {
           if(sa[i].substring(0,1) == "u")
           {
               retV += Hex2Utf8(Str2Hex(sa[i].substring(1,5)));
              
           }
           else retV += "%" + sa[i];
      }
     
      return retV;
}
function Str2Hex(s)
{
      var c = "";
      var n;
      var ss = "0123456789ABCDEF";
      var digS = "";
      for(var i = 0; i < s.length; i ++)
      {
         c = s.charAt(i);
         n = ss.indexOf(c);
         digS += Dec2Dig(eval(n));
          
      }
      //return value;
      return digS;
}
function Dec2Dig(n1)
{
      var s = "";
      var n2 = 0;
      for(var i = 0; i < 4; i++)
      {
         n2 = Math.pow(2,3 - i);
         if(n1 >= n2)
         {
            s += '1';
            n1 = n1 - n2;
          }
         else
          s += '0';
         
      }
      return s;
}
function Dig2Dec(s)
{
      var retV = 0;
      if(s.length == 4)
      {
          for(var i = 0; i < 4; i ++)
          {
              retV += eval(s.charAt(i)) * Math.pow(2, 3 - i);
          }
          return retV;
      }
      return -1;
}
function Hex2Utf8(s)
{
	var retS = "";
	var tempS = "";
	var ss = "";
	if(s.length == 16)
	{
	 tempS = "1110" + s.substring(0, 4);
	 tempS += "10" + s.substring(4, 10);
	 tempS += "10" + s.substring(10,16);
	 var sss = "0123456789ABCDEF";
	 for(var i = 0; i < 3; i ++)
	 {
		retS += "%";
		ss = tempS.substring(i * 8, (eval(i)+1)*8);
		retS += sss.charAt(Dig2Dec(ss.substring(0,4)));
		retS += sss.charAt(Dig2Dec(ss.substring(4,8)));
	 }
	 return retS;
	}
	return "";
}
