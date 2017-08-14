<?php
namespace Admin\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
header('content-type:text/html;charset=utf-8');
class XprodimgController extends Controller {
	public function index(){
        // 1.实例化Model类
        if(!$_SESSION['admin']){
            $url=U("Index/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
        $xprodimg = M('xprodimg');
        $xproduct=M("xproduct");

        $wherelist=array();
        if(!empty($_GET['pname'])){
            $where=array();
            $where['pname']=array('like',"%{$_GET['pname']}%");
            $prodate=$xproduct->where($where)->select();
            //dump($prodate);
            $pid=array();
            foreach($prodate as $v){
                $pid[]=$v['id'];
            }
            //dump($pid);
            $wherelist['pid']=array("in",$pid);
        }
        if(!empty($_GET['addtime'])){
            $wherelist['addtime']=strtotime(I('get.addtime'));
        }



        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($xprodimg->where($wherelist)->count(),5);
        // 配置页码显示
        $page->setConfig('header', '共 %TOTAL_ROW% 条记录');
        $page->setConfig('first', '首页');
        $page->setConfig('last', '末页');
        $page->setConfig(   'prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"
);
        $this->assign('show', $page->show());

        // 2.查询数据
        $data = $xprodimg->field("truck_xproduct.pname,truck_xprodimg.*")->join(" __XPRODUCT__ on __XPRODUCT__.id=__XPRODIMG__.pid")->where($wherelist)->limit($page->firstRow,$page->listRows)->select();
        //$data = $xprodimg->field("truck_xproduct.pname,truck_xprodimg.*")->join(" __XPRODUCT__ on __XPRODUCT__.id=__XPRODIMG__.pid")->where($wherelist)->page(I('get.p',1), 5)->select();
        //echo $xprodimg->_sql();
        // 3.分配数据
        $this->assign('data', $data);
        //dump($data);

        // 4.输出模板
        $this->display();
    }
    public function add()
    {
        $xproduct=M("xproduct");
        //查询所有的商品
        $prod=$xproduct->select();
        $this->assign("prod",$prod);
        //dump($prod);
        $this->display();
    }
    public function upload(){
        //实例化上传类
        $upload = new \Think\Upload();
        //初始化上传设置
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
        $upload->rootPath = './Public/Uploads/admin/xprodimg/'; // 设置附件上传目录
        //$upload->autoSub = false; //关闭上传创建子目录
        $upload->subName = array('date','Y-m-d'); //设置上传文件子目录的规则
        $upload->saveName = array('uniqid', '');
        //执行上传
        $info = $upload->upload();
        //dump($info);
        //判断上传信息
        if(!$info){
            //上传错误提示错误信息
            $this->error($upload->getError());
        }else{
            // 上传成功 获取上传文件信息
            foreach($info as $file){
                //获取图片储存路径
                $urlpath = __ROOT__."/Public/Uploads/admin/xprodimg/".$file['savepath'];
                $path = "./Public/Uploads/admin/prodimg/".$file['savepath'];
                //获取图片名
                $picname = $file['savename'];
                //dump($picname);
                $A = "{$urlpath}{$picname}";
                return $A;
           }
        }
    }
    public function insert()
    {

        $xprodimg=M("xprodimg");
        $xproduct=M("xproduct");

        $_POST['addtime']=time();



        if(!empty($_FILES['picname']['name'])){
            $_POST['picname'] = $this->upload();
        }
        $res=$xprodimg->create();
        if($res){
        $add = $xprodimg->add();
         if(!empty($add))
            {
                $url=U("Admin/Xprodimg/index");
                echo "<script>alert('添加成功');location='{$url}';</script>";

            }else{
                $url=U("Admin/Xprodimg/add");
                echo "<script>alert('添加失败');location='{$url}';</script>";
            }

        }



    }
    public function edit($id)
    {

        $xprodimg=M("xprodimg");
        $num=$xprodimg->find($id);
        $pid=$num['pid'];
        //查询所有的商品
        $xproduct=M("xproduct");

        $where=array();
        $where['id']=$pid;
        $pone=$xproduct->where($where)->find();
        $poneid=$pone['id'];
        $this->assign("poneid",$poneid);
        $prod=$xproduct->select();
        $this->assign("prod",$prod);


        $this->assign("data",$num);
        $this->display();
    }
    public function update()
    {
        $xprodimg=M("xprodimg");
        if(!empty($_FILES['picname']['name'])){
             $_POST['picname'] = $this->upload();
         }
         $r=$xprodimg->create();
        if($r){
            $res=$xprodimg->save();
            //echo $xprodimg->_sql();


            if($res>=0){
                $url=U("Admin/Xprodimg/index");
                echo "<script>alert('修改成功');location='{$url}';</script>";

            }else{
                $url=U("Admin/Xprodimg/edit",array('id'=>$data['id']));
                echo "<script>alert('修改失败');location='{$url}';</script>";
            }
        }


    }
    public function delete($id)
    {
        $xprodimg=M("xprodimg");
        $res=$xprodimg->delete($id);
        //dump($res);
        if($res){
            $url=U("Admin/Xprodimg/index");
            echo "<script>alert('删除成功');location='{$url}';</script>";

        }else{
            $url=U("Admin/Xprodimg/index");
            echo "<script>alert('删除失败');location='{$url}';</script>";
        }

    }
}



