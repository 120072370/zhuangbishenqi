<?php
namespace app\controller;
use frame\core\Factory;
use app\controller\DyController;
use app\controller\HyController;
use app\controller\XmController;
use app\controller\ZqController;
use app\controller\QmController;
use app\controller\LzController;
if( ! function_exists('array_column'))
{
  function array_column($input, $columnKey, $indexKey = NULL)
  {
    $columnKeyIsNumber = (is_numeric($columnKey)) ? TRUE : FALSE;
    $indexKeyIsNull = (is_null($indexKey)) ? TRUE : FALSE;
    $indexKeyIsNumber = (is_numeric($indexKey)) ? TRUE : FALSE;
    $result = array();
 
    foreach ((array)$input AS $key => $row)
    { 
      if ($columnKeyIsNumber)
      {
        $tmp = array_slice($row, $columnKey, 1);
        $tmp = (is_array($tmp) && !empty($tmp)) ? current($tmp) : NULL;
      }
      else
      {
        $tmp = isset($row[$columnKey]) ? $row[$columnKey] : NULL;
      }
      if ( ! $indexKeyIsNull)
      {
        if ($indexKeyIsNumber)
        {
          $key = array_slice($row, $indexKey, 1);
          $key = (is_array($key) && ! empty($key)) ? current($key) : NULL;
          $key = is_null($key) ? 0 : $key;
        }
        else
        {
          $key = isset($row[$indexKey]) ? $row[$indexKey] : 0;
        }
      }
 
      $result[$key] = $tmp;
    }
 
    return $result;
  }
}
	class Controller{
		public function getall(){
			$hy = new HyController();
			$arrhy = $hy->HyIndex();
			
			$dy = new DyController();
			$arrdy = $dy ->DyIndex();
			
			$xm = new XmController();
			$arrxm = $xm->XMIndex();
			
			$zq = new ZqController();
			$arrzq = $zq->ZqIndex();
			
			$qm = new QmController();
			$arrqm = $qm->QmIndex();
			
			$lz = new LzController();
			$arrlz = $lz->LzIndex();
			
			return $allarr = array_merge($arrhy,$arrdy,$arrxm,$arrzq,$arrqm,$arrlz);//全平台
		}
		public function Index(){
			$allarr = $this->getall();
			//判断如果$allarr里的people字段值最后一位如果是‘万’，将字段转换为整数，并加上0000    否则转换为整数
			//$mb_substr是截取含有中文的字符串的函数
			for($i=0;$i<count($allarr);$i++){
				if(mb_substr( $allarr[$i]['people'], -1, 1, 'utf-8' ) =='万'){
					$allarr[$i]['people']=(int)$allarr[$i]['people'].mt_rand(1111, 9999);
				}else{
					$allarr[$i]['people']=(int)$allarr[$i]['people'];
				}
			}
			//根据数组的people字段值排序的函数
			array_multisort(\array_column($allarr,'people'),SORT_DESC,$allarr);
			$p=isset($_GET['p'])?$_GET['p']:'';
			if($p==''){
				$arr = array_slice($allarr,0,100 );//首页只保留100个
			}elseif($p==2){
				$arr = array_slice($allarr,100,100,FALSE );//首页只保留100个
			}elseif($p==3){
				$arr = array_slice($allarr,200,100 ,FALSE);//首页只保留100个
			}elseif($p==4){
				$arr = array_slice($allarr,300,100,FALSE );//首页只保留100个
			}elseif($p==5){
				$arr = array_slice($allarr,400,16 ,FALSE);//首页只保留100个
			}
			$cat = isset($_GET['cat'])?$_GET['cat']:'lol';
			require_once('frame/smarty/Smarty.class.php');
			$smarty = new \Smarty();
			$smarty->setTemplateDir('app/view');
			$smarty->setCompileDir('app/view_c');
			$smarty->left_delimiter = '<{';
			$smarty->right_delimiter = '}>';
			$smarty->assign('arr',$arr);
			$smarty->assign('cat',$cat);
			$smarty->display('app/view/index.html');
		}
		public function Search(){
			$kwd = $_POST['kwd'];
			$data = $this->getall();
			$arr = array();
			foreach($data as $key=>$values ){
				foreach($values as $k=>$v){
					if (stristr($v , $kwd ) !== false ){
			        	array_push($arr, $values);
			    	}
				}   
			}
			$arr1 = array_slice($arr,0,5);
			echo json_encode($arr1);
		}
	}
?>

