// 卡车之家 PC端主要分享
~function(){
	if(!window.truckhome_share_config) return;
	var viewPos 	= truckhome_share_config['viewPosition'];
	var viewList 	= truckhome_share_config['viewList'];
	var share_url 	= truckhome_share_config['link'] || window.location.href; // 分享链接 
	var share_title = truckhome_share_config['title'] || document.title; // 分享标题
	var share_icon 	= truckhome_share_config['icon'];	// 分享图片
	var share_tools = document.createElement('div');
	share_tools.className = 'share-tools-360che';
	share_tools.id = 'share_tools_360che';
	var link = document.createElement('link');
	link.rel = 'stylesheet';
	link.href = 'http://static.360che.com/public/share/css/truckhome.share.css';
	document.getElementsByTagName("head")[0].appendChild(link);
	share_title = encodeURIComponent(share_title);
	var share_icons = '',l = viewList.length,page_qrcode = document.getElementById('page_qrcode');
	for(var i = 0; i < l; i++){
		switch(viewList[i]){
			case 'weibo':
				share_icons += '<a href="http://service.weibo.com/share/share.php?url='+ share_url +'&title='+ share_title +'&appkey=1765391403&ralateUid=1618776221&pic='+ share_icon +'&searchPic=false&refer='+ share_url +'" class="'+ viewList[i] +'">\u65b0\u6d6a\u5fae\u535a</a>';
				break;
			case 'qzone':
				share_icons += '<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+ share_url +'&desc='+ share_title +'&pics='+ share_icon +'&summary= " class="'+ viewList[i] +'">QQ\u7a7a\u95f4</a>';
				break;
			case 'wechat':
				share_icons += '<span class="'+ viewList[i] +'">\u5fae\u4fe1</span>';
				if(!page_qrcode){
					var script_qrcode = document.createElement('script');
					script_qrcode.loadHandle = function(){
						var codeFigure = new AraleQRCode({
							"render":document.all && !document.addEventListener ? "table" : "svg",
							"text":share_url,
							"size":100,
							"imageSize":80
						});	
						page_qrcode = document.createElement('div');
						page_qrcode.id = 'page_qrcode';
						page_qrcode.appendChild(codeFigure);
						share_tools.appendChild(page_qrcode);	
					};
					if(document.all && !document.addEventListener){
						script_qrcode.onreadystatechange = function(){
							var state = script_qrcode.readyState;
							if(state === 'loaded' || state === 'complete'){
								script_qrcode.loadHandle();	
							}
						}		
					}else{
						script_qrcode.onload = function(){
							script_qrcode.loadHandle();	
						}
					};
					script_qrcode.src = 'http://static.360che.com/public/share/js/truckhome.qrcode.min.js';
					document.body.appendChild(script_qrcode);
				}
				break;
			default:
				share_icons += '<a href="http://share.v.t.qq.com/index.php?c=share&a=index&url='+ share_url +'&title='+ share_title +'&appkey=1d0c2f99d26997a489d4cd1208f087e6&pic='+ share_icon +'" class="'+ viewList[i] +'">\u817e\u8baf\u5fae\u535a</a>';
				break;
		}
	};
	share_tools.innerHTML += share_icons; 
	viewPos && document.getElementById(viewPos) ? document.getElementById(viewPos).appendChild(share_tools) : document.body.appendChild(share_tools);
	share_tools.onclick = function(){
		var target = event.srcElement || event.target;
		if(target.tagName == 'SPAN' && target.className == 'wechat'){
			page_qrcode.className = page_qrcode.className === 'visible' ? '' : 'visible';
		}
	};
}();