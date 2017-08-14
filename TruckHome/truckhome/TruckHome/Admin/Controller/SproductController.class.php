<?php

namespace Admin\Controller;

use Think\Controller;
use Org\LAMP\CatTree;



class SproductController extends Controller {
    //public $state=array('1'=>'新品','在售','热卖','销售');
    public function index(){

    	// 1.实例化Model类
    	$sproduct = M('sproduct');
        $where['status']=1;


    	// 2.查询数据
    	// $data = $sproduct->limit($page->firstRow,$page->listRows)->select();
        $where['status']=1;
        if(!I('get.proname')){
            $data = $sproduct->where($where)->page(I('get.p',1), 5)->select();

            // 实例化分页类(总数据条数,每页数据条数)
            $page = new \Think\Page($sproduct->where($where)->count(),5);

    	//$data = $sproduct->where($where)->select();
       // console.log($sproduct->page(I('get.p',1), 10)->select());
        //dump($data);
        }else{
            dump(I('get.proname'));
            $proname=I('get.proname');
            $where['proname']=array('like',"%{$proname}%");
            // 实例化分页类(总数据条数,每页数据条数)
            $page = new \Think\Page($sproduct->where($where)->count(),5);

            $data=$sproduct->where($where)->page(I('get.p',1), 5)->select();
            //echo $sproduct->_sql();exit;
            //dump($data);exit;

        }

        // 配置页码显示
        $page->setConfig('header', '共 %TOTAL_ROW% 条记录');
        $page->setConfig('first', '首页');
        $page->setConfig('last', '末页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

        $this->assign('show', $page->show());

         //dump($data);exit;
    	// 3.分配数据
    	$this->assign('data', $data);
        //$this->assign('state',$this->state);
    	//dump($data);exit;

    	// 4.输出模板
    	$this->display();
    }




    public function add()
    {
        //实例化
        $scategory = M('scategory');

        //2 查询数据
        $data = $scategory -> select();

        //3 整合数据
        $list = CatTree :: getList($data);

        //4 发送数据
        $this->assign('list',$list);

        //5 加载模板
    	$this -> display();
    }



    public function insert()
    {

        //1 将post传过来的值赋给$data
        //$data=I('post.');
       // dump($data);
        //var_dump($_FILES);exit;
        //2 若果用户上传文件 调用upload函数 获得上传文件的路径及文件名
        //$info=$this->up();
        //dump($info);

        $_POST['addtime']=time();
        $_POST['hot']=='on'&&$data['hot']=1;
        $_POST['new']=='on'&&$data['new']=1;
        $_POST['promotion']=='on'&&$data['promotion']=1;
        if($_FILES['image'][name]){
            $_POST['image']=uploadShop('image');

        }


        //var_dump($data);exit;

        //3 实例化
        $sproduct = M('sproduct');

        //4 创建数据对象
        $res=$sproduct->create();

        //5 判断
        if($res){

            //6  成功  执行添加
            $r=$sproduct->add();
            if($r){
                $this->success("添加成功",U('Sproduct/index'),3);
            }else{
                $this->error("添加失败");
            }
        }

    }


    public function edit($id)
    {
        //dump($_GET);
        //1 实例化
        $sproduct=M('Sproduct');
        $scategory=M('Scategory');

        //2 查询
        $data=$scategory->join('truck_sproduct ON truck_scategory.id = truck_sproduct.cid')->where('truck_sproduct.id=%d',$id)->find();
        $info=$scategory->select();


        //3 整理数据
        $list = CatTree :: getList($info);

        //4 发送数据
        $this->assign('data',$data);
        $this->assign('list',$list);
        //dump($data);exit;
        //dump($list);exit;

        //5 加载模板
        $this->display();

    }


    public function update()
    {
        //1 将post传过来的值赋给$data
        $data=I('post.');
        //var_dump($data);exit;
        //2 若果用户上传文件 调用upload函数 获得上传文件的路径及文件名
        if($_FILES['image'][name]){
            $data['image']=uploadShop('image');

        }
        if($data['hot']=='on'){
            $data['hot']=1;
        }else{
            $data['hot']=0;
        }
        if($data['new']=='on'){
            $data['new']=1;
        }else{
            $data['new']=0;
        }
        if($data['promotion']=='on'){
            $data['promotion']=1;
        }else{
            $data['promotion']=0;
        }
        //3 实例化
        $sproduct = M('sproduct');

        //4 创建数据对象
        $res=$sproduct->create();


        //5 判断
        if($res){

            //6  成功  执行修改
            $r=$sproduct->data($data)->save();
            //echo $sproduct->_sql();exit;
            if($r){
                $this->success("修改成功",U('Sproduct/index'),3);
            }else{
                $this->error("修改失败");
            }
        }

    }


    public function detail($id)
    {
        // 1.实例化Model类
        $scategory=M('Scategory');

        //2 查询
       /* $data=$scategory->join('truck_sproduct ON truck_scategory.id = truck_sproduct.cid')->where('truck_sproduct.id=%d',$id)->select();*/
       $data=$scategory->join('truck_sproduct ON truck_scategory.id = truck_sproduct.cid')->where('truck_sproduct.id=%d',$id)->find();
        //echo $scategory->_sql();exit;
        $info=$scategory->select();


        //3 发送数据
        $this->assign('data',$data);
        $this->assign('state',$this->state);

        //dump($data);exit;
        //dump($list);exit;

        //4 加载模板
        $this->display();



    }


    public function toRecycle($id)
    {
         // 1.实例化Model类
        $sproduct = M('sproduct');

        //2改变值
        $data['status']=0;
        $data['id']=$id;

            //3 执行修改
            $r=$sproduct->data($data)->save();
            //echo $sproduct->_sql();exit;

            //4 判断
            if($r){
                $this->success("修改成功",U('Sproduct/index'),3);
            }else{
                $this->error("修改失败");

            }
    }

     public function recycle()
    {
        $where['status']=0;
        // 1.实例化Model类
        $sproduct = M('sproduct');

        // 实例化分页类(总数据条数,每页数据条数)
        $page = new \Think\Page($sproduct->where($where)->count(),5);
        // 配置页码显示
        $page->setConfig('header', '共 %TOTAL_ROW% 条记录');
        $page->setConfig('first', '首页');
        $page->setConfig('last', '末页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

        $this->assign('show', $page->show());

        // 2.查询数据
        // $data = $sproduct->limit($page->firstRow,$page->listRows)->select();

        $data = $sproduct->where($where)->page(I('get.p',1), 5)->select();

        //dump($data);
        // //将state状态值恢复为数组

         //dump($data);exit;
        // 3.分配数据
        $this->assign('data', $data);

        //dump($data);exit;

        // 4.输出模板
        $this->display();
    }

    public function outRecycle($id)
    {
        // 1.实例化Model类
        $sproduct = M('sproduct');

        //2改变值
        $data['status']=1;
        $data['id']=$id;

            //3 执行修改
            $r=$sproduct->data($data)->save();
            //echo $sproduct->_sql();exit;

            //4 判断
            if($r){
                $this->success("恢复成功",U('Sproduct/recycle'),3);
            }else{
                $this->error("恢复失败");

            }
    }

    public function del($id)
    {
        // 1.实例化model类
        $sproduct = M('Sproduct');

        // 2.执行删除操作
        $res = $sproduct->delete($id);

        // 3.判断
        if ($res) {
            $this->success('删除成功', U('Sproduct/recycle'), 3);
        } else {
            $this->error('删除失败');
        }
    }

}