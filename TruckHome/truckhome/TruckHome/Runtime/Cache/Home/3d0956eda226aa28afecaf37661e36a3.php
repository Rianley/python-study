<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>用户中心</title>
		<link rel="stylesheet" href="/threeall/ThinkPHP/Public/home/news/css/public.css"/>
		<link rel="stylesheet" href="/threeall/ThinkPHP/Public/home/news/css/usercenter.css"/>
		<script type="text/javascript" src="/threeall/ThinkPHP/Public/home/news/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/threeall/ThinkPHP/Public/home/news/js/oneself.js"></script>
	</head>
	<body>
	<!--个人中心 mini_top 开始-->
		<div class="mini_top">
			<div class="mini_main">
				<div class="tou1_left">
					<a target="_blank" href="<?php echo U('Index/index');?>" class="kcsy">卡车之家首页</a>
					<span>|</span>
					<a target="_blank" href="<?php echo U('Sindex/index');?>">卡车之家商城</a><span>|</span>
					<a href="" target="_blank" class="phone">手机客户端</a><span>|</span>
					<a href="javascript:;" onClick="addFavoritepage('卡车之家','http://127.0.0.1/two/ThinkPHP/index.php/Home/User/userindex');" class="collect">加入收藏</a>
				</div>

                <div class="tou1_right">
					<span>欢迎回家，<a href="<?php echo U('User/userindex');?>"><?php echo ($_SESSION['user']['username']); ?></a></span><a href="<?php echo U('User/logout');?>">安全退出</a>
				</div>

			</div>
		</div>

	<!--mini_top end-->
	<div class="clear"></div>
	<!--header start-->
		<div class="header">
			<div class="logo">
				<a href="<?php echo U('Lindex/index');?>"><img src="/threeall/ThinkPHP/Public/home/news/images/kczj.jpg"></a>
			</div>
			<div class="navcon">
				<form accept-charset="UTF-8" method="get"  action="<?php echo U('User/usercomment');?>" >
					<span>
						<input class="nav_ser_a" style="color: #999" name="keywords" value="<?php echo I('get.keywords');?>" onfocus="if (this.value == '请输入关键词') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = '请输入关键词';this.style.color = '#999';}" type="text">

						<input value="" class="nav_ser_b" type="submit">

					</span>
				</form>
			</div>
		</div>
	<!--header end-->

	<div class="clear"></div>
	<!---content start-->
	<div class="content">
		<div class="contborder">

			<!--右侧内容开始-->
				
	<link rel="stylesheet" type="text/css" href="/threeall/ThinkPHP/Public/shop/home/css/ecshop_pcenter.css">
	<link rel="stylesheet" type="text/css" href="/threeall/ThinkPHP/Public/shop/home/css/ecshop_common.css">

	<?php echo W('Menu/userleft');?>
	<div class="prefirght">

		<div class="jymx_0927" style="width:770px">
			<div class="jymx_a">订单信息</div>

			<div class="jymx_bol">
				<div class="ddzt">
					<span class="zt1">
						订单状态： <font><?php echo ($state[$data['state']]); ?></font>
					</span>

				</div>
				<div class="ddzt">
					<span class="ddh">
						订单号： <font><?php echo ($data['id']); ?></font>
					</span>
				</div>
				<div class="ddzt">
					<span class="ddh">
						下单时间： <font><?php echo date('Y-m-d H:i:s',$data['addtime']);?></font>
					</span>
				</div>


			</div>

			<div class="jymx_bol"> <strong>收货人信息</strong>
				<br>
				姓名：<?php echo ($data['getman']); ?>
				<br>
				地址：<?php echo ($data['area']); echo ($data['address']); ?>
				<br>
				手机号码：<?php echo ($data['phonenum']); ?>
				<br></div>

			<div class="jymx_bol"> <strong>支付方式</strong>
				<br>支付方式：支付宝</div>

			<div class="jymx_bol">
				<div class="ddzt">
					<span class="zt1">商品清单</span>
				</div>
				<div class="jymsp0927 spqd" style="width:720px">


				<table width="500" cellspacing="0" cellpadding="0">
					<tbody></tbody>
					<tbody>
						<tr style="text-align:center">
							<th style="text-align:center">商品编号</th>
							<th class="wid240" style="text-align:center">商品名称</th>
							<th style="text-align:center">商品价格</th>
							<th class="paddlr" style="text-align:center">数量</th>
						</tr>
						<?php if(is_array($res)): foreach($res as $key=>$vo): ?><tr>
							<td><?php echo ($vo['pid']); ?></td>
							<td>
								<a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo['pid']));?>" target="_blank" class="flk13"><?php echo (msubstr($vo['proname'],0,30,'utf-8',true)); ?></a>
							</td>
							<td class="red01"><?php echo ($vo['price']); ?></td>
							<td><?php echo ($vo['number']); ?></td>
						</tr><?php endforeach; endif; ?>

					</tbody>
				</table>
			</div>
		</div>
		<div class="jymx_bol0928">

			<div class="jiesuan2">

				<span class="js21">商品总价：</span>
				<span class="js22">
					<?php echo ($data['totalPrice']); ?>元

				</span>

			</div>


		</div>

	</div>

</div>





			<!--右侧内容结束-->
		</div>

	</div>
	<!---content end-->
	<div class="clear"></div>
	<!--尾部开始-->
		<div class="footer_bbs">
			<p>
				<a href="" target="_blank">关于我们</a>
				<span class="fbbsline">|</span>
				<a href="" target="_blank">联系我们</a>
				<span class="fbbsline">|</span>
				<a href="" target="_blank">广告合作</a>
				<span class="fbbsline">|</span>
				<a href="" target="_blank">工作机会</a>
				<span class="fbbsline">|</span>
				<a href="" target="_blank">意见反馈</a>
				<span class="fbbsline">|</span>
				<a href="" target="_blank"><em class="footios"></em>iPhone / <em class="footand"></em>Android客户端</a>
				<span class="fbbsline">|</span>
				<a href="" target="_blank">卡车之家商城</a>
			</p>
			<p>
				<span style="font-family:arial;">Copyright ©</span>
				2009 www.360che.com All Rights Reserved.
				<a target="_self" href="">卡车之家</a> 版权所有
			</p>
		</div>
	<!--尾部结束-->
	</body>

</html>