<?php

namespace Home\Widget;
use Think\Controller;
class MenuWidget extends Controller {
  public function header()
  {
    	$xcartype=M("xcartype");
    	$xarticlecate=M("xarticlecate");
    	$data1=$xarticlecate->where("pid=0")->select();
    	$this->assign("data1",$data1);


      //获取帖子分类的子类列表
      $ltype=M("ltype");
      $where=array();
      $where['pid']=array("neq",0);
      $postdata=$ltype->where($where)->limit(8)->select();
      //dump($postdata);
      $this->assign("postdata",$postdata);


      //获取商品分类的子类
      $scategory=M("scategory");
      $where=array();
      $where['pid']=array("neq",0);
      $shopdata=$scategory->where($where)->limit(10)->select();
      //dump($shopdata);
      $this->assign("shopdata",$shopdata);


    	$this->display("Public/header");


    	//dump($data1);
   }
   public function userleft()
   {
   		$user=M("user");
   		$uid=$_SESSION['user']['id'];
        $where=array();
        $where['id']=$uid;
        //首先根据用户的id来查询用户的信息
        $userdata=$user->where($where)->find();
        //dump($userdata);
        $this->assign("userdata",$userdata);
        $this->display("Public/userleft");
   }

   public function snav()
   {
      //1 实例化
      $scategory=M('Scategory');

      //2 查询
      $whereList['pid']=0;
      $whereList['status']=1;
      $data=$scategory->where($whereList)->select();
      //dump($data);exit;

      //3 发送数据
      $this->assign('data',$data);

      //4 加载模板
      $this->display('Public/snav');
   }
   public function slogin()
   {
        $this->display('Public/slogin');
   }
    public function ssearch()
    {
        $this->display('Public/ssearch');
    }


}