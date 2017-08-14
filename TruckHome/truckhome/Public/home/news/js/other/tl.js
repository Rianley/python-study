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

STAT.uurl    = window.location.href;
STAT.uuid    = STAT.getCookie('udstatistics');
STAT.utime   = new Date().getTime();
STAT.r       = escape(encodeURIComponent(STAT.uuid+STAT.utime.toString().substr(8)));
STAT.referer = document.referrer;


window.onload   = function() {
	var url = 'http://stats.360che.com/tlsc.js?r='+STAT.r+'&t='+new Date().getTime()+'&d=s&referer='+STAT.referer;
	setTimeout('STAT.sc("'+url+'")',0);
};
window.onbeforeunload = function() {
	var url = 'http://stats.360che.com/tlsc.js?r='+STAT.r+'&t='+new Date().getTime()+'&d=e&referer='+STAT.referer;
	setTimeout('STAT.sc("'+url+'")',0);
};