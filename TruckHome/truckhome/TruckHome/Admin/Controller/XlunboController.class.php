<?php
namespace Admin\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
header('content-type:text/html;charset=utf-8');
class XlunboController extends Controller {
	public function index(){
        // 1.实例化Model类
        if(!$_SESSION['admin']){
            $url=U("Index/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
        $xlunbo = M('xlunbo');

        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($xlunbo->count(),5);
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

        $data=$xlunbo->order("atime desc")->page(I('get.p',1), 5)->select();

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

     function upload(){
        //实例化上传类
        $upload = new \Think\Upload();
        //初始化上传设置
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
        $upload->rootPath = './Public/Uploads/admin/xlunbo/'.$path1; // 设置附件上传目录
        //$upload->autoSub = false; //关闭上传创建子目录
        $upload->subName = array('date','Y-m-d'); //设置上传文件子目录的规则
        $upload->saveName = array('uniqid', '');
        //执行上传
        $info = $upload->upload();
        //dump($info);
        //判断上传信息
        if(!$info){
            //上传错误提示错误信息
            //echo "图片上传错误";
            //$this->error($upload->getError());
        }else{
            // 上传成功 获取上传文件信息
           //  foreach($info as $file){
           //      //获取图片储存路径
           //      $urlpath = __ROOT__."/Public/Uploads/admin/xlunbo/".$path1.$file['savepath'];
           //      $path = "./Public/Uploads/".$path1.$file['savepath'];
           //      //获取图片名
           //      $picname = $file['savename'];
           //      //dump($picname);
           //      $A = "{$urlpath}{$picname}";
           //      return $A;
           // }
            return $info;
        }
    }

    public function insert()
    {
        // dump($_FILES);
        $xlunbo=M("xlunbo");
        $_POST['atime']=time();
        $info=$this->upload();
        //dump($info);die;
        foreach ($info as $key => $value) {

            $_POST[$key] =__ROOT__."/Public/Uploads/admin/xlunbo/".$value['savepath'].$value['savename'];
        }
        //dump($_POST);die;

        $res=$xlunbo->create();
        if($res){
             $r=$xlunbo->add();
             if($r){
                $url=U("Admin/Xlunbo/index");
                echo "<script>alert('添加成功');location='{$url}';</script>";

            }else{
                $url=U("Admin/Xlunbo/add");
                echo "<script>alert('添加失败');location='{$url}';</script>";
            }
        }



    }
    public function edit($id)
    {

        $xlunbo=M("xlunbo");
        $num=$xlunbo->find($id);
        //dump($num);die;
        $this->assign("data",$num);
        $this->display();
    }
    public function update()
    {



        $xlunbo=M("xlunbo");
        $info=$this->upload();
       foreach ($info as $key => $value) {

            $_POST[$key] =__ROOT__."/Public/Uploads/admin/xlunbo/".$value['savepath'].$value['savename'];
        }



         $res=$xlunbo->create();
         if($res){
             $r=$xlunbo->save();


            if($r>=0){



                $url=U("Admin/Xlunbo/index");
                echo "<script>alert('修改成功');location='{$url}';</script>";
                }else{


                $url=U("Admin/Xlunbo/edit",array('id'=>$data['id']));
                echo "<script>alert('修改失败');location='{$url}';</script>";
                }
             }


    }
    public function delete($id)
    {
        $xlunbo=M("xlunbo");
        $res=$xlunbo->delete($id);
        if($res){


            $url=U("Admin/Xlunbo/index");
            echo "<script>alert('删除成功');location='{$url}';</script>";

        }else{
            $url=U("Admin/Xlunbo/index");
            echo "<script>alert('删除失败');location='{$url}';</script>";
        }

    }


}



