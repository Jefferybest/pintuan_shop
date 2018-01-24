<?php
/**
* 用户控制器
*/
class User extends baseControl
{
	
	public function register()
	{
		if ($_POST) {
			$add_data = [
				'user_name'=>$_POST['user_name'],
				'user_pwd'=>$_POST['user_pwd'],
			];

			$this->model("user")->insert($add_data);
			$this->display();
		}else{
			$this->display();
		}
	}
}


?>