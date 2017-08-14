<?php
namespace Home\Controller;

use Think\Controller;
use Org\LAMP\CatTree;

include "Public/shop/function/msubstr.php";

class SproductController extends Controller {

	public function index()
	{
		//dump($_GET);exit;
		//1 实例化
		$sproduct=M('Sproduct');

		//条件
		$where['status']=1;
		$order='addtime desc';

		//判断是否有cid  即是否有搜索
		if(I('get.cid')!=null){
			$cid=I('get.cid');
			$where['cid']=I('get.cid');
		}
		//判断是否有排序
		if(I('get.order')!=null){
			$ord=I('get.order');
			$sort=I('get.sort');
			$order=$sort.' '.$ord;
			/*if($ord=='DESC'){
				$cla='xzpx_xia';
			}else{
				$cla='xzpx_sh';
			}*/
			$this->assign('cla',$cla);
		}

		//判断是否有搜索
		if(I('get.proname')!=null){
			$where=null;
			//dump($where);exit;
			$proname=I('get.proname');
			$where['proname']=array('like',"%{$proname}%");
		}
		//2 分页
		$page = new \Think\Page($sproduct->where($where)->count(),4);


    	//3 查询
		$data=$sproduct->where($where)->order($order)->page(I('get.p',1), 4)->select();
		//echo $order;
		//echo $sproduct->_sql();exit;
    	// 配置页码显示
    	$page->setConfig('header', '共 %TOTAL_ROW% 条记录');
    	$page->setConfig('first', '首页');
    	$page->setConfig('last', '末页');
    	$page->setConfig('prev','上一页');
    	$page->setConfig('next','下一页');
    	$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

    	$this->assign('show', $page->show());
		//4 发送数据
		$this->assign('data',$data);
		$this->assign('cid',$cid);

		//dump($data);exit;

		//5 加载模板
		$this->display();


	}

	public function proDetail($id)

	{

		//1 实例化
		$sproduct=M('Sproduct');

		//2 查询数据

		$data=$sproduct->find($id);
		//dump($data);exit;

		/*//3 对图片进行剪裁
		//3.1 实例化图片类
		$img = new \Think\Image();

		// 3.2 打开图片(获取图片的路径信息和文件名)

		$img->open("Public/shop/".$data['image']);

		//3.3 生成图片
		$image->thumb(150, 150)->save('Public/shop/Uploads/t_');*/

		//3 发送数据
		$this->assign('data',$data);

		//4 加载模版
		$this->display();
	}



}

?>