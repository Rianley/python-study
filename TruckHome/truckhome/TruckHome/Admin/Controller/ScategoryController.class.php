<?php

namespace Admin\Controller;

use Think\Controller;
use Org\LAMP\CatTree;

class ScategoryController extends Controller {

    public $state=array('启用','禁用');
    public $childprev;   //子类禁用之前的状态

    public function index(){
    	// 1.实例化Model类
    	$scategory = M('scategory');

    	/*// 实例化分页类(总数据条数,每页数据条数)
    	$page = new \Think\Page($user->count(),2);
    	// 配置页码显示
    	$page->setConfig('header', '共 %TOTAL_ROW% 条记录');
    	$page->setConfig('first', '首页');
    	$page->setConfig('last', '末页');
    	$page->setConfig('prev','上一页');
    	$page->setConfig('next','下一页');
    	$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

    	$this->assign('show', $page->show());
*/
    	// 2.查询数据
        //$data = $user->page(I('get.p',1), 10)->select();
    	$data = $scategory->select();

        // 3.将分类进行规整(使用CatTree类进行规整)
        $list = CatTree::getList($data);
        //dump($list);exit;

    	// 4.分配数据
    	$this->assign('list', $list);
        $this->assign('state',$this->state);


    	// 5.输出模板
    	$this->display();
    }

    public function add()
    {
    	$this->display();
    }

    public function insert()
    {
        //var_dump($_POST);EXIT;
        $data=I('post.');
        //1 实例化
        $scategory = M('Scategory');

        //获取父类路径
        //添加的不是顶级分类
        if($data['pid']!=NULL){
            $res=$scategory->where('id=%d',$data['pid'])->find();

            $data['path']=$res['path'].'-'.$data['pid'];
        //dump($data['path']);exit;
        }else{  //顶级分类
            $data['path']=0;

        }
        //2 创建数据对象
        $res = $scategory->create();

        //3 判断
        if($res){
            $r=$scategory->data($data)->add();
            if($r){
                $this->success('添加成功',U("Scategory/index"),3);
            }else{
                $this->error('添加失败');
            }
        }else{
            $this->error($scategory->getError());
        }
    }


    public function edit($id)
    {

        //1 实例化
        $scategory = M('Scategory');

        //2 查询
        $data = $scategory->find($id);

        // 3.查询所有分类信息
        $info = $scategory->select();

        // 4.将分类进行规整(使用CatTree类进行规整)
        $list = CatTree::getList($info);

        //5 发送数据
        $this->assign('list', $list);
        $this->assign('data',$data);

        //6 加载模板
        $this->display();
    }


    public function update()
    {
        //1 实例化
        $scategory = M('scategory');

        //2 创建数据对象
        $res=$scategory->create();



        //3 判断
        if($res){
            $r=$scategory->save();
            if($r){
                $this->success('修改成功',U('Scategory/index'),3);
            }else{
                $this->error('修改失败');
            }
        }else{
            $this->error($scategory->getError());
        }
    }

    public function status($id)
    {
         //1 实例化
        $scategory = M('scategory');

        //2 查询
        $data = $scategory->find($id);

        // 3.查询所有分类信息
        $info = $scategory->select();

        // 4.将分类进行规整(使用CatTree类进行规整)
        $list = CatTree::getList($info);

        //dump($list);exit;

        //5 该类下面的所有子类id
        $childs=$list[$id]['childs'];
        //dump($childs);exit;


        //6 判断是否含有子类
        if($childs){        //有子类

            //6.1获取所有子类的id
            $array=explode(',',$childs);
            //dump($array);exit;
           // dump(count($array));exit;



            //6.3  判断禁用还是启用
            if($data['status']){   //1->0  启用变禁用
               // 改变自身状态

                 $data['status']=0;
                $scategory->data($data)->where('id=%d',$id)->save();

                //遍历子类 使其状态变为0 即禁用
                for($i=0;$i<count($array);$i++){
                    $where['id']=$array[$i];
                    $status['status']=0;
                    $res=$scategory->data($status)->where($where)->save();
                   /* if($res){
                        $this->success('成功',U('Scategory/index'),3);
                    }else{
                        $this->error('失败');
                    }*/

                }
                $this->success('成功',U('Scategory/index'),3);

            }else{   //禁用变启用

                //6.4判断其父类是否禁用 如果父类禁用则不能启用

                // 6.4.1先判断是否有父类

                if($data['pid']){  //有父类

                    $arrayPath=explode('-',$data['path']);


                    //判断父类是否禁用
                    for($j=1;$j<count($arrayPath);$j++){

                        //找父类的状态
                        $pwhere['id']=$arrayPath[$j];
                        $p=$scategory->where($pwhere)->find();
                        //dump($p);exit;
                        if(!$p['status']){
                            //echo 1111;exit;
                            $this->error('父类被禁用，子类不能启用');
                        }
                    }

                    //父类没有禁用的  可以启用  遍历子类变为启用
                    $data['status']=1;
                    $scategory->data($data)->where('id=%d',$id)->save();
                    for($q=0;$q<count($array);$q++){
                        $qwhere['id']=$array[$q];
                        $qstatus['status']=1;
                        $result=$scategory->data($qstatus)->where($qwhere)->save();

                    }
                         if($result){
                            $this->success('成功',U('Scategory/index'),3);
                        }else{
                            $this->error('失败');
                        }



                }else{   //没有父类
                    $data['status']=1;
                    $scategory->data($data)->where('id=%d',$id)->save();

                    for($i=0;$i<count($array);$i++){

                        $where['id']=$array[$i];
                        $status['status']=1;
                        $res=$scategory->data($status)->where($where)->save();

                    }
                    if($res){
                            $this->success('成功',U('Scategory/index'),3);
                        }else{
                            $this->error('失败');
                        }
                }

            }



        }else{


            if($data['status']){  //启用变禁用
                 $data['status']=0;
                $r=$scategory->data($data)->where('id=%d',$id)->save();
                if($r){
                    $this->success('成功',U('Scategory/index'),3);
                }else{
                    $this->error('失败');
                }

            }else{  //禁用变启用

                //有父类
                if($data['pid']){

                    $tarrayPath=explode('-',$data['path']);


                    //判断父类是否禁用
                    for($j=1;$j<count($tarrayPath);$j++){

                        //找父类的状态
                        $tpwhere['id']=$tarrayPath[$j];
                        $p=$scategory->where($tpwhere)->find();
                       /* echo $scategory->_sql();
                        dump($p);
                        echo $p['status'];exit;*/
                        if(!$p['status']){

                            $this->error('父类被禁用，子类不能启用');
                        }
                    }
                    $data['status']=1;
                    $r=$scategory->data($data)->where('id=%d',$id)->save();
                    $this->success('成功',U('Scategory/index'),3);
                }else{
                $data['status']=1;
                $r=$scategory->data($data)->where('id=%d',$id)->save();
                $this->success('成功',U('Scategory/index'),3);
                }
            }
        }
    }
}