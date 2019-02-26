<?php
	namespace app\model;
	use app\model\Model;
	class DyModel extends Model{
		//正则筛选数据
		public function getList($cat,$url){
			$pageData = $this->getPage($url.$cat);
			$urlreg = '/ data-sub_rt="0" href="(.*?)"/';
			$picreg = '/<img alt=".*" data-original="(.*?)" src=".*" class="JS_listthumb">/';
			$namereg = '/<span class="dy-name ellipsis fl">(.*?)<\/span>/';
			$peoplereg = '/<span class="dy-num fr"  >(.*?)<\/span>/';
			$titlereg = '/<h3 class="ellipsis">\r\n\s+(.*?)\s+<\/h3>/';
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
			$prefix = 'http://www.douyu.com';
			//把筛选的数据放入数组
			for($i=0;$i<count($title);$i++){
				$arr[$i] = array(
					'plat'=>'斗鱼',
					'url'=>$prefix.$url[$i],
					'pic' =>$pic[$i],
					'people'=>$people[$i],
					'name'=>$name[$i],
					'title'=>$title[$i],
					'userpic'=>'http://image13.m1905.cn/uploadfile/2016/0729/20160729104003147821.jpg'
					);
			}
			return $arr;
		}
	}
?>