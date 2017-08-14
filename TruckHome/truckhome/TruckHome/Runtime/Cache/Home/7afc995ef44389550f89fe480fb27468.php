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
		

	<link rel="stylesheet" href="/threeall/ThinkPHP/Public/home/news/css/baojia.css"/>
	<link rel="stylesheet" href="/threeall/ThinkPHP/Public/home/news/css/imgdetail.css"/>
	<link rel="stylesheet" href="/threeall/ThinkPHP/Public/home/news/css/imgfd.css"/>

	<!--frame_left start-->
	<div style="" id="frame_left" class="frame_left">
		<div id="frame_tree" class="frame_tree fl" style="">
			<div style="height: 96px;" id="blist" class="cpmch">
				<div i class="pro_big_b_k">
					<a href="<?php echo U('Xproduct/imgindex');?>">全部</a>
				</div>
				<?php if(is_array($tree)): $k = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div id="<?php echo ($k); ?>" class="pro_big_b">
						<a href="<?php echo U('Xproduct/index',array('id'=>$vo['id']));?>" ><?php echo ($vo['name']); ?></a>
					</div>
					<div id="subdiv<?php echo ($k); ?>" class="pplb1_new" style="display: none">
						<div class="pplb1newshow">
							<?php if(is_array($vo['subcat'])): $i = 0; $__LIST__ = $vo['subcat'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><div class="group1">
									<div class="newtree"> <em></em>
										<a href="<?php echo U('Xproduct/index',array('id'=>$vo1['id']));?>"><?php echo ($vo1['name']); ?></a>
									</div>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
							<!-- <div style="height: 300px; width: 100%; clear: both"></div>
						-->
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

	<div class="frame_right">
		<div class="adimg">

			<img src="/threeall/ThinkPHP/Public/home/news/images/0f000nLv_u2gTOeKBFDwq6.gif" title="" alt="" border="0" height="60" width="795"></div>
		<div class="map_mal">
			当前位置：
			<a href="<?php echo U('Index/index');?>" class="gred6">卡车之家</a>
			&gt;
			<a href="javascript:;"> <strong>卡车报图库</strong>
			</a>
		</div>

		<div class="imgname_box">

			<script>
				$(function(){
					$(".s_pickupin input").change(function(){
					$(":checked").parent().parent().addClass("pick").siblings().removeClass("pick");
						});
				})
			</script>
			<div class="imgname_box">
				<div class="imgname_b_c">
					<div class="imgname_b_b4"><?php echo ($prodname['pname']); ?></div>
					<div class="imgname_b_b2">
						<a href="<?php echo U('Xproduct/prodetail',array('id'=>$prodname['id']));?>" class="r_gr6">车型首页</a>
						<span class="r_gr9">|</span>
						<a href="<?php echo U('Xproduct/prodetail',array('id'=>$prodname['id']));?>#setfield" class="r_gr6">参数配置</a>
						<span class="r_gr9">|</span>
						<a href="<?php echo U('Xproduct/prodetail',array('id'=>$prodname['id']));?>" class="r_gr6">报价</a>
						<span class="r_gr9">|</span>
						<a href="" class="r_gr6">论坛</a>
					</div>
				</div>
				<div class="screen_xuan">
					<div class="s_pickup">
						<div class="s_pickupin">
							<!-- <label>分类：</label> -->
							<dl class="bg_act_1on">
								<dt>
									<a href="http://product.360che.com/img/c1_s66_b10_s99_m6165_t0.html" class="pick">不限</a>
								</dt>
								<dd>
									<a href="#wg">外观(<?php echo ($imgnum1); ?>张)</a>
									<a href="#jiashi">驾驶室(<?php echo ($imgnum2); ?>张)</a>
									<a href="#dipan">底盘 (<?php echo ($imgnum3); ?>张)</a>
								</dd>
							</dl>
						</div>
					</div>
				</div>

				<?php if($imgnum1 == 0): else: ?>
					<div class="imgname_b_b" id="wg">
					<div class="imgname_b_b1">
						外观
						<span>(<?php echo ($imgnum1); ?>张)</span>
					</div>
				</div>
				<div class="imgname_b_cent">
					<?php if(is_array($prodimg1)): $i = 0; $__LIST__ = $prodimg1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
							<dt>
								<a href="<?php echo ($vo['picname']); ?>" title="" class="example2">
									<img src="<?php echo ($vo['picname']); ?>" alt="" border="0" height="160" width="240"></a>
							</dt>
						</dl><?php endforeach; endif; else: echo "" ;endif; ?>

				</div><?php endif; ?>

				<?php if($imgnum2 == 0): else: ?>
					<div class="imgname_b_b" id="jiashi">
					<div class="imgname_b_b1">
						驾驶室
						<span>(<?php echo ($imgnum2); ?>张)</span>
					</div>
				</div>
				<div class="imgname_b_cent">
					<?php if(is_array($prodimg2)): $i = 0; $__LIST__ = $prodimg2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
							<dt>
								<a href="<?php echo ($vo['picname']); ?>" title="" class="example2">
									<img src="<?php echo ($vo['picname']); ?>" alt="" border="0" height="160" width="240"></a>
							</dt>
						</dl><?php endforeach; endif; else: echo "" ;endif; ?>

				</div><?php endif; ?>
				<?php if($imgnum3 == 0): else: ?>
					<div class="imgname_b_b" id="dipan">
					<div class="imgname_b_b1">
						底盘
						<span>(<?php echo ($imgnum3); ?>张)</span>
					</div>
				</div>
				<div class="imgname_b_cent">
					<?php if(is_array($prodimg3)): $i = 0; $__LIST__ = $prodimg3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
							<dt>
								<a href="<?php echo ($vo['picname']); ?>" title="" class="example2">
									<img src="<?php echo ($vo['picname']); ?>" alt="" border="0" height="160" width="240"></a>
							</dt>
						</dl><?php endforeach; endif; else: echo "" ;endif; ?>

				</div><?php endif; ?>
			</div>
		</div>

	</div>

</div>

<div class="clear" style="height:60px;"></div>
<script src="/threeall/ThinkPHP/Public/home/news/js/jquery.min.js"></script>
<script src="/threeall/ThinkPHP/Public/home/news/js/jquery.imgbox.pack.js"></script>
<!--frame_left  end-->
<script>
$(function(){

	$(".example2").imgbox({
		'speedIn'		: 0,
		'speedOut'		: 0,
		'alignment'		: 'center',
		'overlayShow'	: true,
		'allowMultiple'	: false
	});
});
</script>



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