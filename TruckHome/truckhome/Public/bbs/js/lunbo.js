
$(function(){
	// 让图片动起来
	var i = 1;
	var s = null;

	function run(){
		s = setInterval(function(){
			// 1.初始化
			$('#box3>img:eq('+i+')').css('display','block').siblings('img').css('display','none');
			$('#box2>li:eq('+i+')').css('background','yellow').siblings('li').css('background','red');
			$('#box1>a:eq('+i+')').css('display','block').siblings('a').css('display','none');

			i++;

			// 判断界限
			if (i >= $('#box3>img').length) {
				i = 0;
			}
		}, 1000)
	}
	run();	//首次调用

	// 鼠标移入
	$('#box3>img').mouseover(function(){
		clearInterval(s);
	}).mouseout(function(){
		run();
	})

	$('#box1>a').mouseover(function(){
		clearInterval(s);
	}).mouseout(function(){
		run();
	})

	// 数字的移入
	$('#box2>li').mouseover(function(){
		// 清除定时任务
		clearInterval(s);

		// 显示当前数字的图片
		// 获取当前的数字
		i = $(this).index();

		// 初始化，让当前数字背景颜色改变，图片显示
		$('#box3>img:eq('+i+')').css('display','block').siblings('img').css('display','none');
		$('#box2>li:eq('+i+')').css('background','yellow').siblings('li').css('background','red');

	})
	$('#box1>a').mouseover(function(){
		// 清除定时任务
		clearInterval(s);

		// 显示当前数字的图片
		// 获取当前的数字
		i = $(this).index();

		// 初始化，让当前数字背景颜色改变，图片显示
		$('#box3>img:eq('+i+')').css('display','block').siblings('img').css('display','none');
		$('#box2>li:eq('+i+')').css('background','yellow').siblings('li').css('background','red');

	})
})
