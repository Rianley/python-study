/*
	 * @description : 卡车之家百度广告辅助
	 * @authors 	: ZP (zhanpeng.zhu@360che.com)
	 * @date 		: 2015-12-09 14:57:01
	 * @version 	: 1.0
*/
!function(){
	if(window.ads_material && ads_material.length){
		window.slotbydup = window.slotbydup || [];
		for(var i = 0; i < ads_material.length ; i++){
			var s = '_' + Math.random().toString(36).slice(2);
			var div = document.createElement('div');
			div.id = s;
			ads_material[i].container = s;
			if (document.getElementById('PAGE_AD_' + ads_material[i].id)) {
				document.getElementById('PAGE_AD_' + ads_material[i].id).appendChild(div);
				window.slotbydup.push(ads_material[i]);
			}
		};
	};
}();