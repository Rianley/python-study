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
		
<link rel="stylesheet" href="/TruckHome/truckhome/Public/home/news/css/login.css"/>

		<!--registertop start-->
			<div class="registertop">
				<div class="registertop_left"><a href="" target="_blank">
					<img src="/TruckHome/truckhome/Public/home/news/images/logo20141016.png"></a> <em></em>
					<span>用户登录</span>
				</div>
				<div class="registertop_right">
					<div id="PAGE_AD_1049783">
						<div id="BAIDU_AD_1049783">
							<div id="BAIDU_SSP__wrapper_1049783_0">
								<img src="/TruckHome/truckhome/Public/home/news/images/0f000nTu6mHKpywgpq-Cg0.gif" width="630px" height="60px"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!--registertop end-->
		<!--registerfill start-->
			<div class="registerfill">
				<div class="fullwidth" id="fullwidth">
					<div class="leftpart">
						<ul class="part2 js">
							<form method="post" name="login" action="<?php echo U('User/loginaction');?>" id="loginform" class="gateform">
								<input name="formhash" value="5a9acf61" type="hidden">
								<input name="referer" value="http://www.360che.com/" type="hidden">
								<li id="re1">
									<font id="returnmessage" style="margin-left: 70px;"></font>
								</li>
								<li style="padding-top:50px;">
									<label>用户名：</label>
									<span><input class="enter" name="name" id="name" type="text" placeholder="请填写您的用户名或手机号"></span>
									<div id="username_ts"><font class="" id="nameinfo"></font></div>
								</li>
								<li>
									<label>密码：</label>
									<span><input class="enter" name="password" id="password" type="password" placeholder="请填写您的密码"></span>
									<div id="password_ts"><font class="" id="pwdinfo"></font></div>
								</li>
								<li>
									<div class="login_express"><input name="cookietime" value="2592000" checked="checked" type="checkbox"><i>下次自动登录</i></div><a href="<?php echo U('User/forgetpwd');?>" target="_blank" class="forget">忘记密码?</a>
								</li>
								<li>
									<input class="makesure" value="立即登录" tabindex="1" type="submit" id="loginbtn">
								</li>

							</form>
						</ul>
					</div>

					<script>
						$(function(){
							var namebool=false,pwdbool=false;
							$("#name").blur(function(){

								var value=$.trim($(this).val());
								if(value==""){
									$("#nameinfo").addClass("wrong");
									$('#nameinfo').html("请填写您的用户名或手机号");
									namebool=false;
								}else{
									$("#nameinfo").removeClass("wrong");
									$('#nameinfo').html("");
									namebool=true;
								}
							});
							$("#password").blur(function(){
								var value=$.trim($(this).val());
								if(value==""){
									$('#pwdinfo').addClass("wrong");
									$('#pwdinfo').html("请填写您的密码");
									pwdbool=false;
								}else{
									$('#pwdinfo').removeClass("wrong");
									$('#pwdinfo').html("");
									pwdbool=true;
								}
							});
							$("#loginform").submit(function(){
								if(namebool==true && pwdbool==true){
									return true;
								}
								alert("你还没有填好信息");
								return false;
							})

						})
					</script>
					<div class="rightpart">
						<div class="registered">
							<h4>没有卡车之家帐号，点击立即注册</h4>
							<input class="direct_login" value="注册" onclick="window.location.href='<?php echo U('User/register');?>'" type="button">
						</div>
						<div class="others">
							<h4>还可使用第三方帐号直接登录</h4>
							<a href="" target="_blank" class="loginqq">QQ帐号</a>
							<a href="" target="_blank" class="loginweibo">新浪微博</a>
							<a href="" class="loginweixin">微信帐号</a>
						</div>
					</div>
				</div>
				<div class="gxcg_reg" id="showzhuan" style="text-align: center;font-size: 20px;line-height: 2;">
				</div>
				<div id="append_parent" style="display:none"></div>
				<div id="ajaxwaitid" style="display:none"></div>
			</div>
		<!--registerfill end-->




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