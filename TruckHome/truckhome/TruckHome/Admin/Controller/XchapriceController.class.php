<?php
namespace Admin\Controller;
use Think\Controller;

header('content-type:text/html;charset=utf-8');
class XchapriceController extends Controller {
    public function index(){
        // 1.实例化Model类
       if(!$_SESSION['admin']){
            $url=U("Index/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
    	$xchaprice = M('xchaprice');

    	// 实例化分页类(总数据条数,每页数据条数)
    	$page = new \Think\Page($xchaprice->count(),5);
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
    	// $data = $xchaprice->limit($page->firstRow,$page->listRows)->select();
    	//$data = $xchaprice->page(I('get.p',1), 5)->select();
        $data=$xchaprice->field("truck_xproduct.pname,truck_xchaprice.*")->join("__XPRODUCT__ on __XPRODUCT__.id=__XCHAPRICE__.pid")->page(I('get.p',1), 5)->select();
    	// 3.分配数据
    	$this->assign('data', $data);
    	// dump($data);
        $counts=$xchaprice->count();
        $arr=array();
        for($i=1;$i<=$counts;$i++){
            $arr[]=$_REQUEST["ckvalue{$i}"];
        }
        //dump($arr);





    	// 4.输出模板
    	$this->display();
    }
    public function detail($id){
        $xchaprice=M("xchaprice");
        $data=$xchaprice->find($id);
        $pid=$chadata['pid'];
        $prodata=M("xproduct")->find($pid);
        $this->assign("data",$data);
        $this->assign("prodata",$prodata);
        $this->display();
    }
    public function delete($id)
    {
    	$xchaprice=M("xchaprice");
    	$res=$xchaprice->delete($id);
    	//dump($res);
    	if($res){
            $url=U('Xchaprice/index');
            echo "<script>alert('删除成功');location='{$url}'</script>";
    		//$this->success('删除成功',U('xchaprice/index'));
    	}else{
    		 $url=U('Xchaprice/index');
            echo "<script>alert('删除失败');location='{$url}'</script>";
    	}

    }
    //批量删除数据
    public function betchDel()
    {
        $xchaprice=M("xchaprice");
        $idstr=I('post.params');
        $idarr=explode(',',$idstr);
        $where=array();
        $where['id']=array("in",$idarr);
        $res=$xchaprice->where($where)->delete();
        if($res){
            echo "ok";
        }


    }
    //导出数据到excel表格
    public function exprotExcel()
    {
        $xchaprice=M("xchaprice");
        // $idstr=I('get.params');
        // $idarr=explode(',',$idstr);
        // $where=array();
        //$where['truck_xchaprice.id']=array("in",$idarr);
        $data=$xchaprice->field("truck_xproduct.pname,truck_xchaprice.*")->join("__XPRODUCT__ on __XPRODUCT__.id=__XCHAPRICE__.pid")->select();
        foreach($data as $k=>$v){
            $data[$k]['addtime']=date("Y-m-d",$data[$k]['addtime']);
            if($data[$k]['sex']==1){
                $data[$k]['sex']="男";
            }else{
                $data[$k]['sex']="女";
            }
            //$data[$k]['sex']==1?"男":"女";
        }
        //dump($data);
        //$data['addtime']=date("Y-m-d",$data['addtime']);
        //$data['sex']==1?"男":"女";
        exportexcel($data,array('车型名称','询问表中的id','车型id','地址','电话','询问时间','性别','客户名称'),'chaprice');

        exit;
    }

}