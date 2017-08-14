<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
    <script type="text/javascript" src="/threeall/ThinkPHP/Public/UEditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/threeall/ThinkPHP/Public/UEditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script src="/threeall/ThinkPHP/Public/My97DatePicker/WdatePicker.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="/threeall/ThinkPHP/Public/admin/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="/threeall/ThinkPHP/Public/admin/oneself/css/oneself.css" rel="stylesheet"> -->
    <!-- MetisMenu CSS -->
    <link href="/threeall/ThinkPHP/Public/admin/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="/threeall/ThinkPHP/Public/admin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/threeall/ThinkPHP/Public/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/threeall/ThinkPHP/Public/admin/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/threeall/ThinkPHP/Public/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/threeall/ThinkPHP/Public/home/news/js/jquery-1.8.3.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <!-- /.navbar-header -->
			<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
</div>
 <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>我的购物车</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>我的订单</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>我的收藏</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>


                        <a href="<?php echo U('User/edit',array('id'=>$user['user']['id']));?>">
                        <i class="fa fa-user fa-fw"></i>
                        <?php if($_SESSION['user'] != null): echo ($_SESSION['admin']['username']); ?>您好<?php endif; ?>
                       </a>
                        </li>
                       <!--  <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li> -->
                        <li class="divider"></li>
                        <li><a href="<?php echo U('Index/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
               <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>

                        <li>
                            <a href="<?php echo U('User/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 用户中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('User/index');?>">用户列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('User/add');?>">添加用户</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo U('User/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i>文章中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Xarticle/index');?>">文章列表</a>
                                </li>
                                 <li>
                                    <a href="<?php echo U('Xarticle/add');?>">添加文章</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Xarticle/recycle');?>">回收站</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo U('Xarticlecate/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i>文章类别中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Xarticlecate/index');?>">文章类别列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Xarticlecate/add');?>">添加文章类别</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="<?php echo U('Xbrand/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i>品牌类别中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Xbrand/index');?>">品牌类别列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Xbrand/add');?>">添加品牌类别</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="<?php echo U('Xcartype/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i>车型类别中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Xcartype/index');?>">车型类别列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Xcartype/add');?>">添加车型类别</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="<?php echo U('User/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 产品中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Xproduct/index');?>">产品列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Xproduct/add');?>">添加产品</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="<?php echo U('User/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 产品图片中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Xprodimg/index');?>">产品图片列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Xprodimg/add');?>">添加产品图片</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo U('User/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 客户咨询中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Xchaprice/index');?>">咨询列表</a>
                                </li>

                            </ul>

                        </li>
                         <li>
                            <a href="<?php echo U('User/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 广告管理中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Xad/index');?>">广告列表</a>
                                    <a href="<?php echo U('Xad/add');?>">添加广告</a>
                                </li>

                            </ul>

                        </li>
                        <li>
                            <a href="<?php echo U('User/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 轮播图管理中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Xlunbo/index');?>">轮播列表</a>
                                    <a href="<?php echo U('Xlunbo/add');?>">添加轮播图</a>
                                </li>

                            </ul>

                        </li>
                        <!--帖子开始-->
                             <li>
                            <a href="<?php echo U('User/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 帖子分类<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Ltype/index');?>">类别浏览</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Ltype/add');?>">类别添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="<?php echo U('User/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 帖子中心<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Lpost/index');?>">帖子列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Lpost/recycle');?>">回收站</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="<?php echo U('User/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 公告中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Lnotic/index');?>">公告列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Lnotic/add');?>">添加公告</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="<?php echo U('User/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 收藏中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Lcollect/index');?>">帖子收藏</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="<?php echo U('User/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 轮播管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Lunbo/index');?>">轮播浏览</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Lunbo/add');?>">轮播添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="<?php echo U('User/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 友情链接<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Link/index');?>">链接浏览</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Link/add');?>">链接添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <!--帖子结束-->


                        <!--商城开始-->
                             <li>
                            <a href="<?php echo U('Sproduct/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 商品中心<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Sproduct/index');?>">商城商品列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Sproduct/add');?>">添加商品</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Sproduct/recycle');?>">回收站</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="<?php echo U('Sproduct/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i>分类中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Scategory/index');?>">商城分类列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Scategory/add');?>">添加顶级分类</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo U('Sorder/index');?>"><i class="fa fa-bar-chart-o fa-fw"></i> 订单列表<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Sorder/index');?>">订单管理</a>
                                </li>

                                <!-- <li>
                                    <a href="<?php echo U('Sorder/recycle');?>">回收站</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <!--商城结束-->


                      <!--
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>

                        </li> -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

			
	<meta charset="utf-8"/>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">回收站</div>
				<!-- /.panel-heading -->
				<form action="">
					<input type="hidden" name="p" value="1">
					作者：<input type="text" name="username" value="<?php echo I('get.username');?>">
					标题：<input type="text" name="title" value="<?php echo I('get.title');?>">
					<input type="submit" value="提交">

				</form>
				<div class="panel-body">
					<div class="dataTable_wrapper">
						<div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="dataTables-example_wrapper">

							<div class="row">
								<div class="col-sm-12">
									<table aria-describedby="dataTables-example_info" role="grid" class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example">
										<thead>
											<tr role="row">
												<th aria-label="Rendering engine: activate to sort column ascending" style="text-align:center" colspan="1" rowspan="1" aria-controls="dataTables-example" tabindex="0" class="sorting"><input type="checkbox" name="all" id="all">全选</th>
												<th aria-label="Rendering engine: activate to sort column ascending" style="text-align:center" colspan="1" rowspan="1" aria-controls="dataTables-example" tabindex="0" class="sorting">帖子id</th>
												<th aria-sort="descending" aria-label="Browser: activate to sort column ascending" style="text-align:center" colspan="1" rowspan="1" aria-controls="dataTables-example" tabindex="0" class="sorting_desc">标题</th>
												<th aria-label="Platform(s): activate to sort column ascending" style="text-align:center" colspan="1" rowspan="1" aria-controls="dataTables-example" tabindex="0" class="sorting">作者</th>
												<th aria-label="Engine version: activate to sort column ascending" style="text-align:center" colspan="1" rowspan="1" aria-controls="dataTables-example" tabindex="0" class="sorting">发布时间</th>
												<th aria-label="CSS grade: activate to sort column ascending" style="text-align:center" colspan="1" rowspan="1" aria-controls="dataTables-example" tabindex="0" class="sorting">操作</th>
											</tr>
										</thead>
										<tbody>

											<tr role="row" class="gradeA odd">

											</tr>
											<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr role="row" class="gradeA odd"  data="<?php echo ($vo['id']); ?>"  style="text-align:center">
													<td><input type="checkbox" value="<?php echo ($vo['id']); ?>" class="aa"></td>
													<td class=""><?php echo ($vo['id']); ?></td>
													<td class="sorting_1"><?php echo ($vo['title']); ?></td>
													<td><?php echo ($vo['username']); ?></td>
													<td><?php echo date('Y-m-d H:i:s',$vo['ctime']);?></td>
													<td class="center">
														<a href="<?php echo U('Lpost/pdetail',array('id'=>$vo['id']));?>" class="btn btn-success btn-xs">查看</a>

													</td>
												</tr><?php endforeach; endif; else: echo "" ;endif; ?>
											<tr role="row">
												<td colspan="6">
													<a href="javascript:;" class="del btn btn-danger btn-xs">删除</a>
													<a href="javascript:;" class="rec btn btn-warning btn-xs">还原</a>
												</td>
											</tr>
											<script>
											$(function(){
												$('#all').click(function(){
													var value = $(this).prop('checked');
													$('.aa').each(function(){
														$(this).prop('checked',value);
													})
												})

												$('.del').click(function(){
													//console.log(1);
													var arr = [];
													$('.aa').each(function(){
														if($(this).prop('checked')){
															arr.push($(this).val());
														}
													})
													//console.log(arr);die;
													var str = arr.join(',');
													$.post('<?php echo U("Lpost/delete");?>','id='+str,function(msg){
														//console.log(msg);
														if(msg == 'yes'){
															for (var i in arr) {
																$('tr[data='+arr[i]+']').remove();
															}
														} else {
															alert('删除失败');
														}

													})
												})

												$('.rec').click(function(){
													var arr = [];
													$('.aa').each(function(){
														if($(this).prop('checked')){
															arr.push($(this).val());
														}
													})
													var str = arr.join(',');
													$.post('<?php echo U("Lpost/restore");?>','id='+str,function(msg){
														//console.log(msg);
														if(msg == 'yes'){
															for (var i in arr) {
																$('tr[data='+arr[i]+']').remove();
															}
														} else {
															alert('还原失败');
														}

													})
												})

											})
											</script>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- /.table-responsive -->

				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>



        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/threeall/ThinkPHP/Public/admin/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/threeall/ThinkPHP/Public/admin/dist/js/bootstrap.min.js"></script>
    <script src="/threeall/ThinkPHP/Public/admin/dist/js/tinymce.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/threeall/ThinkPHP/Public/admin/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/threeall/ThinkPHP/Public/admin/raphael/raphael-min.js"></script>
    <script src="/threeall/ThinkPHP/Public/admin/morrisjs/morris.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/threeall/ThinkPHP/Public/admin/dist/js/sb-admin-2.js"></script>

</body>

</html>