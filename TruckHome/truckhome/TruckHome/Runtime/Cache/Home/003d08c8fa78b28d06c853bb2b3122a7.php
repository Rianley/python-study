<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="/threeall/truckhome/Public/bbs/css/index.css">
	<link rel="stylesheet" type="text/css" href="/threeall/truckhome/Public/bbs/css/public.css">
	<link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/fatie.css">
	<link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/loginbox.css">
    <link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/bodypatch.css">
    <link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/newpost.css">
    <link href="/threeall/truckhome/Public/bbs/css/style_1_common.css" rel="stylesheet" type="text/css">
	<link href="/threeall/truckhome/Public/bbs/css/jlb.css" rel="stylesheet" type="text/css">
	<link href="/threeall/truckhome/Public/bbs/css/style_1_float.css" rel="stylesheet" type="text/css">
	<link href="/threeall/truckhome/Public/bbs/css/topicmain.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/detail.css">
    <link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/play.css">
    <link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/share_style0_16.css">
    <link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/style_1_calendar.css">
    <link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/topicmain.css">

    <script src="/threeall/truckhome/Public/UEditor/ueditor.config.js"></script>
    <script src="/threeall/truckhome/Public/UEditor/ueditor.all.min.js"></script>
	<script src="/threeall/truckhome/Public/bbs/js/jquery-1.8.3.min.js"></script>
	<script src="/threeall/truckhome/Public/bbs/js/lunbo.js"></script>
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
    		<div class="bbslogoleft"><a href="<?php echo U('Lindex/index');?>"><img src="/threeall/truckhome/Public/bbs/images/bbslogo.gif" alt="卡车之家论坛" height="60" width="220"></a></div>
        	<div class="bbslogoright">
 				<a href="<?php echo U('Lindex/index');?>"><img src="/threeall/truckhome/Public/bbs/images/0f000cbW0MwDK97mf87TOs.jpg" alt="卡车之家论坛" height="60" width="630"></a>
			</div>
   		</div>
	</div>
</body>
</html>



		<div>
			
	<div class="jlbtn">
		<a id="fjump" class="jlbtn-xg1" href="">卡车论坛</a>
		<div class="dengluhou">

			<cite>
				<a href="" class="noborder"><?php echo ($_SESSION['user']['username']); ?></a>
			</cite>
			|
			<a href="<?php echo U('User/userindex');?>">个人中心</a>
			<?php if($_SESSION['user'] != null): ?>|
			<a href="<?php echo U('User/logout');?>">退出</a><?php endif; ?>
		</div>
	</div>

	<div class="jlbtiezlie">
		<div class="jlbtiezliel">
			<span style='color:red'><?php echo ($tname['catename']); ?></span>&nbsp;论坛帖子列表
		</div>

		<div class="jlbtiezlier j-add">
			<div class="jlbtiefabu">

				<span id="newspecialtmp" class="libi_faie nof">
					<a href="<?php echo U('Lpost/add');?>">&nbsp;&nbsp;&nbsp;发&nbsp;&nbsp;帖</a>
				</span>
			</div>
		</div>
	</div>

	<div class="jlbtiezilie">
		<div id="threadlist" class="threadlist datalist" style="position: relative;">
			<table summary="" class="datatable" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td class="folder2"></td>
						<td class="subject2">标题</td>
						<td class="subject3">作者</td>
						<td class="subject3">发表时间</td>

					</tr>
				</tbody>
				<tbody>
					<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td class="folder2">
								<?php if(($vo['state1']) == 1): ?><a href="" target="" title="新窗口打开" class="official">
										<img src="/threeall/truckhome/Public/bbs/images/pin_3.gif" alt="全局置顶"></a><?php endif; ?>
							</td>
							<th class="subject hot">
								<span>
									<a href="<?php echo U('Lpost/detail',array('id'=>$vo['id']));?>" target=""><?php echo (msubstr($vo['title'],0,26,'utf-8',true)); ?></a>
								</span>

							</th>
							<td class="author">
								<span><?php echo ($vo['username']); ?></span>
							</td>
							<th class="subject hot">
								<span><?php echo date('Y-m-d H:i:s',$vo['ctime']);?></span>
							</th>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
			<span >
				<a style="display:block;float:right;background:#4182c8;width:90px;height:30px;line-height:30px;margin-top:3px;color:#fff;font-size:14px;font-weight:bold" href="<?php echo U('Lindex/index');?>">&nbsp;返回首页&nbsp;</a>
			</span>

		</div>
	</div>

	<div style="height:30px"></div>


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