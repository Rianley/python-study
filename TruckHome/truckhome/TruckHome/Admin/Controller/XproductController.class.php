<?php
namespace Admin\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
header('content-type:text/html;charset=utf-8');
class XproductController extends Controller {
	public function index(){
        // 1.实例化Model类
        if(!$_SESSION['admin']){
            $url=U("Index/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
        $xproduct = M('xproduct');

        $wherelist=array();
        if(!empty($_GET['pname'])){
            $wherelist['pname']=array('like',"%{$_GET['pname']}%");
        }
        if(!empty($_GET['addtime'])){
            $wherelist['addtime']=strtotime(I('get.addtime'));
        }
        if(!empty($_GET['start'])){
            $wherelist['price']=array("GT",I('get.start'));
        }
        if(!empty($_GET['end'])){
            $wherelist['price']=array("LT",I('get.end'));
        }
        if(!empty($_GET['start']) && !empty($_GET['end'])){
            $wherelist['price']=array("between",array(I('get.start'),I('get.end')));
        }


        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($xproduct->where($wherelist)->count(),5);
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
        // $data = $xproduct->limit($page->firstRow,$page->listRows)->select();
        $data = $xproduct->where($wherelist)->page(I('get.p',1), 5)->select();

        // 3.分配数据
        $this->assign('data', $data);
        //echo $xproduct->_sql();
        //dump($data);

        // 4.输出模板
        $this->display();
    }
    public function add()
    {
        $info=M("xcartype")->select();
        $list = CatTree::getList($info);
        $pid=array();
        foreach($list as $k=>$v){
            $pid[]=$v['pid'];
        }
        //dump($pid);
        $this->assign("pid",$pid);
        $this->assign("list",$list);
        $this->display();
    }
    public function upload(){
        //实例化上传类
        $upload = new \Think\Upload();
        //初始化上传设置
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
        $upload->rootPath = './Public/Uploads/admin/xproduct/'; // 设置附件上传目录
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
                $urlpath = __ROOT__."/Public/Uploads/admin/xproduct/".$file['savepath'];
                $path = "./Public/Uploads/admin/xproduct/".$file['savepath'];
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

        $xproduct=M("xproduct");


        $data['boxlength'] = $_POST['boxlength'].trim();
        $data['wheelbase'] = $_POST['wheelbase'].trim();
        $data['forwardgear'] = $_POST['forwardgear'].trim();
        $data['horsepower'] = $_POST['horsepower'].trim();
        $data['engine'] = $_POST['engine'].trim();
        $data['effluent'] = $_POST['effluent'].trim();
        $data['announcement'] = $_POST['announcement'].trim();
        $data['drive'] = $_POST['drive'].trim();
        $data['tid'] = $_POST['tid'].trim();
        $data['pname'] = $_POST['pname'].trim();
        $data['price'] = $_POST['price'].trim();
        $data['describe'] = $_POST['describe'].trim();
        //$data['picname'] = $_POST['picname'];
        $data['addtime'] =time();

        if(!empty($_FILES['picname']['name'])){
            $data['picname'] = $this->upload();
        }

        $add = $xproduct->data($data)->add();
         if(!empty($add))
            {
                $url=U("Admin/Xproduct/index");
                echo "<script>alert('添加成功');location='{$url}';</script>";

            }else{
                $url=U("Admin/Xproduct/add");
                echo "<script>alert('添加失败');location='{$url}';</script>";
            }



    }
    public function edit($id)
    {

        $xproduct=M("xproduct");
        $num=$xproduct->find($id);
        $this->assign("data",$num);



        $info=M("xcartype")->select();
        $list = CatTree::getList($info);
        $this->assign("list",$list);
        $pid=array();
        foreach($list as $k=>$v){
            $pid[]=$v['pid'];
        }
        //dump($pid);
        $this->assign("pid",$pid);


        $this->display();
    }
    public function update()
    {
        $xproduct=M("xproduct");
        $data['boxlength'] = $_POST['boxlength'].trim();
        $data['wheelbase'] = $_POST['wheelbase'].trim();
        $data['forwardgear'] = $_POST['forwardgear'].trim();
        $data['horsepower'] = $_POST['horsepower'].trim();
        $data['engine'] = $_POST['engine'].trim();
        $data['effluent'] = $_POST['effluent'];
        $data['announcement'] = $_POST['announcement'].trim();
        $data['drive'] = $_POST['drive'].trim();
        $data['tid'] = $_POST['tid'].trim();
        $data['pname'] = $_POST['pname'].trim();
        $data['price'] = $_POST['price'].trim();
        $data['id'] = $_POST['id'].trim();
        $data['describe'] = $_POST['describe'].trim();
        if(!empty($_FILES['picname']['name'])){
             $data['picname'] = $this->upload();
         }

        $res=$xproduct->data($data)->save();


        if($res>=0){
            $url=U("Admin/Xproduct/index");
            echo "<script>alert('修改成功');location='{$url}';</script>";

        }else{
            $url=U("Admin/Xproduct/edit",array('id'=>$data['id']));
            echo "<script>alert('修改失败');location='{$url}';</script>";
        }

    }
    public function delete($id)
    {
        $xproduct=M("xproduct");
        $res=$xproduct->delete($id);
        //dump($res);
        if($res){
            $url=U("Admin/Xproduct/index");
            echo "<script>alert('删除成功');location='{$url}';</script>";

        }else{
            $url=U("Admin/Xproduct/index");
            echo "<script>alert('删除失败');location='{$url}';</script>";
        }

    }
}



