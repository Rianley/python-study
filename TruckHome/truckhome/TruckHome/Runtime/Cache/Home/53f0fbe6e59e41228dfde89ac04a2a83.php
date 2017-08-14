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
		

	<link rel="stylesheet" href="/TruckHome/truckhome/Public/home/news/css/baojia.css"/>

		<!--frame_left start-->
		<div style="" id="frame_left" class="frame_left">
			<div id="frame_tree" class="frame_tree fl" style="">
				<div style="height: 96px;" id="blist" class="cpmch">
				<div i class="pro_big_b_k"><a href="<?php echo U('Xproduct/index');?>">全部</a></div>
					<?php if(is_array($tree)): $k = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div id="<?php echo ($k); ?>" class="pro_big_b"><a href="<?php echo U('Xproduct/index',array('id'=>$vo['id']));?>" ><?php echo ($vo['name']); ?></a></div>
						<div id="subdiv<?php echo ($k); ?>" class="pplb1_new" style="display: none">
							<div class="pplb1newshow">
								<?php if(is_array($vo['subcat'])): $i = 0; $__LIST__ = $vo['subcat'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><div class="group1">
										<div class="newtree"> <em></em><a href="<?php echo U('Xproduct/index',array('id'=>$vo1['id']));?>"><?php echo ($vo1['name']); ?></a></div>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>
								<!-- <div style="height: 300px; width: 100%; clear: both"></div> -->
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
		        </div>
			</div>
			 <script type="text/javascript">






    $(document).on("mouseover", ".pro_big_b_k",function(){

        $(this).attr("class","pro_big_b");
        var id = $(this).attr("id");
        $("#subdiv" + id).hide();
    })

    $(document).on("mouseover", ".pro_big_b",function(){

        $(this).attr("class","pro_big_b_k");
        var id = $(this).attr("id");
        id = id.replace("subdiv","");
        $("#subdiv" + id).show();
    })

    </script>
			<form action="" method="get">
			<div class="frame_right">
				<div class="adimg">

					<img src="/TruckHome/truckhome/Public/home/news/images/0f000nLv_u2gTOeKBFDwq6.gif" title="" alt="" border="0" height="60" width="795">
				</div>
				<div class="map_mal">
					当前位置：<a href="" class="gred6">卡车之家</a> &gt;
					<a href="javascript:;"><strong>卡车报价库</strong></a>
				</div>
				<div class="search_bo sometime">
					<div class="hot_search">
						<input  id="keyword" class="hot_stext" name="keyword" value="<?php echo I('get.keyword');?>" placeholder="请输入关键词">
						<input class="hot_button"  value="搜索" type="submit">
					</div>
					<div class="hot_pin gred9">
						热词：<a href="javascript:hswicth('轻卡');" class="blue">轻卡</a><a href="javascript:hswicth('J6牵引车');" class="blue">J6牵引车</a><a href="javascript:hswicth('中国重汽');" class="blue">中国重汽</a><a href="javascript:hswicth('国四LNG');" class="blue">国四LNG</a>
					</div>
				</div>

				<div class="imgname_box">
					<div class="screen_xuan" id="datuqiehu">
						<div class="screen_box">
								<a class="scrren_xoxb" id="hongse">
									<div class="screen_boxa">
										精准找车</div>
									<div class="screen_boxb">
										收起</div>
								</a><a class="scrren_xoxb1" id="lvse">
									<div class="screen_boxa1">
										精准找车</div>
									<div class="screen_boxb1">
										展开</div>
								</a>
							</div>
					<div class="s_pickup">
						<div class="s_pickupin" id="name"><label class="fieldname">系列：</label>
							<dl class="bg_act_1on">
								<dd>
									<?php if(is_array($data3)): $i = 0; $__LIST__ = $data3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="javascript:;">
											<label>
												<input type="radio"  name="name" value="<?php echo ($vo['name']); ?>" style="display:none"/>
												<?php echo ($vo['name']); ?>
											</label>
										</a><?php endforeach; endif; else: echo "" ;endif; ?>

								</dd>
							</dl>
						</div>
						<div class="s_pickupin" id="wheelbase"><label class="fieldname">轴距：</label>
							<dl class="bg_act_1on">
							<dd>
									<?php if(is_array($data6)): $i = 0; $__LIST__ = $data6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="javascript:;">

											<label>
												<input type="radio"  name="wheelbase" value="<?php echo ($vo['wheelbase']); ?>" style="display:none"/>
												<?php echo ($vo['wheelbase']); ?>mm
											</label>
										</a><?php endforeach; endif; else: echo "" ;endif; ?>
							</dd>
							</dl>
						</div>
						<div class="s_pickupin" id="drive"><label class="fieldname">驱动形式：</label>
							<dl class="bg_act_1on">
								<dd>
									<?php if(is_array($data8)): $i = 0; $__LIST__ = $data8;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="javascript:;">
											<label>
												<input type="radio"   name="drive" value="<?php echo ($vo['drive']); ?>" style="display:none"/>
												<?php echo ($vo['drive']); ?>
											</label>
										</a><?php endforeach; endif; else: echo "" ;endif; ?>
								</dd>
							</dl>
						</div>

						<div class="s_pickupin" id="effluent"><label class="fieldname">排放标准：</label>
							<dl class="bg_act_1on">
							<dd>

								<?php if(is_array($data7)): $i = 0; $__LIST__ = $data7;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="javascript:;">
										<label>
												<input type="radio"  name="effluent" value="<?php echo ($vo['effluent']); ?>" style="display:none"/>
												<?php echo ($vo['effluent']); ?>
											</label>
										</a><?php endforeach; endif; else: echo "" ;endif; ?>
							</dd>
							</dl>
						</div>
						<div class="s_pickupin" id="forwardgear"><label class="fieldname">前进档位：</label>
							<dl class="bg_act_1on">
								<dd>
									<?php if(is_array($data5)): $i = 0; $__LIST__ = $data5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="javascript:;">
										<label>
												<input type="radio"  name="forwardgear" value="<?php echo ($vo['forwardgear']); ?>" style="display:none"/>
												<?php echo ($vo['forwardgear']); ?>
											</label>
										</a><?php endforeach; endif; else: echo "" ;endif; ?>
								</dd>
							</dl>
						</div>
						<div class="s_pickupin" id="horsepower"><label class="fieldname">最大马力：</label>
							<dl class="bg_act_1on">
								<dd>
									<!-- <a href="javascript:;" class="pick">
										<label>
												<input type="radio"  name="" value="" style="display:none"/>
												不限
											</label>
										</a> -->
									<?php if(is_array($data4)): $i = 0; $__LIST__ = $data4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="javascript:;">
										<label>
												<input type="radio"  name="horsepower" value="<?php echo ($vo['horsepower']); ?>" style="display:none"/>
												<?php echo ($vo['horsepower']); ?>马力
											</label>
										</a><?php endforeach; endif; else: echo "" ;endif; ?>
								</dd>
							</dl>
						</div>
				</div>
			</div>
			<script>
				$(function(){
					$(".s_pickupin input").change(function(){
					$(":checked").parent().parent().addClass("pick").siblings().removeClass("pick");
						});
				})

			</script>
					<div class="main">
						<div class="v_boxki">
							<div class="v_boxkih1">
								<div id="pnew65" class="v_boxkih2"><a href="javascript:void(0)" onclick="divNew('65')">在售车型</a></div>

								<div class="xll_sy_right_gd"><a href="">更多&gt;&gt;</a></div>
							</div>
							<div id="new65" class="v_boxkih3" style="display:block">
								<div class="tpgx">
									<?php if(is_array($data9)): $i = 0; $__LIST__ = $data9;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
										<dt>
											<a target="_blank" href="<?php echo U('Xproduct/prodetail',array('id'=>$vo['id']));?>" title="<?php echo ($vo['pname']); ?>">
											<img src="/TruckHome/truckhome/Public<?php echo ($vo['picname']); ?>" alt="<?php echo ($vo['pname']); ?>" height="160" width="240">
											</a>
										</dt>
										<dd>
											<span><a target="_blank" href="<?php echo U('Xproduct/prodetail',array('id'=>$vo['id']));?>" alt="<?php echo ($vo['pname']); ?>" title="<?php echo ($vo['pname']); ?>"><?php echo ($vo['pname']); ?> </a></span>
										</dd>
										<dd>
											<font>报价：<a target="_blank" href="<?php echo U('Xproduct/prodetail',array('id'=>$vo['id']));?>"><?php echo ($vo['price']); ?>万 </a></font>
										</dd>
									</dl><?php endforeach; endif; else: echo "" ;endif; ?>

								</div>

							</div>

						</div>

						<div class="pages">
							<?php echo ($show); ?>
						</div>

					</div>
				</div>

			</div>

			</form>

		</div>

		<div class="clear" style="height:60px;"></div>


		<!--frame_left  end-->




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