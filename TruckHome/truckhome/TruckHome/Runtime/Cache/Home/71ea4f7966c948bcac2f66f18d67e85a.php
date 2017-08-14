<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="/threeall/ThinkPHP/Public/bbs/css/index.css">
	<link rel="stylesheet" type="text/css" href="/threeall/ThinkPHP/Public/bbs/css/public.css">
	<link rel="stylesheet" href="/threeall/ThinkPHP/Public/bbs/css/fatie.css">
	<link rel="stylesheet" href="/threeall/ThinkPHP/Public/bbs/css/loginbox.css">
    <link rel="stylesheet" href="/threeall/ThinkPHP/Public/bbs/css/bodypatch.css">
    <link rel="stylesheet" href="/threeall/ThinkPHP/Public/bbs/css/newpost.css">
    <link href="/threeall/ThinkPHP/Public/bbs/css/style_1_common.css" rel="stylesheet" type="text/css">
	<link href="/threeall/ThinkPHP/Public/bbs/css/jlb.css" rel="stylesheet" type="text/css">
	<link href="/threeall/ThinkPHP/Public/bbs/css/style_1_float.css" rel="stylesheet" type="text/css">
	<link href="/threeall/ThinkPHP/Public/bbs/css/topicmain.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/threeall/ThinkPHP/Public/bbs/css/detail.css">
    <link rel="stylesheet" href="/threeall/ThinkPHP/Public/bbs/css/play.css">
    <link rel="stylesheet" href="/threeall/ThinkPHP/Public/bbs/css/share_style0_16.css">
    <link rel="stylesheet" href="/threeall/ThinkPHP/Public/bbs/css/style_1_calendar.css">
    <link rel="stylesheet" href="/threeall/ThinkPHP/Public/bbs/css/topicmain.css">

    <script src="/threeall/ThinkPHP/Public/UEditor/ueditor.config.js"></script>
    <script src="/threeall/ThinkPHP/Public/UEditor/ueditor.all.min.js"></script>
	<script src="/threeall/ThinkPHP/Public/bbs/js/jquery-1.8.3.min.js"></script>
	<script src="/threeall/ThinkPHP/Public/bbs/js/lunbo.js"></script>
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
    		<div class="bbslogoleft"><a href="<?php echo U('Lindex/index');?>"><img src="/threeall/ThinkPHP/Public/bbs/images/bbslogo.gif" alt="卡车之家论坛" height="60" width="220"></a></div>
        	<div class="bbslogoright">
 				<a href="<?php echo U('Lindex/index');?>"><img src="/threeall/ThinkPHP/Public/bbs/images/0f000cbW0MwDK97mf87TOs.jpg" alt="卡车之家论坛" height="60" width="630"></a>
			</div>
   		</div>
	</div>
</body>
</html>



		<div>
			


         <div class="jlbtn">
            <a href="">卡车论坛</a>
            &#187;
            编辑帖子
            <div class="dengluhou">
                <cite>
                    <a href=""><?php echo ($_SESSION['user']['username']); ?></a>
                </cite>
                |
                <a href="<?php echo U('User/userindex');?>">个人中心</a>
                |
                <a href="<?php echo U('User/logout');?>">退出</a>
            </div>
        </div>
        <div class="wrap" style="height:600px;border:1px solid #aaa">
            <div class="content1">
                <div id="floatwinnojs">
                <form action="<?php echo U('Lpost/update');?>" method="post">
                    <div class="tit_titl" id="returnmessage">
                        <em></em>
                        编辑帖子
                    </div>
                    <div>
                        <div class="tit_are">
                            <div class="t_a_il" style="padding: 0 6px">
                                <div style="float:left;  width:100px; position:relative; z-index:990;">
                                    <div class="float_typeidnew">
                                        <select name="tid"  class="loadselect" id="typeid_selectinput" tabindex="1">
                                            <option value="<?php echo ($res['tid']); ?>" selected><?php echo ($res['catename']); ?></option>
                                            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(in_array($vo['id'],$pid)): ?><option value="<?php echo ($vo['id']); ?>" disabled><?php echo ($vo['catename']); ?></option>
                                                <?php else: ?>
                                                    <option value="<?php echo ($vo['id']); ?>" ><?php echo ($vo['catename']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="t_a_ir">
                                <input type="hidden" name="id" value="<?php echo ($res['id']); ?>">
                                <input maxlength="80" id="subject" value="<?php echo ($res['title']); ?>" name="title" tabindex="1" class="mouover">
                                <div class="t_a_box_a"></div>
                                <div class="t_a_box_b"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tit_edit" style="padding: 4px;overflow: hidden;" id="diveditor">

                            <script id="editor" name="content" type="text/plain" style="width:938px;height:370px;"><?php echo htmlspecialchars_decode($res['content']);?></script>

                        <script>
                            // 初始化编辑器
                             var ue = UE.getEditor('editor',{
                                toolbars: [
                                    ['fullscreen', 'source', 'undo', 'redo', 'bold','deleterow','cleardoc','simpleupload','insertimage'],
                                    ['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc']
                                ]
                             });
                        </script>
                    </div>

                    <div class="tit_bot_post">
                        <div class="t_b_p_left">
                            <a href="" target="">卡车之家论坛管理规定</a>
                        </div>

                        <div class="t_b_p_rigt">

                            <label>
                                <input name="rece_notice" value="1" type="checkbox">有回复通知我</label>

                            <button type="submit" id="postsubmit" value="true" name="topicsubmit" tabindex="1">发布帖子</button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>

    <div style="clear:both"></div>

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