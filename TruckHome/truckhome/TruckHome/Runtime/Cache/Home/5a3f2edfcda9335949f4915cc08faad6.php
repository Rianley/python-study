<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">

    <meta name="Generator" content="ECSHOP v2.7.3">
    <meta http-equiv="Content-Type" content="text/html; charset=gbk">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <meta name="Keywords" content="机油滤芯,机油滤清器, 机滤,弗列加机油滤清器,正品机油滤清器,网购机油滤芯,卡车之家商城">
    <meta name="Description" content="卡车之家商城为您提供正品机油滤芯,机滤,机油滤清器,适合牵引车,轻卡,皮卡,中重卡货车使用,正品行货,最新报价,全国联保,省钱放心网购上卡车之家商城,尽享购物乐趣!">
    <title>卡车之家商城_只卖正品卡车配件_正品卡车汽配</title>
    <link href="/TruckHome/truckhome/Public/shop/home/css/share_style0_16.css" rel="stylesheet">
    <link href="/TruckHome/truckhome/Public/shop/home/css/share_popup.css" rel="stylesheet">
    <link href="/TruckHome/truckhome/Public/shop/home/css/select_share.css" rel="stylesheet">
    <link href="/TruckHome/truckhome/Public/shop/home/css/s_public.css" rel="stylesheet">
    <link href="/TruckHome/truckhome/Public/shop/home/css/s_index.css" rel="stylesheet" type="text/css">

    <link href="/TruckHome/truckhome/Public/shop/home/css/ecshop_checkout.css" rel="stylesheet" type="text/css">
    <link href="/TruckHome/truckhome/Public/shop/home/css/ecshop_common.css" rel="stylesheet" type="text/css">
    <link href="/TruckHome/truckhome/Public/shop/home/css/ecshop_sy.css" rel="stylesheet" type="text/css">
    <link href="/TruckHome/truckhome/Public/shop/home/css/public.css" rel="stylesheet" type="text/css">
    <link href="/TruckHome/truckhome/Public/shop/home/css/ecshop_single.css" rel="stylesheet" type="text/css">
    <link href="/TruckHome/truckhome/Public/shop/home/css/share_style0_16.css" rel="stylesheet">
    <link href="/TruckHome/truckhome/Public/shop/home/css/share_popup.css" rel="stylesheet">
    <link href="/TruckHome/truckhome/Public/shop/home/css/select_share.css" rel="stylesheet">
    <link href="/TruckHome/truckhome/Public/shop/home/css/s_public.css" rel="stylesheet">
    <script src="/TruckHome/truckhome/Public/shop/home/js/jquery-1.8.3.min.js" type="text/javascript"></script>
</head>
<body>
    <?php echo W('Menu/slogin');?>
    <?php echo W('Menu/ssearch');?>
    <?php echo W('Menu/snav');?>
    
    <div class="gonndo">
       <img  src="/TruckHome/truckhome/Public/shop/home/images/0f0005lth4dW924OdKxpd0.jpg"/>
    </div>

    <div class="es_main">
        <div class="right_sp_0920">
            <!--<script language="javascript">
    function openPic(){
        window.open($('.bigimg').attr('src'));
    }
</script>-->
            <div id="preview">
                <div onclick="openPic()" id="smallImg" class="jqzoom" style="border:1px solid #ccc;border-right:1px solid #ccc;float:left;">
                    <img data-bd-imgshare-binded="1" jqimg="" src="/TruckHome/truckhome/Public/shop/<?php echo ($data['image']); ?>" alt=""  id="sImage" width="350">
                </div>

                <!-- <div onclick="openPic()" id="bigImg" class="jqzoom" style="border:1px solid #ccc;border-left:1px solid #ccc;float:left;position:absolute;left:550px;top:233px;z-index:99999999999999;overflow: hidden;width:400px;height:350px">
                <img data-bd-imgshare-binded="1" jqimg="" src="/TruckHome/truckhome/Public/shop/<?php echo ($data['image']); ?>" alt="" width="1750" >
                </div> -->


                <script type="text/javascript">
                    // 放大镜
                    // 1.获取图片对象
                    var sImage = document.getElementById('sImage');
                    var big = document.getElementById('bigImg');

                    // 2.鼠标移入
                    sImage.onmouseover = function(){
                        big.style.display = 'block';
                    }

                    // 3.鼠标离开
                    sImage.onmouseout = function(){
                        big.style.display = 'none';
                    }

                    // 4.鼠标移动事件
                    sImage.onmousemove = function(ent){
                        // 4.1 获取鼠标的位置
                        // 兼容IE 谷歌火狐
                        var e = ent || event;
                        var mx = e.clientX;
                        var my = e.clientY;
                        console.log(mx);
                        console.log(my);
                        // 4.2 获取图片的位置
                        var ix = this.offsetLeft;
                        var iy = this.offsetTop;
                        console.log(ix);
                        console.log(iy);

                        // 4.3 获取鼠标相对于图片的相对位置
                        var x = 5*(mx - ix);
                        var y = 5*(my - iy);
                         console.log(x+':'+y);

                        // 4.4 图片放大了5倍
                        // div.scrollLeft:将div的内容横向偏移
                        // div.scrollTop:将div的内容纵向偏移
                        big.scrollTop = y-300;
                        big.scrollLeft = x-1100;
                    }
                </script>

            </div>
            <form action="<?php echo U('Scart/add');?>" method="post" name="ECS_FORMBUY" id="proDetailForm">
                <input type="hidden" name="pid" value="<?php echo ($data['id']); ?>">

                <div class="summary" >
                    <a name="A4" id="A4"></a>
                    <div class="sp_title">
                        <h1><?php echo ($data['proname']); ?></h1>

                        <div class="sp_ps">
                            <span>弗列加机油滤芯 锡柴6DN专用</span>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <span class="ess_1">市 场 价：</span>
                            <span class="ess_2"><?php echo ($data['price']/$data['discount']); ?></span>

                        </li>
                        <li>
                            <span class="ess_4" >商 城 价：</span> <font class="ess_5" id="price"><?php echo ($data['price']); ?></font>
                            <span class="ess_6">元</span>
                            <span class="ess_6">
                                为您节省 <font><span class="ess_8"><?php echo ($data['price']/$data['discount']-$data['price']); ?></span>
                                    元
                                    <span class="ess_9">
                                    <?php if($data['discount'] == 1): ?>(无折扣)
                                    <?php else: ?>
                                    (<?php echo ($data[discount]*10); ?>)折<?php endif; ?>
                                    </span>
                                    </font>
                            </span>
                        </li>
                        <li>
                            <span class="ess_1">用户评论：</span>
                            <a href="#A0" class="ess_7">
                                已有
                                <font>0</font>
                                人评论
                            </a>
                            <div class="zixun">
                                <span class="ess_4">在线咨询：</span>
                                <div class="qqlink">

                                    <img src="/TruckHome/truckhome/Public/shop/home/images/qqjt.png"/>

                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="sum_xz">

                        <dl class="guige">
                            <dt>购买数量：</dt>
                            <dd>
                                <div class="gwc_bt4">
                                    <a class="sp4" id="decrease" href="javascript:void(0);"style=""></a>
                                    <input  class="sp5" size="4" value="1" name="number" id="number" type="text" style="margin-top:1px">
                                    <a  class="sp6" href="javascript:void(0);" id="increase"></a>
                                </div>
                                <span class="danwei">件</span>
                                <span class="kucun">
                                    (库存
                                    <font id="storage"><?php echo ($data['storage']); ?></font>
                                    件)
                                </span>
                            </dd>
                        </dl>
                        <div class="heji">
                            <span class="hejisz">
                                小计：
                                <font id="count"><?php echo ($data['price']); ?>元</font>
                            </span>
                            <button type="submit" id="submit" class="gwc"></button>
                        </div>
                    </div>
                    <div class="tj_sc">
                        <div data-bd-bind="1452220599179" class="bdsharebuttonbox bdshare-button-style0-16">
                            <a href="#" class="bds_more" data-cmd="more">分享到：</a>
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a>
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪微博</a>
                            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">腾讯微博</a>
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a>
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <div class="xiuzheng0920" style="margin-left:100px">

        <script type="text/javascript">
            $(function(){
                var reg=/^[0-9]*$/;
                var storage=parseInt($('#storage').html());
                var price=parseInt($('#price').html());



                $('#proDetailForm').submit(function(){
                    if(storage==0){
                        alert('商品卖完，不能添加购物车');
                        return false;
                    }
                     var value=$('#number').val();
                    if(value>storage){
                        alert("超过购买数量！请重新填写!");
                        return false;
                    }
                    return true;
                })
                $('#number').blur(function(){
                    var value=$('#number').val();
                    if(!reg.test(value)){
                        alert('请输入大于0的整数');
                    }

                    if(value>storage){

                        alert("超过购买数量！请重新填写!");



                    }

                })

                $('#decrease').click(function(){
                    var value=parseInt($('#number').val());
                    if(value<=1){
                        value=1;
                    }else{
                        value--;
                    }

                    $('#number').val(value);

                    $('#count').html(parseFloat(value*price).toFixed(2)+'元');

                })

                $('#increase').click(function(){
                    var value=parseInt($('#number').val());
                    console.log(value);

                    if(value<storage){
                        value++;
                    }else{
                        value=storage;
                        alert("超过购买数量！请重新填写!");

                    }

                    $('#number').val(value);
                    $('#count').html(parseFloat(value*price).toFixed(2)+'元');

                })

            })


</script>
            <div class="es_right">


                <div class="es_details">
                    <a name="A1" id="A1"></a>
                    <ul class="es_details1 cwj_es_details1">
                        <li>
                            <span>商品描述</span>
                        </li>
                        <li>
                            <a href="#A2">适用车型</a>
                        </li>
                        <li>
                            <a href="#A0">购买评论</a>
                        </li>
                        <li>
                            <a href="" target="_blank">售后服务</a>
                        </li>
                        <li>
                            <a href="" target="_blank">如何购买</a>
                        </li>
                    </ul>
                    <div class="es_details2">
                        <p>
                            <br></p>
                        <p>
                            <span style="line-height: 23.799999237060547px; font-family: 微软雅黑, 'Microsoft YaHei';">
                                <a href="http://360che.taobao.com/" target="_blank" title="卡车之家淘宝商城" style="white-space: normal; background-color: rgb(255, 255, 255);">
                                    <img data-bd-imgshare-binded="1" src="/TruckHome/truckhome/Public/shop/home/images/1432200872321652.jpg" title="1432200872321652.jpg" alt=""></a>
                            </span>
                        </p>



                    </div>
                    <a name="A2" id="A2"></a>



                    <div class="es_details3" >
                        <div class="wupin" style="word-break: break-all;word-wrap: break-word;">

                            <?php echo htmlspecialchars_decode($data['description']);?>

                        </div>
                        <div class="wp_jtpl" id="ECS_COMMENT">
                            <meta http-equiv="content-type" content="text/html; charset=gbk">

                        </div>
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