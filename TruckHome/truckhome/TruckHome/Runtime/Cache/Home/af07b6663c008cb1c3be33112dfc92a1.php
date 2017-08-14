<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://mai.360che.com/flow.php?step=checkout -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=GBK">
	<meta name="Generator" content="ECSHOP v2.7.3">

	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<meta name="Keywords" content="">
	<meta name="Description" content="">

	<title>确认信息</title>

	<link rel="shortcut icon" href="http://mai.360che.com/favicon.ico">
	<link rel="icon" href="http://mai.360che.com/animated_favicon.gif" type="image/gif">
	<link href="/TruckHome/truckhome/Public/shop/home/css/ecshop_common.css" rel="stylesheet" type="text/css">
	<link href="/TruckHome/truckhome/Public/shop/home/css/ecshop_checkout.css" rel="stylesheet" type="text/css">
	 <script src="/TruckHome/truckhome/Public/shop/home/js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script async="" src="/TruckHome/truckhome/Public/shop/home/js/analytics.js"></script>
	<script type="text/javascript" src="/TruckHome/truckhome/Public/shop/home/js/common.js"></script>
	<script type="text/javascript" src="/TruckHome/truckhome/Public/shop/home/js/shopping_flow.js"></script>
	<style type="text/css">
.mydivNew {
		background-color: #FFFFFF;
		border: 1px solid #FFOOOO;
		text-align: center;
		line-height: 21px;
		font-size: 12px;
		padding:1px;
		z-index:999;
		width: 370px;
		height: 200px;
		border:5px solid #d7d7d7;
		text-align:left;
		left:50%;
		top:50%;
		margin-left:-185px!important;/*FF IE7 ????????????? */
		margin-top:-100px!important;/*FF IE7 ?????????????*/
		margin-top:0px;
		position:fixed!important;/* FF IE7*/
		position:absolute;/*IE6*/
_top:       expression(eval(document.compatMode && document.compatMode=='CSS1Compat') ? documentElement.scrollTop + (document.documentElement.clientHeight-this.offsetHeight)/2 :/*IE6*/
 document.body.scrollTop + (document.body.clientHeight - this.clientHeight)/2);/*IE5 IE5.5*/
}
.mydivNew a {
		text-align:center;
}
.bgNew {
		background-color: #666;
		width: 100%;
		height: 100%;
		left:0;
		top:0;/*FF IE7*/
		filter:alpha(opacity=50);/*IE*/
		opacity:0.5;/*FF*/
		z-index:998;
		position:fixed!important;/*FF IE7*/
		position:absolute;/*IE6*/
_top:       expression(eval(document.compatMode && document.compatMode=='CSS1Compat') ? documentElement.scrollTop + (document.documentElement.clientHeight-this.offsetHeight)/2 :/*IE6*/
 document.body.scrollTop + (document.body.clientHeight - this.clientHeight)/2);/*IE5 IE5.5*/
}
.tc-ts1-sy {
		background: none repeat scroll 0 0 #F3F3F3;
		border-bottom: 1px solid #D8D8D8;
		clear: both;
		float: left;
		height: 30px;
		line-height: 30px;
		width: 370px;
}
.tc-ts1-sy em {
		background: url("themes/default/style/ecshop/images/gouwuche/ts_ver2.gif") no-repeat scroll 8px 6px transparent;
		float: left;
		height: 22px;
		margin-right: 6px;
		width: 24px;
}
.chazi {
		float: right;
		height: 10px;
		overflow: hidden;
		padding: 8px;
		width: 10px;
}
.chazi em {
		background: url("themes/default/style/ecshop/images/gouwuche/cha.gif") no-repeat scroll 0 0 transparent;
		float: right;
		height: 7px;
		margin-top: 2px;
		width: 8px;
}
.tc-ts2-sy {
		color: #666;
		float: left;
		font-size: 14px;
		line-height: 1.6em;
		overflow: hidden;
		width: 310px;
		padding:20px 30px;
		text-align:center;
}
.tc-ts-sy_ver2 {
		float: left;
		overflow: hidden;
		width: 250px;
		padding:15px 60px;
}
.payoff {
		float:left;
		width:110px;
		height:30px;
		background:url(themes/default/style/ecshop/images/gouwuche/done.gif) no-repeat;
		margin-right:20px;
}
.problem {
		float:left;
		width:110px;
		height:30px;
		background:url(themes/default/style/ecshop/images/gouwuche/undo.gif) no-repeat;
}
</style>
	<script language="javascript" type="text/javascript">
		 //显示层
		 function showDiv(divName)
		 {
		 document.getElementById(divName).style.display = "block";
		 }
		 //隐藏层
		 function hiddenDiv(divName)
		 {
		 document.getElementById(divName).style.display = "none";
		 }
		</script>
</head>

<body>
	<div id="dshow" style="display:none" class="mydivNew">
		<div class="tc-ts1-sy"> <em></em>
			<span class="ts0-sy">支付</span>
			<a class="chazi" onclick="hideaadiv();" href="javascript:void(0)"> <em></em>
			</a>
		</div>
		<div class="tc-ts2-sy">请您在新打开的网上银行页面进行支付，支付完成前请不要关闭该窗口。</div>
		<div class="tc-ts-sy_ver2">
			<a href="http://mai.360che.com/user.php?act=order_list" class="payoff"></a>
			<a href="http://mai.360che.com/user.php?act=order_list" class="problem"></a>
		</div>
	</div>
	<div id="bgNew" class="bgNew" style="display:none"></div>
	<div class="sstop">
		<div class="ssbanner">
			<!--登录-->
    <div class="sstop">
        <div class="ssbanner">
            <div class="ssbannerleft">
                <a href="<?php echo U('Index/index');?>" target="_blank">卡车之家首页</a>
                |
                <div id="append_parent" style="display:none"></div>
                <meta http-equiv="content-type" content="text/html; charset=gbk">
                <?php if($_SESSION['user']['id'] == null): ?><span class="login">
                    <a href="<?php echo U('User/login');?>">[登录]</a>
                    <a href="<?php echo U('User/register');?>">[注册]</a>
                </span>
                <?php else: ?>
                    <span style="color:red">您好,<?php echo ($_SESSION['user']['username']); ?>,欢迎访问本商城</span>
                    <a href="<?php echo U('User/userindex');?>">个人中心</a>
                    <a href="<?php echo U('User/logout');?>">退出</a><?php endif; ?>

            </div>
            <div class="ssbannerright">
                <ul>
                    <li>
                        <img src="/TruckHome/truckhome/Public/shop/home/images/zixun.jpg"></li>

                    <li class="right_space">
                        <a href="###" class="rs_help" style="display:block" onmouseout="hiddenDiv('div_new2')" onmouseover="showDiv('div_new2')">
                            帮助
                            <em></em>
                        </a>
                        <div class="help_list" style="display:none;" onmouseout="hiddenDiv(this.id)" onmouseover="showDiv(this.id)" id="div_new2">
                            <a href="javascript:;" class="rs_help dibian">帮助</a>
                            <a href="" target="_blank" class="rs_home1">如何注册</a>
                            <a href="" target="_blank" class="rs_home2">报价填写规范</a>
                            <a href="" target="_blank" class="rs_home2">常见问题</a>
                            <a href="" class="rs_home2">挂车平台帮助</a>
                            <a href="" target="_blank" class="rs_home2">论坛使用帮助</a>
                        </div>
                    </li>
                    <li class="deprive">|</li>
                    <li class="right_space">
                        <a href="" target="_blank" class="rs_feedback">反馈</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

		</div>
	</div>
	<div class="es_top2">
		<div class="es_top_logo">
			<a href="http://mai.360che.com/">
				<img src="/TruckHome/truckhome/Public/shop/home/images/shop_logo.jpg"></a>
		</div>
		<div class="es_top_gc">
			<span class="jc2"></span>
		</div>
	</div>

	<div class="total_summary">
		<script type="text/javascript" src="/TruckHome/truckhome/Public/shop/home/region1.js"></script>
		<script type="text/javascript" src="/TruckHome/truckhome/Public/shop/home/utils.js"></script>
		<script type="text/javascript" src="/TruckHome/truckhome/Public/shop/home/transport.js"></script>
		<input type="hidden" name="shbs" id="shbs" value="0">
		<div class="sp_count_ver2" style="display:block;" id="contains">

	<!-- <form action=":{U('Saddress/insert')}" method="post" name="form1" id="form1" onsubmit="return checkOrderForm1(this)"> -->
			<div id="second" style="">
				<div class="xxtx_bt2">
					<span>收货人信息</span>

				</div>

				<div class="xxtx_bc">
					<?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class="xxtx_bc1">
						<ul>
							<li class="xxtx_bc_xx2">

			                	<div class="xxtx_bc_nr">
			                		<input type="radio"  name="addressname" class="xxtx_bc_nr1 radio" >
			                		<input type="hidden" name="aid" value="<?php echo ($vo['id']); ?>" >
			                		<span class="xxtx_bc_nr2"><?php echo ($vo['getman']); ?></span>
			                		<span class="xxtx_bc_nr3"><?php echo ($vo['area']); echo ($vo['address']); ?>   <?php echo ($vo['phonenum']); ?></span>

			                </li>
						</ul>
					</div><?php endforeach; endif; ?>
					<div class="xxtx_bc2">

						<span><a href="<?php echo U('Saddress/add');?>">添加新地址</a></span>
					</div>

				</div>

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
			$(this).nextAll('option').html('<option>--请选择--</option>');
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

			<div class="sp_count">
				<h3 class="xxtx_bt2">
					<span>商品清单</span>
					<a class="splb1" href="<?php echo U('Saddress/sessedit');?>" id="sessedit">返回修改购物车</a>
				</h3>
				<script type="text/javascript">
				/*$('#sessedit').click(function(){

					$.post("<?php echo U('Saddress/sessedit');?>")
				})*/
				</script>
				<div class="xxtx_lb">
					<div class="xxtx_lb1 xxtx_lb1_wub">
						<div class="splb1">
							<span>商品编号</span>
						</div>
						<div class="splb2">
							<span>商品</span>
						</div>
						<div class="splb3">
							<span>单价</span>
						</div>
						<div class="splb4">
							<span>商品数量</span>
						</div>
						<div class="splb5">
							<span>小计</span>
						</div>
					</div>

					<input class="goodsFlag" type="hidden" name="goodsFlag" value="1">
					<input class="shippingFlag" type="hidden" name="shippingFlag" value="1">

					<div class="xxtx_lb2new">
						<div id="sdsd37"></div>
						<div id="sdsd33"></div>
						<div id="sdsd3"></div>
						<div id="sdsd13"></div>
						<table cellpadding="0" cellspacing="0">
							<tbody>
							<?php if(is_array($_SESSION['order'])): $i = 0; $__LIST__ = $_SESSION['order'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
									<td class="xxtx_lb2new_td1">
										<div><?php echo ($vo['id']); ?></div>
									</td>
									<td class="xxtx_lb2new_td2">
										<div>
											<a href="http://mai.360che.com/flow.php?step=checkout#" title="<?php echo ($vo['proname']); ?>">
											<?php echo ($vo['proname']); ?>
											</a>
										</div>
									</td>
									<td class="xxtx_lb2new_td3">
										<div><?php echo ($vo['price']); ?>元</div>
									</td>
									<td class="xxtx_lb2new_td4">
										<div><?php echo ($vo['number']); ?></div>
									</td>
									<td class="xxtx_lb2new_td5">
										<div class="ft_red"><?php echo ($vo['number']*$vo['price']); ?>元</div>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>

							</tbody>
						</table>
					</div>
					<label for="ECS_NEEDINSURE" style="display:none" ;="">
						<input name="need_insure" id="ECS_NEEDINSURE" type="checkbox" onclick="selectInsure(this.checked)" value="1" disabled="true">配送是否需要保价</label>
				</div>
			</div>

			<div class="sp_count">
				<input type="hidden" name="biaoshi" id="biaoshi" value="1">
				<div style="display:none" id="zf_guan" class="xxtx_bt2">
					<span>支付方式</span>
					<a class="f6" onclick="zf_guan()" style="display:none">[关闭]</a>
				</div>
				<div id="zf_xiu" class="xxtx_bt2">
					<span>支付方式</span>
					<a onclick="zf_xiu()" class="f6" href="javascript:void(0)" style="display:none">[修改]</a>
				</div>
				<div class="zhifu" id="zhifu1" style="display:none">
					<style>
				#main{
						width:750px;
						margin:0 auto;
						font-size:14px;
						font-family:'宋体';
				}
				#logo{
						background-color: transparent;
						background-image: url("images/new-btn-fixed.png");
						border: medium none;
						background-position:0 0;
						width:166px;
						height:35px;
						float:left;
				}
				.red-star{
						color:#f00;
						width:10px;
						display:inline-block;
				}
				.null-star{
						color:#fff;
				}
				.content{
						margin-top:5px;
				}

				.content dt{
						width:100px;
						display:inline-block;
						text-align:right;
						float:left;

				}
				.content dd{
						margin-left:100px;
						margin-bottom:5px;
				}
				#foot{
						margin-top:10px;
				}
				.foot-ul li {
						text-align:center;
				}
				.note-help {
						color: #999999;
						font-size: 12px;
						line-height: 130%;
						padding-left: 3px;
				}

				.icon-info{
						background-color: #D2EEF7;
						border-style: solid solid solid none;
						border-width: 1px 1px 1px medium;
						font-weight: normal;
						height: 30px;
						line-height: 15px;
						padding: 0 3px;
						top: -1px;
						font: 12px/1.5 tahoma,arial,宋体;
				}
				.icon{
						background-image: url(themes/default/images/bankicon.png);
						display:inline-block;
						height: 30px;
						width:120px;
						background-repeat: no-repeat;
				}
				.ICBC{
						background-position: 0 -40px;
				}
				.CMB {
						background-position: 0 -80px;
				}
				.CCB{
						background-position: 0 -320px;
				}
				.BOC{
						background-position: 0 -520px;
				}
				.ABC{
						background-position: 0 -480px;
				}
				.COMM{
						background-position: 0 -600px;
				}
				.PSBC {
						background-position: 0 -400px;
				}
				.CEB {
						background-position: 0 -440px;
				}
				.SPDB {
						background-position: 0 -360px;
				}
				.GDB {
						background-position: 0 -280px;
				}
				.CITIC {
						background-position: 0 -200px;
				}
				.CIB {
						background-position: 0 -3365px;
				}
				.SDB {
						background-position: 0 -240px;
				}
				.CMBC {
						background-position: 0 -120px;
				}
				.HZCB {
						background-position: 0 -760px;
				}
				.SHBANK {
						background-position: 0 -840px;
				}
				.BJRCB {
						background-position: 0 -2640px;
				}
				.SPABANK {
						background-position: 0 -1880px;
				}
				.FDB {
						background-position: 0 -1320px;
				}
				.NBBANK {
						background-position: 0 -1240px;
				}
				.BJBANK {
						background-position: 0 -3240px;
				}
				.WZCB {
						background-position: 0 -1720px;
				}
				.ICBCBTB{
						background-image: url(themes/default/images/ENV_ICBC_OUT.gif);
				}
				.CCBBTB{
						background-image: url(themes/default/images/ENV_CCB_OUT.gif);
				}
				.ABCBTB{
						background-image: url(themes/default/images/ENV_ABC_OUT.gif);
				}
				.SPDBBTB{
						background-image: url(themes/default/images/ENV_SPDB_OUT.gif);
				}

				.cashier-nav {
						font-size: 14px;
						margin: 15px 0 10px;
						text-align: left;
						height:30px;
						border-bottom:solid 2px #CFD2D7;
				}
				.cashier-nav ol li {
						float: left;
				}
				.cashier-nav li.current {
						color: #AB4400;
						font-weight: bold;
				}
				.cashier-nav li.last {
						clear:right;
				}
				.alipay_link {
						text-align:right;
				}
				.alipay_link a:link{
						text-decoration:none;
						color:#8D8D8D;
				}
				.alipay_link a:visited{
						text-decoration:none;
						color:#8D8D8D;
				}
				</style>
					<div class="zfb" id="zhifu">
						<div class="zffs">第三方支付</div>
						<div class="zffs2">
							<input type="radio" class="zffs2_1" checked="true" onclick="selectPayment(this);hiddenshow();" iscod="0" value="11" name="payment">
							<span class="" onclick="hiddenshow()">
								<a class="zffs2_3" href="http://mai.360che.com/flow.php?step=checkout###">
									<img src="/TruckHome/truckhome/Public/shop/home/images/zhifubao.jpg"></a>
							</span>
						</div>
						<div class="zffs2">
							<input type="radio" class="zffs2_1" onclick="selectPayment(this);hiddenshow();" iscod="0" value="10" name="payment">
							<span class="" onclick="hiddenshow()">
								<a class="zffs2_3" href="http://mai.360che.com/flow.php?step=checkout###">
									<img src="/TruckHome/truckhome/Public/shop/home/images/caifutong.jpg"></a>
							</span>
						</div>

						<div class="zffs2">
							<input type="radio" class="zffs2_1" onclick="selectPayment(this);hiddenshow();" iscod="0" value="9" name="payment">
							<span class="" onclick="hiddenshow()">
								<a class="zffs2_3" href="http://mai.360che.com/flow.php?step=checkout###">
									<img src="/TruckHome/truckhome/Public/shop/home/images/weixin.png"></a>
							</span>
						</div>

					</div>

					<div class="zfb">
						<div class="zffs">网银支付</div>
						<div class="zffs3_0925" id="wangy">
							<div class="zffs3">
								<ul>
									<li>
										<input type="radio" value="12" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon ICBC"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="13" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon CMB"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="14" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon CCB"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="15" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon BOC"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="16" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon ABC"></span>
											</span>
										</div>
									</li>
								</ul>
								<ul>
									<li>
										<input type="radio" value="17" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon COMM"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="18" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon PSBC"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="19" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon CEB"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="20" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon SPDB"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="21" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon GDB"></span>
											</span>
										</div>
									</li>
								</ul>
							</div>

							<div style="display:none;" id="oDiv" class="zffs3">
								<ul>
									<li>
										<input type="radio" value="22" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon CITIC"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="23" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon CIB"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="24" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon SDB"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="25" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon CMBC"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="26" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon BJBANK"></span>
											</span>
										</div>
									</li>
								</ul>
								<ul>
									<li>
										<input type="radio" value="27" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon HZCB"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="28" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon SHBANK"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="29" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon BJRCB"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="30" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon SPABANK"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="31" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon FDB"></span>
											</span>
										</div>
									</li>
								</ul>
								<ul>
									<li>
										<input type="radio" value="32" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon WZCB"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="33" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon NBBANK"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="34" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon ICBCBTB"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="35" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon CCBBTB"></span>
											</span>
										</div>
									</li>
									<li>
										<input type="radio" value="36" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon SPDBBTB"></span>
											</span>
										</div>
									</li>
								</ul>
								<ul>
									<li>
										<input type="radio" value="37" iscod="0" name="payment" class="zffs2_0925" onclick="hiddenshow()">
										<div class="zfxz_ver3" onclick="hiddenshow()">
											<span class="wyzf">
												<span class="icon ABCBTB"></span>
											</span>
										</div>
									</li>
								</ul>
							</div>
							<div class="zffs3_xin">
								<a class="gdyh" href="http://mai.360che.com/flow.php?step=checkout###" onclick="document.getElementById(&#39;oDiv&#39;).style.display==&#39;none&#39;?document.getElementById(&#39;oDiv&#39;).style.display=&#39;block&#39;:document.getElementById(&#39;oDiv&#39;).style.display=&#39;none&#39;;hiddenshow()">更多银行</a>
							</div>
						</div>
					</div>

					<div class="zfb">
						<div id="showyh" class="zffs_vernew">
							<input type="radio" onclick="selectPayment(this);showhddiv()" iscod="0" value="4" name="payment">银行汇款/转账</div>
						<div style="display:none" id="yhhk" class="yhzz">
							<ul>
								<li>
									<div class="yhtp">
										<img src="/TruckHome/truckhome/Public/shop/home/images/zhaoshang.jpg"></div>
									<div class="yhzh">
										<span>开户行：中国招商银行北京分行海淀支行</span>
										<span>
											<font>公司名称：北京卡车之家信息技术股份有限公司</font>
											<font>账号：110 906 1669 10902</font>
										</span>
									</div>
								</li>
							</ul>
							<!--
						<ul>
							<li>
								<div class="yhtp">
									<img src="themes/default/style/ecshop/images/yinhang/jianshe.jpg"></div>
								<div class="yhzh">
									<span>开户行：中国建设银行北京华贸支行</span>
									<span>
										<font>收款人：杨爱民</font>
										<font>账号：6227 0000 1591 0168 005</font>
									</span>
								</div>
							</li>
						</ul>
						<ul>
							<li>
								<div class="yhtp">
									<img src="themes/default/style/ecshop/images/yinhang/nongye.jpg"></div>
								<div class="yhzh">
									<span>开户行：中国农业银行北京光华路支行</span>
									<span>
										<font>收款人：杨爱民</font>
										<font>账号：6228 4800 1094 3142 918</font>
									</span>
								</div>
							</li>
						</ul>
						<ul>
							<li>
								<div class="yhtp">
									<img src="themes/default/style/ecshop/images/yinhang/youzheng.jpg"></div>
								<div class="yhzh">
									<span>开户行：中国邮政储蓄银行北京团结湖支行</span>
									<span>
										<font>收款人：杨爱民</font>
										<font>账号：6221 8810 0009 9241 036</font>
									</span>
								</div>
							</li>
						</ul>
						!-->
					</div>
				</div>
				<div class="zfb" style="display:none">
					<div id="showyj" class="zffs_vernew">
						<input type="radio" onclick="selectPayment(this);showhddiv1()" iscod="0" value="5" name="payment">邮局汇款</div>
					<div style="display:none" id="yjhk" class="yhzz_0925">
						<div class="yhzh_new">
							<span>
								<font>收款人：杨爱民&nbsp;&nbsp;&nbsp;</font>
								<font>账号：6221 8810 0009 9241 036</font>
							</span>
						</div>
						<div class="zy">
							<em></em>
							注意事项：办理电汇时，请在汇款单
							<font>“背面的附言中”</font>
							注明您的订单号后六位
						</div>
						<p>
							<img width="681" height="542" src="/TruckHome/truckhome/Public/shop/home/images/youju.jpg"></p>
					</div>
				</div>
				<div class="bcfs">
					<input type="button" onclick="zfbc();" name=""></div>
			</div>
			<div id="zhifu2" class="zhifu">
				<div class="zfb">
					<div class="zffs">
						<span style="float:left">第三方支付</span>
						<div class="xgzffs">
							<a href="javascript:void(0)" onclick="zf_xiu()">更改支付方式</a>
						</div>
					</div>
					<div class="zffs2">
						<span>
							<a href="javascript:void(0)" class="zffs2_2">
								<img src="/TruckHome/truckhome/Public/shop/home/images/zhifubao.jpg"></a>
							<input type="hidden" id="biaoshi" name="biaoshi" value="1"></span>
					</div>
				</div>
			</div>
		</div>

		<div class="blank" style="display:none"></div>

		<div class="flowBox" style="display:none">
			<h6>
				<span>其它信息</span>
			</h6>
			<table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
				<tbody>
					<tr>
						<td bgcolor="#ffffff"> <strong>使用红包:</strong>
						</td>
						<td bgcolor="#ffffff">
							选择已有红包
							<select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" style="border:1px solid #ccc;">
								<option value="0" selected="">请选择</option>
							</select>
							或者输入红包序列号
							<input name="bonus_sn" type="text" class="inputBg" size="15" value="">
							<input name="validate_bonus" type="button" class="bnt_blue_1" value="验证红包" onclick="validateBonus(document.forms[&#39;theForm&#39;].elements[&#39;bonus_sn&#39;].value)" style="vertical-align:middle;"></td>
					</tr>
					<tr>
						<td valign="top" bgcolor="#ffffff">
							<strong>订单附言:</strong>
						</td>
						<td bgcolor="#ffffff"></td>
					</tr>
					<tr>
						<td bgcolor="#ffffff">
							<strong>缺货处理:</strong>
						</td>
						<td bgcolor="#ffffff">
							<label>
								<input name="how_oos" type="radio" value="0" checked="" onclick="changeOOS(this)">等待所有商品备齐后再发</label>
							<label>
								<input name="how_oos" type="radio" value="1" onclick="changeOOS(this)">取消订单</label>
							<label>
								<input name="how_oos" type="radio" value="2" onclick="changeOOS(this)">与店主协商</label>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="sp_count_ver3">
			<div class="xxtx_bt2 biank">
				<span>结算信息</span>
			</div>
			<div class="jsxx">
				<div class="ddzzti">
					<div class="ddfy">
						<p>订单附言：</p>
						<div id="addDiv" class="tjfy" style="display:block">
							<textarea class="ddfy2" id="postscript" rows="3" cols="80" name="postscript"></textarea>

						</div>
					</div>
					<div class="zhifu0905">

						<div id="ECS_ORDERTOTAL" class="jsfy">

							<div style="display:none;">
								该订单完成后，您将获得
								<font class="f4_b">0</font>
								积分            ，以及价值
								<font class="f4_b">0.00元</font>
								的红包。
							</div>
							<ul>
								<li>
									&nbsp;&nbsp;商品数量：
									<span class="ft_red"><?php echo ($_SESSION['totalNumber']); ?></span>
									件
								</li>
								<li>&nbsp;&nbsp;商品金额：<?php echo ($_SESSION['totalPrice']); ?>元</li>

								<!-- <li>&nbsp;&nbsp;运费金额: 52.00元</li> -->
								<li>
									&nbsp;&nbsp;应付总额：
									<span class="ft_red ft_19"><?php echo ($_SESSION['totalPrice']); ?>元</span>
								</li>
							</ul>
						</div>

						<div class="yfze_1">
							<a href="<?php echo U('Sorder/insert');?>" class="yfze3" value=" " name="" id="submit"></a>
							<input type="hidden" value="done" name="step">
						</div>
						<script type="text/javascript">
						$('#submit').click(function(){
							//console.log(1);
							var address=false;
							$('input.radio').each(function(){

								if ($(this).attr('checked')) {
									address=true;
									//console.log(1);
									var value=$(this).next('input').attr('value');
									$.post("<?php echo U('Sorder/aid');?>",{id:value},function(msg){

                            		})
                				}
							})
							if(!address){
								alert('请选择收件人');
								return false;
							}


						})
						</script>
					</div>
				</div>
			</div>
		</div>

</div>

<div class="es_main">
	<div class="yewei">
		<div class="yewei1">
			<dl>
				<dt>关于卡车之家</dt>
				<dd>
					<div>
						<a target="_blank" href="http://www.360che.com/help/about/">公司简介</a>
					</div>
					<div>
						<a target="_blank" href="http://www.360che.com/help/friend/">友情链接</a>
					</div>
					<div>
						<a target="_blank" href="http://www.360che.com/help/contact/">联系我们</a>
					</div>
					<div>
						<a target="_blank" href="http://www.360che.com/help/sitemap/">网站地图</a>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>新手指南</dt>
				<dd>
					<div>
						<a target="_blank" href="http://mai.360che.com/article-13.html">购买资格</a>
					</div>
					<div>
						<a target="_blank" href="http://mai.360che.com/article-12.html">购物流程</a>
					</div>
					<div>
						<a target="_blank" href="http://bbs.360che.com/faq.php">会员介绍</a>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>配送服务</dt>
				<dd>
					<div>
						<a target="_blank" href="http://www.kiees.cn/">配送查询</a>
					</div>
					<div>
						<a target="_blank" href="http://mai.360che.com/article-16.html">售后服务</a>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>帮助</dt>
				<dd>
					<div>
						<a target="_blank" href="http://mai.360che.com/article-14.html">如何注册</a>
					</div>
					<div>
						<a target="_blank" href="http://mai.360che.com/article-15.html">常见问题</a>
					</div>
					<div>
						<a target="_blank" href="http://www.kiees.cn/">快件查询</a>
					</div>
				</dd>
			</dl>
		</div>
		<div class="yewei2">
			<div class="yewei2_1">
				<span class="rx_1">客户服务热线：</span>
				<span class="rx_2">400-880-6283</span>
			</div>
			<div class="yewei2_2">
				<a target="_blank" href="http://www.360che.com/">
					<img src="/TruckHome/truckhome/Public/shop/home/images/shop_ywlogo.jpg"></a>
			</div>
			<div class="yewei2_3">
				百度搜索
				<font>卡车之家</font>
				可以方便找到本站
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<span style="font-family:arial;">Copyright &#169;</span>
	2009
	<a target="_blank" href="http://www.360che.com/">卡车之家</a>
	―― 网聚卡车人的力量
	<span style="padding-left:15px;">京ICP证080575号/京ICP备09080840号 京公网安备11010502026149</span>
</div>

</body>
</html>