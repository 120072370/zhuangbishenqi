<?php
namespace app\controller;
use app\model\QmModel;
use frame\core\Factory;
class QmController extends Controller{
	public function QmIndex(){
			$model = Factory::M('app\model\QmModel');
			$cat = isset($_GET['cat'])?$_GET['cat']:'lol';
			//���ڸ���ƽ̨��������Ϸ���Ʋ�һ��  ���Ե����޸�
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