<?php
error_reporting(~E_NOTICE);
include 'init.php';
// //引入控制层文件
// $control = $_REQUEST['control'];
// include "controller/$control.php";

// $control_obj = new $control();
// $action = $_REQUEST['action'];
// $control_obj->$action();
baseControl::run();

?>


