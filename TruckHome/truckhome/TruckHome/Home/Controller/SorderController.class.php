<?php
namespace Home\Controller;

use Think\Controller;

class SorderController extends Controller
{
	public $state=array(1=>'待付款','待收货','已收货','待发货');

	public function index()
	{
		$url=[1=>"User/sunfinished","User/sunreceived","User/sreceived","User/sdeliver"];
		$state=I('get.state');

		$whereList['truck_sorder.uid']=$_SESSION['user']['id'];
		$whereList['truck_sorder.state']=$state;

		//1 实例化
		$sorder=M('Sorder');
		$sordetail=M('Sordetail');
		$saddress=M('saddress');

		//2  实例化分页类(总数据条数,每页数据条数)
    	$page = new \Think\Page($sorder->where($whereList)->count(),5);
    	//dump($sorder->where($whereList)->count(),5);
    	//echo $sorder->_sql();
    	// 配置页码显示
    	$page->setConfig('header', '共 %TOTAL_ROW% 条记录');
    	$page->setConfig('first', '首页');
    	$page->setConfig('last', '末页');
    	$page->setConfig('prev','上一页');
    	$page->setConfig('next','下一页');
    	$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

    	$this->assign('show', $page->show());
    	//dump($page->show());
		//2 查询商品
		/*$sql="select truck_sorder.*,truck_sordetail.proname,truck_saddress.getman from truck_sorder,truck_sordetail,truck_saddress where truck_sorder.id=truck_sordetail.oid and truck_sorder.aid=truck_saddress.id and truck_sorder.state={$state} and truck_sorder.uid={$_SESSION['user']['id']}";
		//3 发送sql语句
		$data=$sorder->query($sql);*/

		//3 查询数据

		$data=$saddress->join('truck_sorder ON truck_sorder.aid =truck_saddress.id ')->where($whereList)->order('addtime desc')->page(I('get.p',1), 5)->select();
		//echo $sorder->_sql();exit;

		//dump($data);


		//4 发送数据
		$this->assign('data',$data);

		//5 加载模板
		$this->display($url[$state]);
	}


	public function aid()
	{
		//dump($_POST);exit;
		$_SESSION['aid']=$_POST['id'];
	}

	//提交订单
	public function insert()
	{

		//1 实例化
		$sorder=M('Sorder');
		$sordetail=M('Sordetail');

		//2 获取数据

		$data['totalPrice']=$_SESSION['totalPrice'];
		$data['totalNumber']=$_SESSION['totalNumber'];
		$data['uid']=$_SESSION['user']['id'];
		$data['addtime']=time();
		$data['aid']=$_SESSION['aid'];
		//var_dump($data);exit;

		//3 插入数据
		$res=$sorder->data($data)->add();
		//echo $sorder->_sql();exit;

		//4 判断
		if($res){
			echo 1;
			//插入订单详情表
			foreach ($_SESSION['order'] as $key => $value) {
				//echo 1; die;
				$value['oid']=$res;
				$value['pid']=$value['pid'];
				$r=$sordetail->field('oid,pid,proname,number,price')->create($value);

				if($r){
					$result=$sordetail->add();
				}
			}
			$this->redirect('sordetail',array('id' =>$res));
			//$this->success('订单生成',U('Sorder/index'),3);
		}else{
			$this->error('订单生成失败');
		}
	}

	//支付详情
	public function sordetail()
	{
		//提交订单  之后  购物车删除购买信息 订单的session清除
		//dump($_SESSION);
		//0.1 实例化
		$scart=M('Scart');

		//0.2遍历session  数据库中删除这次选中的商品
		$arr=[];
		foreach ($_SESSION['order'] as $key => $value)
		{
			$arr[]=$value['id'];
		}

		//dump($arr);
		//0.3 删除
		$whereId['pid']=array('in',$arr);
    	$whereId['uid']=$_SESSION['user']['id'];
    	$res=$scart->where($whereId)->delete();

		session('order',null);
		session('totalPrice',null);
		session('totalNumber',null);
		//dump($_GET);exit;
		$id=I('get.id');

		//dump($_SESSION);
		//1 实例化
		$saddress=M('saddress');

		$whereList['truck_sorder.id']=$id;
		//2 组装sql语句
		/*$sql='select truck_saddress.*,truck_sorder.id,truck_sorder.totalPrice,truck_sorder.totalNumber from truck_saddress,truck_sorder where truck_saddress.id=truck_sorder.aid and truck_sorder.id='.$id;*/
		$data=$saddress->join('truck_sorder ON truck_sorder.aid =truck_saddress.id ')->where($whereList)->find();
		//echo $saddress->_sql();exit;

		//3 发送sql语句
		//$res=$saddress->query($sql);
		//dump($res);exit;

		//4 发送数据
		//dump($data);exit;
		$this->assign('data',$data);


		//5 加载模板
		$this->display();
	}

	//查看订单详情
	public function orderDetail()
	{
		$id=I('get.id');

		//1 实例化
		$sorder=M('sorder');
		$saddress=M('saddress');
		$sordetail=M('sordetail');

		//2 查询
		$where['truck_sorder.id']=$id;
		$data=$saddress->join('truck_sorder ON truck_sorder.aid =truck_saddress.id ')->where($where)->find();
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
		$this->display('User/sorderDetail');
	}

	//取消订单的方法
	public function cancel()
	{
		$id=$_POST['id'];

		//1 实例化对象
		$sorder=M('sorder');
		$sordetail=M('sordetail');

		//2 删除
		$whereList['id']=$id;
		$whereList['uid']=$_SESSION['user']['id'];
		$where['oid']=$id;
		$res=$sorder->where($whereList)->delete();
		//echo $sorder->_sql(); exit;
		//3 判断
		if($res){
			$r=$sordetail->where($where)->delete();
			if($r){
			echo "yes";
			}else{
				echo "no";
			}
		}else{
			echo "no";
		}

	}

	//确认收货的方法
	public function sureRec()
	{
		$id=I('get.id');

		//1 实例化对象
		$sorder=M('sorder');
		$sordetail=M('Sordetail');
		$sproduct=M('Sproduct');

		//2修改
		$data['id']=$id;
		$data['state']=3;
		$res=$sorder->data($data)->save();

		//2 查询
		$where['truck_sorder.id']=I('get.id');
		$data=$sorder->join('truck_sordetail ON truck_sordetail.oid =truck_sorder.id ')->where($where)->select();
		//dump($data);exit;
		//echo $sorder->_sql();exit;
		//3 判断
		//dump($res);
		if($res){
			foreach ($data as $key => $value) {

			//4 销量加 库存减
				$whereList['id']=$value['pid'];
				$res=$sproduct->where($whereList)->setInc('salenum',$value['number']);

				//echo $sproduct->_sql();
				$res1=$sproduct->where($whereList)->setDec('storage',$value['number']);
				//dump($res && $res1);
				//5 判断
				if($res && $res1){
					//$this->success('确认收货成功',U("User/userindex"),3);
				}

			}
			$this->success('确认收货成功',U("User/userindex"),3);
		}
	}

	public function spay()
	{
		//dump(I('get.id'));exit;

		//1 实例化
		$sorder=M('Sorder');
		$sordetail=M('Sordetail');
		$sproduct=M('Sproduct');


		//echo $sorder->_sql();
		//dump($data);exit;

		//3 将订单状态改为待收货
		$dataCh['state']=4;
		$where['truck_sorder.id']=I('get.id');
		$change=$sorder->data($dataCh)->where($where)->save();
		//dump($change);exit;

		$this->display('Sorder/spay');
	}
}
?>