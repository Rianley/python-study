<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
		<link rel="stylesheet" href="/TruckHome/truckhome/Public/home/news/css/public.css"/>
		<link rel="stylesheet" href="/TruckHome/truckhome/Public/home/news/css/headfoot.css"/>
		<script type="text/javascript" src="/TruckHome/truckhome/Public/home/news/js/jquery-1.8.3.min.js"></script>
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
		
<link rel="stylesheet" href="/TruckHome/truckhome/Public/home/news/css/zxindex.css"/>
<link rel="stylesheet" href="/TruckHome/truckhome/Public/home/news/css/searchlist.css"/>
<!--品牌系列页头 start-->

		<?php echo W('Menu/header');?>
		<!--品牌系列页头  end-->
	     <!--ad start-->
		<div class="clear"></div>
		<div class="adimg">
			<img src="/TruckHome/truckhome/Public/home/news/images/0f000PLHkw0DvVB-7ncy8s.png" title="" alt="" border="0" height="60" width="1000">
			<img src="/TruckHome/truckhome/Public/home/news/images/0f0007y4C92PM9ofoxXbr6.jpg" title="" alt="" border="0" height="60" width="1000">
		</div>
		<div class="clear"></div>
		<!--ad end-->
		<!--map_bane start-->
		<div class="map_bane">
			<div class="mapdizhi">
				<a href="<?php echo U('Xarticle/index');?>" target="_blank">卡车新闻频道</a>
			</div>
			<div class="mapdz" style="padding-left: 20px;">
				您的当前位置：<a href="<?php echo U('Index/index');?>" class="gred6">首页</a> &gt;
				卡车新闻
			</div>
			<!--搜索-->
			<div class="serch">
				<form accept-charset="UTF-8" method="get"  action="" target="_blank">
					<span>
						<input  placeholder="请输入您要搜索的内容" class="inp1" type="text" name="pname" value="<?php echo I('get.pname');?>">

						<input class="btn1" value="搜索" type="submit">
					</span>
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
						<li class="action"><a href="<?php echo U('Index/searchlist');?>" target="_self"><span>全部</span></a></li>
						<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Index/searchlist',array('id'=>$vo['id']));?>" target="_self"><span><?php echo ($vo['name']); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="main_pro_box fl">
				<div class="ft m_p_boxa fl">
					<div class="sppic">
					  <div class="sppic_tit">
						  <h4><a href=""></a></h4>
						  <strong><a href="<?php echo U('Index/searchlist');?>" target="_bank">查看全部&gt;&gt;</a></strong>
					  </div>

					  <!-- 视频部分 div start -->
					<div class="video_cen">
						<div class="video_cen01">
								<?php if(is_array($product)): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="video_rt1 ">
										  <dl>

											<dt>
												<a href="<?php echo U('Xproduct/prodetail',array('id'=>$vo['id']));?>" title="" target="_bank">
													<img alt="" src="/TruckHome/truckhome/Public<?php echo ($vo['picname']); ?>" height="145" width="240">
												</a>
											</dt>
											<dd>
												<div class="one1"><a href="<?php echo U('Xproduct/prodetail',array('id'=>$vo['id']));?>" target="_blank" title=""><?php echo (msubstr($vo['pname'],0,24,'utf-8',true)); ?></a></div>
												<div class="two" style="color:#000;">公告型号：<?php echo ($vo['announcement']); ?></div>
												<div class="two" >报价：<span style="color:red;font-weight:bold;"><?php echo ($vo['price']); ?>万</span></div>
											</dd>
										  </dl>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>

						</div>
					</div>
					  <!-- 视频部分 div end -->
					</div>

					<div class="pageboxtom">
						<div class="pages">
							<?php echo ($show); ?>
						</div>

					</div>


				</div>
			</div>
			<div class="fr m_p_boxb">
				<div class="m_p_rbox">
					<div class="cennerh3"><h3>卡车新闻一周热门文章</h3></div>
						<ul class="numbphc numbphcnew">
							<?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
									<em class="orange<?php echo ($i); ?>"></em>
									<div class="hotttie">
										<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank" class="gred3" title="<?php echo ($vo['title']); ?>"><?php echo (msubstr($vo['title'],0,10,'utf-8',true)); ?></a>
									</div>
									<!-- <label>
										<a href="" target="_blank"><em class="pinglun"></em><?php echo ($vo['count']); ?></a>
									</label> -->
								</li><?php endforeach; endif; else: echo "" ;endif; ?>

						</ul>
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