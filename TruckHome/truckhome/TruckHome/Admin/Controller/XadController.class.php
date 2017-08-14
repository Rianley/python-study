<?php
namespace Admin\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
header('content-type:text/html;charset=utf-8');
class XadController extends Controller {
	public function index(){
        // 1.实例化Model类
        if(!$_SESSION['admin']){
            $url=U("Index/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
        $xad = M('xad');

        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($xad->count(),5);
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
        // $data = $xarticle->limit($page->firstRow,$page->listRows)->select();
       // $data = $xarticle->page(I('get.p',1), 5)->select();

        $data=$xad->order("atime desc")->page(I('get.p',1), 5)->select();

        //dump($data);die;
        // 3.分配数据
        $this->assign('data', $data);
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

        $xad=M("xad");
        $_POST['atime']=time();
        if(!empty($_FILES['picname']['name'])){
             $_POST['picname'] = upload("admin/xad/");
         }

        $res=$xad->create();
        if($res){
             $r=$xad->add();
             if($r){
                $url=U("Admin/Xad/index");
                echo "<script>alert('添加成功');location='{$url}';</script>";

            }else{
                $url=U("Admin/Xad/add");
                echo "<script>alert('添加失败');location='{$url}';</script>";
            }
        }



    }
    public function edit($id)
    {

        $xad=M("xad");
        $num=$xad->find($id);
        //dump($num);die;
        $this->assign("data",$num);
        $this->display();
    }
    public function update()
    {



        $xad=M("xad");

        if(!empty($_FILES['picname']['name'])){
             $_POST['picname'] = upload("admin/xad/");
         }

         $res=$xad->create();
         if($res){
             $r=$xad->save();


            if($r>=0){



                $url=U("Admin/Xad/index");
                echo "<script>alert('修改成功');location='{$url}';</script>";
                }else{


                $url=U("Admin/Xad/edit",array('id'=>$data['id']));
                echo "<script>alert('修改失败');location='{$url}';</script>";
                }
             }


    }
    public function delete($id)
    {
        $xad=M("xad");
        $res=$xad->delete($id);
        if($res){


            $url=U("Admin/Xad/index");
            echo "<script>alert('删除成功');location='{$url}';</script>";

        }else{
            $url=U("Admin/Xad/index");
            echo "<script>alert('删除失败');location='{$url}';</script>";
        }

    }


}



