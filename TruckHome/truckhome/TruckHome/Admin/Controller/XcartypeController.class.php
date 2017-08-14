<?php
namespace Admin\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
header('content-type:text/html;charset=utf-8');
class XcartypeController extends Controller {
	public function index(){
        // 1.实例化Model类
        if(!$_SESSION['admin']){
            $url=U("Index/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
        $xcartype = M('xcartype');

        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($xcartype->count(),5);
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
        // $data = $xcartype->limit($page->firstRow,$page->listRows)->select();
       //$data = $xcartype->page(I('get.p',1), 5)->select();

        $info=$xcartype->select();
        $list = CatTree::getList($info);
        //dump($list);
        // 3.分配数据

        //dump($data);


        $this->assign('list', $list);

        // 4.输出模板
        $this->display();
    }
    public function add()
    {
        $info=M("xbrand")->select();
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

    public function insert()
    {

        $xcartype=M("xcartype");
        $res=$xcartype->create();
        if($res){
            $r=$xcartype->add();
            if($r){
                $url=U("Admin/Xcartype/index");
                echo "<script>alert('添加成功');location='{$url}';</script>";
            }else{
                $url=U("Admin/Xcartype/add");
                echo "<script>alert('添加失败');location='{$url}';</script>";
            }
        }
    }
    public function edit($id)
    {
        $xcartype=M("xcartype");
        $res=$xcartype->find($id);
        $this->assign("data",$res);



        $info=$xcartype->select();
        $list = CatTree::getList($info);
        $this->assign("list",$list);



        $brandinfo=M("xbrand")->select();
        $brandlist=CatTree::getList($brandinfo);
        $ppid=array();
        foreach($brandlist as $k=>$v){
            $ppid[]=$v['pid'];
        }
        //dump($ppid);
        $this->assign("ppid",$ppid);
        //dump($brandlist);die;

        $this->assign("brandlist",$brandlist);

        $this->display();
    }
    public function update()
    {
        $xcartype=M("xcartype");
        $data['id'] = $_POST['id'];
        $data['name'] = $_POST['name'];
        $data['bid']=$_POST['bid'];
        $data['tag']=$_POST['tag'];
        $info=$xcartype->where("id=%d",$_POST['id'])->find();
        if($info['pid']==0){
            $data['pid']=0;
            $res=$xcartype->data($data)->save();
        }else{
            $data['pid']=$_POST['pid'];
            $res=$xcartype->data($data)->save();
        }
        //$res=$xcartype->data($data)->save();
        if($res){
            $url=U("Admin/Xcartype/index");
            echo "<script>alert('修改成功');location='{$url}';</script>";
        }else{
            $url=U("Admin/Xcartype/edit",array('id'=>$data['id']));
            echo "<script>alert('修改失败');location='{$url}';</script>";
         }

    }
    public function delete($id)
    {
        $xcartype=M("xcartype");
        $xproduct=M("xproduct");
        $xarticle=M("xarticle");
        $where['pid']=$id;
        $num=$xcartype->where($where)->find();
        if($num){
            $url=U("Admin/Xcartype/index");
            echo "<script>alert('该品牌有子类不能删除');location='{$url}';</script>";
        }else{
            $where=array();
            $where['tid']=$id;
            $prod1=$xproduct->where($where)->select();
            $where=array();
            $where['vid']=$id;
            $a1=$xarticle->where($where)->select();

            if($prod1 || $a1){
                 $url=U("Admin/Xcartype/index");
                echo "<script>alert('该品牌有商品或文章不能删除');location='{$url}';</script>";
            }else{
                $res=$xcartype->delete($id);
                 if($res){
                    $url=U("Admin/Xcartype/index");
                    echo "<script>alert('删除成功');location='{$url}';</script>";
                }else{
                    $url=U("Admin/Xcartype/index");
                    echo "<script>alert('删除失败');location='{$url}';</script>";
                }
            }

        }


    }
}



