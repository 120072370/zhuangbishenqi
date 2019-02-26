<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>教师资格证生成</title>
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
	<img src="toutu.php?name=<?=$_GET['name']?>&xb=<?=$_GET['xb']?>&mz=<?=$_GET['mz']?>&id=<?=$_GET['id']?>" width="100%"/>
</div>

<?php }else{ ?>
<header class="ui-header ui-header-positive ui-border-b">
<h1>教师资格证生成器</h1></header>
<div class="wrapper">
	<img src="icon.jpg" width="50%" style="margin:30px 25% 30px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	<div class="ui-form-item ui-border-b">
            	<label for="#">姓名</label>
            	<input type="text" name="name" placeholder="输入你的姓名"/>
        	</div>
<div class="ui-form-item ui-border-b">
            	<label>性别</label>
            	<div class="ui-select">
                	<select name="xb">
			<option value ="男">男</option>
                    	<option value ="女">女</option>
                	</select>
            	</div>
            	</div>
<div class="ui-form-item ui-border-b">
            	<label>民族</label>
            	<div class="ui-select">
                	<select name="mz">
                    	<option value ="说了也白说族">说了也白说族</option>
			<option value ="看了也不懂族">看了也不懂族</option>
                    	<option value ="牛商部落族">牛商部落族</option>
		        <option value ="帅到掉渣族">帅到掉渣族</option>
			<option value ="美到窒息族">美到窒息族</option>
			<option value ="你说了算族">你说了算族</option>
			<option value ="负二代族">负二代族</option>
			<option value ="妻管严族">妻管严族</option>
			<option value ="一妻多夫制族">一妻多夫制族</option>
			<option value ="爱卿平身族">爱卿平身族</option>
                	</select>
            	</div>
        	</div>
<div class="ui-form-item ui-border-b">
            	<label>任教学科</label>
            	<div class="ui-select">
                	<select name="id">
                    	<option value ="网站扒皮">网站扒皮</option>
			<option value ="王者荣耀">王者荣耀</option>
                    	<option value ="星际黑客">星际黑客</option>
		        <option value ="程序员鼓励">程序员鼓励</option>
			<option value ="WIFI信号品鉴">WIFI信号品鉴</option>
			<option value ="键盘痴汉">键盘痴汉</option>
			<option value ="十大牛商CEO">十大牛商CEO</option>
                	</select>
            	</div>
        	</div>

			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-danger">生成</button>
			</div>
    	</form>
	</div>
<?php  } require_once '../foot.php'; ?>
</body>
</html>