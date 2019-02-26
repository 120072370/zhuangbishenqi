<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>手写快递单生成器</title>
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
	<img src="toutu.php?name=<?=$_GET['name']?>&shoujian=<?=$_GET['shoujian']?>&wupin=<?=$_GET['wupin']?>" width="100%"/>
</div>

<?php }else{ ?>
<header class="ui-header ui-header-positive ui-border-b">
	<h1>手写快递单生成器</h1>
</header>
<div class="wrapper"><br>
	<img src="icon.jpg" width="50%" style="margin:30px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	<div class="ui-form-item ui-border-b">
            	<label>发件人</label>
            	<input type="text" name="name"  maxlength="20"                   placeholder="输入发件人名字如：王二狗" style="font-size:18px;"/>
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>收件人</label>
            	<input type="text" name="shoujian"  maxlength="20"            placeholder="输入收件人名字如：李大傻" style="font-size:18px;"/>
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>邮寄物品</label>
            	<input type="text" name="wupin"  maxlength="20"                   placeholder="输入邮寄物品如：充气娃娃" style="font-size:18px;"/>
        	</div>
				
			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-primary">确定</button>
			</div>
    	</form>
	</div>
<?php  } require_once '../foot.php'; ?>
</body>
</html>
