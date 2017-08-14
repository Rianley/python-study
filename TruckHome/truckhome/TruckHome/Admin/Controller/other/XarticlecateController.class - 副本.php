<?php
namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class XarticlecateController extends Controller {
	public function index(){
        // 1.实例化Model类
        $xarticlecate = M('xarticlecate');

        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($xarticlecate->count(),5);
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
        $data = $xarticlecate->page(I('get.p',1), 5)->select();

        // 3.分配数据
        $this->assign('data', $data);
        //dump($data);

        // 4.输出模板
        $this->display();
    }
    public function add()
    {

        // $name="根类别";
        // $pid=0;
        // $path=0;
        // dump($_GET);
        // if(isset($_GET['pid']) && isset($_GET['path'])){
        //             $name=$_GET['name'];
        //             $pid=$_GET['pid'];
        //             $path=$_GET['path'].$_GET['pid'].',';
        // }
        $name="根类别";
        $pid=0;
        $path=0;
        if(isset($_GET['pid']) && isset($_GET['path'])){
            $name=$_GET['name'];
            $pid=$_GET['pid'];
            $path=$_GET['path'].",".$_GET['pid'].',';
         }
        $this->assign('pid',$pid);
        $this->assign('path',$path);
        $this->assign('name',$name);
        $this->display();
    }
      public function upload(){
        //实例化上传类
        $upload = new \Think\Upload();
        //初始化上传设置
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
        $upload->rootPath = './Public/Uploads/'; // 设置附件上传目录
        //$upload->autoSub = false; //关闭上传创建子目录
        $upload->subName = array('date','Y-m-d'); //设置上传文件子目录的规则
        $upload->saveName = array('uniqid', '');
        //执行上传
        $info = $upload->upload();
        dump($info);
        //判断上传信息
        if(!$info){
            //上传错误提示错误信息
            $this->error($upload->getError());
        }else{
            // 上传成功 获取上传文件信息
            foreach($info as $file){
                //获取图片储存路径
                $urlpath = __ROOT__."/Public/Uploads/".$file['savepath'];
                $path = "./Public/Uploads/".$file['savepath'];
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

        $xarticle=M("xarticle");
        $num=$xarticle->find($id);
        $this->assign("data",$num);
        $this->display();
    }
    public function update()
    {



        $xarticle=M("xarticle");
        $data['id'] = $_POST['id'];
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        $data['acid'] = $_POST['acid'];
        $data['author'] = $_POST['author'];
        $data['editor'] = $_POST['editor'];
        $data['origin'] = $_POST['origin'];
        $data['atype'] = $_POST['atype'];

        $res=$xarticle->data($data)->save();


        if($res){



            $url=U("Admin/Xarticle/index");
            echo "<script>alert('修改成功');location='{$url}';</script>";
            }else{


            $url=U("Admin/Xarticle/edit",array('id'=>$data['id']));
            echo "<script>alert('修改失败');location='{$url}';</script>";
            }

    }
    public function delete($id)
    {
        $xarticlecate=M("xarticlecate");
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



