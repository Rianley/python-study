<?php
	public function index()
	{
		$user = M('user');
		$res = $user->select();
		$this->assign('res',$res);
		$this->display();
	}
	public function add()
	{
		$this->display();
	}
	public function insert()
	{
		$user = M('user');
		$res = $user->create();
		if($res){
			$r = $user->add();
			if($r){
				$this->success('成功',U('Lpost/index'));
			}else{
				$this->error('失败');
			}
		}
	}
	public function edit($id)
	{
		$user = M('user');
		$res = $user->find($id);
		$this->assign('res',$res);
		$this->display();
	}
	public function update()
	{
		$user = M('user');
		$res = $user->create();
		if($res){
			$r = $user->save();
			if($r){
				$this->success('成功',U('Index/index'));
			}else{
				$this->error('失败');
			}
		}
	}
	public function delete($id)
	{
		$user = M('user');
		$res = $user->delete($id);
		if($res){
			$this->success('成功',U('Index/index'));
		}else{
			$this->error('失败');
		}
	}
 ?>