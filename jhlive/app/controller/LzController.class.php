<?php
namespace app\controller;
use app\model\LzModel;
use frame\core\Factory;
class LzController extends Controller{
	public function LzIndex(){
			$model = Factory::M('app\model\LzModel');
			$cat = isset($_GET['cat'])?$_GET['cat']:'lol';
			//���ڸ���ƽ̨��������Ϸ���Ʋ�һ��  ���Ե����޸�
			if($cat=='pubg'){
				$cat='jdqs';
			}elseif($cat == 'yys'){
				$arrlz = array();
				return $arrlz;
			}elseif($cat=='hyxd'){
				$cat = 'cjsy';
			}elseif($cat=='xxyz'){
				$cat = 'lzxc';
			}elseif($cat=='wdsj'){
				$cat = 'minecraft';
			}
			$arrlz = $model->getList($cat,'http://longzhu.com/channels/');
			return $arrlz;
		}
}
?>