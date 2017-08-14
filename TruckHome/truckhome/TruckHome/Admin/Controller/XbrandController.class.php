<?php
namespace Admin\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
header('content-type:text/html;charset=utf-8');
class XbrandController extends Controller {
	public function index(){
        // 1.实例化Model类
        if(!$_SESSION['admin']){
            $url=U("Index/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
        $xbrand = M('xbrand');

        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($xbrand->count(),5);
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
        // $data = $xbrand->limit($page->firstRow,$page->listRows)->select();
       //$data = $xbrand->page(I('get.p',1), 5)->select();
        $wherelist = [];
        if (!empty($_GET['name'])) {
            $wherelist['name'] = array('like', "%{$_GET['name']}%");
        }
        $info=$xbrand->where($wherelist)->select();
        $list = CatTree::getList($info);
       // dump($list);die;
        // 3.分配数据
        $this->assign('list', $list);
        //dump($data);

        // 4.输出模板
        $this->display();
    }
    public function add()
    {

        $this->display();
    }

    public function insert()
    {

        $xbrand=M("xbrand");
        $res=$xbrand->create();
        if($res){
            $r=$xbrand->add();
            if($r){
                $url=U("Admin/Xbrand/index");
                echo "<script>alert('添加成功');location='{$url}';</script>";
            }else{
                $url=U("Admin/Xbrand/add");
                echo "<script>alert('添加失败');location='{$url}';</script>";
            }
        }
    }
    public function edit($id)
    {
        $xbrand=M("xbrand");
        $res=$xbrand->find($id);
        $this->assign("data",$res);
        $info=$xbrand->select();
        $list = CatTree::getList($info);
        $this->assign("list",$list);
        $this->display();
    }
    public function update()
    {
        $xbrand=M("xbrand");
        $data['id'] = $_POST['id'];
        $data['name'] = $_POST['name'];
        $info=$xbrand->where("id=%d",$_POST['id'])->find();
        if($info['pid']==0){
            $data['pid']=0;
            $res=$xbrand->data($data)->save();
            //echo $xbrand->_sql();die;
        }else{
            $data['pid']=$_POST['pid'];
            $res=$xbrand->data($data)->save();
        }
        //$res=$xbrand->data($data)->save();
        if($res){
            $url=U("Admin/Xbrand/index");
            echo "<script>alert('修改成功');location='{$url}';</script>";
        }else{
            $url=U("Admin/Xbrand/edit",array('id'=>$data['id']));
            echo "<script>alert('修改失败');location='{$url}';</script>";
         }
        //  $res=$xbrand->create();
        // if($res){
        //     $r=$xbrand->save();
        //     if($r){
        //         $url=U("Admin/Xbrand/index");
        //         echo "<script>alert('修改成功');location='{$url}';</script>";
        //     }else{
        //         $url=U("Admin/Xbrand/add");
        //         echo "<script>alert('添加失败');location='{$url}';</script>";
        //     }
        // }
    }
    public function delete($id)
    {
        $xbrand=M("xbrand");
        $where['pid']=$id;
        $num=$xbrand->where($where)->find();
        if($num){
            $url=U("Admin/Xbrand/index");
            echo "<script>alert('该品牌有子类不能删除');location='{$url}';</script>";
        }else{
             $res=$xbrand->delete($id);
             if($res){
                $url=U("Admin/Xbrand/index");
                echo "<script>alert('删除成功');location='{$url}';</script>";
            }else{
                $url=U("Admin/Xbrand/index");
                echo "<script>alert('删除失败');location='{$url}';</script>";
            }
        }


    }
}



