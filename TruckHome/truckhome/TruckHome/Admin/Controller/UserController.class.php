<?php
namespace Admin\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
class UserController extends Controller {
    public function index(){
        // 1.实例化Model类
       if(!$_SESSION['admin']){
            $url=U("Index/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
    	$user = M('user');
        $where=array();
        $where['cate']=2;
    	// 实例化分页类(总数据条数,每页数据条数)
    	$page = new \Think\Page($user->where($where)->count(),5);
    	// 配置页码显示
    	$page->setConfig('header', '共 %TOTAL_ROW% 条记录');
    	$page->setConfig('first', '首页');
    	$page->setConfig('last', '末页');
    	$page->setConfig('prev','上一页');
    	$page->setConfig('next','下一页');
    	$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"
);
    	$this->assign('show', $page->show());

    	// 2.查询数据

    	// $data = $user->limit($page->firstRow,$page->listRows)->select();
    	$data = $user->where($where)->page(I('get.p',1), 5)->select();

    	// 3.分配数据
    	$this->assign('data', $data);
    	// dump($data);

    	// 4.输出模板
    	$this->display();
    }
     public function requireCity()
    {
        $area=M("area");
        $upid=I('post.upid',0);
        $data=$area->where('upid='.$upid)->select();
        //dump($data);
        $this->ajaxReturn($data);
    }
    public function upload(){
        //实例化上传类
        $upload = new \Think\Upload();
        //初始化上传设置
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
        $upload->rootPath = './Public/Uploads/User/'; // 设置附件上传目录
        //$upload->autoSub = false; //关闭上传创建子目录
        $upload->subName = array('date','Y-m-d'); //设置上传文件子目录的规则
        $upload->saveName = array('uniqid', '');
        //执行上传
        $info = $upload->upload();
       // dump($info);
        //判断上传信息
        if(!$info){
            //上传错误提示错误信息
            $this->error($upload->getError());
        }else{
            // 上传成功 获取上传文件信息
            foreach($info as $file){
                //获取图片储存路径
                $urlpath = __ROOT__."/Public/Uploads/User/".$file['savepath'];
                $path = "./Public/Uploads/User/".$file['savepath'];
                //获取图片名
                $picname = $file['savename'];
                //dump($picname);
                $A = "{$urlpath}{$picname}";
                return $A;
           }
        }
    }
    public function able($id)
    {
        $user = M('user');
        $state = I('get.state');
        if($state == 1){
            $state=2;
            $_SESSION['user']['state']=2;
        }else{
            $state=1;
            $_SESSION['user']['state']=1;
        }
        $info['state']=$state;
        $res = $user->data($info)->where('id=%d',$id)->save();
        //echo $user->_sql();
        if($res){
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }
    public function add()
    {
    	$this->display();
    }
    public function insert()
    {

    	$user=M("user");

        $data['username'] = $_POST['username'];
        $data['phone'] = $_POST['phone'];
        $data['email']=$_POST['email'];
        $data['cate']=2;
        $data['province']=$_POST['province'];
        $data['city']=$_POST['city'];
        $data['county']=$_POST['county'];
        $data['villages']=$_POST['villages'];
        $data['sex'] = $_POST['sex'];
        $data['state'] = $_POST['state'];
        $data['addtime']=time();
        if(!empty($_FILES['picname']['name'])){
             $data['picname'] = $this->upload();
         }

        $res=$user->data($data)->add();


    	if($res){


            $url=U("Admin/User/index");
            echo "<script>alert('添加成功');location='{$url}';</script>";



    	}else{
    		$url=U("Admin/User/add");
            echo "<script>alert('添加失败');location='{$url}';</script>";

    	}
    }
    public function edit($id)
    {

    	$user=M("user");
    	$num=$user->find($id);
        $province=$num['province'];
        $city=$num['city'];
        $county=$num['county'];
        $villages=$num['villages'];
        //$where['id']=array("in ",array($province,$city,$county,$villages));
        //$cs=M("area")->where($where)->find();
        //dump($num);
        $pro['id']=$province;
        $city1['id']=$city;
        $county1['id']=$county;
        $villages1['id']=$villages;
        $province2=M("area")->where($pro)->find();
        $city2=M("area")->where($city1)->find();
        $county2=M("area")->where($county1)->find();
        $villages2=M("area")->where($villages1)->find();
        //dump($province2);
        $this->assign("province",$province2);


        $this->assign("city",$city2);
        $this->assign("county",$county2);
        $this->assign("villages",$villages2);
        //echo M("area")->_sql();
    	$this->assign("data",$num);
    	$this->display();
    }
    public function update()
    {
    	$user=M("user");
        $data['username'] = $_POST['username'];
        $data['phone'] = $_POST['phone'];
        $data['email']=$_POST['email'];
        $data['id'] = $_POST['id'];
        $data['province']=$_POST['province'];
        $data['city']=$_POST['city'];
        $data['county']=$_POST['county'];
        $data['sex'] = $_POST['sex'];
        $data['state'] = $_POST['state'];
        $data['villages']=$_POST['villages'];
        if(!empty($_FILES['picname']['name'])){
             $data['picname'] = $this->upload();
         }
         //dump($data);die;
        $res=$user->data($data)->save();


        if($res){


                $url=U("Admin/User/index");
                echo "<script>alert('修改成功');location='{$url}';</script>";
            }else{
               $url=U("Admin/User/edit",array("id"=>$data['id']));
                echo "<script>alert('修改失败');location='{$url}';</script>";
            }

    }
    public function delete($id)
    {
    	$user=M("user");
    	$res=$user->delete($id);
    	//dump($res);
    	if($res){

    		  $url=U("Admin/User/index");
            echo "<script>alert('删除成功');location='{$url}';</script>";
    	}else{
    		  $url=U("Admin/User/index");
              echo "<script>alert('删除失败');location='{$url}';</script>";
    	}

    }

}