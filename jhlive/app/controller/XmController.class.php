<?php
namespace app\controller;
use app\model\XmModel;
use frame\core\Factory;
class XmController extends Controller{
	public function XmIndex(){
			$model = Factory::M('app\model\XmModel');
			$cat = isset($_GET['cat'])?$_GET['cat']:'lol';
			if($cat=='wzry'){
				$cat = 'kingglory';
			}elseif($cat == 'yys'){
				$arrxm = array();
				return $arrxm;
			}elseif($cat=='hyxd'){
				$cat = 'sycj';
			}elseif($cat=='xxyz'){
				$cat = 'yzdr';
			}elseif($cat=='cjzc'){
				$cat = 'cjsy';
			}
			$arrxm = $model->getList($cat,'https://www.panda.tv/cate/');
			return $arrxm;
		}
}
?>