<?php
	namespace app\model;
	use app\model\Model;
	class XmModel extends Model{
		//正则筛选数据
		public function getList($cat,$url){
			$pageData = $this->getPage($url.$cat);
			$urlreg = '/<a href="(.*?)" class="video-list-item-wrap"/';
			$picreg = '/<img class="video-img video-img-lazy" data-original="(.*?)"/';
			$namereg = '/<span class="video-nickname" title="(.*?)">/';
			//熊猫第一个直播间是大图  数据单独处理
			$name1 = '/<span class="userinfo-nickname">(.*?)</';
			//
			$peoplereg = '/<span class="video-number">(.*?)<\/span>/';
			$titlereg = '/<span class="video-title" title="(.*?)">/';
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
			$arr = array();	
			$prefix = 'https://www.panda.tv';
			//把筛选的数据放入数组
			for($i=0;$i<count($url);$i++){
				$arr[$i] = array(
					'plat'=>'熊猫',
					'url'=>$prefix.$url[$i],
					'pic' =>$pic[$i],
					'people'=>$people[$i],
					'name'=>$name[$i],
					'title'=>$title[$i],
					'userpic'=>'http://p16.qhimg.com/t01ca496470f2a64f26.png'
					);
			}
			return $arr;
		}
	}
?>