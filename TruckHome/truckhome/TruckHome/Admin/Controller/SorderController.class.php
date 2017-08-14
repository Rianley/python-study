<?php
namespace Admin\Controller;

use Think\Controller;
use Org\LAMP\CatTree;

class SorderController extends Controller
{
	public $state=array(1=>'待付款','待收货','已收货','要发货');
	public function index()
	{
		//1 实例化
		$sorder=M('sorder');
		$user=M('user');
		$saddress=M('saddress');
		$sordetail=M('Sordetail');

		$where=[];
		//dump(I('get.'));exit;
		if(I('get.id')!=null){
			$id=I('get.id');
			$where['truck_sorder.id']=array('like',"%{$id}%");

			//echo $saddress->_sql();exit;
			//dump($data);exit;
		}

		if(I('get.state')!=null){
			//dump(I('get.state'));exit;
			$state=I('get.state');
			$where['truck_sorder.state']=$state;
		}



		//2  实例化分页类(总数据条数,每页数据条数)
	    	$page = new \Think\Page($sorder->where($where)->count(),5);

		//3 查询数据
		$data=$saddress->join('truck_user ON truck_saddress.uid =truck_user.id ')->join('truck_sorder ON truck_sorder.aid =truck_saddress.id ')->where($where)->page(I('get.p',1), 5)->select();

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
		$this->assign('state',$this->state);

		//5 加载模板
		$this->display($url[$state]);


	}
	public function orderDetail()
	{
		$id=I('get.id');

		//1 实例化
		$sorder=M('sorder');
		$saddress=M('saddress');
		$sordetail=M('sordetail');

		//2 查询
		$where['truck_sorder.id']=$id;
		$data=$saddress->join('truck_user ON truck_saddress.uid =truck_user.id ')->join('truck_sorder ON truck_sorder.aid =truck_saddress.id ')->where($where)->find();
		//echo $sorder->_sql();exit;
		//dump($data);exit;

		$whereList['oid']=$id;
		$res=$sordetail->where($whereList)->select();
		//echo $sordetail->_sql();exit;
		//dump($res);exit;

		//3 发送数据
		$this->assign('data',$data);
		$this->assign('res',$res);
		$this->assign('state',$this->state);

		//4 加载模板
		$this->display();
	}

	public function deliver()
	{
		$id=I('get.id');

		//1 实例化
		$sorder=M('sorder');

		//2 修改
		$_GET['state']=2;
		$res=$sorder->data($_GET)->save();
		if($res){
			$this->success('确认发货成功');
		}else{
			$this->error('确认发货失败');
		}

	}

}
?>