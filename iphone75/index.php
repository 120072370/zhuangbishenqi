<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>iphone7购买转款短信提醒</title>
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
	<img src="toutu.php?name=<?=$_GET['name']?>&yinhang=<?=$_GET['yinhang']?>&xingming=<?=$_GET['xingming']?>&kahao=<?=$_GET['kahao']?>"
width="100%"/>
</div>

<?php }else{ ?>
<header class="ui-header ui-header-positive ui-border-b">
	<h1>iphone7购买转款短信提醒</h1>
</header>
<div class="wrapper">
	<img src="icon.jpg" width="50%" style="margin:30px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	<div class="ui-form-item ui-border-b">
            	<label>银行短信号</label>
            	<input type="text" name="name"                   value="95588" placeholder="输入银行短信号如95588" >
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>银行名</label>
            	<input type="text" name="yinhang"                 value="工商" placeholder="输入银行名如：工商" >
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>卡号后四位</label>
            	<input type="text" name="kahao"                 value="9577" placeholder="输入银行卡后四位如：9577" >
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>姓名</label>
            	<input type="text" name="xingming"                value="王二狗" placeholder="输入姓名：王二狗" >
        	</div>

				
			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-primary">确定</button>
			</div>
    	</form>
	</div>
<?php  } require_once '../foot.php'; ?>
</body>
</html>
