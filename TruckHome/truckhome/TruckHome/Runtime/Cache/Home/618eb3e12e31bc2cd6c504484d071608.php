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

    <link href="/TruckHome/truckhome/Public/shop/home/css/ecshop_common.css" rel="stylesheet" type="text/css">
    <link href="/TruckHome/truckhome/Public/shop/home/css/ecshop_checkout.css" rel="stylesheet" type="text/css">
    <script src="/TruckHome/truckhome/Public/shop/home/js/jquery-1.8.3.min.js" type="text/javascript"></script>
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
    <div class="es_top2">
        <div class="es_top_logo">
            <a href="<?php echo U('Sindex/index');?>">
                <img src="/TruckHome/truckhome/Public/shop/home/images/shop_logo.jpg"></a>
        </div>
        <div class="es_top_gc">
            <span class="jc1"></span>
        </div>
    </div>
    <?php echo W('Menu/snav');?>
    <form id="formCart" name="formCart" method="post" action="flow.php">
    <div class="es_main2">
        <div class="gwc_bt">
            <div class="gwc_bt1" style="width:98px">
                <span style="display:block;float:right;margin-right:30px" >全选</span>
              <input type="checkbox" style="width:20px;height:20px;margin-top:5px;margin-left:10px" name="all" id="all">

            </div>


            <div class="gwc_bt2">
                <span>商品</span>
            </div>
            <div class="gwc_bt3">
                <span>单价</span>
            </div>
            <div class="gwc_bt4">
                <span>商品数量</span>
            </div>
            <div class="gwc_bt5">
                <span>小计</span>
            </div>
            <div class="gwc_bt6">
                <span>操作</span>
            </div>
        </div>


        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class="gwc_nr1" data="<?php echo ($vo['id']); ?>">

                <div class="gwc_bt1">
                    <span class="sp1"><input style="width:20px;height:20px;margin-top:30px" type="checkbox" name="select[]" class="check" id='check_<?php echo ($vo['id']); ?>' value="<?php echo ($vo['id']); ?>"></span>
                </div>
                <div class="gwc_bt2">
                    <div class="gwc_bt2_pic">
                        <a href="" target="_blank">
                            <img src="/TruckHome/truckhome/Public/shop/<?php echo ($vo['image']); ?>" title="弗列加机油滤芯 LF16292机滤 锡柴6DN机滤 发动机上单独机滤" height="54" border="0"></a>
                    </div>
                    <div class="gwc_bt2_ms">
                        <a href="<?php echo U('Sproduct/proDetail',array('id'=>$vo['id']));?>" class="sp_ms1"><?php echo (msubstr($vo['proname'],0,30,'utf-8',true)); ?></a>
                        &nbsp;&nbsp;
                    </div>
                </div>
                <div class="gwc_bt3">
                <span class="sp1" id="price_<?php echo ($vo['id']); ?>" style="float:left;margin-left:50px"><?php echo ($vo['price']); ?> </span><span class="sp2"style="margin-right:55px;float:right">元</span>
                </div>
                <div class="gwc_bt4">
                    <a href="javascript:void(0)" class="sp4" id="decrease_<?php echo ($vo['pid']); ?>" onclick="decrease(<?php echo ($vo['pid']); ?>)"></a>

                    <input name="number" type="text"disabled  value="<?php echo ($vo['number']); ?>"   id="number_<?php echo ($vo['id']); ?>" size="4" class="sp5"  />
                    <span id="warn_<?php echo ($vo['id']); ?>"></span>
                    <input type="hidden" name="storage" value="<?php echo ($vo['storage']); ?>" id="storage_<?php echo ($vo['id']); ?>">

                    <a href="javascript:void(0)" class="sp6" id="increate_<?php echo ($vo['id']); ?>" onclick="increase(<?php echo ($vo['pid']); ?>)"></a>
                </div>
                <div class="gwc_bt5" style="width:200px;">
                <span id="total_<?php echo ($vo['id']); ?>"  class="sp3" style="margin-left:70px;color:black"><?php echo ($vo['price']*$vo['number']); ?></span><span  class="sp2" style="margin-right:70px">元</span>
                <!-- <input type="text" value="22" id="total_<?php echo ($vo['id']); ?>" class="sp3" style="margin-left:70px;color:black" disabled=""> -->
                </div>
                <div class="gwc_bt6">
                    <a href="javascript:;" class="sp3 delPro" >删除</a>
                </div>
            </div><?php endforeach; endif; ?>

        </form>

        <div class="gwc_jiesuan">

            <div class="gwc_zj">
                <div class="gwc_zj1"> <em></em>
                    <a href="<?php echo U('Scart/clearBoth');?>">清空购物车</a>
                </div>
                <div class="gwc_zj1" style="margin-left:20px"><em></em>
                    <a href="javascript:;" id="del">删除</a>
                </div>
                <div class="gwc_zj2">
                    <span class="zibt">
                        <span  style="color:red;font-size:20px" id="totalNumber">0</span>
                        件商品
                    </span>
                    <span class="zibt" style="padding-left:100px">总计：</span>
                    <span class="zisz">
                        <span id="totalPrice" style="font-size:30px">00.00</span>
                        元
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/TruckHome/truckhome/Public/shop/home/js/transport.js"></script>
    <script type="text/javascript">

    //数量减少的函数
    /*
     * @param int a 商品id
    */

    function decrease(a){
        var n='number_'+a;
        var c='check_'+a;
        var p='price_'+a;
        var totalNumber=parseInt($('#totalNumber').html());
        var totalPrice=parseFloat($('#totalPrice').html());

        //console.log(n);
        number=parseInt($('#'+n).val())-1;
        if(number<1){
            return false;
        }
        $('#'+n).val(number);
        if($('#'+c).prop('checked')){

            totalNumber=totalNumber-1;
            $('#totalNumber').html(totalNumber);
            console.log(totalPrice);
            totalPrice=totalPrice-parseFloat($('#'+p).html());
            $('#totalPrice').html(totalPrice);
        }

        $.post('<?php echo U("Scart/decrease");?>',"pid="+a,function(msg){
            changeCartNum(a,number,msg);
        })

    }

    // 数量变多的函数
    /*
     * @param int a 商品id
    */
    function increase(a){
        var n='number_'+a;
        var s='storage_'+a;
        var c='check_'+a;
        var p='price_'+a;
        var number=$('#'+n).val();
        var storage=$('#'+s).val();
        var totalNumber=parseInt($('#totalNumber').html());
        var totalPrice=parseFloat($('#totalPrice').html());
        number=parseInt(number)+1;
        if(number>storage){
            alert('超过库存');
            return false;
        }
        $('#'+n).val(number);
        if($('#'+c).prop('checked')){

            totalNumber=totalNumber+1;
            $('#totalNumber').html(totalNumber);
            //console.log(totalPrice);
            totalPrice=totalPrice+parseFloat($('#'+p).html());
            $('#totalPrice').html(totalPrice);
        }
        $.post('<?php echo U("Scart/increase");?>',"pid="+a,function(msg){
            changeCartNum(a,number,msg);
        })

    }
    // 修改数量的函数
    /*
     * @param object obj input.num对象
    */
    function changeCartNum(a,number,msg){

        // 将数据传送到服务器

            if (msg == 'yes') {
                // 如果修改成功，需要修改小计和总计
                // 单价*数量
                var p='price_'+a;
                var t='total_'+a;

                var price=Number($('#'+p).text());

                var total=price*number;
                $('#'+t).html(total);
            } else {
                alert('失败');
            }

    }

    </script>
    <script type="text/javascript">
    $(function(){
        // 单一选中点击事件
        $('input.check').click(function(){
            // 依然要遍历所有的$('.aaa'),判断有没有被选中
            var number=0;
            var totalPrice=0;
            $('input.check').each(function(){
                var t='total_'+$(this).val();
                var n='number_'+$(this).attr('value');
                // console.log($(this).prop('checked'));
                // 判断如果被选中，获取对应的小计价格
                if ($(this).prop('checked')) {
                    number=number+parseInt($('#'+n).attr('value'));
                    totalPrice=totalPrice+parseFloat($('#'+t).html());
                }
            })

            $('#totalPrice').html(totalPrice);
            $('#totalNumber').html(number);
        })


    })
    </script>
    <script type="text/javascript">
    $(function(){
        var number=0;
        var totalPrice=0;
        var len=$('input.check').length;
        //全选
        $('#all').click(function(){
            // 让所有的复选框选中
            //console.log($(this).attr('checked'));
            if($(this).attr('checked')){
                $('input.check').each(function(){
                    // attr(属性名,属性值):设置属性
                $(this).attr('checked',true);
                var t='total_'+$(this).val();
                var n='number_'+$(this).attr('value');
                number=number+parseInt($('#'+n).attr('value'));

                    // console.log($('#'+t).html());
                    totalPrice=totalPrice+parseFloat($('#'+t).html());
                $('#totalNumber').html(number);
                    $('#totalPrice').html((totalPrice).toFixed(2));


            })
            }else{
                $('input.check').each(function(){
                    var t='total_'+$(this).val();
                var n='number_'+$(this).attr('value');
                    // attr(属性名,属性值):设置属性
                $(this).attr('checked',false);
                    totalPrice=totalPrice-parseFloat($('#'+t).html());
                    number=number-parseInt($('#'+n).attr('value'));

                    $('#totalNumber').html(number);
                    $('#totalPrice').html((totalPrice).toFixed(2));

            })
           }
        })


        // 删除
        $('#del').click(function(){
            // 遍历$('.aaa'),如果被选中，则删除(根据id删除)
            var arr = [];   // 接收购物车商品的id值
            $('input.check').each(function(){
                // 被选中
                if ($(this).prop('checked')) {
                    arr.push($(this).val());
                }
            })

            // 将获取的数据发送到服务器，进行删除操作
            // username=hansan&age=20
            // {username:'zhangsan',age:20}
            // 将数组转化为字符串
            var str = arr.join(',');
            $.post('<?php echo U("Scart/del");?>','id='+str,function(msg){
                 console.log(msg);
                if (msg == 'yes') {
                    // alert('ok');
                    /*
                        删除成功之后两种方式
                        1.刷新页面
                        2.直接在当前页面删除dom元素（无刷新）
                    */
                    // 1.进行刷新
                    window.location.reload();    // 刷新

                    // 2.remove()
                   /* for (var i in arr) {
                        $('div[data='+arr[i]+']').remove();
                    }*/
                } else {
                    alert('删除失败');
                }
            })
        })


        //单一删除
        $('.delPro').click(function(){
            //console.log(1);
            var id=$(this).parent().parent().attr('data');
            console.log(id);
            $.post("<?php echo U('Scart/delOnly');?>",{id:id},function(msg){
                if(msg=='yes'){
                    window.location.reload();
                }else{
                    alert('失败');
                }
            })

        })
    })
    </script>
    <script type="text/javascript">

</script>
    <div class="gwc_qd">
        <a href="<?php echo U('Sindex/index');?>" class="jxgw"></a>
        <a href="<?php echo U('Saddress/index');?>" class="lkjs" id="account"></a>
        <script type="text/javascript">
        $(function(){

            $('#account').click(function(){
                //console.log(1);
                var n=$('#totalNumber').html();
                var t=$('#totalPrice').html();
                if(n==0){
                    alert('请选择商品');
                    return false;
                }else{
                    /*$.post('<?php echo U('Saddress/sess');?>',{totalPrice:t,totalNumber:n},function(msg){

                    })*/
                    //查看选中的选项
                    var  arr=[];
                    $('input.check').each(function(){
                    // attr(属性名,属性值):设置属性
                        if ($(this).prop('checked')) {
                            arr.push($(this).val());
                        }
                    })
                    var str = arr.join(',');
                    $.post("<?php echo U('Saddress/sessid');?>",{id:str,totalPrice:t,totalNumber:n},function(msg){

                            })
                }

            })

        })
        </script>
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
</html>