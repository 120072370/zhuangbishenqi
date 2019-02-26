<?php
	namespace app\model;
	use app\model\Model;
	class LzModel extends Model{
		//正则筛选数据
		public function getList($cat,$url){
			$pageData = $this->getPage($url.$cat);
			$urlreg = '/href="(.*?)".*?class="livecard"/';
			$picreg = '/src="(.*?)".*?class="livecard-thumb ">/';
			$namereg = '/class="livecard-modal-username">(.*?)</';
			$peoplereg = '/class="livecard-meta-item-text">(\d+.*?)</';
			$titlereg = '/class="listcard-caption".*?>(.*?)</';
			preg_match_all($urlreg, $pageData,$urlcon);
			preg_match_all($picreg, $pageData,$piccon);
			preg_match_all($namereg, $pageData,$namecon);
			preg_match_all($peoplereg, $pageData,$peoplecon);
			preg_match_all($titlereg, $pageData,$titlecon);
			$url = $urlcon[1];
			$pic = $piccon[1];
			$name = $namecon[1];
			$people = $peoplecon[1];
			$title = $titlecon[1];
			$prefix='http:';
			$arr = array();	
//			for($i=1;$i<48;$i+=2){
//				unset($people[$i]);
//			}
//			$people = array_values($people);
			//把筛选的数据放入数组
			for($i=0;$i<count($title);$i++){
				$arr[$i] = array(
					'plat'=>'龙珠',
					'url'=>$prefix.$url[$i],
					'pic' =>$pic[$i],
					'people'=>$people[$i],
					'name'=>$name[$i],
					'title'=>$title[$i],
					'userpic'=>'http://kbbos.baidu.com/comt/1491029155_beed080965accdca6a66a923b5f6d166.jpeg'
					);
			}
			return $arr;
		}
	}
?>