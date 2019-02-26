<?php
namespace frame\core;
use app\controller\Controller;
class Framework{
	public function __construct(){
			date_default_timezone_set("PRC");
			$this->autoload();  // 注册自动加载类
			$this->initMCA();  //初始化MCA
		}
	public function autoload(){
		spl_autoload_register(array($this,"autoloader"));
	}
	
	public function autoloader($className){
		$className=str_replace('\\', '/', $className);
//			echo '需要'.$className.'类<br>';
//			var_dump($className);
//			$className_arr = explode('/', $className);
//			var_dump($className_arr);
			if(substr($className, 0,6)=='Smarty'){
				return;
			}
			require_once $className.'.class.php';
	}
	public function initMCA(){
		$m = isset($_GET['m'])?$_GET['m']:'Model';
		$c = isset($_GET['c'])?$_GET['c']:'Controller';
		$a = isset($_GET['a'])?$_GET['a']:'Index';
		$Controller = new Controller();
		$Controller->$a();
	}
}
?>