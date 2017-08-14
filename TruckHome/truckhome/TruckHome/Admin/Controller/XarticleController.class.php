<?php
namespace Admin\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
header('content-type:text/html;charset=utf-8');
class XarticleController extends Controller {
	public function index(){
        // 1.实例化Model类
        if(!$_SESSION['admin']){
            $url=U("Index/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
        $xarticle = M('xarticle');

        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($xarticle->where("state=1")->count(),5);
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

        $data=$xarticle->field("truck_xarticlecate.name,truck_xarticle.*")->join("__XARTICLECATE__ on __XARTICLECATE__.id=__XARTICLE__.acid")->where("state=1")->order("utime desc")->page(I('get.p',1), 5)->select();

        //dump($data);die;
        // 3.分配数据
        $this->assign('data', $data);
        //dump($data);

        // 4.输出模板
        $this->display();
    }
    public function add()
    {
        $info=M("xarticlecate")->select();
        $list = CatTree::getList($info);
        $pid=array();
        foreach($list as $k=>$v){
            $pid[]=$v['pid'];
        }
        //dump($pid);
        $this->assign("pid",$pid);
        $this->assign('list',$list);


        $infoc=M("xcartype")->select();
        $listc = CatTree::getList($infoc);
        $pidc=array();
        foreach($listc as $k=>$v){
            $pidc[]=$v['pid'];
        }
        //dump($pidc);
        $this->assign("pidc",$pidc);
        $this->assign('listc',$listc);

        $this->display();
    }

    public function insert()
    {

        $xarticle=M("xarticle");
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        $data['acid'] = $_POST['acid'];
        $data['vid'] = $_POST['vid'];
        $data['author'] = $_POST['author'];
        $data['editor'] = $_POST['editor'];
        $data['origin'] = $_POST['origin'];
        $data['atype'] = $_POST['atype'];
        $data['hot'] = $_POST['hot'];
        $data['atime'] = time();
        $data['state']=1;
        if(!empty($_FILES['picname']['name'])){
             $data['picname'] = upload("admin/xarticle/");
         }

        $res=$xarticle->create();
        $res=$xarticle->data($data)->add();
        if($res){
            $url=U("Admin/Xarticle/index");
            echo "<script>alert('添加成功');location='{$url}';</script>";

        }else{
            $url=U("Admin/Xarticle/add");
            echo "<script>alert('添加失败');location='{$url}';</script>";
        }

    }
    public function edit($id)
    {

        $xarticle=M("xarticle");
        $num=$xarticle->find($id);
        //dump($num);die;
        $this->assign("data",$num);


        $info=M("xarticlecate")->select();
        $list=CatTree::getList($info);
        $this->assign("list",$list);





        $infoc=M("xcartype")->select();
        $listc = CatTree::getList($infoc);
        $pidc=array();
        foreach($listc as $k=>$v){
            $pidc[]=$v['pid'];
        }
        //dump($pidc);
        $this->assign("pidc",$pidc);
        $this->assign('listc',$listc);



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
        $data['hot'] = $_POST['hot'];
        $data['vid'] = $_POST['vid'];
        if(!empty($_FILES['picname']['name'])){
             $data['picname'] = upload("admin/xarticle/");
         }


        $res=$xarticle->data($data)->save();


        if($res>=0){



            $url=U("Admin/Xarticle/index");
            echo "<script>alert('修改成功');location='{$url}';</script>";
            }else{


            $url=U("Admin/Xarticle/edit",array('id'=>$data['id']));
            echo "<script>alert('修改失败');location='{$url}';</script>";
            }

    }
    public function delete($id)
    {
        $xarticle=M("xarticle");
        $res=$xarticle->delete($id);
        //dump($res);
        if($res){


            $url=U("Admin/Xarticle/index");
            echo "<script>alert('删除成功');location='{$url}';</script>";

        }else{
            $url=U("Admin/Xarticle/index");
            echo "<script>alert('删除失败');location='{$url}';</script>";
        }

    }

    //修改置顶状态 1代表置顶
    /*
    *修改置顶状态
    *1代表置顶
    *2代表取消置顶
    *前台根据修改时间来排放文章，置顶的在前面
    */
    public function updatetage($id)
    {
        //取消置顶
        $tage=I("get.tage");
        if($tage==1){
            $data['tage']=2;
        }else{
            $data['tage']=1;
        }
        $data['id']=$id;
        $data['utime']=time();
        $res=M("xarticle")->data($data)->save();
        if($res>=0){
            $url=U("Admin/Xarticle/index");
            echo "<script>alert('修改成功');location='{$url}';</script>";
        }else{
            $url=U("Admin/Xarticle/index");
            echo "<script>alert('修改失败');location='{$url}';</script>";
        }

    }
    /*
    *修改文章显示不显示的状态
    *1代表显示（在前台显示或者从回收站还原）
    *2代表不显示（放到回收站  如果文章不想删，又不知道怎么修改就放到回收站 不让显示）
    */
    public function updatestate($id)
    {
        $state=I("get.state");
        if($state==1){
            $data['state']=2;
        }else{
            $data['state']=1;
        }
        $data['id']=$id;
        $res=M("xarticle")->data($data)->save();
        if($res>=0){
            $url=U("Admin/Xarticle/index");
            echo "<script>alert('修改成功');location='{$url}';</script>";
        }else{
            $url=U("Admin/Xarticle/index");
            echo "<script>alert('修改失败');location='{$url}';</script>";
        }
    }
    /*
    *回收站数据显示
    */
    public function recycle()
    {
         $xarticle = M('xarticle');

        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($xarticle->where("state=2")->count(),5);
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

        $data=$xarticle->field("truck_xarticlecate.name,truck_xarticle.*")->join("__XARTICLECATE__ on __XARTICLECATE__.id=__XARTICLE__.acid")->where("state=2")->order("utime desc")->page(I('get.p',1), 5)->select();

        //dump($data);die;
        // 3.分配数据
        $this->assign('data', $data);
        //dump($data);

        // 4.输出模板
        $this->display();
    }
}



