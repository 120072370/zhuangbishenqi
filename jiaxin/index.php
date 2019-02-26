<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>涨工资通知单生成器</title>
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
	<img src="toutu.php?name=<?=$_GET['name']?>&bumen=<?=$_GET['bumen']?>&qian=<?=$_GET['qian']?>&hou=<?=$_GET['hou']?>"
width="100%"/>
</div>

<?php }else{ ?>
<header class="ui-header ui-header-positive ui-border-b">
	<h1>涨工资通知单生成器</h1>
</header>
<div class="wrapper">
	<img src="icon.jpg" width="50%" style="margin:30px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	<div class="ui-form-item ui-border-b">
            	<label>名字</label>
            	<input type="text" name="name"                    placeholder="输入名字如王二狗" >
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>部门</label>
            	<input type="text" name="bumen"                  placeholder="输入部门如：销售部" >
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>涨薪前工资</label>
            	<input type="text" name="qian"                  placeholder="输入涨薪前工资如：2500" >
        	</div>
        	<div class="ui-form-item ui-border-b">
            	<label>涨薪后工资</label>
            	<input type="text" name="hou"                placeholder="输入涨薪后工资如：5000" >
        	</div>

				
			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-primary">确定</button>
			</div>
    	</form>
	</div>
<?php  } require_once '../foot.php'; ?>
</body>
</html>
