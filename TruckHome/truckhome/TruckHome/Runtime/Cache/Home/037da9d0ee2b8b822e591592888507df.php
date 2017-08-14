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
	<script src="/threeall/ThinkPHP/Public/My97DatePicker/WdatePicker.js"></script>
	<script src="/threeall/ThinkPHP/Public/Plupload/plupload.full.min.js"></script>
	<script src="/threeall/ThinkPHP/Public/Jcrop/js/jquery.Jcrop.js"></script>
	<?php echo W('Menu/userleft');?>
	<div class="prefirght">

		<div class="jymx2" style="width:770px">
			<div class="jymx_a">我的订单</div>
			<div class="allin">
				<div class="dd_bar">
					<span class="bar1" style="">订单号</span>

					<span class="bar3" style="width:100px">收货人</span>
					<span class="bar4" style="width:100px">商品数量</span>
					<span class="bar4" style="width:120px">订单金额</span>
					<span class="bar5" style="width:100px">时间</span>
					<span class="bar6" style="width:120px">订单状态</span>
					<span class="bar7">操作</span>
				</div>
				<?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class="jymx_b_ver2">

					<div class="jymx_c_l_ver2_1">
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tbody>
								<tr style="height:70px">
									<td style="border-right:1px solid #ccc;width:100px">
										<div class="jymx_c_l_ver2">
											<a href="user.php?act=order_detail&amp;order_id=38942" class="f6"><?php echo ($vo['id']); ?></a>
										</div>
									</td>


									<td class="amount">
										<div><?php echo ($vo['getman']); ?></div>
									</td>
									<td class="amount">
										<b><?php echo ($vo['totalNumber']); ?></b>

									</td>
									<td class="amount"> <b><?php echo ($vo['totalPrice']); ?></b>

									</td>
									<td class="time">
										<div><?php echo date('Y-m-d H:i:s',$vo['addtime']);?></div>
									</td>

									<td class="status">

										<span class="condi1">待发货</span>

									</td>

									<td class="oprate">



										<div class="oprate_n">
											<a href="<?php echo U('Sorder/orderDetail',array('id'=>$vo['id']));?>" class="del">订单详情</a>
										</div>



									</td>

								</tr>
							</tbody>
						</table>
					</div>
				</div><?php endforeach; endif; ?>

			</div>

			<div class="jymx_d" style="width:750px">
					<div >

						<?php echo ($show); ?>
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