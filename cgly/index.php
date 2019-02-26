<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>国庆出国旅游图生成</title>
<link type="text/css" rel="stylesheet" href="../frozen.css" />
<style>
.ui-header-positive, .ui-footer-positive {
background-color: #f05557;
color: #fff;
}
a {
color: #f05557;
}
</style>
</head>
<body ontouchstart="">
<?php if($_GET['name']){?>
	<header class="ui-header ui-header-positive ui-border-b">
	<h1>长按下方图片点选保存图片</h1>
</header>
<div class="wrapper">
	<img src="toutu.php?name=<?=$_GET['name']?>&id=<?=$_GET['id']?>" width="100%"/>
</div>
<?php }else{ ?>
<?
if($_SERVER['HTTP_HOST']=='baidu.com'){
	$tiao = 'http://www.zhuangxiabi.com';
	header("location: $tiao");
}
?>
<header class="ui-header ui-header-positive ui-border-b">
	<h1>国庆出国旅游图生成</h1>
</header>
<div class="wrapper">
	<img src="icon.jpg" width="50%" style="margin:30px 25% 30px 25%;"/>
	<div class="ui-form">
    	<form action="">
   	
        	<div class="ui-form-item ui-border-b">
            	<label>姓名</label>
            	<input type="text" name="name" placeholder="输入你的姓名">
        	</div>
		<div class="ui-form-item ui-border-b">
            	<label>选择国家</label>
            	<div class="ui-select">
                	<select name="id">
                    	<option value ="1">迪拜.帆船酒店</option>
                    	<option value ="2">美国.纽约</option>
                    	<option value ="3">泰国.曼谷</option>
                    	<option value ="4">新西兰.诺托鲁瓦</option>
                    	<option value ="5">非洲.尼罗河</option>
                    	<option value ="6">新西兰.皇后镇</option>
                    	<option value ="7">巴黎.卢浮宫</option>
                    	<option value ="8">马尔代夫</option>
                    	<option value ="9">埃及.金字塔</option>
                    	<option value ="10">澳门.威尼斯</option>
                	</select>
            	</div>
        	</div>
        	
			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-primary">确定</button>

			</div>
    	</form>
	</div>
<?php  } require_once '../foot.php'; ?>
</body>
</html>
