<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>首页</title>
		<link rel="stylesheet" href="/TruckHome/truckhome/Public/home/news/css/public.css"/>
		<link rel="stylesheet" href="/TruckHome/truckhome/Public/home/news/css/index.css"/>
		<script type="text/javascript" src="/TruckHome/truckhome/Public/home/news/js/jquery-1.8.3.min.js"></script>
	</head>
	<body>
		<!--top-bar start -->
		<div class="top-bar">
			<div class="top-bar-inner">
				<?php if($_SESSION['user']== null): ?><div class="top-bar-sign">	你好！请
					<a href="<?php echo U('User/login');?>">登录</a> 或 <a href="<?php echo U('User/register');?>">注册</a>
				</div>
				<?php else: ?>
				<div class="top-bar-sign">	你好！
        			<a href="<?php echo U('User/userindex');?>"><?php echo ($_SESSION['user']['username']); ?></a>
					<a href="<?php echo U('User/logout');?>">退出</a>

                 <span class="site-map" id="site-map">网站地图</span>
			</div><?php endif; ?>
				卡车之家，领先的商用车互动服务平台!
			</div>
		</div>
		<!--top-bar  end-->
		<div class="clear"></div>
		<!--site-nav-wrapper start -->
		<div class="site-nav-wrapper">
			<h1 class="truckhome">
				<a href="" title="卡车之家">
					<img src="/TruckHome/truckhome/Public/home/news/images/logo.png" width="157px" height="58px" class="imglogo"/>
				</a>
			</h1>
			<div class="site-nav-2015 clearfix" id="sitenav">
				<dl class="site-nav-news">
						<dt><a href="<?php echo U('Xarticle/index');?>">资讯</a></dt>
						<dd>
							<a href="<?php echo U('Xarticle/index');?>">文章</a>
							<a href="<?php echo U('Sindex/index');?>">商城</a>
							<a href="<?php echo U('Lindex/index');?>">论坛</a>

							<a href="<?php echo U('Xproduct/imgindex');?>">图库</a>
						</dd>
				</dl>
				<dl class="site-nav-detail">
					<dt><a href="<?php echo U('Xproduct/index');?>">产品库</a></dt>
					<dd>
						<a href="<?php echo U('Xproduct/chaprice');?>">卡车报价</a>
						<a href="<?php echo U('Xproduct/imgindex');?>">卡车图库</a>
					<a href="<?php echo U('Xproduct/index');?>" class="new">车型大全</a>
					<a href="<?php echo U('Index/brandlist');?>">品牌大全</a>
					</dd>
				</dl>
				<dl class="site-nav-bbs">
					<dt><a href="<?php echo U('Lindex/index');?>">论坛</a></dt>
					<dd>
						<a href="<?php echo U('Lpost/index');?>">十大热帖</a>
						<a href="<?php echo U('Lpost/index');?>">最新帖子</a>
						<a href="<?php echo U('Xproduct/imgindex');?>">精华大图</a>
						<a href="<?php echo U('Lpost/index');?>">车型论坛</a>
					</dd>
				</dl>
				<dl class="site-nav-other">
					<dd>
						<a href="">二手卡车</a>
						<a href="">经销商</a>
						<a href="<?php echo U('Sindex/index');?>">配件商城</a>
						<a href="">手机版</a>
					</dd>
				</dl>
			</div>
		</div>
		<!--site-nav-wrapper  end-->

		<div class="clear"></div>
		<!--category-nav start -->
		<div class="category-nav clearfix" id="cartypeoen">
			<?php if(is_array($getCartypeOne)): $i = 0; $__LIST__ = $getCartypeOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/searchlist',array('id'=>$vo['id']));?>" class="<?php echo ($vo['classname']); ?>" title="<?php echo ($vo['name']); ?>"><?php echo ($vo['name']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>

		</div>

		<!--category-nav  end-->
		<div class="clear"></div>
		<div class="adimg">
			<img  src="<?php echo ($xadata1['picname']); ?>" onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/index/0f0002sMjSYXW-_UNXP8w0.gif'" title="" alt="" border="0" height="60" width="1000">
		</div>
		<!--hottruck 车型切换 start-->
		<div class="hottruck">
			<div class="same_truck2">
				<ul class="toggled" id="trucktTitle">
					<li id="sre1" class="menu_on">热门卡车 </li>
					<li id="sre2" class="menu_off">挂车·专用车·皮卡 </li>
					<li id="sre3" class="menu_off">天然气（LNG/CNG）车型 </li>
				</ul>
				<!-- <div class="hot_search">
					<input onkeydown="kswicth();" id="keyword" class="hot_stext" name="keyword" value="福田欧曼" onfocus="if(value==defaultValue){value='';this.style.color='#000'}" onblur="if(!value){value=defaultValue;this.style.color='#b2b2b2'}" style="color: rgb(178, 178, 178);">
					<input class="hot_button" onclick="swicth();" value="搜索" type="button">
				</div> -->
			</div>

			<div id="samew1" style="display: block!important;">
				<div class="hottruck_box">
					<?php if(is_array($tree)): $i = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><ul>

							<li class="li01"><a href="<?php echo U('Xproduct/index',array('id'=>$vo2['id']));?>" target="_blank"><?php echo ($vo2['name']); ?></a> </li>
								<?php if(is_array($vo2['subcat'])): $i = 0; $__LIST__ = $vo2['subcat'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?><li>

										<div><a href="<?php echo U('Index/searchlist',array('id'=>$vo3['id']));?>" target="_blank"><?php echo ($vo3['name']); ?></a></div>
										<a class="graya" href="<?php echo U('Xproduct/index',array('id'=>$vo3['id']));?>" target="_blank">报价</a>
										<a class="graya" href="<?php echo U('Xproduct/imgindex',array('id'=>$vo3['id']));?>" target="_blank">图库</a>
										<!-- <a class="graya" href="" target="_blank">论坛</a> -->

									</li><?php endforeach; endif; else: echo "" ;endif; ?>

							<li class="limore">
								<a class="graya" href="<?php echo U('Index/searchlist',array('id'=>$vo2['id']));?>" rel="nofollow" target="_blank">更多&gt;&gt;</a>
							</li>
						</ul><?php endforeach; endif; else: echo "" ;endif; ?>



				</div>
			</div>
			<div id="samew2" style="display: none;">
				<div class="hottruck_box">
					<?php if(is_array($tree2)): $i = 0; $__LIST__ = $tree2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><ul>

							<li class="li01"><a href="<?php echo U('Xproduct/index',array('id'=>$vo2['id']));?>" target="_blank"><?php echo ($vo2['name']); ?></a> </li>
								<?php if(is_array($vo2['subcat'])): $i = 0; $__LIST__ = $vo2['subcat'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?><li>

										<div><a href="<?php echo U('Index/searchlist',array('id'=>$vo3['id']));?>" target="_blank"><?php echo ($vo3['name']); ?></a></div>
										<a class="graya" href="<?php echo U('Xproduct/index',array('id'=>$vo3['id']));?>" target="_blank">报价</a>
										<a class="graya" href="<?php echo U('Xproduct/imgindex',array('id'=>$vo3['id']));?>" target="_blank">图库</a>
										<!-- <a class="graya" href="" target="_blank">论坛</a> -->

									</li><?php endforeach; endif; else: echo "" ;endif; ?>

							<li class="limore">
								<a class="graya" href="<?php echo U('Index/searchlist',array('id'=>$vo2['id']));?>" rel="nofollow" target="_blank">更多&gt;&gt;</a>
							</li>
						</ul><?php endforeach; endif; else: echo "" ;endif; ?>

				</div>
			</div>
			<div id="samew3" style="display: none;">
				<div class="hottruck_box">
					<?php if(is_array($tree3)): $i = 0; $__LIST__ = $tree3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><ul>

							<li class="li01"><a href="<?php echo U('Xproduct/index',array('id'=>$vo2['id']));?>" target="_blank"><?php echo ($vo2['name']); ?></a> </li>
								<?php if(is_array($vo2['subcat'])): $i = 0; $__LIST__ = $vo2['subcat'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?><li>

										<div><a href="<?php echo U('Index/searchlist',array('id'=>$vo3['id']));?>" target="_blank"><?php echo ($vo3['name']); ?></a></div>
										<a class="graya" href="<?php echo U('Xproduct/index',array('id'=>$vo3['id']));?>" target="_blank">报价</a>
										<a class="graya" href="<?php echo U('Xproduct/imgindex',array('id'=>$vo3['id']));?>" target="_blank">图库</a>
										<!-- <a class="graya" href="" target="_blank">论坛</a> -->

									</li><?php endforeach; endif; else: echo "" ;endif; ?>

							<li class="limore">
								<a class="graya" href="<?php echo U('Index/searchlist',array('id'=>$vo2['id']));?>" rel="nofollow" target="_blank">更多&gt;&gt;</a>
							</li>
						</ul><?php endforeach; endif; else: echo "" ;endif; ?>

				</div>
			</div>
		<script type="text/javascript">
			var sre1=document.getElementById("sre1");
			var sre2=document.getElementById("sre2");
			var sre3=document.getElementById("sre3");
			var samew1=document.getElementById("samew1");
			var samew2=document.getElementById("samew2");
			var samew3=document.getElementById("samew3");
			//samew1.style.display="none";
			samew2.style.display="none";
			samew3.style.display="none";
			sre1.onmouseover=function(){
				samew1.style.display="block";
				samew2.style.display="none";
				samew3.style.display="none";

				sre1.className="sre1lit";
				sre2.className="sre2li";
				sre3.className="sre3li";
			}
			sre2.onmouseover=function(){
				samew2.style.display="block";
				sre1.className="sre1li";
				sre2.className="sre2lit";
				sre3.className="sre3li";

				samew1.style.display="none";
				samew3.style.display="none";
			}
			sre3.onmouseover=function(){
				samew3.style.display="block";
				samew2.style.display="none";
				samew1.style.display="none";
				sre1.className="sre1li";
				sre3.className="sre3lit";
				sre2.className="sre2li";
			}
		</script>
		</div>


		<!--hottruck end-->

		<div class="clear"></div>
		<div class="adimg">
			<img  src="<?php echo ($xadata2['picname']); ?>" onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/index/0f0002sMjSYXW-_UNXP8w0.gif'" title="" alt="" border="0" height="60" width="1000">
			<img  src="<?php echo ($xadata3['picname']); ?>" onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/index/0f0002sMjSYXW-_UNXP8w0.gif'" title="" alt="" border="0" height="60" width="1000">
			<img  src="<?php echo ($xadata4['picname']); ?>" onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/index/0f0002sMjSYXW-_UNXP8w0.gif'" title="" alt="" border="0" height="60" width="1000">

		</div>
		<div class="clear"></div>
		<!--mainpart start  -->
		<div class="mainpart">
			<div class="main_floor f1">
				<div class="main_floor_l w1 f1">
					   <div id="fsD1" class="focus">
							<div id="D1pic1" class="fPic">


								<!--测试1 开始-->
								<!-- <?php $__FOR_START_17313__=1;$__FOR_END_17313__=5;for($k=$__FOR_START_17313__;$k < $__FOR_END_17313__;$k+=1){ ?><div style="display: block;" class="fcon">
										<a href="" title="<?php echo ($dlunbo2["title"]["$k"]); ?>" target="_blank">
											<img src="<?php echo ($dlunbo2["img"]["$k"]); ?>"
											onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/index/0103084300.jpg!340.jpg'"
											alt="<?php echo ($dlunbo2["title"]["$k"]); ?>" style="width: 340px; height: 200px; opacity: 1;">
										</a>
										<span class="shadow">
											<a href=""><?php echo ($dlunbo2["content"]["$k"]); ?></a>
										</span>
									</div><?php } ?> -->
								<!--测试1 结束-->
								<div style="display: block;" class="fcon">
									<a href="" title="<?php echo ($dlunbo2['title1']); ?>" target="_blank">
										<img src="/TruckHome/truckhome<?php echo ($dlunbo2['img1']); ?>"
										onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/index/0103084300.jpg!340.jpg'"
										alt="<?php echo ($dlunbo2['title1']); ?>" style="width: 340px; height: 200px; opacity: 1;">
									</a>
									<span class="shadow">
										<a href=""><?php echo ($dlunbo2['content1']); ?></a>
									</span>
								</div>

								<div style="display: none;" class="fcon">
									<a href="" title="<?php echo ($dlunbo2['title2']); ?>" target="_blank">
										<img src="/TruckHome/truckhome<?php echo ($dlunbo2['img2']); ?>"  onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/index/0103084130.jpg!340.jpg'" alt="<?php echo ($dlunbo2['title2']); ?>" style="width: 340px; height: 200px; opacity: 1;">
									</a>
									<span class="shadow">
										<a href=""><?php echo ($dlunbo2['content2']); ?></a>
									</span>
								</div>
								<div style="display: none;" class="fcon">
									<a href="" title="<?php echo ($dlunbo2['title3']); ?>" target="_blank">
										<img src="/TruckHome/truckhome<?php echo ($dlunbo2['img3']); ?>" onerror="this.onerror=null;this.src='_/TruckHome/truckhome/Public/home/news/images/index/0103084018.jpg!340.jpg'" alt="<?php echo ($dlunbo2['title3']); ?>" style="width: 340px; height: 200px; opacity: 1;">
									</a>
									<span class="shadow">
										<a href=""><?php echo ($dlunbo2['content3']); ?></a>
									</span>
								</div>
								<div style="display: none;" class="fcon">
									<a href="" title="<?php echo ($dlunbo2['title4']); ?>" target="_blank">
										<img src="/TruckHome/truckhome<?php echo ($dlunbo2['img4']); ?>" onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/index/0101220812.jpg!340.jpg'" alt="<?php echo ($dlunbo2['title4']); ?>" style="width: 340px; height: 200px; opacity: 1;">
									</a>
									<span class="shadow">
										<a href=""><?php echo ($dlunbo2['content4']); ?></a>
									</span>
								</div>
								<div style="display: none;" class="fcon">
									<a href="" title="<?php echo ($dlunbo2['title5']); ?>" target="_blank">
										<img src="/TruckHome/truckhome<?php echo ($dlunbo2['img5']); ?>" alt="<?php echo ($dlunbo2['title5']); ?>"  onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/index/0101220400.jpg!340.jpg'" style="width: 340px; height: 200px; opacity: 1;">
									</a>
									<span class="shadow">
										<a href=""><?php echo ($dlunbo2['content5']); ?></a>
									</span>
								</div>

							</div>
							<div class="fbg">
								<div class="D1fBt" id="D1fBt">
									<a href="" data="0" target="_self" class=""><i>1</i></a>
									<a class="" data="1" href="" target="_self"><i>2</i></a>
									<a class="" data="2" href="" target="_self"><i>3</i></a>
									<a class="current" data="3" href="" target="_self"><i>4</i></a>
									<a class="" data="4" href="" target="_self"><i>5</i></a>
								</div>
							</div>
							<span class="skip prev"></span>
							<span class="skip next"></span>
						</div>
						<dd class="focus_picnew">
							<?php if(is_array($newdata1)): $i = 0; $__LIST__ = array_slice($newdata1,0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank"><?php echo (msubstr($vo['title'],0,14,'utf-8',false)); ?></a>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
						</dd>
						<dd class="focus_picnew">
							<?php if(is_array($newdata1)): $i = 0; $__LIST__ = array_slice($newdata1,2,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank"><?php echo (msubstr($vo['title'],0,14,'utf-8',false)); ?></a>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
						</dd>

					</div>
					<div class="main_floor_m w2 f1">
						 <h1>
							<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$xartone['id']));?>" target="_blank"><?php echo (msubstr($xartone['title'],0,16,'utf-8',false)); ?></a>
						 </h1>
				  <ul class="newslist1">
					<?php if(is_array($xartall)): $i = 0; $__LIST__ = $xartall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="<?php echo U('Xarticle/index',array('id'=>$vo['acid']));?>" target="_blank">[<?php echo ($vo['name']); ?>]</a>&nbsp;
							<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank"><?php echo (msubstr($vo['title'],0,16,'utf-8',true)); ?></a>&nbsp;

						</li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
			</div>
			<div class="main_floor_r w3 f1">
		  <!--品牌列表start-->
			   <div class="brand">
					<h2 class="bartitle"><a href="<?php echo U('Index/brandlist');?>">品牌大全</a><a href="<?php echo U('Index/brandlist');?>" class="checkmore">更多&gt;&gt;</a></h2>
					<dl>
						<?php if(is_array($xbdata)): $i = 0; $__LIST__ = $xbdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo U('Index/brandlist',array('id'=>$vo['id']));?>" target="_blank"><?php echo ($vo['name']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
			  </div>
			  <!--品牌列表end-->
			</div>
		</div>
		<div class="main_floor f2">
			<div class="main_floor_l w1 f2">
				<div class="hottopic">
					<h2 class="bartitle">
						<a href="">热点专题</a>
						<a href="" class="checkmore">更多&gt;&gt;</a>
					</h2>
					<dl>
						<dt>
							<a href="" target="_blank" title="伟博思通驻车加热系统 ">
								<img src="/TruckHome/truckhome/Public/home/news/images/index/1224103238.jpg" alt="伟博思通驻车加热系统 " height="97" width="165"><br>伟博思通驻车加热系统
								</a>
						</dt>
						<dt class="xy">
							<a href="" target="_blank" title="2015卡车之家年度车型评选">
								<img src="/TruckHome/truckhome/Public/home/news/images/index/1223175429.jpg" alt="2015卡车之家年度车型评选" height="97" width="165"><br>2015卡车之家年度车型评选
							</a>
						</dt>
					</dl>
					 <ul>
					 	<?php if(is_array($xhotart)): $i = 0; $__LIST__ = $xhotart;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
								<a target="_blank" href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo['title'],0,20,'utf-8',true)); ?></a><span><?php echo date('n月-j日',$vo['atime']);?></span>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="main_floor_m w2 f1">
				<ul class="newslist1" style="padding-top:4%">
					<?php if(is_array($xcardata)): $i = 0; $__LIST__ = $xcardata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="<?php echo U('Index/searchlist',array('id'=>$vo['id']));?>" target="_blank">[<?php echo ($vo['name']); ?>]</a>&nbsp;
							<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank"><?php echo (msubstr($vo['title'],0,20)); ?></a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="main_floor_r w3 f2">
			  <!-- 广告位：网站首页摩天20141203 -->
			   <div class="ggbannernew">
					<div id="PAGE_AD_1014940">
						<div id="_6xjrpl0k9vf">
							<img src="/TruckHome/truckhome/Public/home/news/images/index/0f000QYBwm8ImLE-DFJd4s.jpg" title="" alt="" border="0" height="300" width="205">
						</div>
					</div>
			   </div>
			   <!-- 广告位：网站首页摩天20141203end -->
			</div>



		</div>
	</div>

		<!--mainpart end  -->
		<!--ad start  -->
		<div class="clear"></div>
		<div class="adimg">


			<img  src="<?php echo ($xadata5['picname']); ?>" onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/index/0f0002sMjSYXW-_UNXP8w0.gif'" title="" alt="" border="0" height="60" width="1000">


		</div>
		<div class="clear"></div>
		<!--ad end  -->
		<!--文章父类分类的文章信息 开始-->
		<div class="mainpart">
  			<div class="main_floor_l straight1 w1">
    <!--论坛推荐start-->
   			 	<div class="forum">
      				<div class="hottopic">
        				<h2 class="bartitle">
        					<a href="">卡车论坛推荐</a>
        					<span class="recommend">
	        					<a href="" target="_blank">进入论坛</a> ｜
	        					<a href="" target="_blank">注册用户</a>
        					</span>
        				</h2>

                		<dl>
           					 <dt>
           					 	 <a href="" target="_blank" title="">
           					 	 	 <img src="/TruckHome/truckhome/Public/home/news/images/011.jpg" alt="" height="100" width="170"><br>满月复活陆地航母 沃尔沃石
           					 	 </a>
           					 </dt>
           					 <dt class="xy">
           					 	<a href="" target="_blank" title="">
           					 	 	 <img src="/TruckHome/truckhome/Public/home/news/images/012.jpg" alt="" height="100" width="170"><br>满月复活陆地航母 沃尔沃石
           					 	 </a>
           					 </dt>
          				</dl>

         				 <ul>
         				 	<?php if(is_array($lpostdata)): $i = 0; $__LIST__ = $lpostdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            					<a href="" target="_blank">
            						<font color="#d60000"><?php echo (msubstr($vo['title'],0,16,'utf-8',false)); ?></font>
            					</a>
            					<span>
            						<a target="_blank" href=""><?php echo ($vo['username']); ?></a>
            					</span>
            				 </li><?php endforeach; endif; else: echo "" ;endif; ?>
            			</ul>



      			</div>
    		</div>
    <!--论坛推荐end-->
   			<div class="tannel1 h315">
                 <h2 class="bartitle">
	                 <a href="<?php echo U('Xarticle/index',array('id'=>6));?>">政策法规</a>
	                 <a href="<?php echo U('Xarticle/index',array('id'=>6));?>" class="checkmore">更多&gt;&gt;</a>
                 </h2>
        		<ul>
        			<?php if(is_array($zcdata1)): $i = 0; $__LIST__ = $zcdata1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<span>
							<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank" title="<?php echo ($vo['title']); ?>"><?php echo (msubstr($vo['title'],0,20,'utf-8',false)); ?></a>
							</span>
							<label><?php echo date('n月-j日',$vo['atime']);?></label>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>

        	</div>

    <!--养车用车start-->
    	<div class="tannel1">
         	<h2 class="bartitle">
         		<a href="<?php echo U('Xarticle/index',array('id'=>8));?>">养车用车</a>
         		<a href="<?php echo U('Xarticle/index',array('id'=>8));?>" class="checkmore">更多&gt;&gt;</a>
         	</h2>
      		<ul>

				<?php if(is_array($zcdata5)): $i = 0; $__LIST__ = $zcdata5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<span>
							<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank" title="<?php echo ($vo['title']); ?>"><?php echo (msubstr($vo['title'],0,20,'utf-8',false)); ?></a>
							</span>
							<label><?php echo date('n月-j日',$vo['atime']);?></label>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>

    	</div>
    <!--养车用车end-->
  		</div>
  		<!--1 开始-->
  		<div class="main_floor_m straight1 w2">
   				 <!--卡车新闻start-->
    		<div class="tannel2">
      			<div class="newslist2">
      				 <h2 class="bartitle">
      				 	<a href="<?php echo U('Xarticle/index',array('id'=>4));?>">卡车新闻</a>
      				 	<a href="<?php echo U('Xarticle/index',array('id'=>4));?>" class="checkmore">更多&gt;&gt;</a>
      				 </h2>
       				<ul>
						<?php if(is_array($zcdata2)): $i = 0; $__LIST__ = $zcdata2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<span>
							<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank" title="<?php echo ($vo['title']); ?>"><?php echo (msubstr($vo['title'],0,20,'utf-8',false)); ?></a>
							</span>
							<label><?php echo date('n月-j日',$vo['atime']);?></label>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>

      			</div>
    		</div>
    <!--卡车新闻end-->
    <!--行情导购start-->
    		<div class="tannel2">
     			 <div class="newslist2">
       				<h2 class="bartitle">
	       				<a href="<?php echo U('Xarticle/index',array('id'=>7));?>">行情导购</a>
	       				<a href="<?php echo U('Xarticle/index',array('id'=>7));?>" class="checkmore">更多&gt;&gt;</a>
       				</h2>
        			<ul>
						<?php if(is_array($zcdata4)): $i = 0; $__LIST__ = $zcdata4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<span>
							<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank" title="<?php echo ($vo['title']); ?>"><?php echo (msubstr($vo['title'],0,20,'utf-8',false)); ?></a>
							</span>
							<label><?php echo date('n月-j日',$vo['atime']);?></label>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

					</ul>

      			</div>
    		</div>
    		<!--行情导购end-->
   			 <!--试驾评测start-->
    		<div class="tannel2">
      			<div class="newslist2">
       				<h2 class="bartitle"><a href="<?php echo U('Xarticle/index',array('id'=>9));?>">试驾评测</a>
       				<a href="<?php echo U('Xarticle/index',array('id'=>9));?>" class="checkmore">更多&gt;&gt;</a></h2>
        			<ul>
						<?php if(is_array($zcdata6)): $i = 0; $__LIST__ = $zcdata6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<span>
							<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank" title="<?php echo ($vo['title']); ?>"><?php echo (msubstr($vo['title'],0,20,'utf-8',false)); ?></a>
							</span>
							<label><?php echo date('n月-j日',$vo['atime']);?></label>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

					</ul>

      			</div>
    		</div>
    <!--试驾评测start-->
  		</div>
  		<!--1结束-->
		<!--2开始-->
		<div class="main_floor_r w3">
    <!--热点内容start-->
        	<div class="hottopic2">
        	   <h2 class="bartitle">行业资讯</h2>
        	        <ul>
        	        	<?php if(is_array($zcdata3)): $i = 0; $__LIST__ = $zcdata3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank" title="<?php echo ($vo['title']); ?>"><?php echo (msubstr($vo['title'],0,16,'utf-8',false)); ?></a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
        	        </ul>
        	    </div>
    <!--热点内容end-->
    <div class="adver1">

    	<div class="speganbanner">
        	<div id="PAGE_AD_1014946"><div id="_7gwv9idszgf">
        		<img src="/TruckHome/truckhome/Public/home/news/images/ad011.jpg" title="" alt="" border="0" height="116" width="205">

        	</div></div>
        </div>

    	<div class="speganbanner">
        	<div id="PAGE_AD_1014947"><div id="_1aknb38ph7k">
        		<img src="/TruckHome/truckhome/Public/home/news/images/ad012.jpg" title="" alt="" border="0" height="116" width="205">
        	</div></div>
        </div>

    	<div class="speganbanner">
        	<div id="PAGE_AD_1014948"><div id="_i74sxg87idc">
        		<img src="/TruckHome/truckhome/Public/home/news/images/ad013.jpg" title="" alt="" border="0" height="116" width="205">
        	</div></div>
        </div>

    	<div class="speganbanner">
        	<div id="PAGE_AD_1014949"><div id="_iid3l0no85d">
        		<img src="/TruckHome/truckhome/Public/home/news/images/ad014.jpg" title="" alt="" border="0" height="116" width="205">
        	</div></div>
        </div>

    </div>
  </div>
		<!--2结束-->
  		</div>

		<!--文章父类分类的文章信息 结束-->

		<!--排行榜 start-->
		<div class="mainpart">
			<div class="rankleft">
				<h2 class="bartitle">热门文章排行</h2>
				<div class="same_chd2">
				  <ul>
					<li id="sf1"  class="menu_on">最新文章排行榜</li>
					<!-- <li id="sf2"  class="menu_off">一周内文章排行榜</li> -->
				  </ul>
				</div>

				<div id="samef1" class="rankleftwz">
					<ul>
						<?php if(is_array($xdata2)): $i = 0; $__LIST__ = $xdata2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo['title'],0,20,'utf-8',false)); ?></a><span><?php echo date('n月-j日',$vo['atime']);?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>

					</ul>
				</div>



			</div>
			<div class="rankleft">
				<div class="rankleftitle">
				  <h2 class="bartitle">车型关注度</h2>
				</div>
				<div class="same_chd2">
					<span class="s1">品牌</span>
					<span class="s2">车型</span>
					<span class="s3">周关注</span>
				</div>
				<ul class="rankmid">

					<?php if(is_array($data4)): $i = 0; $__LIST__ = $data4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="new<?php echo ($i); ?>">
							<span class="s4">
								<a target="_blank" href="<?php echo U('Index/brandlist',array('id'=>$vo['id']));?>" title="<?php echo ($vo['bname']); ?>"><?php echo ($vo['bname']); ?></a>
							</span>
							<span class="s2">
								<a target="_blank" href="<?php echo U('Index/searchlist',array('id'=>$vo['id']));?>" title=""><?php echo ($vo['name']); ?></a>
							</span>
							<span class="s3"><font><?php echo ($vo['count']); ?></font></span>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
			  </div>
			<div class="rankright">
				<div class="rankleftitle">
				  <h2 class="bartitle">随便看看</h2>
				</div>
				<div class="same_che2">
				  <ul>
					<li id="sg1"  class="menu_on">其他新闻热点</li>
				<!-- 	<li id="sg2"  class="menu_off">一周内热帖排行榜</li> -->
				  </ul>
				</div>
				<div id="sameg1" class="rankleftwz xy2">
					<ul>
						<?php if(is_array($data5)): $i = 0; $__LIST__ = $data5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" title="赶个新年，凑凑热闹。东北三省第一辆"><?php echo (msubstr($vo['title'],0,20,'utf-8',true)); ?></a><span><?php echo date('n月-j日',$vo['atime']);?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>


					</ul>
				</div>


			  </div>
		</div>
		<!--排行榜 end-->

		<!--ad start  -->
		<div class="clear"></div>
		<div class="adimg">


			<img  src="<?php echo ($xadata6['picname']); ?>" onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/index/0f0002sMjSYXW-_UNXP8w0.gif'" title="" alt="" border="0" height="60" width="1000">


		</div>
		<div class="clear"></div>
		<!--ad end  -->
		<!--友情链接  start-->
		<div class="mainpart">
		  <h2 class="bartitle2"><a href="">友情链接</a></h2>
		  <p class="friendlink">
		  	<?php if(is_array($linkdata)): $i = 0; $__LIST__ = $linkdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo['address']); ?>" target="_blank"><?php echo ($vo['aname']); ?></a><em>|</em><?php endforeach; endif; else: echo "" ;endif; ?>
		  </p>
		</div>
		<!--友情链接  end-->

		<!--公共尾部 start-->
		<div class="truckhome-footer-2015">
			<span class="icon"></span>
			<div class="share" id="share">
				分享：<div id="share_tools_360che" class="share-tools-360che">
					<a href="" class="weibo">新浪微博</a>
					<a href="" class="qzone">QQ空间</a>
					<span class="wechat">微信</span>
					<div id="page_qrcode"></div>
					</div>
			</div>
			<span class="industrial-logo">
				<img src="/TruckHome/truckhome/Public/home/news/images/index/gs.gif">
			</span>
			<p>
				<a href="">关于我们</a>|
				<a href="">联系我们</a>|
				<a href="">工作机会</a>|
				<a href="">网站地图</a>|
				<a href="" style="color:#d60000;">广告合作</a>|
				<a href="" class="iphone">iPhone客户端</a>|
				<a href="" class="android">Android客户端</a>|
				<a href="">触屏版</a>|<a href="">意见反馈</a>
			</p>
			<p>经营许可证编号：京ICP证080575号 / 京ICP备09080840号 京公网安备110105007230</p>
			<p>Copyright © 2009 - <script>document.write(new Date().getFullYear());</script>2016 www.360che.com All Rights Reserved.<a href="">卡车之家</a>版权所有</p>
		</div>

		<!--公共尾部 end-->
		<!--回顶部  start-->
		<div class="gotop02" id="gotop">
			<a id="feedback2" href="" target="_blank" class="gotop02-con">
				<i class="icon-book icon-book1"></i><span>意见反馈</span>
			</a>
			<a id="backtop" class="gotop02-con" href="javascript:void(0)" style="" target="_self"><i class="icon-top"></i><span>返回顶部</span>
			</a>
		</div>
		<!--回顶部  end-->
	<script type="text/javascript" src="/TruckHome/truckhome/Public/home/news/js/index/tuplunbo.js"></script>


	</body>
</html>