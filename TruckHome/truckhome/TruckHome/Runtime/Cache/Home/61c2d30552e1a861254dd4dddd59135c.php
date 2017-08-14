<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
		<link rel="stylesheet" href="/threeall/truckhome/Public/home/news/css/public.css"/>
		<link rel="stylesheet" href="/threeall/truckhome/Public/home/news/css/headfoot.css"/>
		<script type="text/javascript" src="/threeall/truckhome/Public/home/news/js/jquery-1.8.3.min.js"></script>
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
		
	<link rel="stylesheet" href="/threeall/truckhome/Public/home/news/css/prodetail.css"/>

	<div class="clear"></div>
	<!--ad end-->
	<!--地址栏开始-->
	<div class="map_bane">
		<div class="mapdz">
			您的当前位置：
			<a target="_blank" href="<?php echo U('Index/index');?>" class="gred6">卡车之家</a>
			&gt;
			<a  href="" class="gred6"><?php echo ($data1['pname']); ?>产品详情</a>

		</div>
		<div class="serch">
			<span>
				<input id="keyword" name="q" class="inp1" placeholder="请输入要查询的关键词" onkeydown="kswicth(event);" type="text">
				<input class="btn1" value="搜索" onclick="swicth()" type="submit"></span>
		</div>
	</div>
	<!--地址栏结束-->
	<!--内容页开始-->
	<div class="productbox">
		<div class="contan fn_clear">
			<div class="contan_a">
				<div class="conttan_a_l">
					<a href="" target="_blank"><?php echo ($data1['pname']); ?></a>
				</div>
			</div>
			<div class="contan_b">
				<ul>
					<li class="action">
						<a href="">
							<span>车型首页</span>
						</a>
					</li>
					<li>
						<a target="_self" href="#setfield">
							<span>参数配置</span>
						</a>
					</li>
					<li>
						<a target="_self" href="#prodimgzs">
							<span>图片实拍</span>
						</a>
					</li>
					<li>
						<a target="_self" href="<?php echo U('Xproduct/chaprice',array('id'=>$data1['id']));?>">
							<span>车型询价</span>
						</a>
					</li>
					<li>
						<a target="_self" href="<?php echo U('Xarticle/index',array('id'=> $data1['tid']));?>">
							<span>文章</span>
						</a>
					</li>
					<li>
						<a target="_blank" href="">
							<span>论坛</span>
						</a>
					</li>
					<li>
						<a target="_self" href="" class="wu_rlx1">
							<span>
								维修售后服务站 <font class="orange">(760家)</font>
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="main_pro_box">
			<div class="ft m_p_boxa fl">
				<div class="mainpic ft ">
					<div class="c_n_a_1 main-pic">
						<a target="_blank" href="" title="<?php echo ($data1['pname']); ?>">
							<img src="<?php echo ($data1['picname']); ?>" alt="<?php echo ($data1['pname']); ?>" height="240" width="360"></a>
					</div>
					<div class="cont_n_l_a_2">
						<div class="c_a_t2">
							<div class="c_a_t21">
								厂商指导价： <font class="red"><?php echo ($data1['price']); ?>万元</font>
							</div>
						</div>
						<div class="cx02_cen">
							<ul>
								<li>
									车身长度： <strong title="4.18米"><?php echo ($data1['boxlength']); ?>米</strong>
								</li>

								<li>
									轴距： <strong title="3308mm"><?php echo ($data1['wheelbase']); ?>mm</strong>
								</li>

								<li>
									前进档位：
									<strong title="5档"><?php echo ($data1['forwardgear']); ?></strong>
								</li>

								<li>
									排放标准：
									<strong title="<?php echo ($data1['effluent']); ?>"><?php echo ($data1['effluent']); ?></strong>
								</li>

								<li>
									最大马力：
									<strong title="84马力"><?php echo ($data1['horsepower']); ?>马力</strong>
								</li>

								<li>
									发动机：
									<strong title="<?php echo ($data1['engine']); ?>"><?php echo ($data1['engine']); ?></strong>
								</li>
							</ul>
						</div>
						<div class="cx02_price01 control-btn">
							<a target="_blank" href="<?php echo U('Xproduct/chaprice',array('id'=>$data1['id']));?>" class="orange-btn">询底价</a>
						</div>

					</div>
				</div>
				<div class="leftbanner">
					<div id="PAGE_AD_1000632"></div>
				</div>

				<div class="sppic" id="setfield">
					<div class="sppic_tit">
						<h4>
							<a href="" target="_blank"><?php echo ($data1['pname']); ?>参数配置</a>
						</h4>
					</div>
					<div class="cx02_cen02">
						<div class="cx02_cen02_a">
							<div class="cx02_cen02_a_tit">
								<h4>基本信息</h4>
							</div>
							<div class="c_a_t3">
								<table cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td class="ri_car">
												<div>公告型号：</div>
											</td>
											<td class="le_car">
												<div>HFC5041XXYP93K5C2</div>
											</td>
											<td class="ri_car">
												<div>类型：</div>
											</td>
											<td class="le_car">
												<div>轻型载货车</div>
											</td>
										</tr>
										<tr>
											<td class="ri_car">
												<div>驱动形式：</div>
											</td>
											<td class="le_car">
												<div>4X2</div>
											</td>
											<td class="ri_car">
												<div>轴距：</div>
											</td>
											<td class="le_car">
												<div>3308mm</div>
											</td>
										</tr>
										<tr>
											<td class="ri_car">
												<div>车身长度：</div>
											</td>
											<td class="le_car">
												<div>5.995米</div>
											</td>
											<td class="ri_car">
												<div>车身宽度：</div>
											</td>
											<td class="le_car">
												<div>2.0米</div>
											</td>
										</tr>
										<tr>
											<td class="ri_car">
												<div>车身高度：</div>
											</td>
											<td class="le_car">
												<div>2.9米</div>
											</td>
											<td class="ri_car">
												<div>轮距：</div>
											</td>
											<td class="le_car">
												<div>1420/1395mm</div>
											</td>
										</tr>
										<tr>
											<td class="ri_car">
												<div>整车重量：</div>
											</td>
											<td class="le_car">
												<div>2.66吨</div>
											</td>
											<td class="ri_car">
												<div>额定载重：</div>
											</td>
											<td class="le_car">
												<div>1.7吨</div>
											</td>
										</tr>
										<tr>
											<td class="ri_car">
												<div>最大总质量：</div>
											</td>
											<td class="le_car">
												<div>4.49吨</div>
											</td>
											<td class="ri_car">
												<div>最高车速：</div>
											</td>
											<td class="le_car">
												<div>90.0km/h</div>
											</td>
										</tr>
										<tr>
											<td class="ri_car">
												<div>产地：</div>
											</td>
											<td class="le_car">
												<div></div>
											</td>
											<td class="ri_car">
												<div>备注：</div>
											</td>
											<td class="le_car">
												<div></div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="cx02_cen02_a">
							<div class="cx02_cen02_a_tit">
								<h4>发动机</h4>
							</div>
							<div class="c_a_t3">
								<table cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td class="ri_car">
												<div>发动机：</div>
											</td>
											<td class="le_car">
												<div>锡柴4DW93-84E4</div>
											</td>
											<td class="ri_car">
												<div>汽缸数：</div>
											</td>
											<td class="le_car">
												<div>4</div>
											</td>
										</tr>
										<tr>
											<td class="ri_car">
												<div>燃料种类：</div>
											</td>
											<td class="le_car">
												<div>柴油</div>
											</td>
											<td class="ri_car">
												<div>排量：</div>
											</td>
											<td class="le_car">
												<div>2.54L</div>
											</td>
										</tr>
										<tr>
											<td class="ri_car">
												<div>排放标准：</div>
											</td>
											<td class="le_car">
												<div>国四/欧四</div>
											</td>
											<td class="ri_car">
												<div>最大输出功率：</div>
											</td>
											<td class="le_car">
												<div>64.0kW</div>
											</td>
										</tr>
										<tr>
											<td class="ri_car">
												<div>扭矩：</div>
											</td>
											<td class="le_car">
												<div>220N·m</div>
											</td>
											<td class="ri_car">
												<div>最大马力：</div>
											</td>
											<td class="le_car">
												<div>84马力</div>
											</td>
										</tr>
										<tr>
											<td class="ri_car">
												<div>最大扭矩转速：</div>
											</td>
											<td class="le_car">
												<div>1900-2100rpm</div>
											</td>
											<td class="ri_car">
												<div>额定转速：</div>
											</td>
											<td class="le_car">
												<div>3000rpm</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="cx02_cen02_a">
							<div class="cx02_cen02_a_tit">
								<h4>货箱参数</h4>
							</div>
							<div class="c_a_t3">
								<table cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td class="ri_car">
												<div>货箱长度：</div>
											</td>
											<td class="le_car">
												<div>4.18米</div>
											</td>
											<td class="ri_car">
												<div>货箱宽度：</div>
											</td>
											<td class="le_car">
												<div>1.9米</div>
											</td>
										</tr>
										<tr>
											<td class="ri_car">
												<div>货箱高度：</div>
											</td>
											<td class="le_car">
												<div>1.85米</div>
											</td>
											<td class="ri_car">
												<div>货箱形式：</div>
											</td>
											<td class="le_car">
												<div>厢式</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="cx02_cen02_a">
							<div class="cx02_cen02_a_tit">
								<h4>驾驶室参数</h4>
							</div>
							<div class="c_a_t3">
								<table cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td class="ri_car">
												<div>准乘人数：</div>
											</td>
											<td class="le_car">
												<div>2人</div>
											</td>
											<td class="ri_car">
												<div>座位排数：</div>
											</td>
											<td class="le_car">
												<div>单排</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="cx02_cen02_a">
							<div class="cx02_cen02_a_tit">
								<h4>变速箱</h4>
							</div>
							<div class="c_a_t3">
								<table cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td class="ri_car">
												<div>变速箱：</div>
											</td>
											<td class="le_car">
												<div>MSB-5M</div>
											</td>
											<td class="ri_car">
												<div>前进档位：</div>
											</td>
											<td class="le_car">
												<div>5档</div>
											</td>
										</tr>
										<tr>
											<td class="ri_car">
												<div>倒档档位数：</div>
											</td>
											<td class="le_car">
												<div>1个</div>
											</td>
											<td class="ri_car">
												<div></div>
											</td>
											<td class="le_car">
												<div></div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="cx02_cen02_a">
							<div class="cx02_cen02_a_tit">
								<h4>轮胎</h4>
							</div>
							<div class="c_a_t3">
								<table cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td class="ri_car">
												<div>轮胎数：</div>
											</td>
											<td class="le_car">
												<div>6个</div>
											</td>
											<td class="ri_car">
												<div>轮胎规格：</div>
											</td>
											<td class="le_car">
												<div>7.00R16</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="cx02_cen02_a">
							<div class="cx02_cen02_a_tit">
								<h4>油箱</h4>
							</div>
							<div class="c_a_t3">
								<table cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td class="ri_car">
												<div>油箱容量：</div>
											</td>
											<td class="le_car">
												<div>90.0L</div>
											</td>
											<td class="ri_car">
												<div></div>
											</td>
											<td class="le_car">
												<div></div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--图片展示开始-->
				<div class="sppic" id="prodimgzs">
					<div class="sppic_tit">

						<h4>
							<a href="" target=""><?php echo (msubstr($data1['pname'],0,10,'utf-8',false)); ?> 实拍图片</a>
						</h4>
						<!-- <strong><a href="l" target="_bank">进入图片库&gt;&gt;</a></strong> -->

					</div>

					<div class="sppic_cen">
						<div class="sppic_centit">
							<h6>
								<strong>外观</strong>
								<font>(<?php echo ($imgcount1); ?>张)</font>
							</h6>
						</div>

						<div class="sppic_cen01">
							<?php if(is_array($dataimg1)): $i = 0; $__LIST__ = $dataimg1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="sppic_cen02 ">

								<dl>
									<dt>
										<!-- <a href="" target="_bank"> -->
										<img alt="" src="<?php echo ($vo['picname']); ?>" height="160" width="240"></a>
									</dt>
								</dl>

							</div><?php endforeach; endif; else: echo "" ;endif; ?>


						</div>

						<div class="sppic_centit">
							<h6>
								<strong>驾驶室</strong>
								<font>(<?php echo ($imgcount2); ?>张)</font>
							</h6>
						</div>

						<div class="sppic_cen01">
							<?php if(is_array($dataimg2)): $i = 0; $__LIST__ = $dataimg2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="sppic_cen02 ">

								<dl>
									<dt>
										<!-- <a href="" target=""> -->
											<img alt="" src="<?php echo ($vo['picname']); ?>" height="160" width="240"></a>
									</dt>
								</dl>

							</div><?php endforeach; endif; else: echo "" ;endif; ?>

						</div>

						<div class="sppic_centit">
							<h6>
								<strong>底盘</strong>
								<font>(<?php echo ($imgcount3); ?>张)</font>
							</h6>
						</div>

						<div class="sppic_cen01">
							<?php if(is_array($dataimg3)): $i = 0; $__LIST__ = $dataimg3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="sppic_cen02 ">

									<dl>
										<dt>
											<!-- <a href="" target=""> -->
												<img alt="" src="<?php echo ($vo['picname']); ?>" height="160" width="240"></a>
										</dt>
									</dl>

								</div><?php endforeach; endif; else: echo "" ;endif; ?>

						</div>


					</div>

				</div>

			</div>
			<div class="fr m_p_boxb">
				<div class="rightbanner10">
					<div id="PAGE_AD_1000686">
						<div id="BAIDU_AD_1000686">
							<div id="BAIDU_DUP_wrapper_1000686_0">
								<img src="/threeall/truckhome/Public/home/news/images/0f000K0cVIM3VcXs88AlS6.jpg" title="" alt="" border="0" height="200" width="200"></div>
						</div>
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="m_p_rbox">
					<div class="cennerh3">
						<h3>该车系其他车型</h3>
					</div>
					<div class="other_cer2">
						<ul>
							<?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
									<div class="other04">
										<a href="<?php echo U('Xproduct/prodetail',array('id'=>$vo['id']));?>" target="_blank"><?php echo ($vo['pname']); ?></a>
									</div>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>

						</ul>
					</div>
				</div>
				<div class="m_p_rbox">
					<div class="cennerh3">
						<h3>
							<a href="" target="_blank">精彩活动推荐</a>
						</h3>
					</div>
					<div class="section">
						<ul class="clearfix">
							<li>
								<div class="photo">
									<img src="/threeall/truckhome/Public/home/news/images/1224101041.jpg!200.jpg"></div>
								<div style="display: none;" class="rsp"></div>
								<div class="text" style="display: none;">
									<a href="">
										<p>伟博思通驻车加热系统 快速供暖 安全无忧</p>
									</a>
								</div>
							</li>
						</ul>

					</div>
					<div class="other_cer">
						<ul>
							<?php if(is_array($data3)): $i = 0; $__LIST__ = $data3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
									<div class="other03">
										<a href="<?php echo U('Xarticle/zxdetail',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo['title'],0,12,'utf-8',true)); ?></a>
									</div>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>

						</ul>
					</div>

				</div>

				<!-- 卡车之家移动APP下载 -->
				<div class="m_p_rbox app-down">
					<div class="cennerh3">
						<h3>
							<a href="" target="_blank">卡车之家移动APP下载</a>
						</h3>
					</div>
					<div class="weima">
						<dl>
							<dt>
								<a href="" target="_blank" title="扫描关注微信">
									<img src="/threeall/truckhome/Public/home/news/images/xll_wx_img1.jpg" alt="扫描关注微信"></a>
							</dt>
							<dd>
								<a href="" target="_blank" title="扫描关注微信">扫描关注微信</a>
							</dd>
						</dl>
						<dl class="mar"></dl>
						<dl>
							<dt>
								<a href="" target="_blank" title="下载客户端">
									<img src="/threeall/truckhome/Public/home/news/images/xll_wx_img2.jpg" alt="下载客户端"></a>
							</dt>
							<dd>
								<a href="" target="_blank" title="下载客户端">下载客户端</a>
							</dd>
						</dl>
					</div>
				</div>
				<!-- @end 卡车之家移动APP下载 -->

			</div>
		</div>
	</div>
	<!--内容页结束-->




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