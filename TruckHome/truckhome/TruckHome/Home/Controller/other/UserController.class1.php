<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
class UserController extends Controller {
    public function index(){
         if(!$_SESSION['user']){
            $url=U("User/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
    	//$this->display('login');
    }
    public function register()
    {
    	$this->display();
    }
    public function valUserName()
    {
        $username=I("post.username");
        $user=M("user");

        //$where['cate']=2;//会员
        $data=$user->where(array('username'=>$username,'cate'=>2))->find();
        //dump($data);
        if(!empty($data)){
            $this->ajaxReturn('no');
        }else{
            $this->ajaxReturn('yes');
        }

    }
    public function requireCity()
    {
        $area=M("area");
        $upid=I('post.upid',0);
        $data=$area->where('upid='.$upid)->select();
        //dump($data);
        $this->ajaxReturn($data);
    }
    public function code()
    {
        // 1.实例化验证码类
        $config = array(
                'fontSize' => 20,       // 字体大小
                'length'    => 4,       // 验证码位数
                'useNoise'  => false,   // false关闭杂点
                'useImgBg'  => true,    // 开启验证码图片
                'useCurve'  => false,   // 混淆曲线
                'imageW'    => 150,
                'imageH'    => 42,
                'codeSet'   => '2345',

                // 'useZh'      => true,    // 使用中文
                // 'zhSet'      => '张三阿斯蒂芬'
            );
        $code = new \Think\Verify($config);

        // 2.生成图片验证码
        $code->entry();
    }
    public function valCode1()
    {
        $code=new \Think\Verify();
        $yan=I('post.code1');
        if($code->check($yan)){
            echo 'yes';

        }else{
            echo 'no';

        }
    }
    public function getPhone()
    {
        // 使用C读取配置文件参数
        $config = C('MSG');

        // 1.实例化短信类
        $msg = new \Org\Sms\SmsBao($config['USER'], $config['PASS']);

        // 2.将验证码和生成验证码的时间存入session中
        $code = mt_rand(10000,99999);
        session('msg',['code'=>$code, 'time'=>time()]);

        // 3.发送短信
        $res = $msg->sendSms(I("post.phone"),'【卡车之家test】您的验证码为'.$code.'，在5分钟之内有效');
        //dump($res);
        // 4.返回结果
        $this->ajaxReturn($res);
    }
    public function yzMessage()
    {
        if (time()-session('msg')['time'] > 3000) {
            echo "outtime";
        } else {
            // 验证码有效
            if (session('msg')['code'] == I('post.messageyz')) {
                echo 'yes';
            } else {
                echo "no";
            }
        }
    }
    public function regAction()
    {
        $user=M("user");
        $data['username']=$_POST['username'];
        $data['password']=$_POST['password'];
        $data['province']=$_POST['province'];
        $data['city']=$_POST['city'];
        $data['county']=$_POST['county'];
        $data['villages']=$_POST['villages'];
        $data['cate']=2;//从前台注册都是普通会员 2代表普通会员
        $data['addtime']=time();
        $data['phone']=$_POST['phone'];

        $r=$user->data($data)->add();
        if($r){
            $url=U("Home/User/login");
            echo "<script>alert('注册成功,请登录');location='{$url}';</script>";
        }else{
            $url=U("Home/User/register");
            echo "<script>alert('注册失败');location='{$url}';</script>";
       }
    }
    public function loginaction()
    {
        $user=M("user");
        $name=$_POST['name'];
        $password=$_POST['password'];
        //$data=$user->where(" username='%s' or phone='%s' and password='%s' and cate=%d",$name,$name,$password,2)->find();
        $data=$user->where("password='%s' and cate=%d and username='%s' or phone='%s'",$password,2,$name,$name)->find();
        //echo $user->_sql();die;
        $comurl=$_SESSION['comurl'];
        if($data){
            $url=U("Home/Index/index");
            session("user",$data);
            if(isset($_SESSION['comurl'])){

                echo "<script>alert('登录成功');location='{$comurl}';</script>";
            }else {
                 echo "<script>alert('登录成功');location='{$url}';</script>";
            }
            //dump(session('user'));
           // dump(session('user')['username']);die;

        }else{



            $url=U("Home/User/login");
            if(isset($_SESSION['comurl'])){
                 echo "<script>alert('用户名和密码不匹配');location='{$comurl}';</script>";
             }else{
                 echo "<script>alert('用户名和密码不匹配');location='{$url}';</script>";
             }

        }
    }

    public function logout()
    {
        echo "<script>confirm('".session('user')['username']."确定要退出吗？');</script>";
        session('user',null);

        $comurl=$_SESSION['comurl'];
        if(session('user')==null){
            if(isset($_SESSION['comurl'])){
                echo "<script>alert('退出成功');location='{$comurl}';</script>";
            }else{
                $this->display('User/login');
            }
        }


    }

    /*
    *检查电话号码是否被注册（存在数据库中）
    *
    */
    public function checkPhone(){
        $phone=I("post.phone");//接收手机号码
        $user=M("user");//初始化model类
        $where['phone']=$phone;
        $data=$user->where($where)->find();
        //echo $user->_sql();
        $this->ajaxReturn($data);


    }
    public function updatePwd()
    {
        $user=M("user");
        $data['phone']=$_POST['phone'];
        $num=$user->where($data)->find();
        $id=$num['id'];
        $where['id']=$id;
        $where['password']=$_POST['password'];
        $res=$user->data($where)->save();
        if($res>=0){
            $url=U("Home/User/login");
            echo "<script>alert('密码修改成功，请登录');location='{$url}';</script>";
        }else{
            $url=U("Home/User/forgetpwd");
            echo "<script>alert('密码修改失败');location='{$url}';</script>";
        }

    }
    public function userindex()
    {
        //根据帖子表和用户表来查询信息。绑定到前台，根据session传过来的id来查询这个id的用户发了多少帖子（count(帖子的id)）
        $this->display();
    }
    public function userupdate()
    {
        $user=M("user");
        $where=array();
        $where['id']=$_SESSION['user']['id'];
        $data=$user->where($where)->find();
        $this->assign("data",$data);
        $this->display();
    }

    //修改个人信息
    public function upuserinfo()
    {
        $user=M("user");
        $res=$user->create();
        if($res){
            $r=$user->save();
            if($r>=0){
                $url=U("User/userindex");
                echo "<script>alert('修改个人信息成功！');location='{$url}'</script>";
            }else{
                $url=U('User/userupdate');
                echo "<script>alert('修改个人信息失败！');location='{$url}'</script>";
            }
        }
    }
    public function upload(){
        //实例化上传类
        $upload = new \Think\Upload();
        //初始化上传设置
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
        $upload->rootPath = './Public/Uploads/User/'; // 设置附件上传目录
        //$upload->autoSub = false; //关闭上传创建子目录
        $upload->subName = array('date','Y-m-d'); //设置上传文件子目录的规则
        $upload->saveName = array('uniqid', '');
        //执行上传
        $info = $upload->upload();
        //dump($info);
        //判断上传信息
        if(!$info){
            //上传错误提示错误信息
            $this->error($upload->getError());
        }else{
            // 上传成功 获取上传文件信息
            foreach($info as $file){
                //获取图片储存路径
                $urlpath = __ROOT__."/Public/Uploads/User/".$file['savepath'];
                $path = "./Public/Uploads/User/".$file['savepath'];
                //获取图片名
                $picname = $file['savename'];
                //dump($picname);
                $A = "{$urlpath}{$picname}";
                return $A;
           }
        }
    }
    //根据session用户的id修改用户的图片
    public function upimg()
    {
        $user=M("user");
        // $data['picname']=upload("User/");
        // $data['id']=$_SESSION['user']['id'];
        // $user->data($data)->save();
        // // 获取文件信息
        // // dump($_FILES);
        // // 1.实例化上传类
        // $config = array(
        //         'rootPath' => 'Public/',
        //         'savePath' => 'Uploads/User/',
        //         'subName'=>array('date','Y-m-d'),
        //         'saveName' => array('uniqid', '')
        //     );
        // // $upload->subName = array('date','Y-m-d'); //设置上传文件子目录的规则
        // // $upload->saveName = array('uniqid', '');
        // $upload = new \Think\Upload($config);

        // // 2.执行上传
        // $info = $upload->uploadOne($_FILES['file']);

        // // 3.判断
        // if ($info) {
        //     // dump($info);
        //     // 返回图片的名字，然后在前台模板页输出此图片
        //      $filename = __ROOT__."/Public/Uploads/User/".$info['savename'];
        //     //$filename = $info['savepath'].$info['savename'];

        //      dump($filename);

        //     $data['id']=$_SESSION['user']['id'];
        //     $data['picname']=$filename;
        //     $res=$user->data($data)->save();
        //     echo $filename;

        //     // 返回
        //     // $this->ajaxReturn($filename);
        // } else {
        //     echo $upload->getError();
        // }
       // upload("User/");
        // $data['picname'] =upload("User/");
        // dump($data['picname']);




       // **2可以

        $config = array(
                'rootPath' => 'Public/',
                'savePath' => 'Uploads/User/'
            );
        $upload = new \Think\Upload($config);

        // 2.执行上传
        $info = $upload->uploadOne($_FILES['file']);

        // 3.判断
        if ($info) {
            // dump($info);
            // 返回图片的名字，然后在前台模板页输出此图片
            $filename = $info['savepath'].$info['savename'];
            $data['picname']=__ROOT__."/Public/".$filename;
            $data['id']=$_SESSION['user']['id'];
            $user->data($data)->save();

            echo $filename;

            exit;
            // 返回
            // $this->ajaxReturn($filename);
        } else {
            echo $upload->getError();
        }







    }
    // 对图片进行裁剪操作
    public function doCrop()
    {
        // var_dump($_POST);
        // 1.实例化图片处理类
        $image = new \Think\Image();

        // 2.打开图片
        $image->open('Public/'.$_POST['picname']);  // public/Upload/2016-01-16/aa.jpg

        // 3.进行裁剪操作(认为无用，将原图片进行覆盖)
        $info = $image->crop($_POST['w'],$_POST['h'],$_POST['x'],$_POST['y'])->save('Public/'.$_POST['picname']);



    }


}