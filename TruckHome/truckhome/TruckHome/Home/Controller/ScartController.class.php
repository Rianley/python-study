<?php
namespace Home\Controller;

use Think\Controller;

class ScartController extends Controller
{

	public function index()
	{
		//判断是否登录
		if(!$_SESSION['user']){
			$url=U("User/login");
			echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";
		}
		//1实例化
		$scart=M('Scart');

		//2 查询数据
		$where['truck_scart.uid']=$_SESSION['user']['id'];
		//dump($where);exit;
		$data=$scart->join('truck_sproduct ON truck_scart.pid = truck_sproduct.id')->where($where)->order('truck_scart.addtime desc')->select();
		//echo $scart->_sql();exit;
		//dump($data);exit;
		//

		//3 发送数据
		$this->assign('data',$data);

		//4 加载模板
		$this->display('Scart/index');
	}

	public function add()

	{
		//判断是否登录

		if(!$_SESSION['user']){
			$url=U("User/login");
			echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";
		}
		//dump($_POST);exit;
		//1 实例化
		$sproduct = M('Sproduct');
		$scart = M('Scart');

		//2 查询

		$whereList['pid']=I('post.pid');
		$whereList['uid']=$_SESSION['user']['id'];

		$res=$scart->where($whereList)->find();
		//dump($res);exit;

		//3 判断是否在库中存在  存在加数量  不存在添加商品
		if($res){  //存在
			$data['number']=$res['number']+I('post.number');
			$r=$scart->data($data)->where($whereList)->save();
			//echo $scart->_sql();exit;

		}else{  //不存在  插入数据库
			$data=I('post.');
			$data['addtime']=time();
			$data['uid']=$_SESSION['user']['id'];
			$r=$scart->data($data)->add();
			//echo $scart->_sql();
			//echo 111;exit;

		}
		if($r){
			$this->redirect('Scart/index');
		}else{
			$this->error('添加失败');
		}



	}

	public function decrease()
	{

		$whereList['uid']=$_SESSION['user']['id'];
		$pid=I('post.pid');
		$whereList['pid']=$pid;


		//1 实例化
		$scart=M('scart');

		// 2 使数量减1
		$res=$scart->where($whereList)->setDec('number');

		//3 判断  返回msg
		if($res){
        	echo "yes"; //返回的msg
    	}else{
        	echo "no";
    	}



	}

	public function increase()
	{

		$whereList['uid']=$_SESSION['user']['id'];
		$pid=I('post.pid');
		$whereList['pid']=$pid;
		//dump($pid);exit;
		//dump($whereList);exit;
		//1 实例化
		$scart=M('scart');

		// 2 更新数据库使数量加1
		$res=$scart->where($whereList)->setInc('number');

		//判断  返回msg
		if($res){
        	echo "yes"; //返回的msg
    	}else{
        	echo "no";
    	}


	}
	public function del()
	{

		//1 实例化Model类
		$scart = M('Scart');
		$where['uid']=$_SESSION['user']['id'];
		$where['pid'] = array('in', I('post.id'));
		$res = $scart->where($where)->delete();

		if ($res) {
			$this->ajaxReturn('yes');
		} else {
			$this->ajaxReturn('no');
		}


	}

	public function delOnly(){

		//1 实例化Model类
		$scart = M('Scart');
		$where['uid']=$_SESSION['user']['id'];
		$where['pid'] =I('post.id');
		$res = $scart->where($where)->delete();

		if ($res) {
			$this->ajaxReturn('yes');
		} else {
			$this->ajaxReturn('no');
		}

	}
	public function clearBoth()
	{
		$scart=M("scart");
		$where=array();
		$where['uid']=$_SESSION['user']['id'];
		$res=$scart->where($where)->delete();
		if($res)
		{
			$this->success("清空购物车成功");
		}else{
			$this->error("清除失败");
		}
	}
}
?>