<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="Generator" content="ECSHOP v2.7.3">
	<meta http-equiv="Content-Type" content="text/html; charset=gbk">
	<meta name="Keywords" content="正品卡车汽配,卡车之家车标,卡车配件,正品卡车配件,滤清器,3M产品,底盘配 件,加热器,饮水机,网购卡车配件,卡车之家商城">
	<meta name="Description" content="卡车之家商城领先的卡车配件网上购物商城,专为卡车人服务,只卖正品卡车配件,柴油滤清器,汽油滤清器,空气滤芯,3M,挂车配件,卡车之家车标等,想买正品卡车配件就上卡车之家商城.">
	<title>新信息】卡车之家商城_只卖正品卡车配件_正品卡车汽配【您有</title>
	<script src="/TruckHome/truckhome/Public/shop/home/js/jquery-1.8.3.min.js"></script>
	<link href="/TruckHome/truckhome/Public/shop/home/css/s_index.css" rel="stylesheet" type="text/css">
	<link href="/TruckHome/truckhome/Public/shop/home/css/s_public.css" rel="stylesheet" type="text/css">


	<meta http-equiv="Content-Type" content="text/html; charset=gbk">

	<meta http-equiv="content-type" content="text/html; charset=gbk">

</head>
<body>
	<div class="xll_dbbudong">
		<div class="autheader">
			<div class="autmain">
				<div class="autmain_left">
					<a href="<?php echo U('Index/index');?>" target="" class="gred9">卡车之家首页</a>
					<span>|</span>
					<div id="append_parent" style="display:none"></div>
					<meta http-equiv="content-type" content="text/html; charset=gbk">
					<?php if($_SESSION['user']['id'] == null): ?><span class="login">
						<a href="<?php echo U('User/login');?>">[登录]</a>
						<a href="<?php echo U('User/register');?>" >[注册]</a>
					</span>
					<?php else: ?>
						<span style="color:red">您好,<?php echo ($_SESSION['user']['username']); ?>,欢迎访问本商城</span>
						<a href="<?php echo U('User/logout');?>">退出</a><?php endif; ?>
				</div>
				<div class="autmain_right">
					<span>|</span>
					<a href="" class="gred9">帮助</a>
					<span>|</span>
					<a href="" class="gred9">反馈</a>
					<span>|</span>
					<span class="ytdianh">400-880-6283</span>
				</div>
			</div>
		</div>
	</div>

	<div class="logoheard">
		<div class="logo_hd ft">
			<a href="">
				<img src="/TruckHome/truckhome/Public/shop/home/images/logo.jpg"></a>
		</div>
		<div class="searchbox ft" id="search">
			<form id="searchForm" name="searchForm" method="get" action="<?php echo U('Sproduct/index');?>" onsubmit="return checkSearchForm()">
				<div class="searba">
					<div class="searba1">
						<input name="proname" id="keywords" class="ico_txt" placeholder="输入商品名称" type="text"></div>
					<input value="搜 索" class="ico_anniu" type="submit"></div>
				<div class="searbb">
					热门搜索：
					<?php if(is_array($search)): foreach($search as $key=>$vo): ?><a href="<?php echo U('Sproduct/index',array('cid'=>$vo['cid']));?>"><?php echo ($vo['catename']); ?></a>
					｜<?php endforeach; endif; ?>
					<!-- <a href="<?php echo U('Sproduct/index',array('cid'=>12));?>">柴油精滤</a>
					｜
					<a href="<?php echo U('Sproduct/index',array('cid'=>21));?>">挂车配件</a>
					｜
					<a href="<?php echo U('Sproduct/index',array('cid'=>19));?>" onclick="sw('防盗螺丝')">防盗螺丝</a>
					｜
					<a href="<?php echo U('Sproduct/index',array('cid'=>23));?>" class="red">回位弹簧</a>
					｜
					<a href="<?php echo U('Sproduct/index',array('cid'=>22));?>">干燥器</a> -->
				</div>
			</form>
		</div>
		<div class="fr useboxner">
			<ul>
				<li>
					<a href="<?php echo U('User/userindex');?>" target="_blank"> <em class="ueic1"></em>
						我的商城
					</a>
				</li>
				<li class="useline"></li>
				<li>
					<a href="<?php echo U('Scart/index');?>" target="_blank"> <em class="ueic2"></em>
						购物车结算
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="bannerol">
		<div class="bannerola">
			<span class="banra">全部商品分类</span>
			<span class="banrb">
				<img src="/TruckHome/truckhome/Public/shop/home/images/icona1.png"></span>
		</div>
		<div class="bannerolb">
			<a target="_blank" href="<?php echo U('Sindex/index');?>" class="redico">商城首页</a>

					<a target="_blank" href="<?php echo U('Sproduct/index',array('cid'=>11));?>">
						柴油粗滤
					</a>
					<a target="_blank" href="<?php echo U('Sproduct/index',array('cid'=>12));?>">
						柴油精滤
					</a>
					<a target="_blank" href="<?php echo U('Sproduct/index',array('cid'=>10));?>">
						机油滤芯
					</a>
					<a target="_blank" href="<?php echo U('Sproduct/index',array('cid'=>15));?>">
						空气滤芯
					</a>
					<a target="_blank" href="<?php echo U('Sproduct/index',array('cid'=>14));?>">
						柴虑配件
					</a>

		</div>
	</div>
	<div class="fullSlide">

		<div class="neirbo">
			<div class="neirbo_a">
				<div class="neibo_a1">
				<?php if(is_array($list)): foreach($list as $key=>$nav): ?><div class="neirbo_a1a" >
						<div class="neirbo_a1a1"><?php echo ($nav['catename']); ?></div>

						<div class="neirbo_a1a2">
						<?php if(is_array($nav['subcat'])): $i = 0; $__LIST__ = $nav['subcat'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a target="_blank" href="<?php echo U('Sproduct/index',array('cid'=>$vo['id']));?>"><span style="width:55px;float:left"><?php echo ($vo['catename']); ?></span></a><?php endforeach; endif; else: echo "" ;endif; ?>

						</div>

					</div><?php endforeach; endif; ?>
				</div>
			</div>
			<div class="neirbo_b">
				<div class="neirbo_b1">
					<a href="" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/G01.jpg" alt=""></a>
				</div>
				<div class="neirbo_b1">
					<a href="" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/G02.jpg" alt=""></a>
				</div>
				<div class="neirbo_b1">
					<a href="" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/0526113423.jpg" alt=""></a>
				</div>
			</div>
		</div>
	</div>
	<div id="banner">
		<div class="slides">
			<ul class="slide-pic" id="box3">
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="display: block;" class="">
					<a href="" target="_blank">
						<img src="/TruckHome/truckhome/Public/<?php echo ($vo['pic']); ?>" alt=""></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
			<!-- <ul class="slide-li op">
				<li class=""></li>
			</ul> -->
			<ul class="slide-li slide-txt" id="box2">
			<?php $__FOR_START_24232__=1;$__FOR_END_24232__=$dataCount+1;for($i=$__FOR_START_24232__;$i < $__FOR_END_24232__;$i+=1){ ?><li class="" style="border-radius:12px;text-align:center;height:25px;line-height:25px">
					<?php echo ($i); ?>
				</li><?php } ?>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		$(function(){
	// 让图片动起来
	var i = 1;
	var s = null;

	function run(){
		s = setInterval(function(){
			// 1.初始化
			$('#box3>li:eq('+i+')').css('display','block').siblings('li').css('display','none');
			$('#box2>li:eq('+i+')').css('background','red').siblings('li').css('background','#ccc');


			i++;

			// 判断界限
			if (i >= $('#box3>li').length) {
				i = 0;
			}
		}, 1000)
	}
	run();	//首次调用

	// 鼠标移入
	$('#box3>li').mouseover(function(){
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
		$('#box3>li:eq('+i+')').css('display','block').siblings('li').css('display','none');
		$('#box2>li:eq('+i+')').css('background','red').siblings('li').css('background','#ccc');

	})

})
	</script>
	<div class="zxx_test_list_list">
		<ul class="tablist">
			<li class="tab" id="ph2">
				<a href="javascript:void(0)" class="tab_a tab_on tabJustHover" >热门商品</a>
			</li>
			<li class="tab" id="ph3" >
				<a  href="javascript:void(0)" class="tab_a tabJustHover">特价推荐</a>
			</li>
		</ul>
		<div class="tab_content">
			<div id="panelHover1" class="tabpanel" style="display:block;">
				<div class="hotbox1">
					<div class="hotbox1a">
					<?php if(is_array($hot)): foreach($hot as $key=>$voHot): ?><div style="width:178px;height:280px;float:left;border:1px solid #ccc;margin:5px">
						<a href="<?php echo U('Sproduct/proDetail',array('id'=>$voHot['id']));?>" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/<?php echo ($voHot['image']); ?>" title=""style="height:180px;width:178px;color:#ccc;margin-top:5px"></a>
							<a href="<?php echo U('Sproduct/proDetail',array('id'=>$voHot['id']));?>"style="display:block;font-size:15px;width:170px;height:50px;float:left;margin-top:10px;font-weight:bold;" target="_blank"><?php echo (msubstr($voHot['proname'],0,30,'utf-8',false)); ?></a>
							<span style="display:block;color:red;font-size:20px;width:176px;height:30px;float:left;font-weight:bold"><span style="font-size:15px">￥</span> <?php echo ($voHot['price']); ?> 元</span>
						</div><?php endforeach; endif; ?>

					</div>
					<div class="hotbox2a">
						<a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/G04.jpg" alt="" style="margin-bottom:1px;"></a>
						<a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/G05.jpg" alt="" style="margin-bottom:1px;"></a>
					</div>
				</div>
			</div>
			<div id="panelHover2" class="tabpanel" style="display:none;">
				<div class="hotbox1">
					<div class="hotbox1a">
					<?php if(is_array($promotion)): foreach($promotion as $key=>$voProm): ?><div style="width:178px;height:280px;float:left;border:1px solid #ccc;margin:5px">
						<a href="<?php echo U('Sproduct/proDetail',array('id'=>$voProm['id']));?>" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/<?php echo ($voProm['image']); ?>" title=""style="height:180px;width:178px;color:#ccc;margin-top:5px">
						</a>
							<a href="<?php echo U('Sproduct/proDetail',array('id'=>$voHot['id']));?>" style="display:block;font-size:15px;width:170px;height:50px;float:left;margin-top:10px;font-weight:bold;border:null" target="_blank"><?php echo (msubstr($voProm['proname'],0,30,'utf-8',false)); ?></a>
							<span style="display:block;color:red;font-size:20px;width:176px;height:30px;float:left;font-weight:bold"><span style="font-size:15px">￥</span> <?php echo ($voProm['price']); ?> 元</span>
						</div><?php endforeach; endif; ?>
						<!-- <a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/I01.jpg" title=""></a>
						<a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/I03.jpg" title=""></a>
						<a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/I04.jpg" title=""></a>
						<a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/I05.jpg" title=""></a>
						<a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/I06.jpg" title=""></a>
						<a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/I07.jpg" title=""></a>
						<a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/I08.jpg" title=""></a>
						<a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/I09.jpg" title=""></a>
						<a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/I10.jpg" title=""></a>
						<a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/I02.jpg" title=""></a>-->
					</div>
					<div class="hotbox2a">
						<a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/G04.jpg" alt="" style="margin-bottom:1px;"></a>
						<a href="" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/home/images/G05.jpg" alt="" style="margin-bottom:1px;"></a>
					</div>
				</div>
			</div>
		</div>


	</div>

	<div class="lou_ceng">
		<div class="lou_ceng1">
			<span>1F </span>
			 滤清器
		</div>
		<div class="lou_ceng2">


			<?php if(is_array($data1)): foreach($data1 as $key=>$vo1): ?><a target="_blank" href="<?php echo U('Sproduct/index',array('cid'=>$vo1['id']));?>"><?php echo ($vo1['catename']); ?></a><?php endforeach; endif; ?>


			<!-- <a target="_blank" href="">柴油粗滤</a>
			<a target="_blank" href="">柴油精滤</a>
			<a target="_blank" href="">加装总成</a>
			<a target="_blank" href="">空气滤芯</a> -->
		</div>

	</div>
	<div class="lou_cebox">

		<div class="lou_ceboxa">
			<a href="http://mai.360che.com/category-53-b0.html" target="_blank">
				<img src="/TruckHome/truckhome/Public/shop/home/images/G11.jpg" title=""></a>
		</div>
		<?php if(is_array($data11)): foreach($data11 as $key=>$vo11): ?><div class="lou_ceboxa">
				<dl>
					<dt>
						<a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo11['id']));?>" target="_blank">
							<img src="/TruckHome/truckhome/Public/shop/<?php echo ($vo11['image']); ?>" alt="<?php echo (msubstr($vo11['proname'],0,30,'utf-8',false)); ?>"></a>
					</dt>
					<dd>
						<a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo11['id']));?>" target="_blank"><?php echo (msubstr($vo11['proname'],0,30,'utf-8',false)); ?></a>
						<br>
						<span class="heng_xian"></span>
						<br>
						<span class="jiage"> <font></font>
						</span>
					</dd>
				</dl>
			</div><?php endforeach; endif; ?>
		<!-- <div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-87.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/F02.jpg" alt="派克粗虑088042PS"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-87.html" target="_blank">派克粗虑088042PS</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage"> <font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-66.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/F03.jpg" alt="派克R120P 西康ISM适用"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-66.html" target="_blank">派克R120P 西康ISM适用</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-83.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/F04.jpg" alt="雷诺dCi/6DL套装"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-83.html" target="_blank">雷诺dCi/6DL套装</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-18.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/F05.jpg" alt="派克滤芯2020PM30微米"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-18.html" target="_blank">派克滤芯2020PM30微米</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div> -->
	</div>

	<div class="lou_ceng">
		<div class="lou_ceng1">
			<span>2F </span>
			 底盘部件
		</div>
		<div class="lou_ceng2">


			<?php if(is_array($data2)): foreach($data2 as $key=>$vo2): ?><a target="_blank" href="<?php echo U('Sproduct/index',array('cid'=>$vo2['id']));?>"><?php echo ($vo2['catename']); ?></a><?php endforeach; endif; ?>


			<!-- <a target="_blank" href="">柴油粗滤</a>
			<a target="_blank" href="">柴油精滤</a>
			<a target="_blank" href="">加装总成</a>
			<a target="_blank" href="">空气滤芯</a> -->
		</div>

	</div>
	<div class="lou_cebox">
		<div class="lou_ceboxa">
			<a href="http://mai.360che.com/goods-99.html" target="_blank">
				<img src="/TruckHome/truckhome/Public/shop/home/images/G08.jpg" title=""></a>
		</div>
		<?php if(is_array($data22)): foreach($data22 as $key=>$vo22): ?><div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo22['id']));?>" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/<?php echo ($vo22['image']); ?>" alt="<?php echo ($vo22['proname']); ?>"></a>
				</dt>
				<dd>
					<a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo22['id']));?>" target="_blank"><?php echo (msubstr($vo22['proname'],0,30,'utf-8',false)); ?></a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div><?php endforeach; endif; ?>
		<!-- <div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-100.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/B02.jpg" alt="紧急继动阀 三桥同步阀"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-100.html" target="_blank">紧急继动阀 三桥同步阀</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-113.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/B01.jpg" alt="威伯科半挂车手制动阀"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-113.html" target="_blank">威伯科半挂车手制动阀</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-102.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/B05.jpg" alt="威伯科ABS轮速传感器"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-102.html" target="_blank">威伯科ABS轮速传感器</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-98.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/B04.jpg" alt="威伯科挂车ABS螺旋线"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-98.html" target="_blank">威伯科挂车ABS螺旋线</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div> -->
	</div>
	<div class="lou_ceng">
		<div class="lou_ceng1">
			<span>3F </span>
			 文化主题
		</div>
		<div class="lou_ceng2">


			<?php if(is_array($data3)): foreach($data3 as $key=>$vo3): ?><a target="_blank" href="<?php echo U('Sproduct/index',array('cid'=>$vo3['id']));?>"><?php echo ($vo3['catename']); ?></a><?php endforeach; endif; ?>


			<!-- <a target="_blank" href="">柴油粗滤</a>
			<a target="_blank" href="">柴油精滤</a>
			<a target="_blank" href="">加装总成</a>
			<a target="_blank" href="">空气滤芯</a> -->
		</div>

	</div>
	<div class="lou_cebox">
		<div class="lou_ceboxa">
			<a href="http://mai.360che.com/category-69-b0.html" target="_blank">
				<img src="/TruckHome/truckhome/Public/shop/home/images/G09.jpg" title=""></a>
		</div>
		<?php if(is_array($data33)): foreach($data33 as $key=>$vo33): ?><div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo33['id']));?>" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/<?php echo ($vo33['image']); ?>" alt="<?php echo ($vo33['proname']); ?>"></a>
				</dt>
				<dd>
					<a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo33['id']));?>" target="_blank"><?php echo (msubstr($vo33['proname'],0,30,'utf-8',false)); ?></a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div><?php endforeach; endif; ?>
		<!-- <div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-110.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/C02.jpg" alt="弗列加机滤 LF16285机滤"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-110.html" target="_blank">弗列加机滤 LF16285机滤</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-136.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/C03.jpg" alt="弗列加机滤 LF16294机滤"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-136.html" target="_blank">弗列加机滤 LF16294机滤</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-111.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/C04.jpg" alt="弗列加机滤 LF16327机滤"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-111.html" target="_blank">弗列加机滤 LF16327机滤</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-138.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/C05.jpg" alt="弗列加机滤 LF16329机滤"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-138.html" target="_blank">弗列加机滤 LF16329机滤</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div> -->
	</div>
	<div class="lou_ceng">
		<div class="lou_ceng1">
			<span>4F</span>
			安全防护
		</div>
		<div class="lou_ceng2">
			<?php if(is_array($data4)): foreach($data4 as $key=>$vo4): ?><a target="_blank" href="<?php echo U('Sproduct/index',array('cid'=>$vo4['id']));?>"><?php echo ($vo4['catename']); ?></a><?php endforeach; endif; ?>
		</div>

	</div>
	<div class="lou_cebox">
		<div class="lou_ceboxa">
			<a href="http://bx.360che.com/" target="_blank">
				<img src="/TruckHome/truckhome/Public/shop/home/images/0828192039.jpg" title=""></a>
		</div>
		<?php if(is_array($data44)): foreach($data44 as $key=>$vo44): ?><div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo44['id']));?>" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/<?php echo ($vo44['image']); ?>" alt="<?php echo ($vo44['proname']); ?>"></a>
				</dt>
				<dd>
					<a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo44['id']));?>" target="_blank"><?php echo (msubstr($vo44['proname'],0,30,'utf-8',false)); ?></a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div><?php endforeach; endif; ?>
		<!-- <div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-159.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/A02.jpg" alt="3M车尾标志板"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-159.html" target="_blank">3M车尾标志板</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-37.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/A03.jpg" alt="3M 绑扎带 282MM"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-37.html" target="_blank">3M 绑扎带 282MM</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-20.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/A05.jpg" alt="军工品质 分泵回位弹簧"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-20.html" target="_blank">军工品质 分泵回位弹簧</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-56.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/A04.jpg" alt="轮胎防盗螺丝"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-56.html" target="_blank">轮胎防盗螺丝</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div> -->
	</div>

	<div class="lou_ceng">
		<div class="lou_ceng1">
			<span>5F</span>
			行车必备
		</div>
		<div class="lou_ceng2">
			<?php if(is_array($data5)): foreach($data5 as $key=>$vo5): ?><a target="_blank" href="<?php echo U('Sproduct/index',array('cid'=>$vo5['id']));?>"><?php echo ($vo5['catename']); ?></a><?php endforeach; endif; ?>
		</div>

	</div>
	<div class="lou_cebox">
		<div class="lou_ceboxa">
			<a href="http://mai.360che.com/goods-120.html" target="_blank">
				<img src="/TruckHome/truckhome/Public/shop/home/images/G07.jpg" title=""></a>
		</div>
		<?php if(is_array($data55)): foreach($data55 as $key=>$vo55): ?><div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo55['id']));?>" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/<?php echo ($vo55['image']); ?>" alt="<?php echo ($vo55['proname']); ?>"></a>
				</dt>
				<dd>
					<a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo55['id']));?>" target="_blank"><?php echo (msubstr($vo55['proname'],0,30,'utf-8',false)); ?></a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div><?php endforeach; endif; ?>
		<!-- <div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-117.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/E02.jpg" alt="油箱加热器套装"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-117.html" target="_blank">油箱加热器套装</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-206.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/0204143918.jpg" alt="东风天锦 大包围脚垫"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-206.html" target="_blank">东风天锦 大包围脚垫</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-176.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/E04.jpg" alt="东风老天龙 乳胶软质脚垫"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-176.html" target="_blank">东风老天龙 乳胶软质脚垫</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div>
		<div class="lou_ceboxa">
			<dl>
				<dt>
					<a href="http://mai.360che.com/goods-115.html" target="_blank">
						<img src="/TruckHome/truckhome/Public/shop/home/images/G21.jpg" alt="卡车之家定制反光背心"></a>
				</dt>
				<dd>
					<a href="http://mai.360che.com/goods-115.html" target="_blank">卡车之家定制反光背心</a>
					<br>
					<span class="heng_xian"></span>
					<br>
					<span class="jiage">
						<font></font>
					</span>
				</dd>
			</dl>
		</div> -->
	</div>
	<div class="footer_a">
		<div class="footer_a1">
			<a target="_blank" href="http://www.360che.com/help/about/">
				<img src="/TruckHome/truckhome/Public/shop/home/images/help1.jpg"></a>
			<img src="/TruckHome/truckhome/Public/shop/home/images/backline.jpg">
			<a target="_blank" href="http://mai.360che.com/article_cat-12.html">
				<img src="/TruckHome/truckhome/Public/shop/home/images/help2.jpg"></a>
			<img src="/TruckHome/truckhome/Public/shop/home/images/backline.jpg">
			<a target="_blank" href="http://www.360che.com/help/suggest/index.html">
				<img src="/TruckHome/truckhome/Public/shop/home/images/help3.jpg"></a>
			<img src="/TruckHome/truckhome/Public/shop/home/images/backline.jpg">
			<img style="margin-top:19px;" src="/TruckHome/truckhome/Public/shop/home/images/help4.jpg"></div>
	</div>
	<div class="es_main">
	<div class="yewei">
		<div class="yewei1">
			<dl>
				<dt>关于卡车之家</dt>
				<dd>
					<div>
						<a target="_blank" href="http://www.360che.com/help/about/">公司简介</a>
					</div>
					<div>
						<a target="_blank" href="http://www.360che.com/help/friend/">友情链接</a>
					</div>
					<div>
						<a target="_blank" href="http://www.360che.com/help/contact/">联系我们</a>
					</div>
					<div>
						<a target="_blank" href="http://www.360che.com/help/sitemap/">网站地图</a>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>新手指南</dt>
				<dd>
					<div>
						<a target="_blank" href="http://mai.360che.com/article-13.html">购买资格</a>
					</div>
					<div>
						<a target="_blank" href="http://mai.360che.com/article-12.html">购物流程</a>
					</div>
					<div>
						<a target="_blank" href="http://bbs.360che.com/faq.php">会员介绍</a>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>配送服务</dt>
				<dd>
					<div>
						<a target="_blank" href="http://www.kiees.cn/">配送查询</a>
					</div>
					<div>
						<a target="_blank" href="http://mai.360che.com/article-16.html">售后服务</a>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>帮助</dt>
				<dd>
					<div>
						<a target="_blank" href="http://mai.360che.com/article-14.html">如何注册</a>
					</div>
					<div>
						<a target="_blank" href="http://mai.360che.com/article-15.html">常见问题</a>
					</div>
					<div>
						<a target="_blank" href="http://www.kiees.cn/">快件查询</a>
					</div>
				</dd>
			</dl>
		</div>
		<div class="yewei2">
			<div class="yewei2_1">
				<span class="rx_1">客户服务热线：</span>
				<span class="rx_2">400-880-6283</span>
			</div>
			<div class="yewei2_2">
				<a target="_blank" href="http://www.360che.com/">
					<img src="/TruckHome/truckhome/Public/shop/home/images/shop_ywlogo.jpg"></a>
			</div>
			<div class="yewei2_3">
				百度搜索
				<font>卡车之家</font>
				可以方便找到本站
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<span style="font-family:arial;">Copyright &#169;</span>
	2009
	<a target="_blank" href="http://www.360che.com/">卡车之家</a>
	―― 网聚卡车人的力量
	<span style="padding-left:15px;">京ICP证080575号/京ICP备09080840号 京公网安备11010502026149</span>
</div>



		<script>
			$(function(){

				$('#ph2').mouseover(function(){
					$('#panelHover1').css("display","block");
					$('#panelHover2').css("display","none");
					$('#ph2 a').attr('class','tab_a tab_on tabJustHover');
					$('#ph3 a').attr('class','tab_a  tabJustHover');


				});
				$('#ph3').mouseover(function(){
					$('#panelHover2').css("display","block");
					$('#panelHover1').css("display","none");
					$('#ph3 a').attr('class','tab_a tab_on tabJustHover');
					$('#ph2 a').attr('class','tab_a  tabJustHover');


				});
			})

		</script>

</body>
</html>