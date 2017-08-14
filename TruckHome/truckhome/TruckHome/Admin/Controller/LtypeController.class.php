<?php
namespace Admin\Controller;
use Think\Controller;
use Org\LAMP\CatTree;

class LtypeController extends Controller {
    public function index(){
        // 1.实例化Model类
    	$ltype = M('ltype');

    	// 2.查询数据
    	$data = $ltype->select();
        //dump($data);die;
        //3.将分类进行规整
        $list = CatTree::getList($data);

    	// 4.分配数据
    	$this->assign('list', $list);
    	// dump($data);

    	// 5.输出模板
    	$this->display();
    }
    public function add()
    {
    	$this->display();
    }
    public function insert()
    {

    	$ltype=M("ltype");
    	//dump($_POST);
    	$res=$ltype->create();
    	//dump($res);
    	if($res){
    		$r=$ltype->add();
    		//dump($r);
    		if($r){
    			$this->success('添加成功',U('Ltype/index'));
    		}else{
    			$this->error('添加失败');
    		}
    	}
    }
    public function edit($id)
    {

    	$ltype=M("ltype");

    	$num=$ltype->find($id);

        // 查询所有分类信息
        $info = $ltype->select();

        // 将分类进行规整(使用CatTree类进行规整)
        $list = CatTree::getList($info);
        $this->assign('list', $list);
    	$this->assign("data",$num);
    	$this->display();
    }
    public function update()
    {
    	$ltype=M("ltype");
    	$res=$ltype->create();
    	//dump($res);die;
    	if($res){
    		$r=$ltype->save();
            //echo $ltype->_sql();die;
    		if($r){
    			$this->success('修改成功',U('Ltype/index'));
    		}else{
    			$this->error($Ltype->getError());
    		}
    	}
    }
   public function disable($id)
   {
        //1.实例化
        $ltype=M("ltype");

        // 2.查询数据
        $data = $ltype->select();

        //$data=$ltype->where("id=%d",$id)->select();
        //dump($data);die;

        //3.将分类进行规整
        $list = CatTree::getList($data);

        //4.获取状态值
        $status = I('get.status');

        //4.1获取该类的所有孩子的id值
        $childs = $list[$id]['childs'];
        //dump($childs);die;
        //4.2转化为数组
        $arr = explode(',',$childs);

        //4.3查询所有孩子的数据
        $where1['id'] = array('in',$arr);
        $r1 = $ltype->where($where1)->select();
        //dump($r1);die;
        //5获取路径（用以获取所有父类）
        $parent = $list[$id]['path'];
        //dump($parent);die;
        //5.1转化为数组
        $arr1 = explode(',', $parent);

        //5.2获取所有父类信息
        $where2['id'] =array('in',$arr1);
        $r2 = $ltype->where($where2)->select();
        //echo $ltype->_sql();die;
       // dump($r2);die();
        //5.判断状态
        if($status==1){//启用-》禁用
            $status=2;
            if(count($r1)>0){//若有子类，则将子类也禁用
                foreach($r1 as $values3){
                    $vinfo['id']=$values3['id'];
                    $vinfo['status']=2;

                    $ltype->data($vinfo)->save();

                }
           }
        }else{//禁用--》启用
            $status =1;
             if(count($r1)>0){//若有子类，则将子类也启用
                foreach($r1 as $values5){
                    $vinfo5['id']=$values5['id'];
                    $vinfo5['status']=1;

                    $ltype->data($vinfo5)->save();

                }
            }

           //dump($r2);
            if(count($r2)>0){//有父类
               foreach($r2 as $value6){
                    //dump($value6['status']);die;
                    if($value6['status']==2){//若父类被禁用

                        $this->error("该类的父类已被禁用，不能启用");
                    }
               }

            }

        }

        $info["status"]=$status;
        $info['id']=$id;
        $reinfo=$ltype->data($info)->save();

        if($reinfo){
            $this->success('修改成功',U('Ltype/index'));
        }else{
            $this->error("失败了");
        }
   }

}