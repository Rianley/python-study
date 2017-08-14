<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="Generator" content="ECSHOP v2.7.3">
    <meta http-equiv="Content-Type" content="text/html; charset=gbk">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <meta name="Keywords" content="">
    <meta name="Description" content="">

    <title>购物车</title>

    <link href="/threeall/truckhome/Public/shop/home/css/ecshop_common.css" rel="stylesheet" type="text/css">
    <link href="/threeall/truckhome/Public/shop/home/css/ecshop_checkout.css" rel="stylesheet" type="text/css">
    <script src="/threeall/truckhome/Public/shop/home/js/jquery-1.8.3.min.js" type="text/javascript"></script>
</head>

<body>

    <div class="sstop">
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
                        <img src="/threeall/truckhome/Public/shop/home/images/zixun.jpg"></li>

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
    <div class="es_top2">
        <div class="es_top_logo">
            <a href="http://mai.360che.com/">
                <img src="/threeall/truckhome/Public/shop/home/images/shop_logo.jpg"></a>
        </div>
        <div class="es_top_gc">
            <span class="jc1"></span>
        </div>
    </div>
    <?php echo W('Menu/snav');?>

    <div class="es_main2" >

        <div class="gwc_jiesuan" style="height:300px">
        <span style="line-height:200px;margin-left:200px;font-size:30px">支付成功,请注意物流信息，及时收件</span>

        </div>
    </div>

    <div class="gwc_qd">
        <a href="<?php echo U('Sindex/index');?>" class="jxgw" style="float:right"></a>


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
					<img src="/threeall/truckhome/Public/shop/home/images/shop_ywlogo.jpg"></a>
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