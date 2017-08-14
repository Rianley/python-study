<?php
namespace Home\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
header("content-type:text/html;charset=utf-8");
class XarticleController extends Controller {
    public function index(){
        $xarticle=M("xarticle");
        $xarticlecate=M("xarticlecate");
        $xlunbo=M("xlunbo");

        //直接根据hot=2来查询热门文章，查出前六条
        $where=array();
        $where['hot']=2;
        $hotdata=$xarticle->where($where)->limit(6)->select();
        $this->assign("hotdata",$hotdata);


        //获取轮播图
        $where=array();
        $where['state']=1;//代表大图
        $dlunbo=$xlunbo->where($where)->find();
        $this->assign("dlunbo",$dlunbo);



        $pid=$_GET['id'];
        //dump($pid);
        if($pid!=null){
            //获取卡车新闻下的子分类信息
        $data1=$xarticlecate->where("pid=%d",$pid)->select();
        if($data1==null){
        //如果传过来的id不是父类的id那么就查出id所对应的文章分类名
        $data1=$xarticlecate->where("id=%d",$pid)->select();
        $this->assign("data1",$data1);
        $where=array();

        $where['title']=array('like',"%{$_GET['title']}%");
        $where['content']=array('like',"%{$_GET['title']}%");
        $where['_logic']="or";
        $map['_complex']=$where;
        $map['acid']=$_GET['id'];
        $map['state']=1;
        $data2=$xarticle->where($map)->order('count desc')->select();
        $this->assign("data2",$data2);



        $where=array();
        $where['acid']=$_GET['id'];
        $where['state']=1;
        $map['title']=array('like',"%{$_GET['title']}%");
        $map['content']=array('like',"%{$_GET['title']}%");
        $map['_logic']="or";
        $where['_complex']=$map;
        $count=$xarticle->where($where)->count();
        $data3=$xarticle->where($where)->page(I('get.p',1),5)->order('atime desc')->select();

        $page=P($count,5,$where);
        $this->assign("show",$page);
        $this->assign("data3",$data3);
        }else{
            $this->assign("data1",$data1);
        //根据父id查询所有子类的id
        $zid=array();
        foreach($data1 as $v){
            $zid[]=$v['id'];
        }
        //根据子类的id查询文章的信息取10条数据，按点击量的降序排
        $where=array();
        $where['acid']=array('in',$zid);
        $where['state']=1;
        $where['acid']=$_GET['id'];
        $where['state']=1;
        $map['title']=array('like',"%{$_GET['title']}%");
        $map['content']=array('like',"%{$_GET['title']}%");
        $map['_logic']="or";
        $where['_complex']=$map;

        $data2=$xarticle->where($where)->order('count desc')->limit(10)->select();
        $this->assign("data2",$data2);


        $where=array();
        $where['acid']=array('in',$zid);
        $where['state']=1;
        $map['title']=array('like',"%{$_GET['title']}%");
        $map['content']=array('like',"%{$_GET['title']}%");
        $map['_logic']="or";
        $where['_complex']=$map;
        $count=$xarticle->where($where)->count();
        $data3=$xarticle->where($where)->page(I('get.p',1),5)->order('atime desc')->select();

        $page=P($count,5,$where);
        $this->assign("show",$page);
        $this->assign("data3",$data3);
        }

    }else{

        $data1=$xarticlecate->where("pid=0")->select();
        $this->assign("data1",$data1);
             //获取卡车新闻下的子分类信息

        //根据子类的id查询文章的信息取10条数据，按点击量的降序排
        $where=array();
        $where['state']=1;
        $map['title']=array('like',"%{$_GET['title']}%");
        $map['content']=array('like',"%{$_GET['title']}%");
        $map['_logic']="or";
        $where['_complex']=$map;
        $data2=$xarticle->where($where)->order('count desc')->select();
        $this->assign("data2",$data2);



        $where=array();
        $where['state']=1;
        $map['title']=array('like',"%{$_GET['title']}%");
        $map['content']=array('like',"%{$_GET['title']}%");
        $map['_logic']="or";
        $where['_complex']=$map;
        $count=$xarticle->where($where)->count();
        $data3=$xarticle->where($where)->page(I('get.p',1),5)->order('atime desc')->select();

        $page=P($count,5,$where);
        $this->assign("show",$page);
        $this->assign("data3",$data3);
    }











    	$this->display('index');
    }


  public function zxdetail()
  {
    //$_SESSION['commurl']= $_SERVER['REQUEST_URI'];
    $_SESSION['comurl']= $_SERVER['REQUEST_URI']."#forms";
    //dump($_SESSION['userurl']);
    $xarticle=M("xarticle");
    $xarticlecate=M("xarticlecate");
    $xbrand=M("xbrand");
    $lpost=M("lpost");
    $xcomment=M("xcomment");
    $user=M("user");


    $id=$_GET['id'];
    //显示所有的文章按评论量的降序排列
    $data4=$xarticle->order("num desc")->limit(10)->select();
    $this->assign("data4",$data4);
    //根据品牌的点击量来排行（文章的点击量是根据点击了文章或是产品就让其增加）
    $data5=$xbrand->order("count desc")->limit(5)->select();
    $this->assign("data5",$data5);


    $data6=$lpost->order("ctime desc")->limit(10)->select();
    $this->assign("data6",$data6);


    //根据传过来的id查询文章信息
    if($id!=null){
        $where=array();
        $where['id']=$id;
        $data1=$xarticle->where($where)->find();
        $this->assign("data1",$data1);
        $acid=$data1['acid'];
        //根据文章的acid来查分类类的名字和父id和父类的名字
        $where=array();
        $where['id']=$acid;
        $data2=$xarticlecate->where($where)->find();//查询pid
        $this->assign("data2",$data2);
        $pid=$data2['pid'];
        //在根据pid来查父类的名字
        $where=array();
        $where['id']=$pid;
        $data3=$xarticlecate->where($where)->find();
        $this->assign("data3",$data3);
        //每次点击一次文章就让其count加加
        $fields=array();
        $fields['id']=$id;
        $xarticle->where($fields)->setInc('count');
        //echo $xarticle->_sql();



    }else{
        $url=U("Home/Xarticle/index");
        echo "<script>alert('你没有选择文章，请重新选择！');location='{$url}';</script>";
    }
    $where=array();
    $id=I('get.id');
    $where['aid']=$id;
    $data8=$xcomment->where($where)->count();
    $this->assign("data8",$data8);
    $data7=$xcomment->field("truck_user.username,truck_user.picname,
        truck_xcomment.*")->join("__USER__
        on __USER__.id=__XCOMMENT__.uid")->where($where)->order("atime desc")->select();
    $tree = CatTree::getTree($data7);
    //dump($tree);
    $this->assign("tree",$tree);
    //$this->assign("data7",$data7);

    //echo $xcomment->_sql();
    //dump($data7);
   // dump(session('user'));





    $this->display();
  }
  public function addCommment()
  {

        $xcomment=M("xcomment");
        $commurl=$_SESSION['commurl'];
        //dump($commurl);
        if(session('user')==null){
           $url=U('User/login');
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";
            die;
        }
        //$data['content']=$_POST['content'];
        //$data['aid']=I('get.id');
        // $data['atime']=time();
        // $data['aid']=I('get.id');

        // $data['pid']=I('get.rid');
        // $data['uid']=session('user')['id'];
        // if($_GET['rid']!=null){
        //     $data['pid']=I('get.rid');
        // }
        $_POST['atime']=time();
        $_POST['pid']=intval($_POST['pid']);
        $_POST['aid']=intval($_POST['aid']);
        $_POST['uid']=intval(session('user')['id']);
        //dump($_POST);
        $res=$xcomment->create();
        if($res){

            $uu=U('Xarticle/zxdetail',array('id'=>$_POST['aid']))."#forms";
            $r=$xcomment->add();
            if($r){
             echo "<script>alert('评论成功');location='{$uu}';</script>";
            }else{
                echo "<script>alert('评论失败');location='{$uu}';</script>";
            }
        }

  }
  public function reply()
  {
    $xcomment=M("xcomment");

  }
}