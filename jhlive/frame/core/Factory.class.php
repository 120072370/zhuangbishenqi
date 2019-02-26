<?php
namespace frame\core;
/*
 * 工厂类  用于实例化模型
 */
class Factory{
	public static function M($modelName){
		static $model_list = array();
		if(!isset($model_list[$modelName])){
			$model_list[$modelName] = new $modelName;
		}
		return $model_list[$modelName];
	}
}
?>