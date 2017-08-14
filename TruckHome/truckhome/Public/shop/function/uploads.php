<?php
public function uploads()
{
// 1.实例化文件上传类
        $config = array(
                'rootPath' => 'Public/',
                'savePath' => 'Uploads/',
                'maxSize'  => 3145728,
                'exts'     => ['jpg','png','gif','jpeg'],
                'saveName' => 'time'
            );
        $upload = new \Think\Upload($config);

        // 2.执行上传文件
        $info = $upload->upload();

        // 3.判断
        if ($info) {
            dump($info);
        } else {
            // 获取文件上传的失败消息
            die($upload->getError());
        }
    }
?>