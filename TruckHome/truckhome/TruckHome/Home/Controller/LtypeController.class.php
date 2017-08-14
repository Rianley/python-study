<?php
namespace Home\Controller;
use Think\Controller;
use Org\LAMP\CatTree;
class LtypeController extends Controller {
    public function index(){
    	$ltype = M('ltype');
    	$data = $ltype->where('pid=0')->select();
    	$tree = CatTree::getTree($data);
    	$this->assign('tree',$tree);
    	$this->display();
    }
}