<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>用户中心</title>
		<link rel="stylesheet" href="/threeall/truckhome/Public/home/news/css/public.css"/>
		<link rel="stylesheet" href="/threeall/truckhome/Public/home/news/css/usercenter.css"/>
		<script type="text/javascript" src="/threeall/truckhome/Public/home/news/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/threeall/truckhome/Public/home/news/js/oneself.js"></script>
	</head>
	<body>
	<!--个人中心 mini_top 开始-->
		<div class="mini_top">
			<div class="mini_main">
				<div class="tou1_left">
					<a target="_blank" href="<?php echo U('Index/index');?>" class="kcsy">卡车之家首页</a>
					<span>|</span>
					<a target="_blank" href="<?php echo U('Sindex/index');?>">卡车之家商城</a><span>|</span>
					<a href="<?php echo U('Xarticle/index');?>"  class="phone">卡车新闻</a><span>|</span>
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
				<a href="<?php echo U('Lindex/index');?>"><img src="/threeall/truckhome/Public/home/news/images/kczj.jpg"></a>
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
				

	<script src="/threeall/truckhome/Public/My97DatePicker/WdatePicker.js"></script>
	<script src="/threeall/truckhome/Public/Plupload/plupload.full.min.js"></script>
	<script src="/threeall/truckhome/Public/Jcrop/js/jquery.Jcrop.js"></script>
	<?php echo W('Menu/userleft');?>
	<div class="prefirght">
		<div class="post_list list_oneb">
			<div class="post_list_label">
				<ul>
					<li class="tab" id="upinfo1">
						<a href="" class="tab_a tab_on tabNormal" id="upinfo2" >帖子列表</a>
					</li>

				</ul>
			</div>

			<!--评论列表 开始-->
			<div class="post_center" id="tabpanel1">
				<div class="post_cen_label">
					<ul>
						<li class="post">
							<a href="space.php?uid=439765&amp;items=otherthreads" class="tab_a1 tab_on1 tabNormal1">全部帖子</a>
						</li>

						<li class="post_more">
							我的帖子：共有
							<span style="color:#1e6cc1"><?php echo ($data3); ?></span>
							个
						</li>

					</ul>
				</div>

				<div class="post_wdzt" id="postpanel1">

						<?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="post_wdzt_list">
							<div class="p_wdzt_la">
								<div class="p_wdzt_la1">
									<a href="<?php echo U('Lpost/detail',array('id'=>$vo['id']));?>" target="">
									<?php echo ($vo['title']); ?>
									</a>

								</div>
							</div>
							<div class="p_wdzt_lb">
								<div class="p_wdzt_lb1"><?php echo date('Y-m-d H:i:s',$vo['mtime']);?></div>
								<div class="p_chance_box"></div>
								<div class="p_wdzt_lb3"><a href="<?php echo U('User/delpost',array('id'=>$vo['id']));?>">删除</a></div>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>


					<!--控制标签 开始-->

					<!--控制标签 结束-->

					<!--翻页控件 start-->
					<div class="page_turn">
						<div class="pages">
							<?php echo ($show); ?>
						</div>
					</div>
					<!--翻页控件 end-->
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