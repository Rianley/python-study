<?php
namespace Home\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
class LindexController extends Controller {
    public function index(){
    	//实例化model类
    	$lpost = M('lpost');
        $lnotic = M('lnotic');
        $ltype = M('ltype');
        $link = M('link');
        $user = M('user');
        //$area = M('area');


        $uid=$_SESSION['user']['id'];
        $where=array();
        $userdata=$user->where($where)->find();
        $this->assign("userdata",$userdata);
        //dump($userdata);

        //轮播
        $lunbo = M('lunbo');
        $pic = $lunbo->where('state=1')->select();
        $picc = $lunbo->where('state=1')->count();
        //echo $lunbo->_sql();die;
        $this->assign('pic',$pic);
        $this->assign('picc',$picc);

        $uid=$_SESSION['user']['id'];

        //查询用户信息
        $userinfo=$user->where('id=%d',$uid)->find();
        $this->assign('userinfo',$userinfo);

        //查用户发表的帖子总数
        $total = $lpost->where("uid=%d",$uid)->count();
        $this->assign('total',$total);

    	//查询lpost表中的所有未隐藏的数据
    	$data = $lpost->where('status=1')->select();
		$this->assign('data',$data);

		//查询第一条数据
    	$title = $lpost->where('status=1')->limit(1)->find();
    	//echo $lpost->_sql();
    	$this->assign('title',$title);

    	//查询跳过第一条数据的其他数据
    	$post = $lpost->where('status=1')->order('mtime desc')->limit(0,10)->select();
    	//echo $lpost->_sql();die;
    	$this->assign('post',$post);

        //查询热帖，即hot值为1的数据
        $hot = $lpost->field('truck_lpost.*,truck_user.username')->join('__USER__ on __USER__.id=__LPOST__.uid')->where('hot=1 AND status=1')->select();
        //echo $lpost->_sql();
        //dump($hot);die;
        $this->assign('hot',$hot);

         //查询新帖
        $new = $lpost->where('status=1')->field('truck_lpost.*,truck_user.username')->join('__USER__ on __USER__.id=__LPOST__.uid')->order('mtime')->limit(10)->select();
        $this->assign('new',$new);

        //查询公告
        $notic = $lnotic->order('addtime')->select();
        //echo $lnotic->_sql();die;
        $this->assign('notic',$notic);

        //查各类的帖子数
        $data = $ltype->field('truck_ltype.*,count(truck_lpost.id) sum1' )->join('__LPOST__ on __LTYPE__.id=__LPOST__.tid','LEFT')->group('truck_ltype.id')->limit(8)->select();
        //dump($data);echo $ltype->_sql();die;
        $tree = CatTree::getTree($data);
        //dump($tree);
        $this->assign('tree',$tree);

        //查询所有的类别
        $type = $ltype->where('status=1')->select();
        $res = CatTree::getTree($type);
        $this->assign('res',$res);

        //查看友情链接
        $link = $link->select();
        $this->assign('link',$link);

    	$this->display();
    }


}