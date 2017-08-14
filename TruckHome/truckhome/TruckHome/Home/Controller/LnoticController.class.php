<?php
namespace Home\Controller;
use Think\Controller;
class LnoticController extends Controller {
	//公告列表
     public function index(){
   		//1.实例化Model类
        $lnotic = M('lnotic');
        $list = $lnotic->select();
        $this->assign('list',$list);

        $this->display();
     }

      public function detail($id)
    {

        $lnotic = M('lnotic');
       // $user = M('user');
        $ltype = M('ltype');

        $id = I('get.id');
        $data1=$lnotic->where("id=%d",$id)->find();
        $this->assign('data1',$data1);
        $this->display();
    }
}
