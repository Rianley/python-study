<?php
namespace Admin\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
header('content-type:text/html;charset=utf-8');
class XcompanyController extends Controller {
	public function index(){
        // 1.实例化Model类
        if(!$_SESSION['admin']){
            $url=U("Index/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
        $xcompany = M('xcompany');

        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($xcompany->count(),5);
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
        // $data = $xcompany->limit($page->firstRow,$page->listRows)->select();
      $data = $xcompany->page(I('get.p',1), 5)->select();

        //$info=$xcompany->select();
        //$list = CatTree::getList($info);
       // dump($list);die;
        // 3.分配数据
        //$this->assign('list', $list);
        $this->assign("data",$data);
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

        $xcompany=M("xcompany");
        $res=$xcartype->create();
        if($res){
            $r=$xcartype->add();
            if($r){
                $url=U("Admin/xcompany/index");
                echo "<script>alert('添加成功');location='{$url}';</script>";
            }else{
                $url=U("Admin/xcompany/add");
                echo "<script>alert('添加失败');location='{$url}';</script>";
            }
        }
    }
    public function edit($id)
    {
        $xcompany=M("xcompany");
        $res=$xcompany->find($id);
        $this->assign("data",$res);
        $this->display();
    }
    public function update()
    {
        $xcompany=M("xcompany");
       $res=$xcartype->create();
        if($res){
            $r=$xcartype->save();
            if($r){
                $url=U("Admin/xcompany/index");
                echo "<script>alert('修改成功');location='{$url}';</script>";
            }else{
                $url=U("Admin/xcompany/edit",array('id'=>$_POST['id']));
                echo "<script>alert('修改失败');location='{$url}';</script>";
            }
        }

    }
    public function delete($id)
    {
        $xcompany=M("xcompany");

        $res=$xcartype->delete($id);
        if($res){
             $url=U("Admin/xcompany/index");
             echo "<script>alert('删除成功');location='{$url}';</script>";
       }else{
             $url=U("Admin/xcompany/index");
             echo "<script>alert('删除失败');location='{$url}';</script>";
      }



    }
}



