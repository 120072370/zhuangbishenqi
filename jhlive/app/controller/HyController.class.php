<?php
namespace app\controller;
use app\model\HyModel;
use frame\core\Factory;
class HyController extends Controller{
	public function HyIndex(){
			$model = Factory::M('app\model\HyModel');
			$cat = isset($_GET['cat'])?$_GET['cat']:'lol';
			//由于各个平台分类中游戏名称不一样  所以单独修改
			if($cat=='pubg'){
				$cat='2793';
			}elseif($cat=='fortnite'){
				$cat = '3090';
			}elseif($cat=='cjzc'){
				$cat = '3203';
			}elseif($cat=='dwrg'){
				$cat = '100029';
			}elseif($cat=='hyxd'){
				$cat = '100073';
			}elseif($cat=='wdsj'){
				$cat = 'MC';
			}elseif($cat=='xxyz'){
				$cat = 'xingxiu';
			}
			$arrhy = $model->getList($cat,'https://www.huya.com/g/');
			return $arrhy;
		}
}
?>