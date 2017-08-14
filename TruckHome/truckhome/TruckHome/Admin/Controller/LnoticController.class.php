<?php
namespace Admin\Controller;
use Think\Controller;
class LnoticController extends Controller {

    //公告列表
     public function index(){
        // 1.实例化Model类
        $lnotic = M('lnotic');

        //实例化，从user表中查询与获取的名字相似的用户id(二维数组)

        $wherelist = [];

        if(!empty($_GET['title'])){
             $wherelist['title'] = array('like', "%{$_GET['title']}%");
        }

        $total = $lnotic->where($wherelist)->count();

        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($total,5);

        //echo $lnotic->_sql();die;
        // 配置页码显示
        $page->setConfig('header', '共 %TOTAL_ROW% 条记录');
        $page->setConfig('first', '首页');
        $page->setConfig('last', '末页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
        $this->assign('show', $page->show());

        // 2.查询数据
        $data = $lnotic->where($wherelist)->order('addtime desc')->page(I('get.p',1), 5)->select();
        //echo $lnotic->_sql();
       //dump($data);die;

        // 3.分配数据
        $this->assign('data', $data);
        //dump($data);

        // 4.输出模板
        $this->display();

    }

    //添加
    public function add()
    {
        $this->display();
    }

    //执行插入
    public function insert()
    {

        $lnotic=M("lnotic");
        //$data['addtime'] = time();
        $_POST['addtime']=time();
        $res = $lnotic->create();
        //dump($_POST);

        if($res){

            $r = $lnotic->add();
            if($r)
            {
                $this->success('添加成功',U('Lnotic/index'));
            }else{
                $this->error('添加失败');
            }
         }
    }

    public function edit($id)
    {
        $lnotic = M('lnotic');
        $data = $lnotic->find($id);
        $this->assign('data',$data);
        $this->display();

    }

     public function update()
    {
        $lnotic=M("lnotic");
        $res=$lnotic->create();
        //dump($res);die;
        if($res){
            $r=$lnotic->save();
           //echo $lnotic->_sql();die;
            if($r){
                $this->success('修改成功',U('Lnotic/index'));
            }else{
                $this->error('修改失败');
            }
        }
    }

     public function ndetail($id)
    {
        $lnotic = M('lnotic');
        $data = $lnotic->find($id);
        $this->assign('data',$data);
        $this->display();

    }

     //删除
    public function delete($id)
    {
        $lnotic=M("lnotic");
        $res=$lnotic->delete($id);
        //dump($res);
        if($res){

            $this->success('删除成功',U('Lnotic/index'));
        }else{
            $this->error('删除失败');
        }

    }



}



