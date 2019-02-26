<?php
	namespace app\model;
	use app\model\Model;
	class QmModel extends Model{
		//正则筛选数据
		public function getList($cat,$url){
			$pageData = $this->getPage($url.$cat);
			$urlreg = '/<a href="\/\/(.*?)" class="common_w-card_href"/';
			$picreg = '/<div class="common_w-card_cover-wrap">\s<img src="(.*?)" alt/';
			$namereg = '/<span class="common_w-card_host-name">(.*?)<\/span>/';
			$peoplereg = '/<span class="common_w-card_views-num">(.*?)<\/span>/';
			$titlereg = '/<p class="common_w-card_title">(.*?)<\/p>/';
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
			$prefix='https://';
			$arr = array();	
			//把筛选的数据放入数组
			for($i=0;$i<count($title);$i++){
				$arr[$i] = array(
					'plat'=>'全民',
					'url'=>$prefix.$url[$i],
					'pic' =>$pic[$i],
					'people'=>$people[$i],
					'name'=>$name[$i],
					'title'=>$title[$i],
					'userpic'=>'http://www.tuwan.com/uploads/allimg/1604/20/691_160420102131_1.png'
					);
			}
			return $arr;
		}
	}
?>