<?php
namespace Admin\Controller;
use Think\Controller;
class LreplyController extends Controller {
   public function index($id){
        $lreply = M('lreply');
        $reply = $lreply->field('truck_user.username,truck_lreply.*')->join('__USER__ on __USER__.id=__LREPLY__.uid','LEFT')->where('tid=%d',$id)->select();
        //echo $lreply->_sql();
        //dump($data);die;
        if($reply != null){
            $where['pid']=0;
            $where['tid']=$id;
            $data = $lreply->field('truck_user.username,truck_lreply.*')->join('__USER__ on __USER__.id=__LREPLY__.uid','LEFT')->where($where)->select();
            $this->assign('data',$data);
            //$this->assign('id',$id)
            $this->display();
        }else{
            $this->error('该帖暂无回复',U('Lpost/pdetail',array('id'=>$id)));
        }
    }

     public function rdetail($id){
        $lreply = M('lreply');
       /* $res = $lreply->where('id=%d',$id)->find($pid);
        $r = $res['pid'];*/
        $data = $lreply->field('truck_user.username,truck_lreply.*')->join('__USER__ on __USER__.id=__LREPLY__.uid','LEFT')->where('truck_lreply.id=%d',$id)->find();
        //回复的回复
        $data1 = $lreply->field('truck_user.username,truck_lreply.*')->join('__USER__ on __USER__.id=__LREPLY__.uid','LEFT')->where('truck_lreply.pid=%d',$id)->select();
        //echo $lreply->_sql();
        //dump($data);
        $this->assign('data',$data);
        $this->assign('data1',$data1);
        $this->display();
    }

    public function delete($id)
    {
        $lreply = M('lreply');

        //查询该条回复的子类
        $data1 = $lreply->where('pid=%d',$id)->select();
        //dump($data1);die;

        //删除该条回复
        $r = $lreply->where('id=%d',$id)->delete();

        if($r){
            $res = $lreply->where($data1)->delete();
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

}