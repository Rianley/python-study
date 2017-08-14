(function($){$.extend($.browser,{client:function(){return{width:document.documentElement.clientWidth,height:document.documentElement.clientHeight,bodyWidth:document.body.clientWidth,bodyHeight:document.body.clientHeight};},scroll:function(){return{width:document.documentElement.scrollWidth,height:document.documentElement.scrollHeight,bodyWidth:document.body.scrollWidth,bodyHeight:document.body.scrollHeight,left:document.documentElement.scrollLeft,top:document.documentElement.scrollTop};},screen:function(){return{width:window.screen.width,height:window.screen.height};},isIE6:$.browser.msie&&$.browser.version==6,isMinW:function(val){return Math.min($.browser.client().bodyWidth,$.browser.client().width)<=val;},isMinH:function(val){return $.browser.client().height<=val;}})})(jQuery);(function($){$.widthForIE6=function(option){var s=$.extend({max:null,min:null,padding:0},option||{});var init=function(){var w=$(document.body);if($.browser.client().width>=s.max+s.padding){w.width(s.max+"px");}else if($.browser.client().width<=s.min+s.padding){w.width(s.min+"px");}else{w.width("auto");}};init();$(window).resize(init);}})(jQuery);(function($){$.fn.hoverForIE6=function(option){var s=$.extend({current:"hover",delay:10},option||{});$.each(this,function(){var timer1=null,timer2=null,flag=false;$(this).bind("mouseover",function(){if (flag){clearTimeout(timer2);}else{var _this=$(this);timer1=setTimeout(function(){_this.addClass(s.current);flag=true;},s.delay);}}).bind("mouseout",function(){if (flag){var _this=$(this);timer2=setTimeout(function(){_this.removeClass(s.current);flag=false;},s.delay);}else{clearTimeout(timer1);}})})}})(jQuery);(function($){$.extend({_jsonp:{scripts:{},counter:1,head:document.getElementsByTagName("head")[0],name:function(callback){var name='_jsonp_'+(new Date).getTime()+'_'+this.counter;this.counter++;var cb=function(json){eval('delete '+name);callback(json);$._jsonp.head.removeChild($._jsonp.scripts[name]);delete $._jsonp.scripts[name];};eval(name+' = cb');return name;},load:function(url,name){var script=document.createElement('script');script.type='text/javascript';script.charset=this.charset;script.src=url;this.head.appendChild(script);this.scripts[name]=script;}},getJSONP:function(url,callback){var name=$._jsonp.name(callback);var url=url.replace(/{callback};/,name);$._jsonp.load(url,name);return this;}});})(jQuery);(function($){$.fn.jdTab=function(option,callback){if(typeof option=="function"){callback=option;option={};};var s=$.extend({type:"static",auto:false,source:"data",event:"mouseover",currClass:"curr",tab:".tab",content:".tabcon",itemTag:"li",stay:5000,delay:100,mainTimer:null,subTimer:null,index:0},option||{});var tabItem=$(this).find(s.tab).eq(0).find(s.itemTag),contentItem=$(this).find(s.content);if(tabItem.length!=contentItem.length)return false;var reg=s.source.toLowerCase().match(/http:\/\/|\d|\.aspx|\.ascx|\.asp|\.php|\.html\.htm|.shtml|.js|\W/g);var init=function(n,tag){s.subTimer=setTimeout(function(){hide();if(tag){s.index++;if(s.index==tabItem.length)s.index=0;}else{s.index=n;};s.type=(tabItem.eq(s.index).attr(s.source)!=null)?"dynamic":"static";show();},s.delay);};var autoSwitch=function(){s.mainTimer=setInterval(function(){init(s.index,true);},s.stay);};var show=function(){tabItem.eq(s.index).addClass(s.currClass);switch(s.type){default:case "static":var source="";break;case "dynamic":var source=(reg==null)?tabItem.eq(s.index).attr(s.source):s.source;tabItem.eq(s.index).removeAttr(s.source);break;};if(callback){callback(source,contentItem.eq(s.index),s.index);};contentItem.eq(s.index).show();};var hide=function(){tabItem.eq(s.index).removeClass(s.currClass);contentItem.eq(s.index).hide();};tabItem.each(function(n){$(this).bind(s.event,function(){clearTimeout(s.subTimer);clearInterval(s.mainTimer);init(n,false);return false;}).bind("mouseleave",function(){if(s.auto){autoSwitch();}else{return;}})});if(s.type=="dynamic"){init(s.index,false);};if(s.auto){autoSwitch();}}})(jQuery);(function($){$.fn.jdSlide=function(option){var settings=$.extend({width:null,height:null,pics:[],index:0,type:"num",current:"curr",delay1:200,delay2:8000},option||{});var element=this;var timer1,timer2,timer3,flag=true;var total=settings.pics.length;var init=function(){var img="<ul style='position:absolute;top:0;left:0;'><li><a href='"+settings.pics[0].href+"' target='_blank'><img src='"+settings.pics[0].src+"' width='"+settings.width+"' height='"+settings.height+"' /></a></li></ul>";element.css({"position":"relative"}).html(img);$(function(){delayLoad();})};init();var initIndex=function(){var indexs="<div>";var current;var x;for(var i=0;i<total;i++){current=(i==settings.index)?settings.current:"";switch(settings.type){case "num":x=i+1;break;case "string":x=settings.pics[i].alt;break;case "image":x="<img src='"+settings.pics[i].breviary+"' />";default:break;};indexs+="<span class='"+current+"'><a href='"+settings.pics[i].href+"' target='_blank'>"+x+"</a></span>";};indexs+="</div>";element.append(indexs);element.find("span").bind("mouseover",function(e){clearInterval(timer1);clearInterval(timer3);var index=element.find("span").index(this);if(index==settings.index){return;}else{timer3=setInterval(function(){if(flag)running(parseInt(index));},settings.delay1);}}).bind("mouseleave",function(e){clearInterval(timer3);timer1=setInterval(function(){running(settings.index+1,true);},settings.delay2);})};var running=function(index,tag){if(index==total){index=0;};element.find("span").eq(settings.index).removeClass(settings.current);element.find("span").eq(index).addClass(settings.current);timer2=setInterval(function(){var pos_y=parseInt(element.find("ul").get(0).style.top);var pos_a=Math.abs(pos_y+settings.index*settings.height);var pos_b=Math.abs(index-settings.index)*settings.height;var pos_c=Math.ceil((pos_b-pos_a)/4);if(pos_a==pos_b){clearInterval(timer2);if(tag){settings.index++;if(settings.index==total){settings.index=0;}}else{settings.index=index;};flag=true;}else{if(settings.index<index){element.find("ul").css({top:pos_y-pos_c+"px"});}else{element.find("ul").css({top:pos_y+pos_c+"px"});};flag=false;}},10);};var delayLoad=function(){var img="";for(var i=1;i<total;i++){img+="<li><a href='"+settings.pics[i].href+"' target='_blank'><img src='"+settings.pics[i].src+"' width='"+settings.width+"' height='"+settings.height+"' /></a></li>";};element.find("ul").append(img);timer1=setInterval(function(){running(settings.index+1,true);},settings.delay2);if(settings.type)initIndex();};}})(jQuery);function ResumeError(){return true;}window.onerror=ResumeError;if($.browser.isIE6){try{document.execCommand("BackgroundImageCache",false,true);}catch(err){}};var calluri="http://fairyservice.360buy.com/WebService.asmx/MarkEx?callback=?";var loguri="http://csc.360buy.com/log.ashx?type1=$type1$&type2=$type2$&data=$data$&callback=?";callback1=function(data){;};log=function(type1,type2,arg1,arg2,arg3,arg4,arg5,arg6,arg7,arg8,arg9,arg10){var data='';for(i=2;i<arguments.length;i++){data=data+arguments[i]+'|||';}var url=loguri.replace(/\$type1\$/,escape(type1));url=url.replace(/\$type2\$/,escape(type2));url=url.replace(/\$data\$/,escape(data));$.getJSON(url,callback1);};mark=function(sku,type){$.getJSON(calluri,{sku:sku,type:type},callback1);log(1, type, sku);};function search(id){var selKey = document.getElementById(id).value;window.location = 'http://search.360buy.com/Search?keyword=' + selKey;}function login(){location.href="https://passport.360buy.com/new/login.aspx?ReturnUrl="+escape(location.href);return false;}function regist(){location.href="https://passport.360buy.com/new/registpersonal.aspx?ReturnUrl="+escape(location.href);return false;}function setWebBILinkCount(sType) {try {if (sType.length > 0) {var js = document.createElement('script');js.type = 'text/javascript';js.src = 'http://counter.360buy.com/aclk.aspx?key=' + sType;document.getElementsByTagName('head')[0].appendChild(js);}} catch(e) {}};function gi_ga(s,name){if(typeof(s)=="undefined"){return "";};s="^"+s+"^";var b=s.indexOf("^"+name+"=");if(-1==b){return "";}else{b+=name.length+2;};var e=s.indexOf("^",b);return s.substring(b,e);};function gi_get_monitor_code(k,p){return '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="0" height="0"><param name="movie" value="http://js.miaozhen.com/a.swf"><param name="allowScriptAccess" value="always"><param name="FlashVars" value="caId='+k+'&SPID='+p+'&loc='+document.location.href+'&ref='+document.referrer+'"><embed src="http://js.miaozhen.com/a.swf" pluginspage="http://www.macromedia.com/go/getflashplayer" allowScriptAccess="always" type="application/x-shockwave-flash" width="0" height="0" FlashVars="caId='+k+'&SPID='+p+'&loc='+document.location.href+'&ref='+document.referrer+'"></embed></object>';};var gi_normal__=new Object();gi_normal__.deliver=function(arg){if(arg.gi_automatchscreen&&screen.width>=1280){arg.gi_width=arg.gi_width_w;};var ad="";if(arg.gi_isautomonitorclick){ad='<div style="position: absolute; width: '+arg.gi_width+'px; height: '+arg.gi_height+'px; cursor: pointer; background-color: rgb(255, 255, 255); opacity: 0; filter:alpha(opacity=0);" onclick="window.open(\'' + arg.gi_ldp + '\',\'_blank\')"></div>';};if(arg.gi_type=="img"){ad+="<a target=\"_blank\" href=\"" + arg.gi_ldp + "\"><img height=\"" + arg.gi_height + "\" width=\"" + arg.gi_width + "\" border=\"0\" src=\"" + ( (arg.gi_width == arg.gi_width_w) ? (arg.gi_src_w) : (arg.gi_src) ) + "\"/></a>";}else if(arg.gi_type=="flash"){ad+='<embed src="'+((arg.gi_width==arg.gi_width_w)?(arg.gi_src_w):(arg.gi_src))+'" width="'+arg.gi_width+'" height="'+arg.gi_height+'" type="application/x-shockwave-flash" play="true" loop="true" menu="true" wmode="transparent"></embed>';};var gi_k=gi_ga(arg.gi_ldp,"k");var gi_p=gi_ga(arg.gi_ldp,"p");document.getElementById("miaozhen"+arg.gi_pid).innerHTML+=ad+gi_get_monitor_code(gi_k,gi_p);};gi_focus__=new Object();gi_focus__.next=function(){var arg=gi_focus__.arg;if(arg.gi_automatchscreen&&screen.width>=1280){arg.gi_width=arg.gi_width_w;};var ad_arr=arg.gi_ad_arr;gi_focus__.now%=ad_arr.length;var html='<div onmouseover="clearInterval(gi_focus__.timer);" onmouseout="gi_focus__.timer=setInterval(gi_focus__.next,gi_focus__.arg.gi_interval);" style="width: '+arg.gi_width+'px; height: '+arg.gi_height+'px; cursor: pointer; background-color: rgb(255, 255, 255); position: relative; " onclick="javascript:window.open(\'' + ad_arr[gi_focus__.now].gi_ldp + '\',\'_blank\')">';var i;var ad='';if(ad_arr[gi_focus__.now].gi_type=="img"){var ad='<img style="display: block" src="'+((arg.gi_width==arg.gi_width_w)?(ad_arr[gi_focus__.now].gi_src_w):(ad_arr[gi_focus__.now].gi_src))+'" width="'+arg.gi_width+'px" height="'+arg.gi_height+'px" />';}else if(ad_arr[gi_focus__.now].gi_type=="flash"){var ad='<embed src="'+((arg.gi_width==arg.gi_width_w)?(ad_arr[gi_focus__.now].gi_src_w):(ad_arr[gi_focus__.now].gi_src))+'" width="'+arg.gi_width+'" height="'+arg.gi_height+'" type="application/x-shockwave-flash" play="true" loop="true" menu="true" wmode="transparent"></embed>';};html=html+ad;for(i=0;i<ad_arr.length;i++){if(i==gi_focus__.now){html+='<div onmouseover="gi_focus__.now='+i+';gi_focus__.next();" style="border: 1px solid #3b81cd; right:'+(18*(ad_arr.length-i)-18)+'px; bottom: 0px; position: absolute; z-index: 10; width:15px;height:16px; cursor: pointer; background-color: #3b81cd; opacity: 1; filter:alpha(opacity=100); color:white; font-family:Arial; font-size:11px; text-align: center; vertical-align:middle; ">'+(i+1)+'</div>';}else{html+='<div onmouseover="gi_focus__.now='+i+';gi_focus__.next();" style="border: 1px solid #3b81cd; right:'+(18*(ad_arr.length-i)-18)+'px; bottom: 0px; position: absolute; z-index: 10; width:15px;height:16px; cursor: pointer; background-color: rgb(255, 255, 255); opacity: 1; filter:alpha(opacity=100); font-family:Arial; font-size:11px; text-align: center; vertical-align:middle; " >'+(i+1)+'</div>';}};html+='</div>';document.getElementById("miaozhen"+arg.gi_pid).innerHTML=html;gi_focus__.now++;};gi_focus__.deliver=function(arg){gi_focus__.arg=arg;var ad_arr=arg.gi_ad_arr;var newElement=document.createElement("div");newElement.innerHTML=gi_get_monitor_code(gi_ga(ad_arr[0].gi_ldp,"k"),gi_ga(ad_arr[0].gi_ldp,"p"));document.getElementById("miaozhen"+arg.gi_pid).parentNode.appendChild(newElement);gi_focus__.now=0;gi_focus__.timer=setInterval(gi_focus__.next,arg.gi_interval);gi_focus__.next();};var gi_rotate__=new Object();gi_rotate__.deliver=function(arg){var ad_arr=arg.gi_ad_arr;var i=ad_arr[0][Math.floor(Math.random()*ad_arr[0].l)];if(arg.gi_automatchscreen&&screen.width>=1280){arg.gi_width=arg.gi_width_w;};var click='<div style="position: absolute; width: '+arg.gi_width+'px; height: '+arg.gi_height+'px; cursor: ';click+='pointer; background-color: rgb(255, 255, 255); opacity: 0; filter:alpha(opacity=0);" ';click+='onclick="javascript:window.open(\'' + ad_arr[i].gi_ldp + '\',\'_blank\')"></div>';if(ad_arr[i].gi_type=="img"){var ad='<img src="'+((arg.gi_width==arg.gi_width_w)?(ad_arr[i].gi_src_w):(ad_arr[i].gi_src))+'" width="'+arg.gi_width+'" height="'+arg.gi_height+'" />';}else if(ad_arr[i].gi_type=="flash"){var ad='<embed src="'+((arg.gi_width==arg.gi_width_w)?(ad_arr[i].gi_src_w):(ad_arr[i].gi_src))+'" width="'+arg.gi_width+'" height="'+arg.gi_height+'" type="application/x-shockwave-flash" play="true" loop="true" menu="true" wmode="transparent"></embed>';};ad=click+ad;var gi_k=gi_ga(ad_arr[i].gi_ldp,"k");var gi_p=gi_ga(ad_arr[i].gi_ldp,"p");document.getElementById("miaozhen"+arg.gi_pid).innerHTML+=ad+gi_get_monitor_code(gi_k,gi_p);;};
var initScrollY=0;
var proIDs=new Array();
function compare(){
if($("#compare").get(0)==null){
$("body").append("<div id=\"compare\" class=\"compare\"><div class=\"mt\"><h5>商品比较</h5><div class=\"extra\" onclick=\"clearCompare()\"></div></div><div class=\"comPro\"><ul class=\"mc\" id=\"comProlist\"></ul><div class=\"mb\"><input type=\"button\" value=\"对比所选商品\" class=\"btn\" id=\"compareImg\" onclick=\"openCompare()\"></div></div></div>");
$("#compare").css({position:"absolute",top:"220px",right:"0px"});
isCoo();}
if($.browser.msie){
var defaultY=document.documentElement.scrollTop;
var perceH=0.3*(defaultY-initScrollY);
if(perceH>0){perceH=Math.ceil(perceH);}
else{perceH=Math.floor(perceH);}
$("#compare").get(0).style.top=parseInt($("#compare").get(0).style.top)+perceH+"px";
initScrollY=initScrollY+perceH;
setTimeout("compare()",50)}else{
window.onscroll=function(){
$("#compare").get(0).style.top=parseInt($("#compare").get(0).style.top)+"px";
$("#compare").get(0).style.position="fixed";}}}
function clearCompare(){
$("#comProlist").empty();
$("#compare").hide();
createCookie("compare","");
proIDs=new Array();}
function addToCompare(checkobj,checkid,checkProName){
$("#compare").show();
$(".comPro").show();
var proIDsTemp=proIDs.join(".");
if(proIDsTemp.indexOf(checkid)==-1){
if(proIDs.length<3){
proIDs.push(checkid);
$("#comProlist").append("<li id='check_"+checkid+"'><a title='删除' class='close' onclick='reduceCompare("+checkid+")'></a>"+checkProName+"</li>");
writeCompare(checkid,checkProName);}else{
alert("对不起，最多可以选择三种商品进行对比！");}}else{
alert("对不起，您已经选择此商品！");
return;}}
function reduceCompare(checkid){
$("#check_"+checkid).remove();
$.each(proIDs,function(i,n){
if(checkid==n){
proIDs.splice(i,1);}});
var coo=readCookie("compare");
var idindexstart=coo.indexOf(checkid);
var idindexend=coo.indexOf("|||",idindexstart)+3;
var delStr=coo.substring(idindexstart,idindexend);
var innerStr=coo.replace(delStr,"")
createCookie("compare",innerStr);
if(proIDs.length==0){$(".comPro").hide();}}
function openCompare(){
switch(proIDs.length){
case 1:
alert("对不起，最少选择两种商品进行对比！");
break;
case 2:
window.open("http://www.360buy.com/pcompare.aspx?s1="+proIDs[0]+"&s2="+proIDs[1]);
break;
case 3:
window.open("http://www.360buy.com/pcompare.aspx?s1="+proIDs[0]+"&s2="+proIDs[1]+"&s3="+proIDs[2]);
break;
default:
alert("请选择2-3件商品进行对比！");
return;}}
function writeCompare(checkid,checkProName){
var compareList=readCookie("compare");
if(compareList==null){compareList="";}
compareList+=checkid+"||"+escape(checkProName)+"|||";
createCookie("compare",compareList);}
function isCoo(){
var coo=readCookie("compare");
if(coo){
var cootemp=coo.split("|||");
var compareListTemp="";
for(var i=0;i<cootemp.length-1;i++){
compareListTemp+="<li id='check_"+cootemp[i].split("||")[0]+"'><a title='删除' class='close' onclick='reduceCompare("+cootemp[i].split("||")[0]+")'></a>"+unescape(cootemp[i].split("||")[1])+"</li>";
proIDs.push(cootemp[i].split("||")[0]);}
$("#comProlist").html(compareListTemp);
$("#compare").show();
$(".comPro").show();}}
function createCookie(name,value,days,Tdom){
var Tdom=(Tdom)?Tdom:"/";
if(days){
var date=new Date();
date.setTime(date.getTime()+(days*24*60*60*1000));
var expires="; expires="+date.toGMTString();}else{
var expires="";}
document.cookie=name+"="+value+expires+"; path="+Tdom;}
function readCookie(name){
var nameEQ=name+"=";
var ca=document.cookie.split(';');
for(var i=0;i<ca.length;i++){
var c=ca[i];
while(c.charAt(0)==' '){c=c.substring(1,c.length);}
if(c.indexOf(nameEQ)==0){return c.substring(nameEQ.length,c.length);}}
return null;}