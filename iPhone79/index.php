<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>iPhone7礼物生成器</title>
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
	<img src="toutu.php?name=<?=$_GET['name']?>&nameb=<?=$_GET['nameb']?>&namec=<?=$_GET['namec']?>" width="100%"/>
</div>

<?php }else{ ?>
<header class="ui-header ui-header-positive ui-border-b">
	<h1>iPhone7礼物生成器</h1>
</header>
<div class="wrapper"><br>
	<img src="icon.jpg" width="50%" style="margin:30px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	<div class="ui-form-item ui-border-b">
            	<label for="#">第一行</label>
            	<input type="text" name="name"  maxlength="40"                  placeholder="输入第一行文字" style="font-size:18px;"/>
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label for="#">第二行</label>
            	<input type="text" name="nameb"  maxlength="40"                  placeholder="输入第二行文字" style="font-size:18px;"/>
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label for="#">署名</label>
            	<input type="text" name="namec"  maxlength="20"                  placeholder="输入第三行署名" style="font-size:18px;"/>
        	</div>
				
			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-primary">确定</button>
			</div>
    	</form>
	</div>
<?php  } require_once '../foot.php'; ?>
</body>
</html>
