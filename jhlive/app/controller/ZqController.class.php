<?php
namespace app\controller;
use app\model\ZqModel;
use frame\core\Factory;
class ZqController extends Controller{
	public function ZqIndex(){
			$model = Factory::M('app\model\ZqModel');
			$cat = isset($_GET['cat'])?$_GET['cat']:'lol';
			//由于各个平台分类中游戏名称不一样  所以单独修改
			if($cat=='pubg'){
				$cat='pubg';
			}elseif($cat=='fortnite'){
				$cat = 'Fortnite';
			}elseif($cat=='cjzc'){
				$cat = 'cjzc';
			}elseif($cat=='dwrg'){
				$cat = 'DWRG';
			}elseif($cat=='hyxd'){
				$cat = 'HYXD';
			}elseif($cat=='wdsj'){
				$cat = 'MC';
			}elseif($cat=='xxyz'){
				$cat = 'xindong';
			}
			$arrhy = $model->getList($cat,'https://www.zhanqi.tv/games/');
			return $arrhy;
		}
}
?>