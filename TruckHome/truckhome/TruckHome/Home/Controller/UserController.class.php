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
    	$this->display('User/userindex');
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
        $comurl=$_SESSION['comurl'];
        $user=M("user");
        $lpost=M("lpost");
        $lreply=M("lreply");

        if(!$_SESSION['user']){
            $url=U("User/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
        //根据帖子表和用户表来查询信息。绑定到前台，根据session传过来的id来查询这个id的用户发了多少帖子（count(帖子的id)）
        $uid=$_SESSION['user']['id'];
        $where=array();
        $where['id']=$uid;
        //首先根据用户的id来查询用户的信息
        $data=$user->where($where)->find();
        //dump($data);
        $this->assign("data",$data);






        //帖子信息
        $post['status']=1;
        $post['uid']=$uid;
        //发出的帖子数
        $postcount = $lpost->where($post)->count();
        //发出的回帖
        $replycount = $lreply->where('uid=%d',$uid)->count();
        //发出的帖子
        $fpost = $lpost->where($post)->select();
        $post1 = $lpost->where($post)->order('mtime desc')->limit(1)->find();

        //发出的回帖
        $freply = $lreply->where('uid=%d',$uid)->select();

        $this->assign('postcount',$postcount);
        $this->assign('fpost',$fpost);
        $this->assign('post1',$post1);

        //dump($post1);
        $this->assign('replycount',$replycount);
        $this->assign('freply',$freply);
        $this->display();
    }
    public function userupdate()
    {
        $comurl=$_SESSION['comurl'];
        $user=M("user");
        $where=array();
        if(!$_SESSION['user']){
            $url=U("User/login");
            echo "<script>alert('你还没有登录，请先登录');location='{$url}';</script>";

        }
        $where['id']=$_SESSION['user']['id'];
        $data=$user->where($where)->find();


        $province=$data['province'];
        $city=$data['city'];
        $county=$data['county'];
        $villages=$data['villages'];
        $pro['id']=$province;
        $city1['id']=$city;
        $county1['id']=$county;
        $villages1['id']=$villages;
        $province2=M("area")->where($pro)->find();
        $city2=M("area")->where($city1)->find();
        $county2=M("area")->where($county1)->find();
        $villages2=M("area")->where($villages1)->find();
        //dump($province2);
        $this->assign("province",$province2);


        $this->assign("city",$city2);
        $this->assign("county",$county2);
        $this->assign("villages",$villages2);





        $this->assign("data",$data);
        $this->display();
    }

    //修改个人信息
    public function upUser()
    {
        $user=M("user");
        //dump($_POST['birthday']);
        $_POST['birthday']=strtotime($_POST['birthday']);
       // dump($_POST['birthday']);
        $res=$user->create();
        if($res){
            $r=$user->save();
            //echo $user->_sql();die;
            if($r>=0){
                $url=U("User/userupdate");
                echo "<script>alert('修改个人信息成功！');location='{$url}'</script>";
            }else{
                $url=U('User/userupdate');
                echo "<script>alert('修改个人信息失败！');location='{$url}'</script>";
            }
        }
    }

    //根据session用户的id修改用户的图片
    public function upImg()
    {
        $user=M("user");


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
            $_SESSION['user']['picname']=__ROOT__."/Public/".$filename;

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
    //获取旧密码，判断旧密码是否正确
    public function getOld()
    {
        $user=M("user");
        $where=array();
        $where['id']=$_SESSION['user']['id'];
        $cpwd=I('post.oldpwd');
        $where['password']=$cpwd;
        $data=$user->where($where)->find();

        //echo $cpwd;
        if($data){
            echo "ok";
        }else{
            echo "no";
        }

    }
    //根据用户的session中的id 来修改密码
    public function upPwd()
    {
        $user=M("user");
        $where=array();
        $where['id']=$_SESSION['user']['id'];
        $where['password']=$_POST['password'];
        $data=$user->data($where)->save();
        if($data){
            $url=U('User/userupdate');
            echo "<script>alert('修改密码成功');location='{$url}';</script>";
        }else{
            $url=U('User/userupdate');
            echo "<script>alert('修改密码失败');location='{$url}';</script>";
        }
    }


    //发送邮箱验证码
    public function sendEmail()
    {
    	$email=I("post.email");
    	$codenum=rand(100000,999999);
    	// 成功返回true，失败返回错误消息(字符串)
    	$info = send_mail($email,'朋友',$codenum." 五分钟有效",'卡车之家邮箱验证');

    	// 定义数组接受信息
    	$data = [];
    	if ($info == true) {
    		$data['status'] = 0;
    		$data['msg'] = '发送成功';
    		session('email',['code'=>$codenum, 'time'=>time()]);
    		//$_SESSION['emailcode']=$codenum;
    	} else {
    		$data['status'] = 1;
    		$data['msg'] = $info;
    	}

    	// 将结果返回
    	$this->ajaxReturn($data);
    }
    public function checkEmail()
    {
    	if (time()-session('email')['time'] > 300) {
            echo "outtime";
        } else {
            // 验证码有效
            if (session('email')['code'] == I('post.emailcode')) {
                echo 'yes';
            } else {
                echo "no";
            }
        }
    }
    //绑定邮箱，并修改邮箱
    public function BindEmail()
    {
    	$user=M("user");
    	$where=array();
    	$where['id']=$_SESSION['user']['id'];
    	$where['email']=$_POST['email'];
    	$res=$user->data($where)->save();
    	if($res>=0){
    		$url=U("User/userupdate");
    		echo "<script>alert('邮箱绑定成功');location='{$url}';</script>";
    	}else{
    		$url=U("User/userupdate");
    		echo "<script>alert('邮箱绑定失败');location='{$url}';</script>";
    	}
    }
    //获取所有的评论信息
    public function usercomment()
    {
        $xcomment=M("xcomment");
        $where=array();
        $keywords=I("get.keywords");
        //dump($keywords);
        $where['uid']=$_SESSION['user']['id'];
        $where['content']=array("like","%{$keywords}%");
        $cnum=$xcomment->where($where)->count();
        $data1=$xcomment->where($where)->page(I('get.p',1),8)->order('atime desc')->select();
        $page=P($cnum,8,$where);
        $this->assign("show",$page);
        $this->assign("data1",$data1);
        //dump($data1);
        $this->assign("cnum",$cnum);
        $this->display();
    }
    //根据id删除评论
    public function delComm()
    {
        $xcomment=M("xcomment");
        $id=I('get.id');
        //先根据id来查pid
        $where=array();
        $where['id']=$id;
        //$datapid=$xcomment->where($where)->find();
        // if($datapid['pid']==0){
        //     //pid等于0代表有子评论，所以把子评论也删除了
        // }
        //删除父类的评论时候，没有必要把子类的评论都删除了

        $res=$xcomment->where($where)->delete();
        if($res){
            $url=U("User/usercomment");
            echo "<script>alert('删除成功了');location='{$url}'</script>";
        }else{
            $url=U("User/usercomment");
            echo "<script>alert('删除失败');location='{$url}'</script>";
        }

    }
    //根据传过来的评论id来查询评论的信息
    public function editcomm()
    {
        $xcomment=M("xcomment");
        $user=M("user");
        $id=I('get.id');

        $where=array();
        $where['truck_xcomment.id']=$id;
        $dataAll=$xcomment->field("truck_user.username,truck_xcomment.*")->join("__USER__ on __USER__.id=__XCOMMENT__.uid")->where($where)->find();
        $this->assign("dataAll",$dataAll);
        $this->display();
    }
    public function  upComm()
    {
        $xcomment=M("xcomment");
        $res=$xcomment->create();
        if($res){
            $r=$xcomment->save();
            if($r>=0){
                $url=U("User/usercomment");
                echo "<script>alert('修改成功！');location='{$url}';</script>";
            }else{
                $url=U("User/editcomm",array('id'=>$_POST['id']));
                echo "<script>alert('修改失败！');location='{$url}';</script>";
            }
        }
    }
    public function userpost()
    {
        $lpost = M('lpost');
        $uid=$_SESSION['user']['id'];
        $data1['status']=1;
        $data1['uid']=$uid;
        $data3 = $lpost->where($data1)->count();
        $data2 = $lpost->where($data1)->order('mtime desc')->select();
        $data4 = $lpost->where($data1)->order('mtime desc')->limit(1)->find();
        //dump($data4);die;
        $this->assign('data2',$data2);
        $this->assign('data3',$data3);
        $this->assign('data4',$data4);

        $this->display();
    }

    public function userreply()
    {
        $lreply = M('lreply');
        $data['uid'] = $_SESSION['user']['id'];
        $data1 = $lreply->where($data)->select();
        $data2 = $lreply->where($data)->count();
        $this->assign('data1',$data1);
        $this->assign('data2',$data2);
        $this->display();
    }

    public function delpost($id)
    {
        $lpost = M('lpost');
        $lreply = M('lreply');
        $tid = I('get.id');
        $res = $lpost->delete($id);

        if($res){
            $r = $lreply->where('tid=%d',$tid)->delete();
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }


}