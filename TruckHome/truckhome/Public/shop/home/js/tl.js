if( typeof STAT == 'undefined' || !STAT){
    var STAT  = {};
};

STAT.getCookie = function (name)
{
	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
	if(arr=document.cookie.match(reg))
	return unescape(arr[2]);
	else
	return null;
};

STAT.sc = function(url) {
	var scriptObj = document.createElement("script");
	scriptObj.src = url;
	document.body.appendChild(scriptObj);
};

STAT.scu = function (key,isexpires) 
{
    try
    {
        var doCan = false;
        if (document.cookie.length > 0) {
            c_start = document.cookie.indexOf(key+"=")
            if (c_start != -1) {
                doCan = true;
            }
        }
        if(!doCan)
        {
            var exdate = new Date();
            exdate.setDate(exdate.getDate() + 1024);
			var ep ='';
			if(isexpires)
			{
				ep = "expires=" + exdate.toGMTString() + ";";
			}
            document.cookie = key + "=" + escape((Math.random() + "").substr(2)) + ";domain=360che.com;"+ep+"path=/;";
			//
        }
    }
    catch(e){}
}

STAT.uurl    = window.location.href;
STAT.uuid    = STAT.getCookie('udstatistics');
STAT.utime   = new Date().getTime();
STAT.r       = escape(encodeURIComponent(STAT.uuid+STAT.utime.toString().substr(8)));
STAT.referer = document.referrer;

STAT.scu("udstatistics",true);
STAT.scu("epnonestats",false);

function onloadHandle(){
    var url = 'http://stats.360che.com/tlsc.js?r='+STAT.r+'&t='+new Date().getTime()+'&d=s&referer='+STAT.referer;
   setTimeout('STAT.sc("'+url+'")',0);
};
function onbeforeunloadHandle(){
    var url = 'http://stats.360che.com/tlsc.js?r='+STAT.r+'&t='+new Date().getTime()+'&d=e&referer='+STAT.referer;
	setTimeout('STAT.sc("'+url+'")',0);
}

if(window.addEventListener && 'transition' in document.documentElement.style){
    window.addEventListener('load',onloadHandle);
    window.addEventListener('beforeunload',onbeforeunloadHandle)
}else{
    window.attachEvent('onload',onloadHandle);
    window.attachEvent('onbeforeunload',onbeforeunloadHandle);
}