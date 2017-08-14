<?php

/*
 *  参数为表单中的name值
 */
function upload($image){
        echo $image;
        // 1.实例化文件上传类
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