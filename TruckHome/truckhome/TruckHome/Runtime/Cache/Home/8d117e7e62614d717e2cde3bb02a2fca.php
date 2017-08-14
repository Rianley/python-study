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
		
<link rel="stylesheet" href="/threeall/ThinkPHP/Public/home/news/css/forgetpwd.css"/>
		<!--页尾-->
		<!--主要内容 开始-->
<form action="<?php echo U('User/updatePwd');?>" method="post" ="getpwdform">
			<!--registertop 开始-->
				<div class="registertop">
					<a href="" target="_blank"><img src="/threeall/ThinkPHP/Public/home/news/images/logo20141016.png"></a>
					<em></em>
					<span>密码找回</span>
					<a href="" class="return">返回上一步&gt;&gt;</a>
				</div>
			<!--registertop 结束-->
			<!--找回密码第一步 开始-->
				<div class="registerfill" id="step1">
					<div class="fullwidth">
						<div class="part5"><img src="/threeall/ThinkPHP/Public/home/news/images/procedure1.jpg"></div>
						<ul class="part6">
							<li>请输入您在卡车之家注册时填写的手机号码</li>
							<li><input class="enter3" id="phone"  type="text" name="phone"><span id="telts"><font id="phoneinfo"></font></span></li>
							<li><input class="makesure2" value="下一步"  type="button" id="nextbtn"></li>
						</ul>
						<p class="hint1">如果您的帐号没有和手机号绑定，无法通过手机找回，请拨打电话 010-56156185 咨询解决</p>
					</div>
				</div>

			<!--找回密码第一步 结束-->
			<!--找回密码第二步 开始-->
				<div class="registerfill" id="step2" style="display:none;">
					<div class="fullwidth">
							<div class="part5"><img src="/threeall/ThinkPHP/Public/home/news/images/procedure1.jpg"></div>
							<ul class="part6">
								<li>您己经绑定了手机 <em id="bdtel"></em> 可通过手机短信找回密码</li>
								<li>
									<input class="makesure3" value="发送验证码到我的手机"  id="sendMsg" type="button">

									<span id="telts"><font id="sendinfo"></font></span>
								</li>
								<li>
								<input name="messageyz" class="enter4" value="" style="color:#999999" id="message" type="text">
									<span id="telts"><font id="messinfo"></font></span>
								<input class="makesure4" value="下一步"   id="btnnext3" type="button"></li>
								<li><font>如果您在<em id="time_count_dowm">120秒</em>内没有收到验证码，请重新发送</font></li>
							</ul>
							<p class="hint2"><font>请确保您手机在身边，以便及时收取验证码，手机短信是免费的。</font><br><span>如果您的帐号没有和手机号绑定，无法通过手机找回，请拨打电话 010-56156185 咨询解决。</span></p>
					</div>
				</div>




			<!--找回密码第二步 结束-->
			<!--找回密码第三步 开始-->
				<div class="registerfill" id="step3" style="display:none;">

					<div class="fullwidth">

							<div class="part5"><img src="/threeall/ThinkPHP/Public/home/news/images/procedure2.jpg"></div>
							<!-- <h2>您的用户名是：<font id="user_name"></font></h2> -->
							<dl>
								<dt style="height: 38px;"><label>新密码：</label>
									<span><input class="enter" id="password"  type="password" name="password"></span>
									<div id="pwdts" style="float:left;">
										<span style="color: #c4c4c4;"><font id="pwdinfo">请填写您的密码！</font></span>
									</div>
								</dt>
								<dd><em class="normal" id="staus_1">弱</em><em class="normal" id="staus_2">中</em><em class="normal" id="staus_3">强</em></dd>
							</dl>
							<dl>
								<dt><label>确认密码：</label>
									<span><input class="enter" id="repassword" type="password"></span>
									<div id="pwdts_sure" style="float:left;">
										<span style="color: #c4c4c4;"><font id="repwdinfo">请再次填写您的密码</font></span>
									</div>
								</dt>
							</dl>
							<dl>
								<dt class="spe1"><input class="makesure4" value="确认"  id="passsub" type="submit"></dt>
							</dl>
						</div>

					</div>



					</form>
			<!--找回密码第三步 结束-->
			<!--找回密码成功显示页面 开始-->

					<div class="registerfill" style="display:none">
					    <div class="fullwidth">
								<div class="part5"><img src="/threeall/ThinkPHP/Public/home/news/images/procedure3.jpg"></div>
					            <div class="complete">
					                <p><font>恭喜您，</font><span>设置新密码成功</span></p>
					                <p>系统 <em id="ShowDiv">5</em> 秒后自动跳转至原页面 </p>
					                <p class="autojump">您还可以访问：<a href="<?php echo U('Index/index');?>" target="_blank">卡车之家首页</a>  <a href="" target="_blank">论坛</a>  <a href="memcp.php" target="_blank">个人中心</a></p>
					            </div>
					    </div>
					</div>
			<!--找回密码成功显示页面 结束-->



		<!--主要内容 结束-->
	<script>
		$(function(){
			var phonebool=false,messagebool=false,pwdbool=false,repwdbool=false;
			$('#phone').blur(function(){
				var reg=/^(13[0-9]|14[0-9]|15[0-9]|18[0-9])\d{8}$/i;
				var value=$.trim($(this).val());
				if(value==""){
					$("#phoneinfo").addClass("wrong");
					$('#phoneinfo').html("请输入手机号码");
					phonebool=false;

				}else if(!reg.test(value)){
					$("#phoneinfo").addClass("wrong");
					$('#phoneinfo').html("手机不符合规范");
					phonebool=false;
				}else{
					$.post("<?php echo U('User/checkPhone');?>",{'phone':value},function(msg){
						console.log(msg);
						if(!msg){
							$("#phoneinfo").addClass("wrong");
							$('#phoneinfo').html("该手机号码没有注册");
							phonebool=false;
						}else{
							phonebool=true;
							$("#phoneinfo").removeClass("wrong").addClass("correct");
							$('#phoneinfo').html("输入正确");



							str1=msg.phone.substr(0,3);
							str2=msg.phone.substr(7,4);
							$('#bdtel').html(str1+"****"+str2);
						}

					});
				}
			});
		$('#nextbtn').click(function(){
			if(phonebool==true){
					$("#step1").css("display","none");
					$("#step2").css("display","block");
			}else{

					$("#step1").css("display","block");
					$("#step2").css("display","none");

			}
		});
		$('#sendMsg').click(function(){

					// 点击按钮发送ajax请求
					var value=$('#phone').attr("value");
					//console.log(value);
					$.post("<?php echo U('User/getPhone');?>",'phone='+value,function(msg){
					//console.log(msg);
					if (msg.status != 0) {
						//alert(msg.msg);
						$('#sendinfo').addClass("wrong");
						$('#sendinfo').html("发送失败");
					} else {
						//alert('发送成功');
						$('#sendinfo').removeClass('wrong').addClass("correct");
						$('#sendinfo').html("发送成功，在五分钟之内有效");
					}
				});
			});
		$('#message').blur(function(){
				var value=$(this).val();
				$.post('<?php echo U('User/yzMessage');?>','messageyz='+value,function(msg){
					if (msg=="no") {
						$('#messinfo').addClass("wrong");
						$('#messinfo').html("验证码错误");
						messagebool=false;

					} else if(msg=="outtime") {
						//alert(msg.msg);
						$('#messinfo').addClass("wrong");
						$('#messinfo').html("验证码过期");
						messagebool=false;
					}else{
						//alert('发送成功');
						$('#messinfo').removeClass('wrong').addClass("correct");
						$('#messinfo').html("验证码正确");
						messagebool=true;
					}
				})

			});
		$('#btnnext3').click(function(){
			if(messagebool==true){
				$('#step2').css("display","none");
				$('#step3').css("display","block");
			}else{
				$('#step3').css("display","none");
				$('#step2').css("display","block");
			}
		});
		$('#password').keyup(function(){
			var value=$.trim($(this).val());
			var reg1=/\w[0-9]/;
			if(value.length<6){
				$("#pwdinfo").addClass("wrong");
				$('#pwdinfo').html("密码不得少于6位");
				$('#staus_1').addClass("ok");
				pwdbool=false;
			}
			if(reg1.test(value)){
				$("#pwdinfo").removeClass("correct").addClass("wrong");
				$('#pwdinfo').html("密码不能为纯数字");
				$('#staus_1').addClass("ok");
				pwdbool=false;
			}else{
				$('#staus_1').removeClass("ok").addClass("normal");
				pwdbool=false;
			}
			var reg2=/\w[0-9a-zA-Z]{6,}/;
			if(reg2.test(value)){
				$("#pwdinfo").removeClass("wrong").addClass("correct");
				$('#pwdinfo').html("密码强度为中");
				$('#staus_1').removeClass("ok").addClass("normal");
				$('#staus_2').removeClass("normal").addClass("ok");
				pwdbool=true;
			}else{
				$('#staus_2').removeClass("ok").addClass("normal");
			}
			var reg3=/[!@#\$%\^&*~\+=]/;
			if(reg3.test(value)){
				$("#pwdinfo").removeClass("wrong").addClass("correct");
				$('#pwdinfo').html("密码强度为强");
				$('#staus_2').removeClass("ok").addClass("normal");
				$('#staus_3').addClass("ok");
				pwdbool=true;
			}else{
				//$('#staus_2').removeClass("ok").addClass("normal");
				$('#staus_3').removeClass("ok").addClass("normal");
			}
		});
		$('#password').blur(function(){

		});
		$("#repassword").blur(function(){
			var value1=$.trim($('#password').attr("value"));
			var revalue=$.trim($(this).val());
			if(value1!=revalue){
				$("#repwdinfo").addClass("wrong");
				$('#repwdinfo').html("两次输入密码不一致");
				repwdbool=false;
			}else{
				$("#repwdinfo").removeClass("wrong").addClass("correct");
				$('#repwdinfo').html("输入正确");
				repwdbool=true;
			}
		});
		$('#getpwdform').submit(function(){
			if(repwdbool==true && pwdbool==true){
				return true;
			}
			return false;
		})


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