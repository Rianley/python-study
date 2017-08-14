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
		
<link rel="stylesheet" href="/TruckHome/truckhome/Public/home/news/css/zxdetail.css"/>
<link rel="stylesheet" href="/TruckHome/truckhome/Public/home/news/css/zxdetail2.css"/>
<div class="clear"></div>
		<!--guidebar  文章详情里面的导航开始-->
		<div class="guidebar">
			<a href="<?php echo U('Index/index');?>" target="_blank" class="first">首页</a><em>|</em>
			<a href="<?php echo U('Xarticle/index',array('id'=>4));?>" >卡车新闻</a>
			<a href="<?php echo U('Xarticle/index',array('id'=>5));?>" >行情导购</a>
			<a href="<?php echo U('Xarticle/index',array('id'=>8));?>" >养车用车</a>
			<a href="<?php echo U('Xarticle/index',array('id'=>9));?>" >试驾评测</a>
			<a href="<?php echo U('Xarticle/index',array('id'=>6));?>" >政策法规</a><em>|</em>
			<a href="<?php echo U('Xproduct/index');?>" >卡车报价</a>
			<a href="<?php echo U('Xproduct/imgindex');?>" >卡车图库</a>
			<a href="<?php echo U('Xarticle/index');?>">图片新闻</a><em>|</em>
			<a href="<?php echo U('Lindex/index');?>"  class="last">卡车论坛</a><i></i>
			<a href="<?php echo U('Sindex/index');?>" class="last">商城</a>
		</div>
		<!--guidebar  文章详情里面的导航结束-->
		 <!--ad start-->
		<div class="clear"></div>
		<div class="adimg">
			<img src="/TruckHome/truckhome/Public/home/news/images/zxdad1.jpg" title="" alt="" border="0" height="60" width="1000">

		</div>
		<div class="clear"></div>
		<!--ad end-->
		<!--地址导航开始-->
		<div class="map_bane">
			<div class="logowei">
				<a href=""><img src="/TruckHome/truckhome/Public/home/news/images/logo.jpg" alt="卡车之家"></a>
			</div>
			<div class="mapdz">您的当前位置：
				<a href="<?php echo U('Index/index');?>" class="gred6">首页</a> &gt;
				<a href="<?php echo U('Xarticle/index',array('id'=>$data3['id']));?>" class="gred6"><?php echo ($data3['name']); ?></a> &gt;
				<a href="<?php echo U('Xarticle/index',array('id'=>$data2['id']));?>" class="gred6"><?php echo ($data2['name']); ?></a>
			</div>
			<!--搜索-->
			<div class="serch">
				<form accept-charset="UTF-8" method="get"  action="<?php echo U('Xarticle/index');?>" target="_blank">
					<span>
						<input name="title" id="keyword" class="inp1" placeholder="请输入关键词进行搜索" type="text">
						<input class="btn1"  value="搜索" type="submit">
					</span>
				</form>
			</div>
		</div>
		<!--地址导航结束-->
		<!--文章详情内容 conterbf start -->
		<div class="conterbf">
			<div class="columnleft">
				<div class="columnleft_news">
					<!-- 判断大字体-->

					<div class="article">
						<h1><?php echo ($data1['title']); ?></h1>
						<div class="article_info">
							<span><?php echo date('Y年m月d日',$data1['atime']);?></span>
							<span>类型：<?php echo ($data1['atype']==1?"原创":"转载"); ?></span>
							<span>来源：<?php echo ($data1['origin']); ?></span><span>作者：<?php echo ($data1['author']); ?></span>
							<span>编辑：<?php echo ($data1['editor']); ?></span>

						</div>
						<div class="con_banner gdgd1">
							<div class="adver600_60">
								<div id="PAGE_AD_993796">
									<div id="_z3mghddubvn">
										<img src="/TruckHome/truckhome/Public/home/news/images/zxad5.jpg"/>
									</div>
								</div>
							</div>  <!--卡车新闻-->
						</div>
						<div class="p font16" id="ArticleContent">
							<p><?php echo ($data1['content']); ?></p>

						</div>
						<div class="x_wzbq">
							<span>文章标签：</span>
							<ul>
								<li><a href="" target="_blank">专用车导购</a></li>
								<li><a href="" target="_blank">企业动向</a></li>
								<li><a href="" target="_blank">改装</a></li>
							</ul>
						</div>
						<div class="fenxiang">
							<ul data-bd-bind="1452076851953" class="bdsharebuttonbox bdshare-button-style0-24" data-tag="share_1">
								<li>分享：</li>
								<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

							</ul>
						</div>
					</div>

					<div class="frcomment">
						<input id="maxFloor" value="11" type="hidden"><a name="forms"></a>
							<div class="frcomment_h3">
								<h3><span>网友评论</span></h3>
								<a href="" class="gred9">已有
									<span class="red" id="totalReplayNum"><?php echo ($data8); ?></span> 条评论
								</a>
							</div>
							<div class="frcm_box">
								<?php if($_SESSION['user']!= null): ?><div class="frcm_box_b" id="welcomebox">
										<div class="frcm_boxb1">欢迎您

											<?php echo ($_SESSION['user']['username']); ?>
										 <a href="" target="_blank">进入论坛</a> |
									 	<a href="<?php echo U('User/logout');?>">退出登录</a>
										 </div>
									</div>

								<?php else: ?>
									<div class="frcm_box_a" id="div_login">
										<form method="post" name="login" action="<?php echo U('User/loginaction');?>">


											<div class="frcm_boxa1">
												<input id="username" name="name" class="usename" placeholder="用户名或手机" type="text">
												<input id="password" name="password" class="password" placeholder="密码" type="password">
												<input name="submit" value="登录" class="btnlogin" type="submit">
											</div>
											<div class="frcm_boxa2">
												<a href="<?php echo U('User/forgetpwd');?>" target="_blank">忘记密码？</a> |
												<a href="<?php echo U('User/register');?>" target="_blank">注册</a>
											</div>
										</form>
									</div><?php endif; ?>



								<form method="post" name="postform" id="postform" action="<?php echo U('Xarticle/addCommment');?>">
									<div class="frcm_box_c">

										<textarea name="content" class="cri-others1_all0917" id="message" onblur="checkNull();" onkeyup="checkValue();" onkeydown="keycheckmessage(event)" onfocus="javascript:jQuery('#isReplay').val('2');" cols="" rows="" style="color:#c4c4c4; resize: none; max-height: none; overflow-y: hidden;" onclick="if (this.value == '卡车之家提示您：留言中请不要恶意攻击国家和其他会员；不要发布任何广告性质的回复，不要恶意灌水。提升卡车人群体形象，靠你，靠我，靠大家。') {this.value='';this.style.color='#000';} ">卡车之家提示您：留言中请不要恶意攻击国家和其他会员；不要发布任何广告性质的回复，不要恶意灌水。提升卡车人群体形象，靠你，靠我，靠大家。</textarea>

										<input type="hidden" name="pid" value="<?php echo intval(I('get.rid',0));?>"/>
										<input type="hidden" name="aid" value="<?php echo intval(I('get.id'));?>"/>
										<div class="frcm_box_ca">
											<div class="frcm_box_ca1">
												<span></span>
												<a href="" target="_blank">
												<em class="xinlang"></em>
												</a>
												<a href="" target="_blank"><em class="qqlog"></em></a>
												<a href="" target="_blank"><em class="weixinlog"></em></a>
											</div>
											<div class="frcm_box_ca2">
												<span></span>
												<!-- <a  class="fabu" id="submitHref" >马上发表</a> -->
												<input  value="马上发表" class="btnlogin" type="submit">
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="commentbox">
								<div class="comment1" id="bbsReplayBox">
									<?php if(is_array($tree)): $k = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($vo['pid'] == 0): ?><div class="comment2">
												<div class="comment_face">
													<a href="" target="_blank">
													<img src="/TruckHome/truckhome/Public<?php echo ($vo['picname']); ?>" ></a>
												</div>
												<div class="comment_cent">
													<div class="comment_cent1">
														<div class="comment_time">[<span><?php echo ($k); ?>楼</span>]</div>
														<div class="comment_name">
															<a target="_blank" href=""><?php echo ($vo['username']); ?></a>
														</div>
														<p><?php echo ($vo['content']); ?></p>
														<div class="comment_bar">
															<span><?php echo date('Y-m-d H:i',$vo['atime']);?></span>
															<!-- <a href="<?php echo U('Xarticle/addCommment',array('rid'=>$vo['id']));?>#message">回复</a> -->

															<a href="?rid=<?php echo ($vo['id']); ?>#forms">回复</a>
														</div>
													</div>
												</div>
											</div>

										</else>
										<?php if(is_array($vo['subcat'])): $i = 0; $__LIST__ = $vo['subcat'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><div class="comment2">
											<div class="comment_face">
												<a href="" target="_blank">
													<img src="/TruckHome/truckhome/Public<?php echo ($vo2['picname']); ?>" >
												</a>
											</div>
											<div class="comment_cent">
												<div class="comment_cent1">
													<div class="comment_time">[<span><?php echo ($k); ?>楼</span>]</div>
													<div class="comment_name">
														<a target="_blank" href=""><?php echo ($vo2['username']); ?></a>
													</div>

														<div class="comment_con">
															<p>
																<span>原帖由</span>
																<a href="" target="_blank"><?php echo ($vo['username']); ?></a>
																<span>于</span><?php echo date('Y-m-d H:i',$vo['atime']);?><span>发表在</span> <?php echo ($k); ?>楼
															</p>
															<p><?php echo ($vo['content']); ?></p>
														</div>

													<p><?php echo ($vo2['content']); ?></p>
													<div class="comment_bar">
													<span><?php echo date('Y-m-d H:i',$vo2['atime']);?></span>
														<a href="?rid=<?php echo ($vo['id']); ?>#forms" class="gred9">回复</a>
													</div>
												</div>
											</div>
										</div><?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>







							<!-- <div class="dianmore">
								<a href="" target="_blank" class="gred9">共有
								<font class="red" id="lastBBsNum"><?php echo ($data8); ?></font>
								条评论，点击查看全部</a>
							</div> -->
						</div>
					</div>
				</div>

				<!-- 	<div class="brad_cexbox">
						<div class="brad_cex">
						  <ul>
							<li><a href="javascript:" class="tab_a tabNormala  tab_ona" data-rel="tabpaneb1">推荐专用车</a></li>
						  </ul>
						</div>
						<div class="brad_cex_ul" id="tabpaneb1">
						<a href="" class="gred3" target="_blank">冷藏车</a><span>|</span>
						<a href="" class="gred3" target="_blank">油罐车</a><span>|</span>
						<a href="" class="gred3" target="_blank">随车吊</a><span>|</span>
						<a href="" class="gred3" target="_blank">消防车</a><span>|</span>
						<a href="" class="gred3" target="_blank">清障车</a><span>|</span>
						<a href="" class="gred3" target="_blank">冷藏车</a><span>|</span>
						<a href="" class="gred3" target="_blank">油罐车</a><span>|</span>
						<a href="" class="gred3" target="_blank">随车吊</a><span>|</span>
						<a href="" class="gred3" target="_blank">消防车</a><span>|</span>
						<a href="" class="gred3" target="_blank">清障车</a><span>|</span>
						<a href="" class="gred3" target="_blank">冷藏车</a><span>|</span>
						<a href="" class="gred3" target="_blank">油罐车</a><span>|</span>
						<a href="" class="gred3" target="_blank">随车吊</a><span>|</span>
						<a href="" class="gred3" target="_blank">消防车</a><span>|</span>
						<a href="" class="gred3" target="_blank">清障车</a><span>|</span>
						<a href="" class="gred3" target="_blank">冷藏车</a><span>|</span>
						<a href="" class="gred3" target="_blank">油罐车</a><span>|</span>
						<a href="" class="gred3" target="_blank">随车吊</a><span>|</span>
						<a href="" class="gred3" target="_blank">消防车</a><span>|</span>

					</div>
					</div> -->

				</div>
			</div>
			<!--left end-->
			<!--right start-->
			<div class="columnright">

				<div class="cennero">
					<div class="cennerh3"><h3>一周热门文章</h3></div>
					<ul class="numbphc numbphcnew">
						<?php if(is_array($data4)): $i = 0; $__LIST__ = $data4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
								<em class="orange<?php echo ($i); ?>"></em>
								<div class="hotttie">
									<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>" target="_blank" class="gred3" title="<?php echo ($vo['title']); ?>"><?php echo (msubstr($vo['title'],0,20,'utf-8',false)); ?></a>
								</div>
								<label><a href="添加锚点来做" target="_blank">
								<em class="pinglun"></em>
								<?php echo ($vo['num']); ?></a>
								</label>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>

					</ul>

				</div>
				<div class="cennero">
					<div class="cennerh3">
						<h3>热门车系关注度排行</h3>
					</div>
					<div class="numbphc duanwhit">
						<ul>
							<?php if(is_array($data5)): $i = 0; $__LIST__ = $data5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
									<em class="orange<?php echo ($i); ?>"></em>
									<div>
										<a href="" class="gred3" target="_blank"><?php echo ($vo['name']); ?></a>
									</div>
									<span><a href="" class="red" target="_blank"><?php echo ($vo['count']); ?></a></span>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>

						</ul>
					</div>
				</div>
				<div class="adver300_250">
                    <div id="PAGE_AD_993797">
						<div id="_w1y6a34xh6">
							<img src="/TruckHome/truckhome/Public/home/news/images/zxad2.png"/>
						</div>

					</div>
                </div>
				<div class="cennero">
					<div class="cennerh3">
						<h3>论坛热帖排行</h3>
							<a href="" target="_blank" class="gred9">进入卡车之家论坛&gt;&gt;</a>
					</div>
					<div class="numbphc">
						<ul>
							<?php if(is_array($data6)): $i = 0; $__LIST__ = $data6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
									<em class="orange<?php echo ($i); ?>"></em>
									<div>
										<a href="" title="<?php echo ($vo['title']); ?>" target="_blank" class="gred3"><?php echo (msubstr($vo['title'],0,16,"utf-8",false)); ?></a>
									</div>
									<span><?php echo date('n月-j日',$vo['ctime']);?></span>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>

						  </ul>
						</div>
					</div>
				<div class="adver300_150">
                    <div id="PAGE_AD_993798">
						<div id="_3qn7dqcvffd">
							<img src="/TruckHome/truckhome/Public/home/news/images/zxad3.gif"/>
						</div>
					</div>
                </div>
				<div class="cennero">
						<div class="cennerh3">
								<h3><a href="" target="_blank" class="gred3">卡车之家移动APP下载</a></h3>
						</div>
						<div class="weima">
								<dl>
										<dt><a href="" target="_blank" title="扫描关注微信"><img src="/TruckHome/truckhome/Public/home/news/images/weixin.jpg "></a></dt>
										<dd><a href="" target="_blank" title="扫描关注微信">扫描关注微信</a></dd>
								</dl>
								<dl>
										<dt><a href="" title="下载客户端"><img src="/TruckHome/truckhome/Public/home/news/images/kehuduan.jpg"></a></dt>
										<dd><a href="" target="_blank" title="下载客户端">下载客户端</a></dd>
								</dl>
						</div>
				</div>
			</div>



			</div>
			<!--right end-->
		</div>
		<!--文章详情内容 conterbf end -->
		<script>

			//ctrl+enter回复
        window.$ = function(id){return document.getElementById(id);}
        function keycheckmessage(event)
        {
            var keynum;
            var value=document.getElementById("message").value;
            if(value=="" || document.cookie.indexOf("AbcfN_userid=")==-1)
            {
               document.getElementById('submitHref').className='fabu';
            }
           else
            {
              document.getElementById('submitHref').className='fabu xz_fb';
            }
            if(window.event)
            {
                keynum=event.keyCode;
            }
            else
            {
                keynum=event.which;
            }
            event = event || window.event;
            if(event.ctrlKey&&(keynum==13||keynum==10))
            {
                event.returnValue = false;
                checkmessage();
            }
        }
        function checkValue()
        {
            var value=document.getElementById("message").value;
            if(value=="" || document.cookie.indexOf("AbcfN_userid=")==-1)
            {
               document.getElementById('submitHref').className='fabu';
            }
           else
            {
              document.getElementById('submitHref').className='fabu xz_fb';
            }

        }
        function checkNull()
        {
           var value=document.getElementById("message").value.trim();
           if(value=="")
           {
               document.getElementById("message").value="卡车之家提示您：留言中请不要恶意攻击国家和其他会员；不要发布任何广告性质的回复，不要恶意灌水。提升卡车人群体形象，靠你，靠我，靠大家。";
               jQuery("#message").attr("style", "color:#c4c4c4; resize: none; max-height: none; overflow-y: hidden;");
           }
           jQuery('#isReplay').val('1');
        }
		</script>

		<div class="clear"></div>



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