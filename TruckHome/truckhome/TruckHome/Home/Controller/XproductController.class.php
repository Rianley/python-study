<?php
namespace Home\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
header("content-type:text/html;charset=utf-8");
class XproductController extends Controller {
    public function index(){

        $xbrand=M("xbrand");
        $xproduct=M("xproduct");
        $xcartype=M("xcartype");
         //根据传的id来查车型表
        $id=$_GET['id'];

        $data1 = $xcartype->select();
        $tree = CatTree::getTree($data1);
        $this->assign('tree', $tree);


        //如果没有传值，那么就把所有的车型遍历出
        if($id==null){
            // 2.查询数据



            //查出所有的子类
            $where=array();
            $where['pid']=array("neq",0);
            $data2=$xcartype->where($where)->select();
            $zid=array();
            foreach($data2 as $v){
                $zid[]=$v['id'];
            }
            //dump($zid);
            //根据产品中的车型tid来查询想要的参数
             $where=array();
            $where['truck_xproduct.tid']=array("in",$zid);

                //根据子类的id来查产品表的信息
			$this->getField($xproduct,$where);
			//查询所有的商品
            $where=array();
            $where['truck_xproduct.tid']=array("in",$zid);
            $this->getData($xproduct,$xcartype,$where);
        }else{
            //id传过来有值
            //1.首先判断id是否是车型表的父id
            $where=array();
            $where['pid']=$id;
            $data1=$xcartype->where($where)->select();

            //传过来的id是父类的id那么执行下边的操作
            if($data1!=null){
                 $zid=array();
                    foreach($data1 as $v){
                        $zid[]=$v['id'];
                 }
                $where=array();
                $where['truck_xproduct.tid']=array("in",$zid);

                //根据子类的id来查产品表的信息
				$this->getField($xproduct,$where);









                //查询所有的商品
                $where=array();
                $where['tid']=array("in",$zid);
				$this->getData($xproduct,$xcartype,$where);

            }else{
                //$data1=$xcartype->where($where)->select();
                //不是父类的id是子类的id,那么根据商品表的tid来查所有的商品
                $where=array();
                $where['tid']=$id;

                //根据子类的id来查产品表的信息

               $this->getField($xproduct,$where);









                //查询所有的商品
                $where=array();
                $where['tid']=$id;
                $this->getData($xproduct,$xcartype,$where);
            }

            //2判断id是车型表的子类id



        }





        $this->display('index');
    }
	public function getField($xproduct,$where){

                $data3=$xproduct->distinct(true)->field("truck_xcartype.name")->join("__XCARTYPE__ on __XCARTYPE__.id=__XPRODUCT__.tid")->where($where)->select();
                $data4=$xproduct->distinct(true)->field("truck_xproduct.horsepower")->join("__XCARTYPE__ on __XCARTYPE__.id=__XPRODUCT__.tid")->where($where)->select();
                $data5=$xproduct->distinct(true)->field("truck_xproduct.forwardgear")->join("__XCARTYPE__ on __XCARTYPE__.id=__XPRODUCT__.tid")->where($where)->select();
                $data6=$xproduct->distinct(true)->field("truck_xproduct.wheelbase")->join("__XCARTYPE__ on __XCARTYPE__.id=__XPRODUCT__.tid")->where($where)->select();
                $data7=$xproduct->distinct(true)->field("truck_xproduct.effluent")->join("__XCARTYPE__ on __XCARTYPE__.id=__XPRODUCT__.tid")->where($where)->select();
                $data8=$xproduct->distinct(true)->field("truck_xproduct.drive")->join("__XCARTYPE__ on __XCARTYPE__.id=__XPRODUCT__.tid")->where($where)->select();
                $this->assign("data3",$data3);
                $this->assign("data4",$data4);
                $this->assign("data5",$data5);
                $this->assign("data6",$data6);
                $this->assign("data7",$data7);
                $this->assign("data8",$data8);

	}
    public function getData($xproduct,$xcartype,$where)
    {

		if(!empty($_GET['keyword'])){
                    $where['pname']=array("like","%{$_GET['keyword']}%");
                }
                if(!empty($_GET['horsepower'])){
                     $where['horsepower']=$_GET['horsepower'];
                }
                if(!empty($_GET['forwardgear'])){
                     $where['forwardgear']=$_GET['forwardgear'];
                }
                if(!empty($_GET['wheelbase'])){
                     $where['wheelbase']=$_GET['wheelbase'];
                }
                if(!empty($_GET['effluent'])){
                     $where['effluent']=$_GET['effluent'];
                }
                if(!empty($_GET['name'])){
                    $name=$_GET['name'].trim();
                    $data11=$xcartype->where("name='%s'",$name)->find();
                    $zzid=array();
                    foreach($data11 as $v){
                        $zzid[]=$v['id'];
                    }
                    //dump($zzid);
                    $where['tid']=array("in",$zzid);
                }


                // dump($where);
                 $count=$xproduct->where($where)->count();

                 $data9=$xproduct->where($where)->page(I('get.p',1),6)->select();
                 //echo $xproduct->_sql();
                 $page=P($count,6,$where);
                 $this->assign("show",$page);
                 $this->assign("data9",$data9);
    }
    public function prodetail()
    {
        $xproduct=M("xproduct");
        $xarticle=M("xarticle");
        $xcartype=M("xcartype");
        $xprodimg=M("xprodimg");
        $id=$_GET['id'];



        if($id==null){
            $url=U("Xproduct/index");
            echo "<script>alert('你还么有选择商品，请选择商品');location='{$url}';</script>";
        }
        //根据产品id来查询产品图片
        $where=array();
        $where['pid']=$id;
        $where['state']=1;//外观
        $imgcount1=$xprodimg->where($where)->count();
        $this->assign("imgcount1",$imgcount1);
        $dataimg1=$xprodimg->where($where)->select();
        $this->assign("dataimg1",$dataimg1);

        $where=array();
        $where['pid']=$id;
        $where['state']=2;//外观
        $imgcount2=$xprodimg->where($where)->count();
        $this->assign("imgcount2",$imgcount2);
        $dataimg2=$xprodimg->where($where)->select();
        $this->assign("dataimg2",$dataimg2);
        //dump($dataimg2);die;

        $where=array();
        $where['pid']=$id;
        $where['state']=3;//外观
        $imgcount3=$xprodimg->where($where)->count();
        $this->assign("imgcount3",$imgcount3);
        $dataimg3=$xprodimg->where($where)->select();
        $this->assign("dataimg3",$dataimg3);






        $where=array();
        $where['id']=$id;
        $data1=$xproduct->where($where)->find();
        $this->assign("data1",$data1);


        $fields=array();
        $fields['id']=$id;
        $xproduct->where($fields)->setInc("count");
        //根据id查询产品类型的id
        $datatid=$xproduct->where($fileds)->find();
        $tid=$datatid['tid'];

        $where=array();
        $where['id']=$tid;
        //让产品类型的id（子类的id）对应的count++
        $xcartype->where($where)->setInc("count");

        //在根据子类的id查出父类的id
        $where=array();
        $where['id']=$tid;
        $dataf=$xcartype->where($where)->find();
        $fid=$dataf['pid'];
        $where=array();
        $where['id']=$fid;
        $xcartype->where($where)->setInc("count");
        //在根据fid来查处所有的子类，并求和子类的count
        //$datacount=$xcartype->field(" sum(count) as s")->where($where)->select();






        //获取该id类的同类商品
        $tid=$data1['tid'];
        //分类id查询所有的商品
        $where=array();
        $where['tid']=$tid;
        $data2=$xproduct->where($where)->limit(6)->select();
        $this->assign("data2",$data2);


        //根据车型id来查询相关文章
        $where=array();
        $where['vid']=$tid;
        $data3=$xarticle->where($where)->limit(6)->select();
        $this->assign("data3",$data3);




        $this->display();
    }
    public function chaprice()
    {
        $xproduct=M("xproduct");

        $id=$_GET['id'];

        if($id==null){
            $url=U("Xproduct/index");
            echo "<script>alert('你还么有选择商品，请选择商品');location='{$url}';</script>";
        }
        $where=array();
        $where['id']=$id;
        $data4=$xproduct->where($where)->find();
        $this->assign("data4",$data4);
        //dump($data4);
        $this->display();
    }
     public function code()
    {
        // 1.实例化验证码类
        $config = array(
                'fontSize' => 20,       // 字体大小
                'length'    => 4,       // 验证码位数
                'useNoise'  => false,   // false关闭杂点
                'useImgBg'  => true,    // 开启验证码图片
                'useCurve'  => false,   // 混淆曲线
                'imageW'    => 150,
                'imageH'    => 42,
                'codeSet'   => '2345',

                // 'useZh'      => true,    // 使用中文
                // 'zhSet'      => '张三阿斯蒂芬'
            );
        $code = new \Think\Verify($config);

        // 2.生成图片验证码
        $code->entry();
    }
    public function valCode1()
    {
        $code=new \Think\Verify();
        $yan=I('post.code1');
        if($code->check($yan)){
            echo 'yes';

        }else{
            echo 'no';

        }
    }
    public function addchaprice()
    {
        $xchaprice=M("xchaprice");
        $_POST['addtime']=time();
        $res=$xchaprice->create();
        //dump($res);
        //dump($_POST);die;

        if($res){
            $r=$xchaprice->add();
            //echo $xchaprice->_sql();
            //dump($r);
            //die;
            if($r){
                $url=U('Xproduct/index');
                echo "<script>alert('添写成功');location='{$url}';</script>";
            }else{
                $url=U('Xproduct/chaprice',array('id'=>$_POST['pid']));
                echo "<script>alert('添加失败');location='{$url}';</script>";
            }
        }
    }
    public function imgindex()
    {
        $xbrand=M("xbrand");
        $xproduct=M("xproduct");
        $xcartype=M("xcartype");
         //根据传的id来查车型表
        $id=$_GET['id'];

        $data1 = $xcartype->select();
        $tree = CatTree::getTree($data1);
        $this->assign('tree', $tree);


        //如果没有传值，那么就把所有的车型遍历出
        if($id==null){
            // 2.查询数据



            //查出所有的子类
            $where=array();
            $where['pid']=array("neq",0);
            $data2=$xcartype->where($where)->select();
            $zid=array();
            foreach($data2 as $v){
                $zid[]=$v['id'];
            }
            //dump($zid);
            //根据产品中的车型tid来查询想要的参数
             $where=array();
            $where['truck_xproduct.tid']=array("in",$zid);

                //根据子类的id来查产品表的信息
            $this->getField($xproduct,$where);
            //查询所有的商品
            $where=array();
            $where['truck_xproduct.tid']=array("in",$zid);
            $this->getData($xproduct,$xcartype,$where);
        }else{
            //id传过来有值
            //1.首先判断id是否是车型表的父id
            $where=array();
            $where['pid']=$id;
            $data1=$xcartype->where($where)->select();

            //传过来的id是父类的id那么执行下边的操作
            if($data1!=null){
                 $zid=array();
                    foreach($data1 as $v){
                        $zid[]=$v['id'];
                 }
                $where=array();
                $where['truck_xproduct.tid']=array("in",$zid);

                //根据子类的id来查产品表的信息
                $this->getField($xproduct,$where);









                //查询所有的商品
                $where=array();
                $where['tid']=array("in",$zid);
                $this->getData($xproduct,$xcartype,$where);

            }else{
                //$data1=$xcartype->where($where)->select();
                //不是父类的id是子类的id,那么根据商品表的tid来查所有的商品
                $where=array();
                $where['tid']=$id;

                //根据子类的id来查产品表的信息

               $this->getField($xproduct,$where);









                //查询所有的商品
                $where=array();
                $where['tid']=$id;
                $this->getData($xproduct,$xcartype,$where);
            }

            //2判断id是车型表的子类id



        }


        $this->display();
    }
    public function imgdetail()
    {
        $xproduct=M("xproduct");
        $xprodimg=M("xprodimg");
        $xcartype=M("xcartype");

        //查询所有的车型
        $data1 = $xcartype->select();
        $tree = CatTree::getTree($data1);
        $this->assign('tree', $tree);



        $id=$_GET['id'];


        //首先跟根据产品id来查询产品的名称
        $where=array();
        $where['id']=$id;
        $prodname=$xproduct->where($where)->find();
        $this->assign("prodname",$prodname);


        $this->getImage($id,1,$xprodimg);
        $this->getImage($id,2,$xprodimg);
        $this->getImage($id,3,$xprodimg);





        $this->display();


    }
    public function getImage($id,$i,$xprodimg)
    {
        $where=array();
        $where['pid']=$id;
        $where['state']=$i;
        $imgnum=$xprodimg->where($where)->count();
        //echo $xprodimg->_sql();
        $prodimg=$xprodimg->where($where)->select();
        $this->assign("imgnum{$i}",$imgnum);
        $this->assign("prodimg{$i}",$prodimg);
    }


}