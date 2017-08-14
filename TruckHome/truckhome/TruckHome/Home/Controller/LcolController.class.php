<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class LcolController extends Controller {
   public function index(){
   		$lcol = M('lcollect');
   		$lpost = M('lpost');
   		$user = M('user');
         $id = $_SESSION['user']['id'];
   		$sql = "select truck_lcollect.*,truck_user.username,truck_lpost.title,truck_lpost.mtime from truck_lcollect,truck_user,truck_lpost where truck_lcollect.uid=truck_user.id and truck_lcollect.tid=truck_lpost.id and truck_lcollect.uid=".$id;
   		$col = $lcol->query($sql);
         //dump($col);die;

         //echo $lcol->_sql();
        // dump($col);
         $count = $lcol->where('uid=%d',$id)->count();


         $this->assign('col',$col);
   		$this->assign('count',$count);
   		$this->display('User/lcollect');
   }

   public function insert($id)
   {
      if($_SESSION['user']==null){
            $this->success('您还没有登录，请登录',U('User/login'));
            die;
        }
      $lcol = M('lcollect');
      $id = I('get.id');
      $data['uid'] = $_SESSION['user']['id'];
      $data['tid'] = $id;

      $url = U('Lpost/detail',array("id"=>$id));

      //从数据库查看是否收藏过该贴
      $r = $lcol->where($data)->find();
      //echo $lcol->_sql();dump($r);die;
      if($r){
         echo "<script>alert('您之前收藏过该帖，请到我的收藏列表查看');location='{$url}';</script>";
      }else{
         $res = $lcol->data($data)->add();
         if($res){
            echo "<script>alert('收藏成功');location='{$url}';</script>";
         }else{
            echo "<script>alert('收藏失败');</script>";
         }
      }

   }

   public function cancel()
   {
      $lcol = M('lcollect');
      $id = I('get.id');
      $url = U('Lcol/index');
      $data['id'] = $id;
      $res = $lcol->where($data)->delete();
      if($res){
         echo "<script>alert('取消收藏成功');location='{$url}';</script>";
      }else{
         echo "<script>alert('取消收藏失败');</script>";
      }
   }
}