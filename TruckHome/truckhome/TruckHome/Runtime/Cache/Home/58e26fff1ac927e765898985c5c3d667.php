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
    

    <div class="es_main" style="margin-botton:20px; height:60px ">
        <div class="sift_out">
            <div class="filter">

                <div class="px0904">排序:
                </div>
                <form method="GET" class="sort" name="listform" action="<?php echo U('Sproduct/index');?>">
                    <input type="hidden" name="cid" value="<?php echo ($cid); ?>">
                    <ul>
                        <li style="float:left" id="addtime" data="addtime">

                            <input type="submit"  value='上架时间'
                            <?php if($_GET['sort'] == null): ?>class="xzpx_xia"<?php endif; ?>

                            <?php if($_GET['sort'] == 'addtime'): if($_GET['order'] == 'ASC'): ?>class="xzpx_sh"
                                <?php else: ?>class="xzpx_xia"<?php endif; ?>
                            <?php else: ?> class="mrzt"<?php endif; ?>

                            />
                        </li>

                        <li style="float:left" id="price" data="price">
                            <input type="submit"  value="价格"
                            <?php if($_GET['sort'] == 'price'): if($_GET['order'] == 'ASC'): ?>class="xzpx_sh"
                                <?php else: ?>class="xzpx_xia"<?php endif; ?>
                            <?php else: ?> class="mrzt"<?php endif; ?>
                            />
                        </li>
                        <li style="float:left" id="salenum" data="salenum">
                            <input type="submit" value="销量"
                            <?php if($_GET['sort'] == 'salenum'): if($_GET['order'] == 'ASC'): ?>class="xzpx_sh"
                                <?php else: ?>class="xzpx_xia"<?php endif; ?>
                            <?php else: ?> class="mrzt"<?php endif; ?>
                            />
                        </li>

                    </ul>

                    <input name="cid" value="<?php echo ($cid); ?>" id="cid" type="hidden">
                    <input name="order" id="order" value="DESC" type="hidden">
                    <input name="sort" id="sort" value="addtime" type="hidden">

                    <script type="text/javascript">
                        var cid=$('#cid').attr('value');
                        $(function(){
                            $('#addtime').click(function(){
                              order($(this));
                            })

                            $('#price').click(function(){
                              order($(this));
                            })
                            $('#salenum').click(function(){
                              order($(this));
                            })
                        })

                        function order(obj){
                                var order='DESC';
                                var sort=obj.attr('id');
                                console.log(obj.find('input').attr('class'));
                                if(obj.find('input').attr('class')
                                    !='xzpx_sh') {

                                    obj.find('input').attr('class','xzpx_sh');
                                    order='ASC';

                                }else{
                                    obj.find('input').attr('class','xzpx_xia');
                                }

                               obj.siblings('li').find('input').attr('class','mrzt');
                               $('#sort').attr('value',sort);
                               $('#order').attr('value',order);

                                }
                    </script>

                </form>

            </div>
            <div class="shift">
                <a href="javascript:;" class="datuxz">大图</a>
                <a href="javascript:;" onclick="javascript:display_mode('list')" class="lbwxz">列表</a>
            </div>
        </div>
    </div>
    <div class="es_main">
        <div class="listshow" >
            <?php if(is_array($data)): foreach($data as $key=>$vo): ?><div style="margin:8px 20px 20px 8px;width:170px;height:260px;float:left;border:1px solid #ccc">
                <div class="tjtj_pic">
                    <a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo['id']));?>" target="_blank">
                        <img src="/TruckHome/truckhome/Public/shop/<?php echo ($vo['image']); ?>" alt="<?php echo (msubstr($vo['proname'],0,30,'utf-8',true)); ?>">
                    </a>
                </div>
                <div class="tjtj_bt">
                    <a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo['id']));?>" target="_blank"><?php echo (msubstr($vo['proname'],0,30,'utf-8',true)); ?>

                    </a>
                </div>
                <div class="tjtj_jg">
                    商城价： <font><?php echo ($vo['price']); ?>元</font>
                </div>
            </div><?php endforeach; endif; ?>


        </div>

    </div>


    <!--页数-->
    <div class="es_main">
        <div class="ecshop_page" id="pager">


            <span><?php echo ($show); ?></span>



        </div>
    </div>
    <div class="es_main" style="display:none">
        <div class="guanggaowei">
            <div class="ad_left">
                <a href="###">
                    <img src="/TruckHome/truckhome/Public/shop/home/images/ggshifan1.jpg"></a>
            </div>
            <div class="ad_right">
                <a href="###">
                    <img src="/TruckHome/truckhome/Public/shop/home/images/ggshifan2.jpg"/></a>
            </div>
        </div>
    </div>

    <meta http-equiv="content-type" content="text/html; charset=gbk">

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