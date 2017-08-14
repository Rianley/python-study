<?php
namespace Org\LAMP;
/** ******************************************************************************
 * brophp.com 无限分类处理类。                     *
 * *******************************************************************************
 * 许可声明：专为《细说PHP》读者及LAMP兄弟连学员提供的“学习型”超轻量级php框架。*
 * *******************************************************************************
 * 版权所有 (C) 2011-2018 北京易第优教育咨询有限公司，并保留所有权利。           *
 * 网站地址: http://www.ydma.cn 【猿代码】                                       *
 * *******************************************************************************
 * $Author: 高洛峰 (g@itxdl.cn) $                                                *
 * $Date: 2015-07-18 10:00:00 $                                                  *
 * *******************************************************************************/
class CatTree {
	private static $order 	= 'ord';  	//有排序字段和表的对应，如果没有这个字段可以不写
	private static $id 		= 'id';     //表的id字段
	private static $pid 	= 'pid';    //表的父级pid字段
	private static $son 	= 'subcat'; //如果有子数组，子数组下标，可以自定义值
	private static $level 	= 'level'; 	//默认的新加级别下标, 可以自定义值
	private static $path 	= 'path';  	//默认的路径下标，可以自定义
	private static $ps   	= ',';     	//默认的路径分隔符号，可以自己字义
	private static $childs 	= 'childs'; //默认的子数组下标，可以自己定义
	private static $narr 	= array();  //放分完级别后的数组
	private static $i;               	//临时的一个记数

	/**
	 *
	 * 获取分类数结构
	 * @param $items array 从数据库查询出来的分类信息（二维数组）
	 *
	 */
	public static function getTree($items){
		if(empty($items))
			return array();

		$tree = array();	//格式化的树
		$tmpMap = array();  	//临时扁平数据

		//如果数组中有排序字段则先排序
		if(array_key_exists(self::$order, $items[0])) {
			usort($items, array(__CLASS__, "compare"));
		}

		foreach ($items as $item) {
			$tmpMap[$item[self::$id]] = $item;
		}

		foreach ($items as $item) {
			if (isset($tmpMap[$item[self::$pid]])) {
				$tmpMap[$item[self::$pid]][self::$son][] = &$tmpMap[$item[self::$id]];
			} else {
				$tree[] = &$tmpMap[$item[self::$id]];
			}
		}
		return self::pathchild($tree);
	}

	/**
	 * 设置类路路径， 和获取全部子类
	 */
	private static function pathchild($arr, $path='') {
		$xarr = array();

  		foreach ($arr as $k=>$v) {
			$xarr[$k]=$v;
			$xarr[$k][self::$path] = $path.self::$ps.$v[self::$pid];
			$xarr[$k][self::$childs] = '';

			if(isset($xarr[$k][self::$son])) {

				$xarr[$k][self::$son]=self::pathchild($xarr[$k][self::$son], $xarr[$k][self::$path]);

				foreach($xarr[$k][self::$son] as $vv) {
					$xarr[$k][self::$childs] .= $vv[self::$id];

					$xarr[$k][self::$childs]  .= self::$ps.$vv[self::$childs];
				}
			}
    	}
		return $xarr;
	}

	/**
	 *
	 * 返回带有层数级别的二维数组
	 * @param array $arr 从表中获取的数组
	 * @return array 处理过的数组
	 */
	public static function getList($arr) {
		return self::clevel(self::getTree($arr));
	}

	/**
	 * 转多层数组为二维数组， 并加上层数组别
	 */
	private static function clevel($arr, $num=0) {
		self::$i = $num;
  		foreach ($arr as $v) {
    		if (isset($v[self::$son])) {
		  		$v[self::$level] = self::$i++;
	  	  		$subcat = $v[self::$son];
				unset($v[self::$son]);
				$v[self::$childs] = trim($v[self::$childs], self::$ps);
				$v[self::$path] = trim($v[self::$path], self::$ps);
				self::$narr[$v[self::$id]]=$v;
				self::clevel($subcat, self::$i);
   	    	} else {
				$v[self::$level] = self::$i;
				$v[self::$childs] = trim($v[self::$childs], self::$ps);
				$v[self::$path] = trim($v[self::$path], self::$ps);
				self::$narr[$v[self::$id]]=$v;
    		}
		}
		self::$i--;

    	return self::$narr;
	}

	/**
	 * 内部使用方法， 将按二维数组中的指定排序字段排序
	 */
	private static function compare($x,$y){

		if($x[self::$order] == $y[self::$order]) {
			return 0;
		} elseif($x[self::$order] < $y[self::$order]){
			return -1;
		} else {
			return 1;
		}
	}
}
