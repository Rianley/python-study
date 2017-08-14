<?php
namespace Admin\Controller;
use Think\Controller;
class LcollectController extends Controller {

    //主页帖子列表
    public function index(){

        // 1.实例化Model类
        $lcol = M('lcollect');
        $lpost = M('lpost');
        $user = M('user');

        //实例化，从user表中查询与获取的名字相似的用户id(二维数组)
        $user = M('user');
        $where['username'] = array('like', "%{$_GET['username']}%");
        $r = $user->field('id')->where($where)->select();

        $uid=array();
        //遍历，将所有id值存入$uid中
        foreach($r as $k=>$v){
            $uid[]=$v['id'];
        }
        //搜索条件
        //用户名
        $wherelist = [];
        if (!empty($_GET['username'])) {
            $wherelist['truck_lcollect.uid'] = array('in',$uid);
        }

        $where1['title'] = array('like', "%{$_GET['title']}%");
        $res = $lpost->field('id')->where($where1)->select();

        //标题
        $tid=array();
        //遍历，将所有id值存入$uid中
        foreach($res as $k=>$v){
            $tid[]=$v['id'];
        }
        if (!empty($_GET['title'])) {
            $wherelist['truck_lcollect.tid'] = array('in',$tid);
        }

        $total = $lcol->where($wherelist)->count();

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

        $id = $_SESSION['user']['id'];


        // 2.查询数据
        $col = $lcol->field('truck_lcollect.*,truck_user.username,truck_lpost.title')->join('__USER__ on __USER__.id=__LCOLLECT__.uid','LEFT')->join('__LPOST__ on __LPOST__.id=__LCOLLECT__.tid','LEFT')->where($wherelist)->page(I('get.p',1), 5)->select();
        $this->assign('col',$col);
        $this->display();

    }
}