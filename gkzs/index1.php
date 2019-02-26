<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>高考准考证生成器</title>
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
	<img src="toutu.php?name=<?=$_GET['name']?>&nameb=<?=$_GET['nameb']?>&namec=<?=$_GET['namec']?>&named=<?=$_GET['named']?>&namee=<?=$_GET['namee']?>"
width="100%"/>
</div>

<?php }else{ ?>
<header class="ui-header ui-header-positive ui-border-b">
	<h1>高考准考证生成器</h1>
</header>
<div class="wrapper">
	<img src="icon.jpg" width="50%" style="margin:30px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	<div class="ui-form-item ui-border-b">
            	<label>姓名</label>
            	<input type="text" name="name"                    placeholder="输入名字如王二狗" >
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>性别</label>
            	<input type="text" name="nameb"                  placeholder="输入性别如：男" >
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>考点</label>
            	<input type="text" name="namec"                  placeholder="输入考点如：成都七中" >
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>座位号</label>
            	<input type="text" name="named"                placeholder="输入座位号如：23号" >
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>身份证</label>
            	<input type="text" name="namee"                placeholder="输入身份证如：5107231996xxxxxxx" >
        	</div>

				
			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-primary">确定</button>
			</div>
    	</form>
	</div>
<?php  } require_once '../foot.php'; ?>
</body>
</html>
