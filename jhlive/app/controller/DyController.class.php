<?php
namespace app\controller;
use app\model\DyModel;
use frame\core\Factory;
class DyController extends Controller{
	public function DyIndex(){
			$model = Factory::M('app\model\DyModel');
			$cat = isset($_GET['cat'])?$_GET['cat']:'lol';
			//���ڸ���ƽ̨��������Ϸ���Ʋ�һ��  ���Ե����޸�
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