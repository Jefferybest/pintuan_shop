<?php

	/**
	* 父累控制器
	*/
	class baseControl
	{
		protected static $control_name;
		protected static $action_name;
		//smarty对象，可以在html中写动态语言的模版引擎
		private $smarty;
		
		function __construct()
		{
			$this->smarty = new smarty();
			//告诉视图层可以写动态语言
			$this->smarty->template_dir = "views";

		}

		public static function run()
		{
			self::$control_name = isset($_REQUEST['control'])?$_REQUEST['control']:$goods;
			self::$action_name = isset($_REQUEST['action'])?$_REQUEST['action']:$index;
			$control_name = self::$control_name;
			$action_name = self::$control_name;
			if(!file_exists("controller/$control_name.php")){
				echo "控制器 $control_name 不存在";
				exit();
			}
			$control_obj = new $control_name();
			if(method_exists($control_name, $action_name)){
				echo "方法名 $action_name 不存在";
				exit();
			}
			$control_obj->$action_name();
		}

		public function assign($var,$value)
		{
			$this->smarty->assign($var,$value);
		}

		public function display()
		{
		
		$this->smarty->display(self::$control_name.'/'.self::$action_name.".html");
		}
		//实例化模型层
		public function model($mode_name)
		{
			$model = $model_name.'Model';
			include "model/$model.php";
			return new $model();
		}
	}
?>