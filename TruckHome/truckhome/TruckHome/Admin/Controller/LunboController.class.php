<?php
namespace Admin\Controller;
use Think\Controller;
class LunboController extends Controller {
	public function index()
	{
		$lunbo = M('lunbo');


        $total = $lunbo->count();

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

		$pic = $lunbo->page(I('get.p',1),5)->select();
		//echo $lunbo->_sql();die;
		$this->assign('pic',$pic);
		$this->display();

	}

	public function add()
	{
		$this->display();
	}

	public function insert()
	{
		// 1.实例化图片上传类
    	$config = array(
    			'rootPath' => 'Public/',
    			'savePath' => 'Uploads/',
    			'exts'	   => ['gif','png','jpg']
    		);
    	$upload = new \Think\Upload($config);

    	// 2.执行图片上传
    	$info = $upload->uploadOne($_FILES['pic']);
    	//dump($info);die;

    	// 3. 判断图片是否上传成功
    	if ($info) {
    		// 图片上传成功
    		// 4.拼装$_POST
    		$_POST['pic'] = $info['savepath'].$info['savename'];
    		//dump($_POST);die;
    		// 5.实例化Model类并进行添加数据
    		$lunbo = M('lunbo');
    		$r = $lunbo->create();

    		if($r){
    			$res = $lunbo->add();
    			//echo $lunbo->_sql();dump($res);die;
    			$this->success('添加成功',U('Lunbo/index'));
    		}else{
    			$this->error('添加失败');
    		}

    	} else {
    		$this->error($upload->getError());
    	}
    }

    public function edit($id)
    {
    	$lunbo = M('lunbo');
    	$res = $lunbo->where('id=%d',$id)->find();
    	$this->assign('res',$res);
    	//dump($res);die;
    	$this->display();
    }

    public function update()
    {
    	//dump($_POST);die;
    	// 1.实例化图片上传类
    	$config = array(
    			'rootPath' => 'Public/',
    			'savePath' => 'Uploads/',
    			'exts'	   => ['gif','png','jpg']
    		);
    	$upload = new \Think\Upload($config);

    	// 2.执行图片上传

    	//dump($info);die;
        $info = $upload->uploadOne($_FILES['pic']);
    	// 3. 判断图片是否上传成功
    	if ($info) {
    		// 图片上传成功
    		// 4.拼装$_POST

    		$_POST['pic'] = $info['savepath'].$info['savename'];
    		//dump($_POST);die;
    		// 5.实例化Model类并进行添加数据
    		$lunbo = M('lunbo');
    		$r = $lunbo->create();

    		if($r){
    			$res = $lunbo->save();
    			//echo $lunbo->_sql();dump($res);die;
    			$this->success('修改成功',U('Lunbo/index'));
    		}else{
    			$this->error('修改失败');
    		}

    	} else {
    		$this->error($upload->getError());
    	}
    }

    public function delete($id)
    {
    	$lunbo = M('lunbo');
    	$res = $lunbo->delete($id);
    	if($res){
            $this->success('删除成功',U('Lunbo/index'));
        }else{
            $this->error('删除失败');
        }
    }
}