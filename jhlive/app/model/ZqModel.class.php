<?php
	namespace app\model;
	use app\model\Model;
	class ZqModel extends Model{
		//正则筛选数据
		public function getList($cat,$url){
			$pageData = $this->getPage($url);
			$pageData = json_decode($pageData,TRUE);
			$prefix = 'https://www.zhanqi.tv';
			for($i=0;$i<20;$i++){
					$arr[$i]=array(
						'plat'=>'战旗',
						'pic'=>$pageData['data']['rooms'][$i]['bpic'],
						'url'=> $prefix.$pageData['data']['rooms'][$i]['url'],
						'name'=>$pageData['data']['rooms'][$i]['nickname'],
						'title'=>$pageData['data']['rooms'][$i]['title'],
						'people'=>$pageData['data']['rooms'][$i]['online'],
						'userpic'=>'http://statics.dnspod.cn/proxy_favicon/_/favicon?domain=www.zhanqi.tv'
					);
				}
			return $arr;
		}
	}
?>