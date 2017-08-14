<?php
namespace Admin\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
header('content-type:text/html;charset=utf-8');
class XarticlecateController extends Controller {
	public function index(){
        // 1.实例化Model类
        if(!$_SESSION['admin']){
            $url=U("Index/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
        $xarticlecate = M('xarticlecate');

        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($xarticlecate->count(),8);
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
        // $data = $xarticlecate->limit($page->firstRow,$page->listRows)->select();


        $data = $xarticlecate->select();
       // $data = $xarticlecate->page(I('get.p',1), 8)->select();
        $list = CatTree::getList($data);
        // 3.分配数据
        $this->assign('list', $list);
        //dump($list);

        // 4.输出模板
        $this->display();
    }
    public function add()
    {


        // $name="根类别";
        // $pid=0;
        // $path=0;
        // if(isset($_GET['pid']) && isset($_GET['path'])){
        //     $name=$_GET['name'];
        //     $pid=$_GET['pid'];
        //     $path=$_GET['path'].",".$_GET['pid'].',';
        //  }
        // $this->assign('pid',$pid);
        // $this->assign('path',$path);
        // $this->assign('name',$name);
        $this->display();
    }

    public function insert()
    {

        $xarticlecate=M("xarticlecate");
        $data['name'] = $_POST['name'];
        $data['pid'] = $_POST['pid'];
        $data['path'] = $_POST['path'];


        //$res=$xarticlecate->create();
        $res=$xarticlecate->data($data)->add();
        if($res){
            $url=U("Admin/xarticlecate/index");
            echo "<script>alert('添加成功');location='{$url}';</script>";

        }else{
            $url=U("Admin/xarticlecate/add");
            echo "<script>alert('添加失败');location='{$url}';</script>";
        }

    }
    public function edit($id)
    {

        $xarticlecate=M("xarticlecate");
        $num=$xarticlecate->find($id);
        $this->assign("data",$num);
        $info=$xarticlecate->select();
        $list=CatTree::getList($info);

        $this->assign('list',$list);
        $this->display();
    }
    public function update()
    {
        $xarticlecate=M("xarticlecate");
        $res=$xarticlecate->create();
       // dump($_POST);
        if($res){
            $r=$xarticlecate->save();
           // echo $xarticlecate->_sql();die;
            if($r)
            {
                $url=U("Admin/xarticlecate/index");
                echo "<script>alert('修改成功');location='{$url}';</script>";
            }else{
               $url=U("Admin/xarticlecate/edit",array('id'=>$data['id']));
               echo "<script>alert('修改失败');location='{$url}';</script>";
            }
        }

    }
    public function delete($id)
    {
        $xarticlecate=M("xarticlecate");
        $xarticle=M("xarticle");
        $where['pid']=$id;
        $num=$xarticlecate->where($where)->find();
        //echo $xarticlecate->_sql();die;
        if($num){
            $url=U("Admin/xarticlecate/index");
            echo "<script>alert('此分类下有子类，不能删除');location='{$url}';</script>";
            die;
        }
        $where=array();
        $where['acid']=$id;
        $prod=$xarticle->where($where)->select();
        if($prod){
            $url=U("Admin/xarticlecate/index");
            echo "<script>alert('此分类下有文章，不能删除');location='{$url}';</script>";
            die;
        }else{
            $res=$xarticlecate->delete($id);
        //dump($res);
        if($res){


             $url=U("Admin/xarticlecate/index");
             echo "<script>alert('删除成功');location='{$url}';</script>";

        }else{
            $url=U("Admin/xarticlecate/index");
            echo "<script>alert('删除失败');location='{$url}';</script>";
        }

        }

    }
}



