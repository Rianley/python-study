<?php
namespace Admin\Controller;
use Think\Controller;
class LpostController extends Controller {

    //主页帖子列表
    public function index(){
        // 1.实例化Model类
        $lpost = M('lpost');

        //实例化，从user表中查询与获取的名字相似的用户id(二维数组)
        $user = M('user');
        $where['username'] = array('like', "%{$_GET['username']}%");
        $r = $user->field('id')->where($where)->select();

        $uid=array();
        //遍历，将所有id值存入$uid中
        foreach($r as $k=>$v){
            $uid[]=$v['id'];
        }
        //dump($uid);die;
        $wherelist = [];
        if (!empty($_GET['username'])) {
            $wherelist['uid'] = array('in',$uid);
        }

        if (!empty($_GET['hot'])) {
            $wherelist['hot'] = $_GET['hot'];
        }

        if(!empty($_GET['title'])){
             $wherelist['title'] = array('like', "%{$_GET['title']}%");
        }
        $wherelist['status']=1;

        $total = $lpost->where($wherelist)->count();
        //echo $total;die;

        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($total,5);

        //echo $lpost->_sql();die;
        // 配置页码显示
        $page->setConfig('header', '共 %TOTAL_ROW% 条记录');
        $page->setConfig('first', '首页');
        $page->setConfig('last', '末页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
        $this->assign('show', $page->show());

        // 2.查询数据
        $data = $lpost->field('truck_user.username,truck_lpost.*')->join('__USER__ on __USER__.id=__LPOST__.uid','LEFT')->where($wherelist)->order('state1 asc,mtime desc')->page(I('get.p',1), 5)->select();
        //echo $lpost->_sql();
       //dump($data);die;

        // 3.分配数据
        $this->assign('data', $data);
        //dump($data);

        // 4.输出模板
        $this->display();

    }

    //详情信息
    public function pdetail($id)
    {
        $lpost=M('lpost');
        $user = M('user');
        $ltype = M('ltype');
        $lreply =M('lreply');


        /*将多表查询分开查询*/
        //查询lpost表中ID值为$id的数据
        $datapost=$lpost->find($id);
        //获取uid的值
        $uid=$datapost['uid'];
        $tid=$datapost['tid'];

        //查id值为lpost表中的uid的值
        $udata=$user->find($uid);
        $tdata=$ltype->find($tid);

        //查看该贴的回复数
        $where['tid']=$id;
        $where['pid']=0;
        $replyCount=$lreply->where($where)->count();

        //发送所有数据
        $this->assign("udata",$udata);
        $this->assign("datapost",$datapost);
        $this->assign('tdata',$tdata);
        $this->assign('replyCount',$replyCount);

        $this->display();
    }



    //回收站信息
      public function recycle()
    {
             // 1.实例化Model类
        $lpost = M('lpost');

         //实例化，从user表中查询与获取的名字相似的用户id(二维数组)
        $user = M('user');
        $where['username'] = array('like', "%{$_GET['username']}%");
        $r = $user->field('id')->where($where)->select();

        $uid=array();
        //遍历，将所有id值存入$uid中
        foreach($r as $k=>$v){
            $uid[]=$v['id'];
        }

        $wherelist = [];
        if (!empty($_GET['username'])) {
            $wherelist['uid'] = array('in', $uid);
        }

        if(!empty($_GET['title'])){
             $wherelist['title'] = array('like', "%{$_GET['title']}%");
        }

        //隐藏
        $wherelist['status']=2;
       // $wherelist['notic']=2;

        $total = $lpost->where($wherelist)->count();

        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($total,5);


        // 实例化分页类(总数据条数,每页数据条数)
        // 配置页码显示
        $page->setConfig('header', '共 %TOTAL_ROW% 条记录');
        $page->setConfig('first', '首页');
        $page->setConfig('last', '末页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
        $this->assign('show', $page->show());

        // 2.查询数据
        // $data = $lpost->limit($page->firstRow,$page->listRows)->select();
        $data = $lpost->field('truck_user.username,truck_lpost.*')->join('__USER__ on __USER__.id=__LPOST__.uid','LEFT')->where($wherelist)->order(mtime)->page(I('get.p',1), 5)->select();

        // 3.分配数据
        $this->assign('data', $data);
        //dump($data);

        // 4.输出模板
        $this->display();
    }


    //还原
    public function restore()
    {
        $lpost=M("lpost");

        $data['status']=1;
        $where['id'] = array('in', I('post.id'));
        $res=$lpost->where($where)->save($data);
        //echo $lpost->_sql();die;
        if($res){
            $this->ajaxReturn('yes');
        }else{
            $this->ajaxReturn('no');
        }

    }

     //加入回收站
    public function toRecycle($id)
    {
        $lpost=M("lpost");
        //$id = I('get.id');
        $data['status'] = 2;

        $res=$lpost->where("id=%d",$id)->save($data);
        //echo $lpost->_sql();die;
        if($res){

            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }


    }


    public function delete()
    {
        $lpost = M('lpost');
        $where['id']=array('in',I('post.id'));

        //dump($where);die;
        $res = $lpost->where($where)->delete();
        if($res){
            $this->ajaxReturn('yes');
        } else {
            $this->ajaxReturn('no');
        }

    }

    //置顶
    public function top($id)
    {
        $lpost = M('lpost');
        $state1 = I('get.state1');
        if($state1 == 1){
            $state1=2;
        }else{
            $state1=1;
        }
        $info['state1']=$state1;
        $info['mtime']=time();
        $res = $lpost->data($info)->where('id=%d',$id)->save();
        //echo $lpost->_sql();
        if($res){
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }

    }

    //热帖
     public function hot($id)
    {
        $lpost = M('lpost');
        $hot = I('get.hot');
        if($hot == 1){
            $hot=2;
        }else{
            $hot=1;
        }
        $info['hot']=$hot;
        //$info['mtime']=time();
        $res = $lpost->data($info)->where('id=%d',$id)->save();
        //echo $lpost->_sql();die;
        if($res){
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }

    }

}



