<?php

/**
* 管理商品的类
*/
class Goods extends baseControl
{
	//商品列表
	public function index()
	{
		$this->display();
	}

	//商品添加
	public function add()
	{
		echo "商品添加";
	}

	//商品删除
	public function del()
	{
		echo "商品删除";
	}
}

?>