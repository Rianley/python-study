<?php
namespace Home\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
class LpostController extends Controller {
    public function index()
    {

        $lpost = M('lpost');
        $ltype = M('ltype');
        $id = I('get.id');
        $user = M('user');
        $lreply = M('lreply');

        if($id){

            //通过类别进入列表页
            $tname = $ltype->where('id=%d',$id)->find();
            $this->assign('tname',$tname);

            //查询某一类的所有帖子
            $where['tid'] = $id;
            $where['status']=1;
            $data = $lpost->field('truck_lpost.*,truck_user.username')->join('__USER__ on __LPOST__.uid = __USER__.id')->where($where)->order('state1,ctime desc')->select();
            //echo $lpost->_sql();
        }else{

            //通过搜索进入列表页

            //输入的为用户名,查询用户id
            $where2['username'] = array('like', "%{$_POST['title']}%");
            //$where2['status']=1;
            $r = $user->field('id')->where($where2)->select();

            //遍历，将所有id值存入$uid中
            $uid=array();
            foreach($r as $k=>$v){
                $uid[]=$v['id'];
            }

            //将数组转化为字符串
            $uidstr=implode(',',$uid);

            if($uidstr == null){
                $uidstr=0;
            }
            //dump($uidstr)
            $sql = "select * from truck_user  left join truck_lpost on truck_user.id=truck_lpost.uid where truck_lpost.title like '%".$_POST['title']."%' or truck_lpost.uid in"."({$uidstr})";
            //echo $sql;die();
            $data=$lpost->query($sql);
            //dump($data);
        }
        $this->assign('data',$data);
        //dump($data);
        $list = $lpost->where('status=1')->order('ctime')->select();
        $this->assign('list',$list);
        $this->display();
    }

    public function add()
    {
        if($_SESSION['user']==null){
            $this->success('您还没有登录，请登录',U('User/login'));
            die;
        }
        if($_SESSION['user']['state']==2){
            $this->success('您的账号已被禁用,不能进行发帖',U('Index/index'));
            die;
        }
         $ltype = M('ltype');

         $data = $ltype->select();
         $pid=array();
         foreach($data as $v){
            $pid[]=$v['pid'];
         }
         $this->assign("pid",$pid);
         $this->assign('data',$data);
    	 $this->display();
    }
    public function insert()
    {

    	$lpost = M('lpost');
        $user = M('user');

        //获取用户信息
        $_POST['uid']=$_SESSION['user']['id'];
        $userinfo = $user->where('id=%d',$_POST['uid'])->find();


        //获取添加时间和修改时间
        $_POST['ctime']=time();
        if($_POST['mtime']==0){
            $_POST['mtime']=$_POST['ctime'];
        }


    	$res = $lpost->create();
    	if($res){
    		$r = $lpost->add();
            //echo $lpost

    		if($r){
                //帖子发表成功时，修改用户的count值
                $data['count']=$userinfo['count']+3;
                $data['id']=$_SESSION['user']['id'];
                $res = $user->data($data)->save();
    			$this->success('添加成功',U('Lindex/index'));
    		}else{
    			$this->error('添加失败');
    		}
    	}
    }

    public function detail($id)
    {

        $lpost = M('lpost');
        $user = M('user');
        $ltype = M('ltype');
        $lreply = M('lreply');
        $user = M('user');

        //帖子详情
        $data = $lpost->field('truck_user.*,truck_lpost.*')->join('__USER__ on __USER__.id=__LPOST__.uid','LEFT')->where('truck_lpost.id=%d',$id)->find();
        //dump($data);die;
        $this->assign('data',$data);

        //回复
        $res = $lreply->field('truck_user.*,truck_lreply.*')->join('__USER__ on __USER__.id=__LREPLY__.uid')->where('truck_lreply.tid=%d',$id)->select();
        $reply = CatTree::getTree($res);
        //dump($reply);die;
        $this->assign('reply',$reply);

        //查询帖子的回复量
        $d['tid']=$id;
        $d['pid']=0;
        $reply1 = $lreply->where($d)->count();
        $this->assign('reply1',$reply1);

        //帖子的阅读量增1
        $read = $lpost->where('id=%d',$id)->setInc('readCount');
        $read3 = $lpost->where('id=%d',$id)->find();
        //echo $lpost->_sql();dump($read3);die;
        $this->assign('read3',$read3);

        //返回列表时，返回类别ID
        $id = I('get.id');
        $data1=$lpost->where("id=%d",$id)->find();
        //dump($data1);die;
        $this->assign('data1',$data1);
        $this->display();
    }


    public function edit($id)
    {
        $lpost = M('lpost');
        $ltype = M('ltype');

        //查询所有分类及所有父类
        $data = $ltype->select();
        $pid=array();
         foreach($data as $v){
            $pid[]=$v['pid'];
         }
        $this->assign("pid",$pid);
        $this->assign('data',$data);

        $res = $lpost->field('truck_ltype.*,truck_lpost.*')->join('__LTYPE__ on __LPOST__.tid=__LTYPE__.id')->where('truck_lpost.id=%d',$id)->find();
        //echo $lpost->_sql();dump($res);die;
        $this->assign('res',$res);
        $this->display();
    }

    public function update()
    {
        $lpost = M('lpost');
        $id = I('post.id');
        $res = $lpost->create();
        $data['tid']=I('post.tid');
        $data['title']=I('post.title');
        $data['content']=I('post.content');
        $data['mtime'] = time();

        if($res){
            $r = $lpost->where('id=%d',$id)->data($data)->save();
            if($r){
                $this->success('修改成功',U('Lpost/detail',array('id'=>$id)));
            }else{
                $this->error('修改失败');
            }
        }
    }

    public function delete($id)
    {
        $lpost = M('lpost');
        $lreply = M('lreply');
        $tid = I('get.id');
        $res = $lpost->delete($id);

        if($res){
            $r = $lreply->where('tid=%d',$tid)->delete();
            $this->success('删除成功',U('Lindex/index'));
        }else{
            $this->error('删除失败');
        }
    }

}