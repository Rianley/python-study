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
					<span>用户注册</span>
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
				<h5>注册成功后，帐号在卡车之家主站、论坛等所有卡车之家平台间通用</h5>
				<div class="fullwidth">
					<form method="post" name="register" id="registerform" class="gateform"  action="<?php echo U('User/regAction');?>">
						<div class="leftpart" id="step1">
						<div class="part1"><img src="/TruckHome/truckhome/Public/home/news/images/process1.jpg"></div>
						<ul class="part2">

							<span id="activation_hidden">
								<li>
									<label>用户名：</label>
									<span><input class="enter"   id="username" name="username" type="text" value=""></span>
									<div id="returnmessage4"><font  id="userinfo">&nbsp;</font></div>
								</li>
								<li>
									<label>密码：</label>
									<span><input class="enter" size="25" id="password"  name="password" type="password" value=""></span>
									<div id="passti"><font id="pwdinfo"></font></div>
								</li>
								<li>
									<label>确认密码：</label>
									<span><input class="enter" size="25" id="password2"  name="password2" type="password"></span>
									<div id="passti1"><font id="pwdinfo2"></font></div>
								</li>

								<li>
									<label>所在城市：</label>
									<span>
									<select id="province" name="province">
										<option>--请选择省--</option>
									</select>
									<select id="city"  name="city">
										<option>--请选择市--</option>
									</select>
									<select id="county" name="county">
										<option>--请选择区--</option>
									</select>
									<select id="villages" name="villages">
										<option>--请选择县--</option>
									</select>
								</span>

							</li>
                            <li>
								<label>验证码：</label>
								<span><input class="enter" maxlength="4"  id="code" name="code" type="text"></span>
								<span style="cursor: pointer;" id="seccodeimage">
									<img src="<?php echo U('User/code');?>" height="40" width="100" onclick="this.src='<?php echo U('User/code');?>?id='+Math.random()" alt="验证码">

								</span>
								<div id="seccodemessage"><span><font id="codoinfo">点击图片更新验证码</font></span></div>
							</li>

							<li>
								<input class="makesure" value="同意服务条款并确认"  type="button" id="btntk"><a href="" target="_blank" class="rules">《卡车之家服务条款》</a>
							</li>
					</span>
				</ul>



        </div>
		<div class="leftpart" id="step2" style="display:none;">
        	<div class="part1"><img src="/TruckHome/truckhome/Public/home/news/images/process2.jpg"/></div>
            <ul class="part9" style="float: left;width: 100%;height: 370px;">
            	<li style="float:left; line-height:38px; width:100%; padding-bottom:20px;">
                	<label style="float:left; width:118px; text-align:right; color:#666; padding-right:4px;">输入手机号：</label>
                    <span><input class="enter" value="" id="phone"  name="phone"  type="text" ></span>
                    <span><input class="enter2" value="获取验证码"  id="sendMsg" type="button" style="float: left;
width: 80px;
height: 38px;
border: medium none;
background: #0F5489 none repeat scroll 0% 0%;
cursor: pointer;
line-height: 38px;
text-align: center;
color: #FFF;"></span>
					<div class="countdown" id="ts">
						<font id="phoneinfo"></font>
					</div>
                </li>
                <li>
                	<label>输入验证码：</label>
                    <span><input class="enter" id="message" name="message"  type="text" value=""></span>
                    <div id="showyzm"><span><font id="messageinfo">请输入您短信收到的验证码</font></span></div>
                </li>
                <li>
                	<em>港澳台地区及海外用户请通过“邀请码”注册成为卡车之家会员。<a href="inviregister.php" target="_blank">邀请码</a></em>
                </li>
                <li>
                	<input class="makesure" value="马上验证" type="submit">
                </li>
            </ul>
        </div>
        <div class="rightpart">
        	<div class="registered">
            	<h4>己有卡车之家帐号，点击直接登录</h4>
                <input class="direct_login" value="登录" onclick="window.location.href='login.html'" type="button">
            </div>
            <div class="others">
            	<h4>还可使用第三方帐号直接登录</h4>
                <a href="" class="loginqq">QQ帐号</a>
                <a href="" class="loginweibo">新浪微博</a>
				<a href="" class="loginweixin">微信帐号</a>
            </div>
			<div class="registered" style="padding-top:10px;">
				<h4>点击下面免费注册卡车之家经销商</h4>
				<input class="direct_jxs" value="免费注册经销商" type="button">
			</div>
        </div>
		</form>

		<script type="text/javascript">
				$(function(){
					var userbool=false,pwdbool=false,zfpwdbool=false,yzmbool=false,messagebool=false,phonebool=false;
					//phonebool是手机号码的验证
					//messagebool短信的验证
					$('#username').blur(function(){
							var value=$.trim($(this).val());
							if(value==""){
								$('#userinfo').addClass("wrong");
								$('#userinfo').html("用户名不能为空");
								userbool=false;
							}else if(value.length<3){

								$('#userinfo').addClass("wrong");
								$('#userinfo').html("用户名不能小于三个字");
								userbool=false;
							}else{
								$.post('<?php echo U('User/valUserName');?>','username='+value,function(msg){
									//console.log(msg);
									//alert(msg);
									if(msg=="no"){

										$('#userinfo').addClass("wrong");
										$('#userinfo').html("用户名已经存在");
										userbool=false;
									}else{

										$('#userinfo').html("用户可以用");
										$('#userinfo').removeClass('wrong').addClass("correct");
										userbool=true;

									}
								})
							}

						});


						$('#password').blur(function(){
							var value=$.trim($(this).val());
							var reg=/^[0-9a-zA-Z]{6,12}$/;
							if(value==""){
								$('#pwdinfo').addClass("wrong");
								$('#pwdinfo').html("请填写密码");
								pwdbool=false;
							}else if(!reg.test(value)){
								$('#pwdinfo').addClass("wrong");
								$('#pwdinfo').html("请输入6-12位的数字或字母");
								pwdbool=false;
							}else{
								$('#pwdinfo').html("密码可以用");
								$('#pwdinfo').removeClass('wrong').addClass("correct");
								pwdbool=true;
							}

						});
						$('#password2').blur(function(){
							var value1=$.trim($(this).val());
							var value2=$.trim($('#password').attr("value"));
							//var value2=$.trim($('#password').attr("value"));
							if(value1!=value2){
								$('#pwdinfo2').addClass("wrong");
								$('#pwdinfo2').html("两次密码不一致");
								zfpwdbool=false;

							}else{
								$('#pwdinfo2').html("密码一致");
								$('#pwdinfo2').removeClass('wrong').addClass("correct");
								zfpwdbool=true;
							}

						});


						function getCity(obj,value)
			{
				$.post('<?php echo U('User/requireCity');?>',{'upid':value},function(msg){
					// 1.msg是对象，将对象遍历拼接成option格式的HTML标签
					var str = '<option>--请选择--</option>';
					for (var i in msg) {
						str += '<option value="'+msg[i]['id']+'">'+msg[i]['name']+'</option>';
					}

					// 2.将拼接好的HTML代码放在select内
					if (obj == 'province') {
						$('#province').html(str);
					} else {
						obj.next().html(str);
					}
				})
			}
			getCity('province',0);

			// 省份改变事件，市改变
			$('#province,#city,#county').change(function(){
				// 0.初始化
				$(this).nextAll().html('<option>--请选择--</option>');
				//在下面的ajax请求中，$(this)传递不进去，只能定义变量接收$(this),在下面的ajax中使用变量
				var that = $(this);
				// 1.获取值
				var value = $(this).val();

				getCity(that,value);
			});
			$('#code').blur(function(){
				var value=$.trim($(this).val());
				//console.log(value);
				if(value==""){
					$('#codoinfo').addClass("wrong");
					$('#codoinfo').html("请输入验证码");
					yzmbool=false;
				}else{
					//console.log(value);
					$.post("<?php echo U('User/valCode1');?>",'code1='+value,function(msg){
									//console.log(msg);
									//alert(msg);
								if(msg=="no"){

										$('#codoinfo').addClass("wrong");
										$('#codoinfo').html("验证码错误");
										yzmbool=false;
									}else{

										$('#codoinfo').html("输入正确");
										$('#codoinfo').removeClass('wrong').addClass("correct");
										yzmbool=true;

									}
								})
				}
			});




			$('#btntk').click(function(){
				if(userbool==true && pwdbool==true && zfpwdbool==true && yzmbool==true){
					$('#step2').css("display","block");
					$('#step1').css('display',"none");
					//return true;
				}else{
					alert('请填写信息');
					$('#step2').css("display","none");
					$('#step1').css('display',"block");
				}


			});
		$('#phone').blur(function(){
			var value=$.trim($(this).val());
			//var reg=/^1[3|4|5|8][0-9]\d{4,8}$ /;
			var reg=/^(13[0-9]|14[0-9]|15[0-9]|18[0-9])\d{8}$/i;
			if(value==""){
				$('#phoneinfo').addClass("wrong");
				$('#phoneinfo').html("请输入您的手机号码");
				phonebool=false;
			}else if(!reg.test(value)){

				$('#phoneinfo').addClass("wrong");
				$('#phoneinfo').html("请输入正确的电话号码");
				phonebool=false;




			}else{
				$.post("<?php echo U('User/checkPhone');?>",{'phone':value},function(msg){
						if(msg){
							$("#phoneinfo").addClass("wrong");
							$('#phoneinfo').html("该手机号码已经注册");
							phonebool=false;
						}else{

							$("#phoneinfo").removeClass("wrong").addClass("correct");
							$('#phoneinfo').html("输入正确");
							phonebool=true;
						}

					});

			}

		});

		$('#sendMsg').click(function(){
				// 点击按钮发送ajax请求
				var value=$('#phone').attr("value");
				console.log(value);
				$.post("<?php echo U('User/getPhone');?>",'phone='+value,function(msg){
					console.log(msg);
					if (msg.status != 0) {
						//alert(msg.msg);
						$('#phoneinfo').addClass("wrong");
						$('#phoneinfo').html("发送失败");
					} else {
						//alert('发送成功');
						$('#phoneinfo').removeClass('wrong').addClass("correct");
						$('#phoneinfo').html("发送成功，在五分钟之内有效");
					}
				})
			});
			$('#message').blur(function(){
				var value=$(this).val();
				$.post('<?php echo U('User/yzMessage');?>','messageyz='+value,function(msg){
					if (msg=="no") {
						$('#messageinfo').addClass("wrong");
						$('#messageinfo').html("验证码错误");
						messagebool=false;

					} else if(msg=="outtime") {
						//alert(msg.msg);
						$('#messageinfo').addClass("wrong");
						$('#messageinfo').html("验证码过期");
						messagebool=false;
					}else{
						//alert('发送成功');
						$('#messageinfo').removeClass('wrong').addClass("correct");
						$('#messageinfo').html("验证码正确");
						messagebool=true;
					}
				})

			});

			$('#registerform').submit(function(){
				//userbool=false,pwdbool=false,zfpwdbool=false,yzmbool=false,messagebool=false,phonebool=false
				//if(userbool==true && pwdbool==true && zfpwdbool==true && yzmbool==true && messagebool==true && phonebool==true){
				if(messagebool==true && phonebool==true){
					return true;
					//alert("ok");
				}else{
					return false;
				}
			})





	})



				</script>







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