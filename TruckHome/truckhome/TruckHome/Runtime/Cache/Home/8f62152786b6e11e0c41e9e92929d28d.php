<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
		<link rel="stylesheet" href="/threeall/truckhome/Public/home/news/css/public.css"/>
		<link rel="stylesheet" href="/threeall/truckhome/Public/home/news/css/headfoot.css"/>
		<script type="text/javascript" src="/threeall/truckhome/Public/home/news/js/jquery-1.8.3.min.js"></script>
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
		
<link rel="stylesheet" href="/threeall/truckhome/Public/home/news/css/chaprice.css"/>
<!--linkheader  start-->
		<div class="linkheader">
			<a href="" target="_blank" class="logo">
            <img src="/threeall/truckhome/Public/home/news/images/logonew2014.png"></a>
			<span>经销商</span>
		</div>


		<!-- linkheader end-->

		<!--main_topx start-->
		<div class="main_topx"></div>
		<!-- main_topx end-->
		<!---->
		<div class="main_content">
			<div class="cen_sz">
				<div class="censz01">
					<div class="censz01_lt">
						<ul>
							<li><strong>询问底价 </strong></li>
							<li>
								<p>
									<i>想了解底价？</i>请填写右侧信息：您提供的信息将按照信息保护的规定予以保留。</p>
							</li>
							<li><span>信息保密，不对外公开！</span></li>
						</ul>
					</div>
					<form action="<?php echo U('Xproduct/addchaprice');?>" method="post" id="chaform">
					<div class="censz01_rt">
						<div class="censz01_rt01">
							想了解 <strong>
                            <?php echo ($data4['pname']); ?>
							</strong>&nbsp;<br/>最低价，请填写如下信息
						</div>

						<div class="censz01_rt02">

							<table cellpadding="0" cellspacing="0">
								<tbody>

									<tr>
										<td class="tab_left">
											<div>
												<i class="sign">*</i><em>提车地区：</em>
												<input type="hidden" name="pid" value="<?php echo intval(I('get.id'));?>"
											</div>
										</td>
										<td class="tab_right">
											<div class="put_tex">
												<span>
													<input class="put01" id="address" name="address" value="" type="text">
												</span>
												<span id="addressinfo" style="display: none"><i>
													<img src="/threeall/truckhome/Public/home/news/images/xll_c.jpg"></i><em>请输入地址</em>
												</span>

											</div>
										</td>
									</tr>
									<tr>
										<td class="tab_left">
											<div>
												<i class="sign">*</i><em>您的姓名：</em></div>
										</td>
										<td class="tab_right">
											<div class="put_tex">
												<span>
                                                <input class="put01" name="name" id="name" value="" type="text"></span>
												<span id="nameinfo" style="display: none"><i>
													<img src="/threeall/truckhome/Public/home/news/images/xll_c.jpg"></i><em>请输入姓名</em>
												</span>
											</div>
										</td>
									</tr>
									<tr>
										<td class="tab_left">
											<div>
												<i class="sign">*</i><em>您的性别：</em></div>
										</td>
										<td class="tab_right">
											<div class="put_tex">
												<span>
													<input  name="sex"  value="1" type="radio"><span style="font-size:16px;padding-left:10px;padding-right:10px;">男</span>
													<input  name="sex" value="2" type="radio"><span style="padding-left:10px;font-size:16px;">女</span>
												</span>
												<span id="sex" style="display: none" ><i>
                                                <img src="/threeall/truckhome/Public/home/news/images/xll_c.jpg"></i><em>请输入性别</em></span>
											</div>
										</td>
									</tr>
									<tr>
										<td class="tab_left">
											<div>
												<i class="sign">*</i><em>手机号码：</em></div>
										</td>
										<td class="tab_right">
											<div class="put_tex">
												<span>
													<input class="put01" name="phone" id="phone" value="" type="text"></span>
													<span style="display: none;" class="prompt-text">
														提交信息后会立即收到短信</span>
														<span id="phoneinfo" style="display:none"><i>
															<img src="/threeall/truckhome/Public/home/news/images/xll_c.jpg"></i><em>请输入11位数字</em>
														</span>
											</div>
										</td>
									</tr>
									<tr>
										<td class="tab_left">
											<div>
												<i class="sign">*</i><em>验证码：</em></div>
										</td>
										<td class="tab_right">
											<div class="put_tex">
												<span>
													<input class="put01" id="code" value="" placeholder="请输入右侧的验证码" type="text">
												</span>
												<span>
													<img alt="验证码图片" title="看不清？点击更换" src="<?php echo U('Xproduct/code');?>" onclick="this.src='<?php echo U('Xproduct/code');?>?id='+Math.random()" id="captchaimage" style="margin-left: 10px; cursor: pointer; vertical-align: top;">
												</span>

												<span style="display: none" id="yzm"><i>
													<img src="/threeall/truckhome/Public/home/news/images/xll_c.jpg"></i>
													<em>验证码不正确</em>
												</span>
											</div>
										</td>
									</tr>

								</tbody>
							</table>

						</div>
						<div class="tab_cen03">
							<div class="tab_cen03_put01">
								<input type="submit" id="btncha" value="获取底价" class="chabtn"/>
							</div>
						</div>

					</div>
				</form>

				</div>
			</div>
		</div>
		<!---->
	<script>
		$(function(){
			var yzmbool=false,namebool=false,phonebool=false,addbool=false;

		$('#code').blur(function(){
				var value=$.trim($(this).val());
				//console.log(value);
				if(value==""){
					$('#yzm').css('display',"block");

					yzmbool=false;
				}else{
					//console.log(value);
					$.post("<?php echo U('Xproduct/valCode1');?>",'code1='+value,function(msg){
									//console.log(msg);
									//alert(msg);
								if(msg=="no"){

										$('#yzm').css('display',"block");
										yzmbool=false;
									}else{

										$('#yzm').css('display',"none");
										yzmbool=true;

									}
								})
				}
			});
		$('#address').blur(function(){

			var value=$.trim($(this).val());
			if(value==""){
				//alert(value);
				$('#addressinfo').css('display','block');
				addbool=false;
			}else{
				$('#addressinfo').css('display','none');
				addbool=true;
			}
		});
		$('#name').blur(function(){
			var value=$.trim($(this).val());
			if(value==""){
				$('#nameinfo').css('display','block');
				namebool=false;
			}else{
				$('#nameinfo').css('display','none');
				namebool=true;
			}
		});
		$('#phone').blur(function(){
			var value=$.trim($(this).val());
			//var reg=/^1[3|4|5|8][0-9]\d{4,8}$ /;
			var reg=/^(13[0-9]|14[0-9]|15[0-9]|18[0-9])\d{8}$/i;
			if(value==""){
				$('#phoneinfo').css('display','block');
				phonebool=false;
			}else if(!reg.test(value)){

				$('#phoneinfo').css('display','block');
				phonebool=false;
			}else{
				$('#phoneinfo').css('display','none');
				phonebool=true;
			}

		});
		$('#chaform').submit(function(){

			if(phonebool && namebool && addbool && yzmbool){

				return true;

			}else{
				alert("信息没有填好");
				return false;
			}
		});

		})


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