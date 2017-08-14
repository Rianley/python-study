<?php if (!defined('THINK_PATH')) exit();?><!--登录-->
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