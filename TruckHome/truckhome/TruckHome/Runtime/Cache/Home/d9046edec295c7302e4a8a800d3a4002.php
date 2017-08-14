<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>用户中心</title>
		<link rel="stylesheet" href="/threeall/truckhome/Public/home/news/css/public.css"/>
		<link rel="stylesheet" href="/threeall/truckhome/Public/home/news/css/usercenter.css"/>
		<script type="text/javascript" src="/threeall/truckhome/Public/home/news/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/threeall/truckhome/Public/home/news/js/oneself.js"></script>
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
				<a href="<?php echo U('Lindex/index');?>"><img src="/threeall/truckhome/Public/home/news/images/kczj.jpg"></a>
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
				
<?php echo W('Menu/userleft');?>
<div class="prefirght">
<!--我的首页 开始-->
					<div class="myhomebox">
						<div class="my_h_language">欢迎您回到卡车之家！</div>
						<div class="my_h_information">
							<div class="my_h_information_a">
								<ul class="information1">
									<li><label>帖子：</label><span><?php echo ($postcount); ?></span> 篇</li>

									<li><label>积分：</label><span><?php echo ($data['count']); ?></span></li>
								</ul>
								<ul class="information2">
									<input value="{8---1}" type="hidden">
									<li>
										<label>手机号码：</label>
										<span class="certification" style="color:#1e6cc1">
											<font>已认证</font>
										</span>
										<div><img src="/threeall/truckhome/Public/home/news/images/tilv.gif"></div>
									</li>

									<li>
										<label>级别：</label>
										<span><strong>初级用户</strong></span>
									</li>
								</ul>
								<ul class="information3">



									<li>
										<label>注册时间：</label>
										<span><?php echo date("Y-m-d",$data['addtime']);?></span>
									</li>
									<li>
										<label>最后一次发帖时间：</label>
										<span>
											<?php if($post1 == 0): ?>暂无发帖
											<?php else: echo date('Y-m-d',$post1['mtime']); endif; ?>
										</span>
									</li>
								</ul>

							</div>
						</div>

                    </div>
					<!--我的首页 结束-->


				<!--帖子列表 开始-->
				<div class="post_list">
					<div class="post_list_label">
						<ul>
							<li class="tab" id="postli">
								<a href="" class="tab_a tab_on tabNormal" id="pali">我发的主帖</a>
							</li>

							<li class="tab_line" style="display:none;"></li>
	                        <li class="tab" id="replyli">
								<a href="" class="tab_a tabNormal" id="rali">我发的回帖</a>
							</li>

							<li class="tab_line"></li>

						</ul>
					</div>
					<!--我发的主帖 开始-->
					<div class="post_center" id="tabpanel1">
					<div class="post_cen_label">
						<ul>
							<li class="post">
								<a href="#postpanel1" class="tab_a1 tab_on1 tabNormal1">全部帖子</a>
							</li>

                            <li class="post_more">我的发帖：共有 <span><?php echo ($postcount); ?></span> 个主帖</li>
                        </ul>
					</div>
					<div class="post_wdzt" id="postpanel1">
						<?php if(is_array($fpost)): $i = 0; $__LIST__ = $fpost;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="post_wdzt_list">
							<div class="p_wdzt_la">
								<div class="p_wdzt_la1">
									<a href="<?php echo U('Lpost/detail',array('id'=>$vo['id']));?>" target="">
									<?php echo ($vo['title']); ?>
									</a>

								</div>
							</div>
							<div class="p_wdzt_lb">
								<div class="p_wdzt_lb1"><?php echo date('Y-m-d H:i:s',$vo['mtime']);?></div>
								<div class="p_chance_box"></div>
								<div class="p_wdzt_lb3"><a href="<?php echo U('User/delpost',array('id'=>$vo['id']));?>">删除</a></div>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>

					</div>
				<!--我发的主帖 结束-->


					<!--我发出的回复 开始-->
					<div class="post_center" id="tabpanel2" style="display:none">
					<div class="my_recieved_numb">我发出的回复：共 <a href=""><?php echo ($replycount); ?></a> 个</div>
					<?php if(is_array($freply)): $i = 0; $__LIST__ = $freply;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="post_wdzt_list">
							<div class="p_wdzt_la">
								<div class="p_wdzt_la1">
									<a href="<?php echo U('Lpost/detail',array('id'=>$vo['tid']));?>" target="">
									<?php echo htmlspecialchars_decode($vo['content']);?>
									</a>

								</div>
							</div>
							<div class="p_wdzt_lb">
								<div class="p_wdzt_lb1"><?php echo date('Y-m-d H:i:s',$vo['ctime']);?></div>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>

			<script>
				$(function(){
					$('#postli').mouseover(function(){
						$('#tabpanel1').css("display","block");
						$('#tabpanel2').css("display",'none');
						$('#pali').addClass("tab_on");
						$('#rali').removeClass("tab_on");
					})
					$('#replyli').mouseover(function(){
						$('#tabpanel1').css("display","none");
						$('#tabpanel2').css("display",'block');
						$('#rali').addClass("tab_on");
						$('#pali').removeClass("tab_on");
					})
				})


			</script>
			<!--我收到的回复 结束-->

			</div>
		<!--帖子列表 结束-->
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