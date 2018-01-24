<?php
/**
* 管理员的类
*/
class Admin extends baseControl
{
	//管理员后台首页,注册													
	public function register()
	{
		if ($_POST) {
			$add_data = [
				'username'=>$_POST['user_name'],
				'password'=>$_POST['user_pwd'],
			];

			$this->model("admin")->insert($add_data);
			$this->display();
		}else{
			$this->display();
		}
	}

}



?>