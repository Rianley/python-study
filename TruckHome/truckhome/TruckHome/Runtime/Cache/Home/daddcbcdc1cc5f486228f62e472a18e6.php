<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>用户中心</title>
		<link rel="stylesheet" href="/TruckHome/truckhome/Public/home/news/css/public.css"/>
		<link rel="stylesheet" href="/TruckHome/truckhome/Public/home/news/css/usercenter.css"/>
		<script type="text/javascript" src="/TruckHome/truckhome/Public/home/news/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/TruckHome/truckhome/Public/home/news/js/oneself.js"></script>
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
				<a href="<?php echo U('Lindex/index');?>"><img src="/TruckHome/truckhome/Public/home/news/images/kczj.jpg"></a>
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
				
	<link rel="stylesheet" type="text/css" href="/TruckHome/truckhome/Public/shop/home/css/ecshop_pcenter.css">
	<link rel="stylesheet" type="text/css" href="/TruckHome/truckhome/Public/shop/home/css/ecshop_common.css">
	<script src="/TruckHome/truckhome/Public/My97DatePicker/WdatePicker.js"></script>
	<script src="/TruckHome/truckhome/Public/Plupload/plupload.full.min.js"></script>
	<script src="/TruckHome/truckhome/Public/Jcrop/js/jquery.Jcrop.js"></script>
	<style type="text/css">
	td{
		border-bottom:1px solid #ccc;
	}
	</style>
	<?php echo W('Menu/userleft');?>

	<div class="prefirght">
		<div class="addmap">
        	<strong id="status">新增收货地址</strong>
        </div>
        <div>
        	<form action="<?php echo U('Saddress/insert');?>" method="post" name="theForm" id="form" >
					<div class="xxtx_bg" id="info" style="">
						<div>
							<ul class="xxtx_bg1">
								<li>
									<span class="xinxi1"> <font>*</font>
										姓　　名：
									</span>
									<input name="getman" type="text" class="xinxi3" id="getman" value="" placeholder="请输入收件人姓名">
									<span class="xinxi5" style="color:red"></span>

								</li>
								<li id="box">
									<span class="xinxi1">

										 <font>*</font>
										省　　份：
									</span>

									<select name="province" id="province"  class="xz1">
									<option value="">
									--请选择--</option>
									</select>

									<select name="city" id="city"  class="xz1">
										<option >--请选择--</option>
									</select>

									<select name="country" id="country"  class="xz1">
										<option >--请选择--</option>
									</select>
									<select name="town" id="town"  class="xz1">
										<option >--请选择--</option>
									</select>
									<!-- <h6 class="xinxi5" style="color:red"></h6> -->
								</li>
								<li>
									<span class="xinxi1">
										<font>*</font>
										地　　址：
									</span>

									<input name="address" type="text" class="xinxi4" id="address" value="">
									<span class="xinxi5" style="color:red"></span>
								</li>
								<li>
									<div class="dianhua">
										<span class="xinxi1">
											<font>*</font>
											手机号码：
										</span>
										<input name="phonenum" type="text" class="xinxi3" id="phonenum" value="">
										<span class="xinxi5" style="color:red"></span>
									</div>
								</li>

								<li>
									<span class="xinxi1">
									<font>*</font>
									邮　　编：</span>
									<input name="code" type="text" class="xinxi3" id="code" value="">
									<span class="xinxi5" style="color:red"></span>
								</li>

								<input type="submit" name="" style="margin-left:30px;display:block" value="提交">
								</li>
								<!-- <input type="hidden" name="step" value="consignee">
								<input type="hidden" name="act" value="checkout"> -->

								<input type="hidden" name="area" id="area" value="">
							</ul>
						</div>
					</div>
				</form>
        </div>
	</div>
	<script type="text/javascript">
	$(function(){

		$('#add').click(function(){
			if($('#add').prop('checked')){
				$('#info').css('display','block');
			}else{
				$('#info').css('display','none');
			}
		})


	})
</script>
<script>
	$(function(){
		function getCity(obj,value){
			$.get('<?php echo U('Saddress/area');?>',{'upid':value},function(msg){
				// 1.msg是对象，将对象遍历拼接成option格式的HTML标签

				var arr = [];
				var str = '<option>--请选择--</option>';
				for (var i in msg) {
					str += '<option value="'+msg[i]['id']+'">'+msg[i]['name']+'</option>';
				}

				// 2.将拼接好的HTML代码放在select内
				var arr=[];
				if (obj == 'province') {
					$('#province').html(str);
				} else {
					obj.next().html(str);
				}
			})
		}
		getCity('province',0);
		var str1='';
		// 省份改变事件，市改变
		$('#province,#city,#country,#town').change(function(){
			// 0.初始化
			$(this).nextAll('span').html('<option>--请选择--</option>');
			//在下面的ajax请求中，$(this)传递不进去，只能定义变量接收$(this),在下面的ajax中使用变量
			var that = $(this);
			// 1.获取值
			var value = $(this).val();
			//console.log($(this).find('option').text());

			var arr=[];
			$('#box>select>option:selected').each(function(){
				if($(this).text()!="--请选择--"){
					arr.push($(this).text());

				}

			})
			var str1 = arr.join('');
			$('#area').attr('value',str1);

			getCity(that,value);
		})
	})
</script>
<script type="text/javascript">
	var ubool=false;
	var addbool=false;
	var areabool=true;
	var phonebool=false;
	var codebool=false;

	//提交验证
	$('form').submit(function(){
			// $('input:eq(0)').blur();
			if(ubool && addbool && areabool && phonebool&&codebool){
				console.log('111');
				// return true;
			}else{
				return false;
			}

	})

	//姓名验证
	$('#getman').blur(function(){
		var value=$(this).val();
		console.log(value);
		//var reg=/^[\u4e00-\u9fa5]{6}|[A-Za-z]{12}$/;
		if(value!=''){  //名字不为空
			ubool=1;
			$(this).next('span').text('');

		}else{
			$(this).next('span').text('请输入收件人姓名');

		}
	})

	//电话验证
	$('#phonenum').blur(function(){
		var value =$(this).val();
		//console.log(value);
		var reg=/^(((13[0-9]{1})|(14[0-9]{1})|(17[0]{1})|(15[0-3]{1})|(15[5-9]{1})|(18[0-9]{1}))+\d{8})$/;
		if(reg.test(value)){
			phonebool=1;
			$(this).next('span').text('');

		}else{
			$(this).next('span').text('请输入正确的手机号');
		}
	})

	//邮编验证
	$('#code').blur(function(){
		var value=$(this).val();
		//console.log(value);
		var reg=/^[0-9]{6}$/;
		if(reg.test(value)){
			codebool=1;
			$(this).next('span').text('');
		}else{
			$(this).next('span').text('请输入正确的邮编');
		}
	})

	//详细地址验证
	$('#address').blur(function(){
		var value=$(this).val();
		console.log(value);
		if(value!=''){  //名字不为空
			addbool=1;
			$(this).next('span').text('');

		}else{
			$(this).next('span').text('请输入详细地址');

		}
	})
</script>




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