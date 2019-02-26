<?php
namespace app\controller;
use app\model\QmModel;
use frame\core\Factory;
class QmController extends Controller{
	public function QmIndex(){
			$model = Factory::M('app\model\QmModel');
			$cat = isset($_GET['cat'])?$_GET['cat']:'lol';
			//由于各个平台分类中游戏名称不一样  所以单独修改
			if($cat=='pubg'){
				$cat='juediqiusheng';
			}elseif($cat=='fortnite'){
				$cat = 'baoleizhiye';
			}elseif($cat=='wzry'){
				$cat = 'wangzhe';
			}elseif($cat=='cjzc'){
				$cat = 'jdqssy';
			}elseif($cat=='dwrg'){
				$cat = 'diwurenge';
			}elseif($cat=='hyxd'){
				$cat = 'huangyexingdong';
			}elseif($cat=='xxyz'){
				$cat = 'showing';
			}elseif($cat=='wdsj'){
				$cat = 'minecraft';
			}
			$arrqm = $model->getList($cat,'https://www.quanmin.tv/game/');
			return $arrqm;
		}
}
?>