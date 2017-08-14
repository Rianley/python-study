<?php
namespace Home\Controller;

use Think\Controller;
use Org\LAMP\CatTree;
include "Public/shop/function/findPro.php";
class SindexController extends Controller {
    public function index(){
       /* session(null);
        dump($_SESSION)*/
    	//1 实例化
    	$scategory=M('Scategory');
    	$sproduct=M('Sproduct');

    	//2 查询
    	$whereList['status']=1;
        $whereSear['truck_scategory.status']=1;
        $whereSear['truck_sproduct.status']=1;
    	$nav = $scategory->where($whereList)->select();
        $search=$sproduct->join('truck_scategory ON truck_scategory.id = truck_sproduct.cid')->where($whereSear)->order('salenum desc')->group('cid')->limit(8)->select();
       /* echo $sproduct->_sql();exit;*/
        /*dump($search);exit;*/
        //echo $scategory->_sql();exit;
        $whereList['hot']=1;
        $hot=$sproduct->where($whereList)->order('salenum desc')->limit(10)->select();



        $where['status']=1;
        $where['promotion']=1;
        $promotion=$sproduct->where($where)->order('salenum desc')->limit(10)->select();

        $data1=$scategory->where('pid=1 and status=1')->limit(5)->select();
        $data2=$scategory->where('pid=7 and status=1')->limit(5)->select();
        $data3=$scategory->where('pid=8 and status=1')->limit(5)->select();
        $data4=$scategory->where('pid=6 and status=1')->limit(5)->select();
        $data5=$scategory->where('pid=9 and status=1')->limit(5)->select();
        //echo $scategory->_sql();exit;
        //dump($data1);exit;

        $data11=findPro($data1);
        $data22=findPro($data2);
        $data33=findPro($data3);
        $data44=findPro($data4);
        $data55=findPro($data5);
        //dump($data11);exit;

        // 3.将分类进行规整(使用CatTree类进行规整)
        $list = CatTree::getTree($nav);
       // dump($hot);exit;
    	//dump($list);exit;


    	//4发送数据
        $this->assign('list',$list);
    	$this->assign('search',$search);
        $this->assign('hot',$hot);
        $this->assign('promotion',$promotion);
        $this->assign('data1',$data1);
        $this->assign('data2',$data2);
        $this->assign('data3',$data3);
        $this->assign('data4',$data4);
        $this->assign('data5',$data5);
        $this->assign('data11',$data11);
        $this->assign('data22',$data22);
        $this->assign('data33',$data33);
        $this->assign('data44',$data44);
        $this->assign('data55',$data55);


        //轮播的东西
        $lunbo=M("lunbo");
        $where=array();
        $where['state']=2;
        $data=array();
        $data=$lunbo->where($where)->select();
        $dataCount=$lunbo->where($where)->count();
        $this->assign("data",$data);
        $this->assign("dataCount",$dataCount);







    	//5 加载模板
    	$this->display();
    }

    public function pro()
    {
        $pid=I('post.id');
        echo $pid;exit;


    }


}