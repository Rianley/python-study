<?php
namespace Admin\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
class IndexController extends Controller {
   public function index(){
        if(!$_SESSION['admin']){
            $url=U("Index/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
        $this->display('index');
    }
    public function login()
    {
    	$this->display();
    }
    public function code()
    {
    	// 1.实例化验证码类
    	$config = array(
    			'fontSize' => 20,		// 字体大小
    			'length'	=> 4,		// 验证码位数
    			'useNoise'  => false,	// false关闭杂点
    			'useImgBg'	=> true,	// 开启验证码图片
    			'useCurve'	=> false,	// 混淆曲线
    			'imageW'	=> 150,
    			'imageH'	=> 42,
    			'codeSet'	=> '2345',

    			// 'useZh'		=> true,	// 使用中文
    			// 'zhSet'		=> '张三阿斯蒂芬'
    		);
    	$code = new \Think\Verify($config);

    	// 2.生成图片验证码
    	$code->entry();
    }

    public function loginaction()
    {
    	$user=M("user");
    	$usersession=array();
    	$code=new \Think\Verify();
    	$yan=I('post.code');
    	if(!$code->check($yan)){
    		$this->error('验证码不正确');
    	}
    	// $data['username']=$_POST['username'];
    	// $data['password']=$_POST['password'];
    	$n=$_POST['username'];
    	$p=$_POST['password'];

        $where=array();
        $where['username']=$n;
        $where['password']=$p;
        $where['cate']=1;
        $een=$user->where($where)->find();
        if($een){
            session('admin',$een);
            echo "<script>confirm('".session('admin')['username']."登录成功');</script>";
            $this->display('Index/index');
        }else{
            $url=U("Index/login");
            echo "<script>alert('用户名和密码不匹配');location='{$url}';</script>";
        }
    	// $us=$user->where("username='%s'",$n)->select();
    	// //dump($us);die;
    	// $pw=$user->where("password='%s'",$p)->select();

    	// if(!$us){
    	// 	$this->error('用户名错误');
    	// }else if(!$pw){
    	// 	$this->error('密码错误');
    	// }else{
    	// 	foreach($us as $ka=>$va){
    	// 		foreach($va as $k=>$v){
    	// 			$usersession[$k]=$v;
    	// 		}
    	// 	}
    	// 	session('admin',$usersession);
    	// 	$this->assign("user",session());
    	// 	//$this->display('Index/index');
    	// 	//dump(session('admin'));die;
    	// 	//echo "登录成功";
    	// 	//dump($Think.session.username);
    	// 	//$this->success('登录成功',U('Index/index'));
    	// 	echo "<script>confirm('".session('admin')['username']."登录成功');</script>";
    	// 	// $this->redirect('index/index');
    	// 	$this->display('Index/index');
    	// }



    }
    public function logout()
    {
    		echo "<script>confirm('".session('admin')['username']."确定要退出吗？');</script>";
    		session('admin',null);
            $url=U('Index/login');
            echo "<script>location='{$url}'</script>";
    		//$this->display('Index/login');
    }

}