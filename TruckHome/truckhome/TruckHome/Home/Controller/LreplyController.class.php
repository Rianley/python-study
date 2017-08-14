<?php
namespace Home\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
class LreplyController extends Controller {
    public function index()
    {
        if($_SESSION['user']==null){
            $this->success('您还没有登录，请登录',U('User/login'));
            die;
        }
        if($_SESSION['user']['state']==2){
            $this->success('您的账号已被禁用,不能进行发帖',U('Index/index'));
            die;
        }
    	$user = M('user');
    	$lpost = M('lpost');
    	$lreply = M('lreply');

    	//接收数据
    	$tid=I('get.tid');
    	$this->assign('tid',$tid);
    	$pid=I('get.pid');
    	if($pid==null){
    		$pid=0;
    	}else{
    		$pid= I('get.pid');
    	}
    	$this->assign('pid',$pid);


    	//要回复的 帖子 的信息
    	$res = $lpost->where('id=%d',$tid)->find();
		$this->assign('res',$res);

    	//要回复的 回复 的信息
    	$res1 = $lreply->field('truck_user.username,truck_lreply.*')->join('__USER__ on __USER__.id=__LREPLY__.uid')->where('truck_lreply.id=%d',$pid)->find();
    	$this->assign('res1',$res1);


    	$this->display();
    }

   public function insert()
   {
        $lreply = M('lreply');
        $user = M('user');
        $lpost = M('lpost');

        $userinfo = $user->where('id=%d',$_SESSION['user']['id'])->find();

        $res = $lreply->create();
        if($res){

            $lreply->ctime = time();
            $lreply->uid = $_SESSION['user']['id'];
            $r = $lreply->add();
            if($r){
                //发表回复成功时，用户积分增加
                $data['count'] = $userinfo['count']+2;
                $user->data($data)->where('id=%d',$userinfo['id'])->save();

                $this->success('发表成功',U('Lpost/detail',array('id'=>$_POST['tid'])));
            }else{
                $this->error('发表失败');
            }
        }
    }

    //回复的删除
    public function delete($id)
    {
        $lreply = M('lreply');

        //查询该条回复的子类
        $data1 = $lreply->where('pid=%d',$id)->select();

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

