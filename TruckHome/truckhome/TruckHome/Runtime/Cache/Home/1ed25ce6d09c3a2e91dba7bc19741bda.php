<?php if (!defined('THINK_PATH')) exit();?><!--品牌系列页头 start-->
		<div class="pinp_top">
			<div class="pinp_tlogo">
				<a title="卡车之家品牌车系" href="">
				<img src="/TruckHome/truckhome/Public/home/news/images/logoall.jpg" alt="卡车之家品牌车系" height="61" width="112"></a>
			</div>
			<div class="pinp_list p_l_wiha">
				<ul>
					<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				 		 	<a target="" href="<?php echo U('Xarticle/index',array("id"=>$vo['id']));?>"><?php echo ($vo['name']); ?></a>
				 		 </li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="pinp_list p_l_wihb">
				<ul>
				  <li><strong><a  href="<?php echo Xproduct/index;?>">产品库</a></strong></li>
				  <li><a  href="<?php echo U('Xproduct/imgindex');?>">卡车图库</a></li>
				  <li><a  href="<?php echo U('Index/brandlist');?>">品牌大全</a></li>
				  <li><a  href="<?php echo U('Xarticle/index');?>">文章列表</a></li>
				  <li><a  href="<?php echo U('Xproduct/chaprice');?>">卡车报价</a></li>
				  <?php if(is_array($shopdata)): $i = 0; $__LIST__ = $shopdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a  href="<?php echo U('Sproduct/index',array('cid'=>$vo['id']));?>"><?php echo ($vo['catename']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			 </div>
			 <div class="pinp_list p_l_wihc">
				<ul>
				  <li class="wd_wihc"><strong><a target="_blank" href="<?php echo U('Lindex/index');?>">论坛</a></strong></li>

					<?php if(is_array($postdata)): $i = 0; $__LIST__ = $postdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="wd_wihc"><a target="_blank" href="<?php echo U('Lpost/index',array('id'=>$vo['id']));?>"><?php echo ($vo['catename']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
			</div>
		</div>
		<!--品牌系列页头  end-->