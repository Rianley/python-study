<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>用户中心</title>
		<link rel="stylesheet" href="/threeall/ThinkPHP/Public/home/news/css/public.css"/>
		<link rel="stylesheet" href="/threeall/ThinkPHP/Public/home/news/css/usercenter.css"/>
		<script type="text/javascript" src="/threeall/ThinkPHP/Public/home/news/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/threeall/ThinkPHP/Public/home/news/js/oneself.js"></script>
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
				<a href="<?php echo U('Lindex/index');?>"><img src="/threeall/ThinkPHP/Public/home/news/images/kczj.jpg"></a>
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
				

	<script src="/threeall/ThinkPHP/Public/My97DatePicker/WdatePicker.js"></script>
	<script src="/threeall/ThinkPHP/Public/Plupload/plupload.full.min.js"></script>
	<script src="/threeall/ThinkPHP/Public/Jcrop/js/jquery.Jcrop.js"></script>
	<?php echo W('Menu/userleft');?>
	<div class="prefirght">
		<div class="post_list list_oneb">
			<div class="post_list_label">
				<ul>
					<li class="tab" id="upinfo1">
						<a href="" class="tab_a tab_on tabNormal" id="upinfo2" >评论列表</a>
					</li>

				</ul>
			</div>

			<!--评论列表 开始-->
			<div class="post_center" id="tabpanel1">
				<div class="post_cen_label">
					<ul>
						<li class="post">
							<a href="space.php?uid=439765&amp;items=otherthreads" class="tab_a1 tab_on1 tabNormal1">全部评论</a>
						</li>

						<li class="post_more">
							我的评论：共有
							<span style="color:#1e6cc1"><?php echo ($cnum); ?></span>
							个
						</li>

					</ul>
				</div>

				<div class="post_wdzt" id="postpanel1">
					<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="post_wdzt_list">
							<div class="p_wdzt_la">
								<div class="p_wdzt_la1">
									<a href="<?php echo U('User/editComm',array('id'=>$vo['id']));?>" target="_blank">
									<?php echo htmlspecialchars_decode($vo['content']);?>
									<!-- <?php echo msubstr(htmlspecialchars_decode($vo['content']),0,20,'utf-8');?> -->
									<!-- <?php echo (msubstr($vo['content'],0,20,'utf-8',true)); ?> --></a>

								</div>
							</div>
							<div class="p_wdzt_lb">
								<div class="p_wdzt_lb1"><?php echo date("Y-m-d H:i:s",$vo['atime']);?></div>
								<div class="p_chance_box"></div>
								<div class="p_wdzt_lb3"><a href="<?php echo U('User/delComm',array('id'=>$vo['id']));?>">删除</a></div>
								<div class="p_wdzt_lb2"><a href="<?php echo U('User/editComm',array('id'=>$vo['id']));?>">编辑</a></div>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>


					<!--控制标签 开始-->

					<!--控制标签 结束-->

					<!--翻页控件 start-->
					<div class="page_turn">
						<div class="pages">
							<?php echo ($show); ?>
						</div>



					</div>
					<!--翻页控件 end-->
				</div>

			</div>

			<!--评论列表 结束-->

			<script>
			$(function(){
				$('#upinfo1').mouseover(function(){
					$('#userinfo').css("display",'block');
					$('#upimg').css("display","none");
					$('#uppwd').css("display",'none');
					$('#emaildiv').css("display",'none');
					$('#upimg2').removeClass("tab_on");
					$('#uppwd2').removeClass("tab_on");
					$('#emailyz').removeClass("tab_on");
					$('#upinfo2').addClass("tab_on");
				});
				$('#upimg1').mouseover(function(){
					$('#userinfo').css("display",'none');
					$('#upimg').css("display","block");
					$('#emaildiv').css("display",'none');
					$('#uppwd').css("display",'none');
					$('#upinfo2').removeClass("tab_on");
					$('#uppwd2').removeClass("tab_on");
					$('#emailyz').removeClass("tab_on");
					$('#upimg2').addClass("tab_on");
				});
				$('#uppwd1').mouseover(function(){
					$('#userinfo').css("display",'none');
					$('#upimg').css("display","none");
					$('#emaildiv').css("display",'none');
					$('#uppwd').css("display",'block');
					$('#upinfo2').removeClass("tab_on");
					$('#upimg2').removeClass("tab_on");
					$('#emailyz').removeClass("tab_on");
					$('#uppwd2').addClass("tab_on");
				});
				$('#emailyz1').mouseover(function(){
					$('#userinfo').css("display",'none');
					$('#upimg').css("display","none");
					$('#uppwd').css("display",'none');
					$('#emaildiv').css("display",'block');
					$('#upinfo2').removeClass("tab_on");
					$('#upimg2').removeClass("tab_on");
					$('#uppwd2').removeClass("tab_on");
					$('#emailyz').addClass("tab_on");
				})

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
			$('#email').blur(function(){
				 var reg=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				 var value=$.trim($(this).val());
				 if(!reg.test(value)){
				 	$('#emailinfo').css("display","inline-block");
				 	$('#emailinfo').addClass("no_tix");
				 }else{
				 	$('#emailinfo').removeClass("no_tix");
				 	$('#emailinfo').text("");
				 	$('#emailinfo').css("display","inline-block");
				 	$('#emailinfo').addClass("ok_tix");
				 }
			});

			// 1.实例化upload上传对象,并且配置
	var up = new plupload.Uploader({
		browse_button : 'upload', //触发文件选择对话框的按钮，为那个元素id
        url : '<?php echo U('User/upImg');?>', //服务器端的上传页面地址
	})

	// 2.初始化
	up.init();

	// 3.绑定监听事件，并在事件监听函数中做你想做的事
	// 当选中了图片，点击确定按钮之后，就上传图片
	up.bind('FilesAdded',function(up,file){
        // 当文件添加到上传队列的时候，执行上传功能
        up.start();
    });

	var picname = '';
	// 当文件上传成功之后，要做的事情
    up.bind('FileUploaded',function(up,file,responseObject){
        // 当文件上传成功之后，进行的处理
        console.log(up);
        console.log(file);
        console.log(responseObject);

        // 上传成功
        if (responseObject.status == 200) {
        	// $('#box').html('<img src="/threeall/ThinkPHP/Public/'+responseObject.response+'" alt="" width="500"/>');
        	// 给picname赋值
        	picname = responseObject.response;

        	//$('<img src="/threeall/ThinkPHP/Public/'+responseObject.response+'" alt=""/>').Jcrop({onChange:showCoords,onSelect:showCoords}).appendTo('#box123');

			$('#box123').empty();

			$('<img src="/threeall/ThinkPHP/Public/'+responseObject.response+'" alt=""/>').Jcrop({onChange:showCoords,onSelect:showCoords}).appendTo('#box123');
			alert("上传成功！");

        }
    });

    // 通过此函数来确定具体的裁剪坐标点（起始坐标点，要裁剪的宽度和高度）
    var x,y,w,h;
    function showCoords(obj){
    	x = obj.x;
    	y = obj.y;
    	w = obj.w;
    	h = obj.h;

    	console.log(x+':'+y+':'+w+':'+h);
    }

    // 当确定了裁剪尺寸，将裁剪尺寸传值到服务器端，要服务器PHP进行图片裁剪操作
    $('#sure').click(function(){
    	$.post('<?php echo U('User/doCrop');?>',{x:x,y:y,w:w,h:h,picname:picname},function(msg){
    		// console.log(msg);
    		// 假设图片裁剪成功,让图片重新加载一次
    		$('#box123').html('<img src="/threeall/ThinkPHP/Public/'+picname+'?id='+Math.random()+'" alt="" />');
			alert("裁剪成功");
		});
    });

    //密码的判断
    var oldpwd=false,newpwd=false,surepwdb=false;
    $('#pwd_old').blur(function(){
    	var value=$.trim($(this).val());
    	//console.log(value);
    	if(value==""){
    		$('#pwdts_old').addClass('no_tix');
    		$('#pwdts_old').html("旧密码不能为空");
    		oldpwd=false;
    	}else{
    		$.post("<?php echo U('User/getOld');?>","oldpwd="+value,function(msg){
    			console.log(msg);
    			if(msg=="no"){
    				$('#pwdts_old').addClass('no_tix');
    				$('#pwdts_old').html("你输入的旧密码不正确");
    				oldpwd=false;

    			}else{
    				$('#pwdts_old').removeClass("no_tix");
    				$('#pwdts_old').addClass('ok_tix');
    				$('#pwdts_old').text("");
    				oldpwd=true;
    			}
    		});
    	}
    });

    $('#pwd').blur(function(){
    	var value=$.trim($(this).val());
    	//alert("ok");
    	if(value==""){
    		$('#pwdts').addClass('no_tix');
    		$('#pwdts').html("新密码不能为空");
    		newpwd=false;
    	}else{
    		//(?!^\\d+$)不能全是数字
			//(?!^[a-zA-Z]+$)不能全是字母
			//(?!^[_#@]+$)不能全是符号（这里只列出了部分符号，可自己增加，有的符号可能需要转义）
			//.{8,}长度不能少于8位
			//合起来就是
    		//var res=/(?!^\\d+$)(?!^[a-zA-Z]+$)(?!^[_#@]+$).{8,}/;
    		var res=/^[0-9a-zA-Z]{6,12}$/;
    		if(!res.test(value)){
    			$('#pwdts').addClass('no_tix');
    			$('#pwdts').html("新密码必须是6到12位的数字和字符组成");
    			newpwd=false;
    		}else{
    			$('#pwdts').removeClass("no_tix");
    			$('#pwdts').addClass('ok_tix');
    			$('#pwdts').text("");
    			newpwd=true;
    		}
    	}
    });
    $('#pwd_sure').blur(function(){
    	var newpwd=$.trim($('#pwd').val());
    	var surepwd=$.trim($(this).val());

    	if(surepwd==""){
    		$('#pwdts_sure').addClass('no_tix');
    		$('#pwdts_sure').html("请再次输入您的密码");
    		surepwdb=false;
    	}else{
    		if(newpwd!=surepwd){
    		$('#pwdts_sure').addClass('no_tix');
	    		$('#pwdts_sure').html("两次密码不一致");
	    		surepwdb=false;
	    	}else{
	    		$('#pwdts_sure').removeClass("no_tix");
	    		$('#pwdts_sure').addClass('ok_tix');
	    		$('#pwdts_sure').text("");
	    		surepwdb=true;
	    		console.log(surepwdb);
	    	}
    	}

    });
    $('#pwdform').submit(function(){
    	console.log(oldpwd);
    	console.log(newpwd);
    	console.log(surepwdb);
    	if(oldpwd && newpwd && surepwdb){
    		return true;
    	}else{
    		alert("填写的信息不完整");
    		return false;
    	}
    });


    //邮箱验证
    $('#email_inp').blur(function(){
    	var value=$.trim($(this).val());
    	var reg=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    	if(value==""){
    		//不能位空
    		$('#email_info').addClass('no_tix');
    		$('#email_info').html("请输入邮箱");
    	}else{
    		if(!reg.test(value)){
				 	//$('#email_info').css("display","inline-block");
				 	$('#email_info').addClass("no_tix");
				 	$('#email_info').html("邮箱格式不正确！");
				 }else{
				 	$('#email_info').removeClass("no_tix");
				 	$('#email_info').text("");
				 	//$('#email_info').css("display","inline-block");
				 	$('#email_info').addClass("ok_tix");
				 }

    	}
    });
    var emailbool11=false;
    $('#sendMsg').click(function(){
    	var email=$.trim($('#email_inp').val());
    	//

    	$.post('<?php echo U('User/sendEmail');?>',{email:email}, function(msg){
					if(msg==null){
						//发送失败
						$('#email_info').addClass("no_tix");
						$('#email_info').html("发送邮箱失败");
					}else{
						//发送成功
						$('#email_info').removeClass("no_tix");
				 		$('#email_info').text("");
				 		$('#email_info').addClass("ok_tix");
					}
				});
   		 });
    $('#emailcode').blur(function(){
    	var value=$.trim($(this).val());
    	$.post('<?php echo U('User/checkEmail');?>',{emailcode:value},function(msg){
    		if(msg=="outtime"){
    			$('#code_div').addClass("no_tix");
    			$('#code_div').html("验证码过期了");
    			emailbool11=false;

    		}else if(msg=="no"){
    			$('#code_div').addClass("no_tix");
    			$('#code_div').html("验证码输入错误");
    			emailbool11=false;
    		}else{
    			$('#code_div').removeClass("no_tix");
    			$('#code_div').text("");
    			$('#code_div').addClass("ok_tix");
    			emailbool11=true;
    		}
    	});

    });
    $('#emailform').submit(function(){
    	if(emailbool){
    		return true;
    	}else{
    		alert("信息填写不完整");
    		return false;
    	}
    })









})
		</script>

		</div>
	</div>





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