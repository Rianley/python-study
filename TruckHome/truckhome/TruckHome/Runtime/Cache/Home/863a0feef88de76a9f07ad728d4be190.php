<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
		<link rel="stylesheet" href="/threeall/ThinkPHP/Public/home/news/css/public.css"/>
		<link rel="stylesheet" href="/threeall/ThinkPHP/Public/home/news/css/headfoot.css"/>
		<script type="text/javascript" src="/threeall/ThinkPHP/Public/home/news/js/jquery-1.8.3.min.js"></script>
	</head>
	<body>
		<!--页头-->
			<div class="autheader">
				<div class="autmain">
					<div class="autmain_left">
						<ul>
							<li class="iconaut"><a href="<?php echo U('Index/index');?>" >卡车之家</a></li>
							<li class="autline"></li>
							<li><a href="<?php echo U('Xproduct/index');?>" >卡车报价</a></li>
							<li class="autline"></li>
							<li><a href="<?php echo U('Xproduct/imgindex');?>" >卡车图库</a></li>
							<li class="autline"></li>
							<li><a href="<?php echo U('Xarticle/index');?>" >卡车新闻</a></li>
							<li class="autline"></li>
							<li><a href="<?php echo U('Sindex/index');?>" >卡车商城</a></li>

							<li class="autline"></li>
							<li><a href="<?php echo U('Lindex/index');?>" >卡车论坛</a></li>
						</ul>

					</div>
					<div class="autmain_right">
						<?php if($_SESSION['user']== null): ?><div style="z-index: 5;" class="login_che"><a href="<?php echo U('User/login');?>" class="loginaq">登录</a></div>
						<div class="autline"></div>
						<div style="z-index: 5;" class="login_che"><a href="<?php echo U('User/register');?>" class="loginaq">注册</a></div>
						<!-- <div class="autline"></div> -->
						<!-- <div style="z-index: 1;" class="aut_login">
							<a class="aut_login_ma" href="javascript:void(0)">第三方登录<em></em></a>
							<div style="display: none;" class="nav_w aut_login_box">

								<ul style="margin-top: 0px;">
									<li class="aut_l_b_a"><a href=""><em class="qqicon"></em>QQ帐号</a></li>
									<li class="aut_l_b_a"><a href=""><em class="wbicon"></em>微博</a></li>
									<li class="aut_l_b_a"><a href=""><em class="wxicon"></em>微信</a></li>
								</ul>

							</div>
						</div> -->
						<!-- <div class="autline"></div> -->
						<?php else: ?>
						<div class="deng_hou" style="z-index: 1;">
							<a href="<?php echo U('User/userindex');?>" class="aut_user_ma"  id="ac">
								<?php echo ($_SESSION['user']['username']); ?>
								<em></em>

							</a>
							<div class="nav_w aut_user_box" style="" id="al">
								<ul style="margin-top: 1px;">
									<li class="aut_user_a">
										<a href="<?php echo U('User/userindex');?>" >我的个人中心</a>
									</li>
									<li class="aut_user_a aut_l_line">
										<a href="<?php echo U('User/logout');?>">退出</a>
									</li>
								</ul>
							</div>
							<!--<script>
								$(function(){
									$('#ac').hover(function(){
										$('#al').css("display","block");
									})
								})
							</script>-->
						</div><?php endif; ?>

						<!-- <div style="z-index: 1;" class="aut_map">
							<a class="aut_login_ma" href="javascript:void(0)">网站地图<em></em></a>

						</div> -->

					</div>
				</div>
			</div>
		<!--页尾-->
		
	<link rel="stylesheet" href="/threeall/ThinkPHP/Public/home/news/css/zxindex.css"/>
	<link rel="stylesheet" href="/threeall/ThinkPHP/Public/home/news/css/searchlist.css"/>
	<link rel="stylesheet" href="/threeall/ThinkPHP/Public/home/news/css/brandlist.css"/>
	<!--品牌系列页头 start-->
	<?php echo W('Menu/header');?>
	<!--品牌系列页头  end-->
	<!--ad start-->
	<div class="clear"></div>
	<div class="adimg">
		<img src="/threeall/ThinkPHP/Public/home/news/images/0f000PLHkw0DvVB-7ncy8s.png" title="" alt="" border="0" height="60" width="1000">
		<img src="/threeall/ThinkPHP/Public/home/news/images/0f0007y4C92PM9ofoxXbr6.jpg" title="" alt="" border="0" height="60" width="1000"></div>
	<div class="clear"></div>
	<!--ad end-->
	<!--map_bane start-->
	<div class="map_bane">
		<div class="mapdizhi">
			<a href="<?php echo U('Index/brandlist');?>" target="_blank">卡车品牌频道</a>
		</div>
		<div class="mapdz" style="padding-left: 20px;">
			您的当前位置：
			<a href="<?php echo U('Index/index');?>" class="gred6">首页</a>
			&gt;品牌车型

		</div>
		<!--搜索-->
		<div class="serch">
			<form accept-charset="UTF-8" method="get"  action="" target="_blank">
				<span>
					<input  placeholder="请输入您要搜索的内容" class="inp1" type="text" name="name" value="<?php echo I('get.name');?>">

					<input class="btn1" value="搜索" type="submit"></span>
			</form>
		</div>
	</div>
	<!-- map_bane end-->
	<div class="clear"></div>
	<!--productbox start-->
	<div class="productbox">
		<div class="contan fn_clear contan_xll2">
			<div class="contan_b" id="DaoHangDiv">
				<ul>
					<li class="action">
						<a href="<?php echo U('Index/brandlist');?>" target="_self">
							<span>全部</span>
						</a>
					</li>
					<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="<?php echo U('Index/brandlist',array('id'=> $vo['id']));?>">
								<span><?php echo ($vo['name']); ?></span>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<div class="main_pro_box fl">


				<div class="brandall">
					<div class="like_ymor">
						<div class="cennerh3">
							<h3>热门车型</h3>
							<a href="javascript:void(0);" onclick="hypmethod()" class="more" id="hyp" target="_self">&gt;&gt;</a>
						</div>
						<div class="cenboxtopnew2" id="containfloder">
							<?php if(is_array($product)): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
								<dt>
									<a target="_blank" href="<?php echo U('Xproduct/prodetail',array('id'=>$vo['id']));?>" title="<?php echo ($vo['pname']); ?>">
										<img src="<?php echo ($vo['picname']); ?>" alt="<?php echo ($vo['pname']); ?>" border="0" height="100" width="150"></a>
								</dt>
								<dd>
									<div class="one">
										<a target="_blank" href="<?php echo U('Xproduct/prodetail',array('id'=>$vo['id']));?>" title="<?php echo ($vo['pname']); ?>">
											<?php echo (msubstr($vo['pname'],0,20,'utf-8',true)); ?>
											<span>
												<!-- [ <b>112</b>
												张] -->
											</span>
										</a>
									</div>
								</dd>
							</dl><?php endforeach; endif; else: echo "" ;endif; ?>



						</div>
					</div>
				</div>
				<div class="pageboxtom">
					<div class="pages"><?php echo ($show); ?></div>

				</div>


		</div>

	</div>

	<div class="clear"></div>




		<!--页尾 start-->
			<div class="footer_bbs">
				<p>
					<a href="" target="_blank" class="gred9">关于我们</a>
					<a href="" target="_blank" class="gred9">联系我们</a>
					<a href="" target="_blank" class="gred9">工作机会</a>
					<a href="" target="_blank" class="gred9">网站地图</a>
					<a href="" target="_blank" class="gred9">广告合作</a><span class="fbbsline">|</span>
					<a href="" target="_blank" class="gred9"><em class="footios"></em>iPhone客户端 / <em class="footand"></em>Android客户端</a><span class="fbbsline">|</span>
					<a href="" target="_blank" class="gred9">意见反馈</a>
				</p>
				<p>经营许可证编号：京ICP证080575号 / 京ICP备09080840号 京公网安备110105007230</p>
				<p></p>
				<p>
					<span style="font-family:arial;">Copyright ©</span>2009 www.360che.com All Rights Reserved. <a target="_self" href="" class="gred9">卡车之家</a> 版权所有
				</p>
			</div>
		<!--页尾  end-->

	</body>
</html>