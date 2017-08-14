<?php
namespace Home\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
header("content-type:text/html;charset=utf-8");
class IndexController extends Controller {
    public function randad($i,$xad){
        $xadata=$xad->order(" rand() ")->limit(1)->find();
        //dump($xadata);die;
        $this->assign("xadata{$i}",$xadata);
    }

    public function index(){

    	$xcartype=M("xcartype");//实例化车型分类
        $xbrand=M("xbrand");
        $xarticle=M("xarticle");
        $xarticlecate=M("xarticlecate");
        $link=M("link");
        $lpost=M("lpost");
        $xad=M("xad");
        $xlunbo=M("xlunbo");
        $_SESSION['comurl']= $_SERVER['REQUEST_URI'];



        $where=array();
        $where['state']=2;//代表小图
        $dlunbo=$xlunbo->where($where)->find();
        $this->assign("dlunbo2",$dlunbo);


        //获取广告图片
       // $sql="select * from truck_xad order by rand() limit 1";
        //$xadata=$xad->query($sql);
        //dump($xadata);die;
        for($i=1;$i<=6;$i++){
            $this->randad($i,$xad);
        }






    	//获取车型的父类 开始
    	$getCartypeOne=$xcartype->where('pid = 0')->select();

    	//echo $xcartype->_sql();
    	//dump($getCartypeOne);
    	$this->assign("getCartypeOne",$getCartypeOne);

    	//获取车型的父类 结束





    	//遍历二级分类 热门车型tag=1开始
    	$data = $xcartype->where("tag=1")->select();
    	// 3.将分类进行规整(使用CatTree类进行规整)
    	$tree = CatTree::getTree($data);
    	// 4.分配到前台页面
    	$this->assign('tree', $tree);



    	//遍历二级分类 热门车型tag=1结束




    	//遍历二级分类 专用车 皮卡 挂车 车型tag=2开始
    	$data2 = $xcartype->where("tag=2")->select();
    	// 3.将分类进行规整(使用CatTree类进行规整)
    	$tree2 = CatTree::getTree($data2);
    	// 4.分配到前台页面
    	$this->assign('tree2', $tree2);
    	//遍历二级分类 专用车 皮卡 挂车 车型tag=2开始



    	//遍历二级分类 天然气 车型tag=3开始
    	$data3 = $xcartype->where("tag=3")->select();
    	// 3.将分类进行规整(使用CatTree类进行规整)
    	$tree3 = CatTree::getTree($data3);
    	// 4.分配到前台页面
    	$this->assign('tree3', $tree3);
    	//遍历二级分类 天然气 车型tag=3开始






        //把所有分类的父类的品牌遍历出来
        $xbdata=$xbrand->where("pid=0")->select();
        $this->assign("xbdata",$xbdata);
        //dump($xbdata);


        //获取文章的第一条信息
        $xartone=$xarticle->where("state=1")->order("utime desc")->limit(1)->find();
        $this->assign("xartone",$xartone);
        //dump($xartone);

        //去除第一条获取所有的文章

        //跳过第一条获取最新的文章，并和文章类型表联合查询查出文章类型的名称
        $xartall=$xarticle->field("truck_xarticlecate.name,truck_xarticle.*")->join("__XARTICLECATE__ on __XARTICLECATE__.id=__XARTICLE__.acid")->where("state=1")->order("utime desc")->limit(1,9)->select();
        //$xartall=$xarticle->where("state=1")->order("utime desc")->limit(1,9)->select();
        $this->assign("xartall",$xartall);
        //dump($xartall);



        //获取热点新闻，根据hot=2来查询热点新闻，取出5条
        $xhotart=$xarticle->where("hot=2 and state=1")->limit(5)->select();
        $this->assign("xhotart",$xhotart);






        //根据车型分类和文章表来查询文章信息
         $xcardata=$xarticle->field("truck_xcartype.name,truck_xarticle.*")->join("__XCARTYPE__ on __XCARTYPE__.id=__XARTICLE__.vid")->where("state=1")->order("utime desc")->limit(11)->select();
         $this->assign("xcardata",$xcardata);
         //echo $xarticle->_sql();
         //dump($xcardata);



        //根据点击量来显示文章 显示10条
        $xdata2=$xarticle->where("state=1")->order("count desc")->limit(10)->select();
        $this->assign("xdata2",$xdata2);



        //更加点击量来获取车型的排行
        //遍历二级分类 热门车型tag=1开始
        $cartypedata1 = $xcartype->order("count desc")->select();
        // 3.将分类进行规整(使用CatTree类进行规整)
        $tree1 = CatTree::getTree($cartypedata1);
        // 4.分配到前台页面
        $this->assign('tree1', $tree1);



        //获取车型所有的信息和品牌的名字并按车型的count降序排列
        $where=array();
        $where['truck_xcartype.pid']=array("NEQ",0);
        $data4=$xcartype->field("truck_xbrand.name as bname,truck_xcartype.*")->join("__XBRAND__ on __XCARTYPE__.bid=__XBRAND__.id")->where($where)->order("count desc")->limit(10)->select();
        $this->assign("data4",$data4);
        //echo $xcartype->_sql();///查询的条件有点小问题 到时候好好查查

        //查询随机文章
        $anum=$xarticle->count();
        $rand=mt_rand(0,$anum-1);
        $alimit=$rand.','.'10';
        $data5=$xarticle->where("state=1")->limit($alimit)->select();
        //echo $xarticle->_sql();
        $this->assign("data5",$data5);



        //获取友情链接表
        $linkdata=$link->select();
        $this->assign("linkdata",$linkdata);
        //dump($linkdata);



        //获取文章的最新新闻 取四条
        $newdata1=$xarticle->where("state=1")->limit(4)->select();
        $this->assign("newdata1",$newdata1);

        //获取最新帖子取四条
        $lpostdata=$lpost->field("truck_lpost.*,truck_user.username")->join("__USER__ on __USER__.id=__LPOST__.uid")->order("ctime desc")->limit(4)->select();
        $this->assign("lpostdata",$lpostdata);



        //获取政策法规的文章信息id=6的父id=6来查询所有的文章信息
        $cateid=$xarticlecate->where('pid=6')->select();
        $cid=array();
        foreach($cateid as $k=>$v){
            $cid[]=$v['id'];
        }
        $where=array();
        $where['acid']=array("in",$cid);
        $zcdata1=$xarticle->where($where)->select();
        $this->assign("zcdata1",$zcdata1);
        //echo $xarticle->_sql();
        //dump($zcdata1);


        //获取卡车的文章信息id=4的父id=4来查询所有的文章信息
        $cateid=$xarticlecate->where('pid=4')->select();
        $cid=array();
        foreach($cateid as $k=>$v){
            $cid[]=$v['id'];
        }
        $where=array();
        $where['acid']=array("in",$cid);
        $zcdata2=$xarticle->where($where)->select();
        $this->assign("zcdata2",$zcdata2);
        //echo $xarticle->_sql();
        //dump($zcdata2);



        //获取行业资讯的文章信息id=5的父id=5来查询所有的文章信息
        $cateid=$xarticlecate->where('pid=5')->select();
        $cid=array();
        foreach($cateid as $k=>$v){
            $cid[]=$v['id'];
        }
        $where=array();
        $where['acid']=array("in",$cid);
        $zcdata3=$xarticle->where($where)->select();
        $this->assign("zcdata3",$zcdata3);


        //获取行情导购的文章信息id=7的父id=7来查询所有的文章信息
        $cateid=$xarticlecate->where('pid=7')->select();
        $cid=array();
        foreach($cateid as $k=>$v){
            $cid[]=$v['id'];
        }
        $where=array();
        $where['acid']=array("in",$cid);
        $zcdata4=$xarticle->where($where)->select();
        $this->assign("zcdata4",$zcdata4);


        //获取养车用车的文章信息id=8的父id=8来查询所有的文章信息
        $cateid=$xarticlecate->where('pid=8')->select();
        $cid=array();
        foreach($cateid as $k=>$v){
            $cid[]=$v['id'];
        }
        $where=array();
        $where['acid']=array("in",$cid);
        $zcdata5=$xarticle->where($where)->select();
        $this->assign("zcdata5",$zcdata5);


        //获取试驾评测的文章信息id=9的父id=9来查询所有的文章信息
        $cateid=$xarticlecate->where('pid=9')->select();
        $cid=array();
        foreach($cateid as $k=>$v){
            $cid[]=$v['id'];
        }
        $where=array();
        $where['acid']=array("in",$cid);
        $zcdata6=$xarticle->where($where)->select();
        $this->assign("zcdata6",$zcdata6);











    	$this->display();
    }
    public function searchlist()
    {
        $xcartype=M("xcartype");
        $xproduct=M("xproduct");
        $xarticle=M("xarticle");
        $xarticlecate=M("xarticlecate");
        $id=$_GET['id'];
        //如果没有传值那么遍历出所有的商品和所有的文章
        //导航那写出所有的商品（车型表里来遍历）父类名字
        if($_GET['id']==null){
            $data1=$xcartype->where("pid=0")->select();
            $this->assign("data1",$data1);





            $where=array();
            $where['pname']=array("like","%{$_GET['pname']}%");
            $count=$xproduct->where($where)->count();
            $page=P($count,5,$where);
            $product=$xproduct->where($where)->select();
            $this->assign("show",$page);
            $this->assign("product",$product);


            $where=array();
            $where['state']=1;
            $where['title']=array('like',"%{$_GET['pname']}%");
            $data2=$xarticle->where($where)->order("count desc")->select();
            $this->assign("data2",$data2);
            //echo $xarticle->_sql();


        }else{
            $data1=$xcartype->where("pid=%d",$id)->select();
            //如果传的id不是pid的话，那么就是商品的分类的id
            if($data1==null){
                $where=array();
                $where['id']=$id;
                $data1=$xcartype->where($where)->select();
                $this->assign("data1",$data1);

                //data2是文章
                $where=array();
                $where['vid']=$id;
                $where['title']=array("like","%{$_GET['pname']}%");
                $data2=$xarticle->where($where)->order("count desc")->select();
                $this->assign("data2",$data2);


                //product是产品
                $where=array();
                $where['tid']=$id;
                $where['pname']=array("like","%{$_GET['pname']}%");
                $count=$xproduct->where($where)->count();
                $page=P($count,5,$where);
                $product=$xproduct->where($where)->select();
                $this->assign("show",$page);
                $this->assign("product",$product);


            }else{

                $this->assign("data1",$data1);
                $zid=array();
                foreach($data1 as $v){
                    $zid[]=$v['id'];
                }



                $where=array();
                $where['state']=1;
                $where['title']=array("like","%{$_GET['pname']}%");
                $where['vid']=array("in",$zid);
                $data2=$xarticle->where($where)->order("count desc")->select();
                $this->assign("data2",$data2);


                $where=array();
                $where['tid']=array("in",$zid);
                $where['pname']=array("like","%{$_GET['pname']}%");
                $count=$xproduct->where($where)->count();
                $page=P($count,5,$where);
                $product=$xproduct->where($where)->select();
                $this->assign("show",$page);
                $this->assign("product",$product);



            }


        }
        $this->display();
    }

    public function brandlist()
    {
        $xcartype=M("xcartype");
        $xproduct=M("xproduct");
        $xarticle=M("xarticle");
        $xbrand=M("xbrand");
        $xarticlecate=M("xarticlecate");
        $id=$_GET['id'];
        if($id==null){
            //没有传参数，那么把所有的父类比例出来，和所有的商品遍历出来
            $where=array();
            $where['pid']=0;
            $data1=$xbrand->where($where)->select();
            $this->assign("data1",$data1);

            $where=array();
            $where['pname']=array("like","%{$_GET['name']}%");
            $count=$xproduct->where($where)->count();
            $page=P($count,15,$where);
            $product=$xproduct->where($where)->select();
            $this->assign("show",$page);
            $this->assign("product",$product);

        }else{
             $data1=$xbrand->where("pid=%d",$id)->select();
            //如果传的id不是pid那么就是子类的id；
             if($data1==null){
                $where=array();
                $where['id']=$id;
                $data1=$xbrand->where($where)->select();
                //dump($data1);


                $this->assign("data1",$data1);
                $pid=$data1['pid'];
                $xbrand->where($where)->setInc('count',1); //子类的count加一
                $xbrand->where("id=%d",$pid)->setInc('count',1); //让父类的count也加一




                //product是产品
                //先根据品牌子类的id来查询车型表的类型
                $where=array();
                $where['bid']=$id;
                $cartypedata=$xcartype->where($where)->select();
                $tidarr=array();
                foreach($cartypedata as $v){
                    $tidarr[]=$v['id'];//获取所有的车型id包含父类的id
                }
                //在根据车型表的id来查询所有的商品
                $where=array();
                $where['tid']=array('in',$tidarr);
                $where['pname']=array("like","%{$_GET['name']}%");
                $count=$xproduct->where($where)->count();
                $page=P($count,5,$where);
                $product=$xproduct->where($where)->select();
                $this->assign("show",$page);
                $this->assign("product",$product);
             }else{
                $this->assign("data1",$data1);
                $zid=array();
                foreach($data1 as $v){
                    $zid[]=$v['id'];
                }
                //让父类的id加一,同时让所有的子类加1
                $where=array();
                $where['id']=$id;
                $xbrand->where($where)->setInc("count",1);
                $where=array();
                $where['pid']=array('in',$id);
                $xbrand->where($where)->setInc("count",1);
                //在根据品牌的子id来查询所有的车型id
                $where=array();
                $where['bid']=array('in',$zid);
                $cartypedata=$xcartype->where($where)->select();
                $tidarr=array();
                foreach($cartypedata as $v){
                    $tidarr[]=$v['id'];//获取所有的车型id包含父类的id
                }




                $where=array();
                $where['tid']=array("in",$tidarr);
                $where['pname']=array("like","%{$_GET['pname']}%");
                $count=$xproduct->where($where)->count();
                $page=P($count,5,$where);
                $product=$xproduct->where($where)->select();
                $this->assign("show",$page);
                $this->assign("product",$product);
             }
        }
        $this->display();
    }

}