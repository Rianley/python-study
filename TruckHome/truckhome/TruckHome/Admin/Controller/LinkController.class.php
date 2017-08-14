<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends Controller {
    public function index(){
        // 1.实例化Model类
    	$link = M('link');

    	// 实例化分页类(总数据条数,每页数据条数)
    	$page = new \Think\Page($link->count(),5);
    	// 配置页码显示
    	$page->setConfig('header', '共 %TOTAL_ROW% 条记录');
    	$page->setConfig('first', '首页');
    	$page->setConfig('last', '末页');
    	$page->setConfig('prev','上一页');
    	$page->setConfig('next','下一页');
    	$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"
);
    	$this->assign('show', $page->show());

    	// 2.查询数据
    	// $data = $link->limit($page->firstRow,$page->listRows)->select();
    	$data = $link->page(I('get.p',1), 5)->select();

    	// 3.分配数据
    	$this->assign('data', $data);
    	// dump($data);

    	// 4.输出模板
    	$this->display();
    }
    public function add()
    {
    	$this->display();
    }
    public function insert()
    {

    	$link=M("link");

    	//dump($_POST);
    	$res=$link->create();
    	//echo "oooo";
    	//dump($res);
    	if($res){
    		//$r=$link->add();
    		//$r=$link->add();
    		$r=$link->add();
    		//dump($r);
    		if($r){
    			$this->success('添加成功',U('Link/index'));
    		}else{
    			$this->error('添加失败');
    		}
    	}
    }
    public function edit($id)
    {

    	$link=M("link");
    	$num=$link->find($id);
    	$this->assign("data",$num);
    	$this->display();
    }
    public function update()
    {
    	$link=M("link");
    	//echo "<script>alert('okkk');</script>";
    	//echo "ok";
    	$res=$link->create();
    	//dump($res);
    	if($res){
    		$r=$link->save();
    		if($r){
    			$this->success('修改成功',U('Link/index'));
    		}else{
    			$this->error('修改失败');
    		}
    	}
    }
    public function delete($id)
    {
    	$link=M("Link");
    	$res=$link->delete($id);
    	//dump($res);
    	if($res){

    		$this->success('删除成功',U('Link/index'));
    	}else{
    		$this->error('删除失败');
    	}

    }

}