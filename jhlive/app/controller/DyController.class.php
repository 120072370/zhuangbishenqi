<?php
namespace app\controller;
use app\model\DyModel;
use frame\core\Factory;
class DyController extends Controller{
	public function DyIndex(){
			$model = Factory::M('app\model\DyModel');
			$cat = isset($_GET['cat'])?$_GET['cat']:'lol';
			//由于各个平台分类中游戏名称不一样  所以单独修改
			if($cat=='pubg'){
				$cat='jdqs';
			}elseif($cat=='fortnite'){
				$cat = 'blzy';
			}elseif($cat=='cjzc'){
				$cat = 'jdqscjzc';
			}elseif($cat=='dwrg'){
				$cat = 'phone';
			}elseif($cat=='hyxd'){
				$cat = 'qtsy';
			}elseif($cat=='wdsj'){
				$cat = 'MC';
			}elseif($cat=='xxyz'){
				$cat = 'xingyu';
			}
			$arrdy = $model->getList($cat,'https://www.douyu.com/directory/game/');
			return $arrdy;
		}
}
?>