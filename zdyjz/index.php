<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>自定义奖状生成器</title>
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
	<img src="toutu.php?name=<?=$_GET['name']?>&jiangxiang=<?=$_GET['jiangxiang']?>&danwei=<?=$_GET['danwei']?>"
width="100%"/>
</div>

<?php }else{ ?>
<header class="ui-header ui-header-positive ui-border-b">
	<h1>自定义奖状生成器</h1>
</header>
<div class="wrapper">
	<img src="icon.jpg" width="50%" style="margin:30px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	<div class="ui-form-item ui-border-b">
            	<label>输入名字</label>
            	<input type="text" name="name"                    placeholder="输入名字如王二狗" >
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>奖项名字</label>
            	<input type="text" name="jiangxiang"                  placeholder="输入奖项如：装逼第一人，建议5个字" >
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>颁奖单位</label>
            	<input type="text" name="danwei"                  placeholder="输入颁奖单位如：中华装逼协会" >
        	</div>
        	

				
			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-primary">确定</button>
			</div>
    	</form>
	</div>
<?php  } require_once '../foot.php'; ?>
</body>
</html>
