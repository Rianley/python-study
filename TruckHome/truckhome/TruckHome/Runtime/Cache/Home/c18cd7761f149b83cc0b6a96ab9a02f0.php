<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="/TruckHome/truckhome/Public/bbs/css/index.css">
	<link rel="stylesheet" type="text/css" href="/TruckHome/truckhome/Public/bbs/css/public.css">
	<link rel="stylesheet" href="/TruckHome/truckhome/Public/bbs/css/fatie.css">
	<link rel="stylesheet" href="/TruckHome/truckhome/Public/bbs/css/loginbox.css">
    <link rel="stylesheet" href="/TruckHome/truckhome/Public/bbs/css/bodypatch.css">
    <link rel="stylesheet" href="/TruckHome/truckhome/Public/bbs/css/newpost.css">
    <link href="/TruckHome/truckhome/Public/bbs/css/style_1_common.css" rel="stylesheet" type="text/css">
	<link href="/TruckHome/truckhome/Public/bbs/css/jlb.css" rel="stylesheet" type="text/css">
	<link href="/TruckHome/truckhome/Public/bbs/css/style_1_float.css" rel="stylesheet" type="text/css">
	<link href="/TruckHome/truckhome/Public/bbs/css/topicmain.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/TruckHome/truckhome/Public/bbs/css/detail.css">
    <link rel="stylesheet" href="/TruckHome/truckhome/Public/bbs/css/play.css">
    <link rel="stylesheet" href="/TruckHome/truckhome/Public/bbs/css/share_style0_16.css">
    <link rel="stylesheet" href="/TruckHome/truckhome/Public/bbs/css/style_1_calendar.css">
    <link rel="stylesheet" href="/TruckHome/truckhome/Public/bbs/css/topicmain.css">

    <script src="/TruckHome/truckhome/Public/UEditor/ueditor.config.js"></script>
    <script src="/TruckHome/truckhome/Public/UEditor/ueditor.all.min.js"></script>
	<script src="/TruckHome/truckhome/Public/bbs/js/jquery-1.8.3.min.js"></script>
	<script src="/TruckHome/truckhome/Public/bbs/js/lunbo.js"></script>
</head>
	<body>

		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="logo">
		<div class="nav">
			<div class="navleft">
				<a href="<?php echo U('Index/index');?>" target="">卡车之家首页</a> |
				<a href="<?php echo U('Lindex/index');?>" target="">卡车之家论坛首页</a> |
				<a style="color: rgb(255, 0, 0);" href="<?php echo U('Sindex/index');?>" target="">卡车之家商城</a>
			</div>
		</div>

		<div class="bbslogo">
    		<div class="bbslogoleft"><a href="<?php echo U('Lindex/index');?>"><img src="/TruckHome/truckhome/Public/bbs/images/bbslogo.gif" alt="卡车之家论坛" height="60" width="220"></a></div>
        	<div class="bbslogoright">
 				<a href="<?php echo U('Lindex/index');?>"><img src="/TruckHome/truckhome/Public/bbs/images/0f000cbW0MwDK97mf87TOs.jpg" alt="卡车之家论坛" height="60" width="630"></a>
			</div>
   		</div>
	</div>
</body>
</html>



		<div>
			

	<div class="crumbs">
		<div>
			<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul style="float:left;width:120px">
					<li style="position:relative" class="cate">
						<h3  style="margin:7px;color:#333" class="h3dao">
							<a href="javascript:;"><?php echo ($vo['catename']); ?></a>
						</h3>
						<ul style="display:none;position:absolute;z-index:9999;width:120px;background:#eeeff4" class="uldao">
							<?php if(is_array($vo['subcat'])): $i = 0; $__LIST__ = $vo['subcat'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Lpost/index',array('id'=>$vo1['id']));?>" target=""><?php echo ($vo1['catename']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</li>
				</ul><?php endforeach; endif; else: echo "" ;endif; ?>
			<script>
				$(function(){
					$('h3').toggle(function(){
						$(this).next().slideDown();
					},function(){
						$(this).next().slideUp();
					})
				})
			</script>
		</div>
		<form accept-charset="UTF-8" method="post" action="<?php echo U('Lpost/index');?>" target="">
		  <span>
			  <input name="title" class="inp1" type="text" placeholder="请输入标题或作者">
			  <input class="btn1" value="论坛搜索" type="submit">
		  </span>
 		</form>
	</div>
	<div class="bbshot-legin">
		<div class="auto_left">
			<div class="focuspic">
				<div id="box">
					<div id="box3" style="overflow:hidden;width:340px;height:200px">
						<?php if(is_array($pic)): $i = 0; $__LIST__ = $pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><img src="/TruckHome/truckhome/Public/<?php echo ($vo['pic']); ?>" style="width:340px;height:200px"><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					<ul id="box2">
						<?php $__FOR_START_5263__=1;$__FOR_END_5263__=$picc+1;for($i=$__FOR_START_5263__;$i < $__FOR_END_5263__;$i+=1){ ?><li><?php echo ($i); ?></li><?php } ?>
					</ul>

					<div id="box1">
						<?php if(is_array($pic)): $i = 0; $__LIST__ = $pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href=""><?php echo ($vo['title']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
			<div class="fobox">
	        	<dd class="focus_pLeft">
	        		<a href="" target=""><font color="#d60000">买卖二手卡车?猛击这里看</font></a>
	        		&nbsp;&nbsp;&nbsp;&nbsp;<a href="" target="">徐工重卡全国招募经销商</a>
	        		<br>
	        		<a href="" target="">江淮全新麦斯福中卡平台  </a>
	        		 &nbsp;&nbsp;&nbsp;
	        		<a href="" target="">招聘：编辑/销售(长期有效)</a>
	        	</dd>
	        </div>
		</div>
		<div class="bbshot-txt">
			<h2>
				<a href="<?php echo U('Lpost/detail',array('id'=>$title['id']));?>" target="">
					<font color="#d60000">
						<h1><?php echo (msubstr($title['title'],0,16,'utf-8',false)); ?></h1>
					</font>
				</a>
			</h2>
			<ul>
				<?php if(is_array($post)): $i = 0; $__LIST__ = $post;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<a href="<?php echo U('Lpost/detail',array('id'=>$vo['id']));?>" target="">[杂谈]<?php echo (msubstr($vo['title'],0,18,'utf-8',true)); ?></a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="bbsregin-hui">
			<div class="login-box">
			<?php if($_SESSION['user']['id'] == null): ?><form method="post" name="login" id="login" action="<?php echo U('User/loginaction');?>" target="_top">
					<div class="login-box-a">登录卡车之家论坛</div>
					<div class="login-box-b">

						<input class="input_txt" placeholder="用户名或手机号" id="username" name="name" type="text"></div>
					<div class="login-box-c">
						<input class="input_txt" placeholder="密码" id="password" name="password" type="password">
					</div>

					<div class="login-box-e">
						<input name="submit" value="" type="submit"></div>
					 <div class="login-box-f">

					 <a href="<?php echo U('User/forgetpwd');?>" style="float:left" target="">忘记密码</a><span id="login_ts"></span>
						<a href="<?php echo U('User/register');?>" target="">立即注册</a>
					</div>
				</form>
				<?php else: ?>




            <div class="user-content-a">欢迎回家，<a href="<?php echo U('User/userindex');?>" target=""><?php echo ($_SESSION['user']['username']); ?></a></div>
            <div class="user-content-b">
                <div class="u-c-ba1"><a href="<?php echo U('User/userindex');?>" target=""><img src="<?php echo ($_SESSION['user']['picname']); ?>"  width="70px" height="48px"></a></div>
                <!-- <div class="u-c-ba2">
                    <div class="u-c-ba21">未读消息：<a href="pm.php" target=""><font id="pm_ntc">5</font> 条</a></div>
                                    </div> -->
            </div>
            <div class="user-content-c">
                <div class="u-c-ca1" style="text-align:left">我的主帖：<font style='color:#f00'><?php echo ($total); ?></font> 篇</div>
                <div class="u-c-ca1"  style="text-align:left">我的积分：<span style='color:#f00'> <?php echo ($userinfo['count']); ?></span></div>
            </div>

            <div class="user-content-d">
                <div class="u-c-da1"><a href="<?php echo U('User/userindex');?>" target="">进入我的个人中心</a></div>
                <div class="u-c-da2"><a href="<?php echo U('User/logout');?>" target="">退出登录</a></div>
            </div>
             <div style="margin-bottom:20px"></div>
            <div class="user-content-f">
            	<div class="u-c-fa1"><a href='<?php echo U('Lpost/add');?>'><input type="button"></a></div>
                <!-- <div class="new-signin-content" data-role="calendarSign" id="userSign"><span class="new-signin-btn" data-role="calendarSignBtn">签到</span></div> -->
            </div><?php endif; ?>
			</div>
		</div>
	</div>



	<div class="bbs_index">
		<div class="bbszxhf">
			<div class="same_cha2">
				<ul>
					<li id="sc1" class="menu_on">
						十大“ <strong>热</strong>
						”帖
					</li>
					<li class="autoline"></li>
					<li id="sc2" class="menu_off" style="color:red;font-weight:bold">HOT</li>
				</ul>
			</div>
			<div style="display: block;" id="samec1">
				<div id="divspacerank">
					<div id="blogs_spacerank_1">
						<ul>
							<?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
									<a href="<?php echo U('Lpost/detail',array('id'=>$vo['id']));?>" title="十大热帖 主题标题:<?php echo ($vo['title']); ?>" target="">
										<?php echo (msubstr($vo['title'],0,16,'utf-8',true)); ?>
									</a>
									<span>
										<a href="" target=""><?php echo ($vo['username']); ?></a>
									</span>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>

				</div>
			</div>
		</div>
			<div class="bbszxhfd">
			<div class="same_cha3">
				<ul>
					<li id="sq1" onmouseover="show_intro('sq','sameq',2,1);" class="menu_on">最新帖子</li>
					<li class="autoline"></li>
					<li id="sq2" onmouseover="show_intro('sq','sameq',2,2);"  style="color:red;font-weight:bold" class="menu_off">NEW</li>
				</ul>
			</div>
			<div style="display: block;" id="sameq1">
				<ul>
					<?php if(is_array($new)): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="<?php echo U('Lpost/detail',array('id'=>$vo['id']));?>" target=""><?php echo (msubstr($vo['title'],0,16,'utf-8',true)); ?>
							</a>
							<span>
								<a href="" target=""><?php echo ($vo['username']); ?></a>
							</span>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<div class="remenhd">
			<div class="remenhdtop">论坛公告<a href="<?php echo U('Lnotic/index');?>" style="float:right">MORE...</a></div>
			<ul>
				<?php if(is_array($notic)): $i = 0; $__LIST__ = $notic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<a href="<?php echo U('Lnotic/detail',array('id'=>$vo['id']));?>" target=""> <?php echo (msubstr($vo['title'],0,14,'utf-8',true)); ?></a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
		</div>
	</div>


	<div class="bbs_index">
		<div class="bbs_indexmain">
			<?php if(is_array($tree)): $i = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h3>
					<a href="javascript:void(0);">= <?php echo ($vo['catename']); ?> =</a>
					<span class="bbsheadactions">

					</span>
				</h3>
				<table id="category_28" summary="category28" style="" cellpadding="0" cellspacing="0" width="100%">
					<tbody>
						<tr class="bbscentong">
							<td width="58">&nbsp;</td>
							<td align="left" width="480">板块</td>
							<td align="center" width="180">帖子数</td>
						</tr>
						<?php if(is_array($vo['subcat'])): $i = 0; $__LIST__ = $vo['subcat'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><tr>
							<td align="center" valign="top">
								<div class="imgkudy"></div>
							</td>
							<td align="left">
								<h2>
									<a href="<?php echo U('Lpost/index',array('id'=>$vo1['id']));?>"><?php echo ($vo1['catename']); ?></a>
								</h2>
							</td>
							<td align="center">
								<em><?php echo ($vo1['sum1']); ?></em>
							</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table><?php endforeach; endif; else: echo "" ;endif; ?>

		</div>
		<div id="ad_intercat_28"></div>
	</div>

	<div class="prefecture">
		  <div class="prefecture_top">
		  	<h2>友情链接</h2>
		  </div>
		  <div class="product">

		  			<ul>
		  				<?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="display:block;margin:3px;padding:8px;float:left">
		  						<a href="" style="color:#333" target=""><?php echo ($vo['aname']); ?></a>
		  					</li><?php endforeach; endif; else: echo "" ;endif; ?>

		  			</ul>

		</div>
	</div>

		</div>
		<div style="clear:both"></div>
        <div id="footer" class="footer_bbs">
	<p>
		<a href="" target="">关于我们</a>
		<span class="fbbsline">|</span>
		<a href="" target="">联系我们</a>
		<span class="fbbsline">|</span>
		<a href="" target="">广告合作</a>
		<span class="fbbsline">|</span>
		<a href="" target="">工作机会</a>
		<span class="fbbsline">|</span>
		<a href="" target="">意见反馈</a>
		<span class="fbbsline">|</span>
		<a href="" target=""> <em class="footios"></em>
			iPhone / <em class="footand"></em>
			Android客户端
		</a>
		<span class="fbbsline">|</span>
		<a href="" target="">卡车之家商城</a>
	</p>
	<p>经营许可证编号：京ICP证080575号 / 京ICP备09080840号 京公网安备11010502026149</p>
	<p>
		<span style="font-family:arial;">Copyright ©</span>
		2009 www.360che.com All Rights Reserved.
		<a target="_self" href="">卡车之家</a>
		版权所有 － 网聚卡车人的力量
	</p>
</div>

	</body>
</html>