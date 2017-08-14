function scu(key,isexpires)
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
scu("udstatistics",true);
scu("epnonestats",false);

document.write('<iframe id="360chedf" src='+'http://stats.360che.com/tj.htm?sw=' + screen.width + '&sc=' + screen.height + '&referer=' + escape(document.referrer) + '&page=' + escape(document.URL)+ '&site=7&catid=' +__cs.catid+ '&brandid=' +__cs.brandid+ '&good=' +__cs.good+'&ts='+new Date().getTime()+' style="display:none;"></iframe>');