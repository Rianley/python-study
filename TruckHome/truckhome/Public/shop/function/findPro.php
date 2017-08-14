<?php
function findPro($data){
	//1 实例化
	$sproduct=M('Sproduct');
 	$arr=[];
    foreach ($data as $key => $value) {
        $arr[]=$value['id'];
    }
    $whereId['cid']=array('in',$arr);
    $whereId['status']=1;
    $data=$sproduct->where($whereId)->order('salenum')->limit(5)->select();

	return $data;
}
?>