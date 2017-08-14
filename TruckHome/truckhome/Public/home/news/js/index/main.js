//页头导航下来菜单效果
function initMenu(){
	var _speed = 0; // in ms
	var _hold = $('.autmain_right');
	var _t = null;
	if(_hold.length){
		var _list = _hold.children();
		_list.each(function(){
			var _el = $(this);
			var _box = _el.children('div.nav_w');
			var _sub = _box.children();

			_el.mouseenter(function(){
			var _this = this;
				_t = setTimeout(function(){
					$(_this).css('zIndex', 10);
					_el.addClass('hoverthre');
					if(_box.is(':hidden')){
						_box.show();
						_sub.css('marginTop', -_sub.outerHeight());
					}
					_sub.stop().animate({marginTop: 0}, _speed);
				},100)
			}).mouseleave(function(){
				if(_t) clearTimeout(_t);
				var _this = $(this);
				$(this).css('zIndex', 5);
				if(_sub.length){
					_sub.stop().animate({marginTop: -_sub.outerHeight()}, _speed, function(){
						_box.hide();
						_el.removeClass('hoverthre');
						_this.css('zIndex', 1);
					});
				}else{
					_el.removeClass('hoverthre');
				}
			});
		});
	}
}

$(document).ready(function(){

	initMenu();

});

