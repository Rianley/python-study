<?php


/*
 * %FIRST% 首页
 * %UP_PAGE% 上一页
 * %LINK_PAGE% 分页列表
 * %DOWN_PAGE% 下一页
 * %END% 尾页
 * %TOTAL_ROW% 总条数
 * %TOTAL_PAGE% 总页数
 * %NOW_PAGE% 当前页
 * $count 总条数
 * $page 第几页
 * $map 搜索参数
 */
function P($count, $page, $map) {
    $Page = new \Think\Page($count, $page);
    $Page -> setConfig('header', '
<div class="rows">
    <span>共：%TOTAL_ROW%条 %TOTAL_PAGE%页 当前第：%NOW_PAGE%页</span</div>
    ');
    $Page -> setConfig('prev', '上一页');
    $Page -> setConfig('next', '下一页');
    $Page -> setConfig('first', '首页');
    $Page -> setConfig('last', '尾页');
    $Page -> setConfig('theme', '
    <div class="page">%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%</div>
    %HEADER%');
    $Page -> rollPage = 9;
    $Page -> lastSuffix = false;
    foreach ($map as $key => $val) {
        $Page -> parameter[$key] = urlencode($val);
    }
    return $Page -> show();
}











/**
        * 导出数据为excel表格
        *@param $data    一个二维数组,结构如同从数据库查出来的数组
        *@param $title   excel的第一行标题,一个数组,如果为空则没有标题
        *@param $filename 下
        *$stu = M ('User');
        *$arr = $stu -> select();
        *exportexcel($arr,array('id','账户','密码','昵称'),'文件名!');
    */
     function exportexcel($data=array(),$title=array(),$filename='report'){
        header("Content-type:application/octet-stream");
        header("Accept-Ranges:bytes");
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=".$filename.".xls");
        header("Pragma: no-cache");
        header("Expires: 0");

        //导出xls 开始
        if (!empty($title)){
            foreach ($title as $k => $v) {
                $title[$k]=iconv("UTF-8", "GB2312",$v);
            }
            $title= implode("\t", $title);
            echo "$title\n";
        }
        if (!empty($data)){
            foreach($data as $key=>$val){
                foreach ($val as $ck => $cv) {
                    $data[$key][$ck]=iconv("UTF-8", "GB2312", $cv);
                }
                $data[$key]=implode("\t", $data[$key]);

            }
            echo implode("\n",$data);
        }
     }



     function upload($path1){
        //实例化上传类
        $upload = new \Think\Upload();
        //初始化上传设置
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
        $upload->rootPath = './Public/Uploads/'.$path1; // 设置附件上传目录
        //$upload->autoSub = false; //关闭上传创建子目录
        $upload->subName = array('date','Y-m-d'); //设置上传文件子目录的规则
        $upload->saveName = array('uniqid', '');
        //执行上传
        $info = $upload->upload();
        //dump($info);
        //判断上传信息
        if(!$info){
            //上传错误提示错误信息
            //echo "图片上传错误";
            //$this->error($upload->getError());
        }else{
            // 上传成功 获取上传文件信息
            foreach($info as $file){
                //获取图片储存路径
                $urlpath = __ROOT__."/Public/Uploads/".$path1.$file['savepath'];
                $path = "./Public/Uploads/".$path1.$file['savepath'];
                //获取图片名
                $picname = $file['savename'];
                //dump($picname);
                $A = "{$urlpath}{$picname}";
                return $A;
           }
        }
    }





    /**
 * 定义发送邮件的函数
 * @param string $email 收件人邮箱地址
 * @param string $nickname 收件人昵称
 * @param string $content 邮箱内容
 * @param string $subject 邮箱主题(标题)
 * @return boolean|string 成功返回true，失败返回字符串类型的失败消息
 */
function send_mail($email, $nickname, $content, $subject)
{
    // 1.导入PHPmail类和SMTP类
    vendor('PHPMailer.class#phpmailer');
    vendor('PHPMailer.class#smtp');

    // 2.实例化PHPMail类(\代表PHPMailer类在顶级空间下)
    $mail = new \PHPMailer();

    // 3.配置SMTP服务
    $mail->isSMTP();    // 使用SMTP服务器
    $mail->SMTPAuth = true;    // 打开SMTP 认证
    $mail->SMTPSecure = 'ssl';  // 使用ssl连接服务器
    $mail->SMTPDebug  = 0;      // 开启调试

    $info = C('EMAIL');
    // 4.配置用户名密码
    $mail->Port = $info['PORT'];    //SMTP服务器的端口号
    $mail->Host = $info['HOST'];    // 主机名
    $mail->Username = $info['USER'];// 用户名
    $mail->Password = $info['PASS'];// 密码

    // 5.setForm():设置发件人
    $mail->setFrom($info['USER'], $info['NAME']);

    // 6.收件人
    $mail->addAddress($email, $nickname);
    $mail->MsgHTML($content);
    $mail->Subject = $subject;

    // 7.发送邮件(成功返回true，失败返回错误信息)
    return $mail->Send() ? true : $mail->ErrorInfo;
}





    function uploadShop($image)
    {
         $config = array(
                'rootPath' => 'Public/shop/',    // 上传文件的根目录
                'savePath' => 'Uploads/',    // 上传文件的保存目录
                'maxSize'  => 3145728,
                'exts'     => ['jpg','png','gif','jpeg']
            );

        $upload = new \Think\Upload($config);

        // 2.执行上传
        $info = $upload->uploadOne($_FILES[$image]);
       //var_dump($info);
       // exit;
        //判断文件上传是否成功
        if($info){

           return $info['savepath'].$info['savename'];

        }
    }


?>