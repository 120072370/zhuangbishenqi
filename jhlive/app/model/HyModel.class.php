<?php
	namespace app\model;
	use app\model\Model;
	class HyModel extends Model{
		//正则筛选数据
		public function getList($cat,$url){
			$pageData = $this->getPage($url.$cat);
			$urlreg = '/<a href="(.*?)" class="title new-clickstat" report=/';
			$picreg  = '/<img class="pic" data-original="(.*?)"/';
			$namereg = '/<i class="nick" title="(.*?)">.*?</';
			$peoplereg = '/<i class="js-num">(.*?)<\/i>/';
			$titlereg = '/title=".*?" target="_blank">(.*?)<\/a>/';
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
			//把筛选的数据放入数组
			for($i=0;$i<count($title);$i++){
				$arr[$i] = array(
					'plat'=>'虎牙',
					'url'=>$url[$i],
					'pic' =>$pic[$i],
					'people'=>$people[$i],
					'name'=>$name[$i],
					'title'=>$title[$i],
					'userpic'=>'http://www.veeqi.com/uploadfile/2017/0318/20170318103653333.png'
					);
			}
			return $arr;
		}
	}
?>