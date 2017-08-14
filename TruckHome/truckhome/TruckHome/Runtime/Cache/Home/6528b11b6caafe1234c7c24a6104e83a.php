<?php if (!defined('THINK_PATH')) exit();?><!-- 左侧开始  -->
				<div class="colom fl w190">
					<div class="userheard">
						<div class="user_name"><?php echo ($userdata['username']); ?></div>
						<div class="user_imgbox">
							<a href="<?php echo U('User/userindex');?>">
								<span>

									<img src="<?php echo ($userdata['picname']); ?>" onerror="this.onerror=null;this.src='/TruckHome/truckhome/Public/home/news/images/noavatar_middle.gif'" width="120px" >
								</span>
							</a>
						</div>
					</div>
					<!--互动 开始-->
					<!--互动 结束-->



					<!--管理模块 开始-->

					<!--管理模块 结束-->


					<!--左侧导航 开始-->


					<div class="l_ban_module">
						<ul class="item">
							<li class="current">
								<a href="<?php echo U('User/userindex');?>" class="it1 itbig">我的首页</a>
							</li>
							<li><a href="<?php echo U('Saddress/index');?>" class="it2 itbig" id="pm_ntc">我的订单</a></li>
							<li><a href="<?php echo U('Sorder/index',array('state'=>3));?>" class="it2 itbig" id="pm_ntc">已买到的宝贝</a></li>
							<li><a href="<?php echo U('Sorder/index',array('state'=>1));?>">未完成订单</a></li>
							<li><a href="<?php echo U('Sorder/index',array('state'=>4));?>">待发货</a></li>
							<li><a href="<?php echo U('Sorder/index',array('state'=>2));?>">待收货</a></li>
						</ul>
						<div class="divde"></div>
							<ul class="item">
								<li><a href="<?php echo U('Saddress/saddIndex');?>" class="it3 itbig">收货地址</a></li>
								<li><a href="<?php echo U('Saddress/saddIndex');?>">地址列表</a></li>
								<li style="<?php echo U('Saddress/insert');?>"><a href="<?php echo U('Saddress/add');?>">新增地址</a></li>


							</ul>
						<div class="divde"></div>
							<ul class="item">
								<li><a href="" class="it3 itbig">我的帖子</a></li>
								<li><a href="<?php echo U('User/userpost');?>">我发的主帖</a></li>
								<li><a href="<?php echo U('User/userreply');?>">我发的回帖</a></li>
								<li><a href="<?php echo U('Lcol/index');?>">我收藏的帖子</a></li>
								<li><a href="<?php echo U('Lpost/add');?>">我要发帖</a></li>

							</ul>


						<div class="divde"></div>
						<ul class="item">
							<li><a href="<?php echo U('User/userupdate');?>" class="it7 itbig">个人设置</a></li>
							<li><a href="<?php echo U('User/userupdate');?>">修改个人资料</a></li>
							<li><a href="<?php echo U('User/userupdate');?>">修改头像</a></li>
							<li><a href="<?php echo U('User/userupdate');?>">修改密码</a></li>
							<li><a href="<?php echo U('User/usercomment');?>">评论列表</a></li>

						</ul>
					</div>
					<!--左侧导航 结束-->
				</div>

			<!-- 左侧结束  -->