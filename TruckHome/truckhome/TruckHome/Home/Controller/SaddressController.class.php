<?php
namespace Home\Controller;
header("content-type:text/html;charset=utf-8");
use Think\Controller;

class SaddressController extends Controller
{
	public function index()
	{
		//echo $_SERVER['HTTP_REFERER'];exit;

	//dump($_SESSION['order']);

		//1  实例化对象
		$saddress = M('Saddress');

		//2


		$where=array();
        $where['uid']=$_SESSION['user']['id'];
        $data=$saddress->where($where)->select();

        //echo $saddress->_sql();

		//3 发送数据
		$this->assign('data',$data);

        $this->display();

		//4.1 加载模板



	}
	/*public function sess(){
		$_SESSION['totalPrice']=$_POST['totalPrice'];
		$_SESSION['totalNumber']=$_POST['totalNumber'];

	}*/
	public function sessid()
	{
		$_SESSION['order']=null;
		$_SESSION['totalPrice']=$_POST['totalPrice'];
		$_SESSION['totalNumber']=$_POST['totalNumber'];

		//1实例化
		$scart=M('Scart');

		//2 查询数据

		$whereList['truck_scart.uid']=$_SESSION['user']['id'];
		$whereList['truck_scart.pid']=array('in', I('post.id'));

		$data = $scart->join('truck_sproduct ON truck_scart.pid = truck_sproduct.id')->where($whereList)->select();

		$_SESSION['order']=$data;
		// dump($_SESSION['order']);exit;

		//$this->redirect("Scart/index");


	}
	public function sessedit()
	{
		$_SESSION['order']=null;
        $_SESSION['totalPrice']=null;
        $_SESSION['totalNumber']=null;

		$this->redirect("Scart/index");
	}

	public function area()
    {

    	// 1.实例化Model
    	$sarea = M('Sarea');

    	// 2.查询数据（只查询省份）
    	$upid = I('get.upid', 0);
    	$data = $sarea->where('upid='.$upid)->select();
    	// dump($data);

    	// 3.返回结果
    	$this->ajaxReturn($data);
    }
    public function add()
    {
    	$this->display('User/saddadd');
    }

    public function insert()
    {
    	//dump($_POST);exit;
    	//1 实例化
    	$saddress=M('Saddress');

    	//2 接受数据
    	$data['uid']=$_SESSION['user']['id'];
    	$data['address']=$_POST['address'];
    	$data['area']=$_POST['area'];
    	$data['phonenum']=$_POST['phonenum'];
    	$data['code']=$_POST['code'];
    	$data['getman']=$_POST['getman'];
        $_SESSION['url']= $_SERVER['REQUEST_URI'];

		$r=$saddress->data($data)->add();
		//echo $saddress->_sql();exit;
		if($r){

			$this->redirect('Saddress/saddIndex');
		}else{
		$this->error('添加失败');
   		}
    }

    public function saddIndex()
    {
    	//1  实例化对象
		$saddress = M('Saddress');

		//2 查询数据
        $where=array();
        $where['uid']=$_SESSION['user']['id'];
		$data=$saddress->where($where)->select();

		//3 发送数据
		$this->assign('data',$data);

		//4 加载模板
    	$this->display('User/saddIndex');

    }

    public function del()
    {
    	$id=$_POST['id'];


		//1 实例化对象
		$saddress=M('Saddress');


		//2 删除
		$whereList['id']=$id;
		//$whereList['uid']=$_SESSION['user']['id'];

		$res=$saddress->where($whereList)->delete();
		//echo $sorder->_sql(); exit;
		//3 判断
		if($res){
			echo "yes";
		}else{
			echo "no";
		}
    }

    public function edit($id)
    {

        //1 实例化
        $saddress = M('Saddress');

        //2 查询
        $data = $saddress->find($id);

        //3 发送数据
        $this->assign('data',$data);

        //4 加载模板
    	$this->display('User/saddEdit');
    }

    public function update()
    {
    	//dump($_POST);exit;

    	//1 实例化
        $saddress = M('Saddress');

        //2 创建数据对象
        $res=$saddress->create();

        //3 判断
        if($res){
            $r=$saddress->save();
            if($r){
                $this->success('修改成功',U('Saddress/saddIndex'),3);
            }else{
                $this->error('修改失败');
            }
        }else{
            $this->error($saddress->getError());
        }
    }
}

?>