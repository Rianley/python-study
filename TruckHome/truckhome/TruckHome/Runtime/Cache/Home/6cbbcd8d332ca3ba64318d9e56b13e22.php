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
<script type="text/javascript" src="/TruckHome/truckhome/Public/home/news/js/jquery.js"></script>
<script type="text/javascript" src="/TruckHome/truckhome/Public/home/news/js/jquery_002.js"></script>



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
						<input  placeholder="请输入您要搜索的内容" class="inp1" type="text" name="title" value="<?php echo I('get.title');?>">

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
						<li class="action"><a href="<?php echo U('Xarticle/index');?>" target="_self"><span>全部</span></a></li>
						<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Xarticle/index',array('id'=>$vo['id']));?>" target="_self"><span><?php echo ($vo['name']); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="main_pro_box fl">
				<div class="ft m_p_boxa fl">
						<!--焦点图开始-->
						<div class="banner">
							<div class="bx-wrapper" style="max-width: 100%;">
								<div class="bx-viewport">
									<div style="max-width: 100%;" class="bx-wrapper">
										<div style="width: 100%;  position: relative;" class="bx-viewport">
											<ul style="width: 515%; position: relative; transition-duration: 0.5s; transform: translate3d(-1360px, 0px, 0px);" class="banner-img">
												<li class="bx-clone" style="float: left; list-style: outside none none; position: relative; width: 680px;">
													<h2><a href="" target="_blank"><?php echo ($dlunbo['title1']); ?></a></h2>
													<p><?php echo ($dlunbo['content1']); ?></p>
													<a href="" target="_blank">
														<img src="<?php echo ($dlunbo['img1']); ?>"  alt="<?php echo ($dlunbo['title1']); ?>" style="width:680px ;height:400px" onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/1230090515.jpg!680.jpg'">
													</a>
												</li>
												<li style="float: left; list-style: outside none none; position: relative; width: 680px;">
													<h2><a href="" target="_blank"><?php echo ($dlunbo['title2']); ?></a></h2>
													<p><?php echo ($dlunbo['content2']); ?></p>
													<a href="" target="_blank">
														<img src="<?php echo ($dlunbo['img2']); ?>"  onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/0103084300.jpg!680.jpg'" alt="进化版大力神 东风神宇6X4自卸底盘图解" style="width:680px ;height:400px">
													</a>
												</li>
												<li style="float: left; list-style: outside none none; position: relative; width: 680px;">
													<h2><a href="" target="_blank"><?php echo ($dlunbo['title3']); ?></a></h2>
													<p><?php echo ($dlunbo['content3']); ?></p>
													<a href="" target="_blank">
													<img  src="<?php echo ($dlunbo['img3']); ?>" onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/1230223836.jpg!680.jpg'" alt="三步安装五大优势 图说擎天柱结缘康迈" style="width:680px ;height:400px">
													</a>
												</li>

											</ul>
										</div>
										<div class="bx-controls bx-has-pager">
											<div class="bx-pager bx-default-pager">
												<!--<a href="" data-slide-index="0" class="bx-pager-link"></a>
												<a href="" data-slide-index="1" class="bx-pager-link active"></a>
												<a href="" data-slide-index="2" class="bx-pager-link"></a>-->
											</div>
										</div>
									</div>
								</div>
								<!--<div class="bx-controls bx-has-pager">
									<div class="bx-pager bx-default-pager"></div>
								</div>-->
							</div>
							<div class="op_btns clearfix banner-btn"></div>
							<div class="op_btns clearfix banner-btn"><a href="javascript:void(0)" class="prevBtn"><i></i></a> <a href="javascript:void(0)" class="nextBtn"><i></i></a></div>
						</div>
						<script type="text/javascript">
							(function(){
								$(".banner-img").bxSlider({
									auto:true,
									prevSelector:$(".banner .prevBtn")[0],nextSelector:$(".banner .nextBtn")[0]
								});
							})();
                		</script>
						<!--焦点图结束-->
						<div class="lis_alisbox lis_alisbox_xll">
							<a name="content"></a>
								<div id="pageList">
									<?php if(is_array($data3)): $i = 0; $__LIST__ = $data3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="probox_1">
											<div class="probox_2">
												<dl>
													<dt>
														<a href="" target="_blank" title="<?php echo ($vo['title']); ?>">
															<img src="<?php echo ($vo['picname']); ?>" onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/256363.jpg!150.jpg'" style="width:150px ;height:100px" alt="<?php echo ($vo['title']); ?>" border="0">
														</a>
													</dt>
												</dl>
											</div>
											<div class="news_dk">
												<div class="news_dk1">
													<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank"><?php echo ($vo['title']); ?></a>
												</div>
												<div class="news_dk2">
													<?php echo (msubstr($vo['content'],0,60,'utf-8',true)); ?>
												</div>
												<div class="news_dk3">
													<div class="news_dk3a ft"><?php echo date('Y年m月d日',$vo['atime']);?><span><?php echo ($vo['editor']); ?></span></div>
													<div class="news_dk3b fr">
														<a href="" target="_blank"><em class="pinglun"></em><?php echo ($vo['count']); ?></a></div>
												</div>
											</div>
										</div><?php endforeach; endif; else: echo "" ;endif; ?>
									<div class="probox_1" id="loadDiv" style="text-align: center; font-size: 16px; display: none">
										加载中,请稍候...
									</div>
								</div>
                    <!--分页控件 v3.0-->
								<div class="pageboxtom">
									<div class="pages">
										<?php echo ($show); ?>
									</div>
									<!-- <div class="pages">

										<span>1</span><a href="" target="_self">2</a>
										<a href="" target="_self">3</a>
										<a href="" target="_self">4</a>
										<a href="" target="_self">5</a>
										<a href="t" target="_self">6</a>
										<a href="" target="_self">7</a>
										<a href="" class="pages-wd" target="_self">下一页</a>
									</div> -->
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
										<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank" class="gred3" title="<?php echo ($vo['title']); ?>"><?php echo (msubstr($vo['title'],0,20,'utf-8',false)); ?></a>
									</div>
									<label>
										<a href="" target="_blank"><em class="pinglun"></em><?php echo ($vo['count']); ?></a>
									</label>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>

						</ul>
				</div>
				<div class="cennero">
					<div class="cennerh3">
						<h3><a href="" target="_blank">热门专题</a></h3>
						<a href="<?php echo U('Xarticle/index');?>" target="_blank" class="gred9">更多&gt;&gt;</a>
					</div>
					<dl class="topic">
						<?php if(is_array($hotdata)): $i = 0; $__LIST__ = $hotdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dt>
								<div class="spe_topic_pic">
									<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank" title="<?php echo ($vo['title']); ?>">
										<img src="<?php echo ($vo['picname']); ?>" alt="<?php echo ($vo['title']); ?>" onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/1225095639.jpg'" style="width:150px ;height:100px" height="100" width="150">
									</a>
								</div>
								<div class="spe_topic_txt">
									<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank"><?php echo ($vo['title']); ?></a>
								</div>
							</dt><?php endforeach; endif; else: echo "" ;endif; ?>
						<!-- <dd>
							<div class="spe_topic_pic">
								<a href="" target="_blank" title="2015卡车之家年度车型评选 入围榜单">
									<img src="/TruckHome/truckhome/Public/home/news/images/1225095639.jpg" alt="2015卡车之家年度车型评选 入围榜单" style="width:140px ;height:70px" height="70" width="140">
								</a>
							</div>
							<div class="spe_topic_txt">
								<a href="" target="_blank">2015卡车之家年度车型评选 入围榜单</a>
							</div>
						</dd> -->
					</dl>


				</div>

			</div>



		<div class="clear"></div>




		<!--productbox end-->



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