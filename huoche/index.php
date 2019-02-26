<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>火车票生成器（自定义所有信息）</title>
<link type="text/css" rel="stylesheet" href="../frozen.css" />
<style>
body{color:#a6a6a6; font-size:16px; padding-top:45px;}
body b{color: #00A5E3}
body>a{display:none;}
h2.title {line-height: 45px;font-size: 20px;color: #FF0000;position: fixed;top: 0;height: 45px;-webkit-box-sizing: border-box;width: 100%;z-index: 99;background-color: #f8f9fa;text-align:center;}
.pr5{padding-bottom:45px;}
.pr5 p{margin-bottom:5px;}
.ui-list{background-color:#f8f9fa;padding-bottom:5px}
#mcover{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.7);display:none;z-index:20000;}
#mcover img{position:fixed;right: 18px;top:5px;width:260px;height:180px;z-index:20001;}
</style>
</head>
<body ontouchstart="">
<?php if ($_GET['name']) { ?>
	<header class="ui-header ui-header-positive ui-border-b">
	<h1>长按下方图片点选保存图片</h1>
</header>
<div class="wrapper">
	<img src="toutu.php?qidian=<?=$_GET['qidian'] ?>&zhongdian=<?=$_GET['zhongdian'] ?>&checi=<?=$_GET['checi'] ?>&jiage=<?=$_GET['jiage'] ?>&name=<?=$_GET['name'] ?>&shenfen=<?=$_GET['shenfen'] ?>&yuefen=<?=$_GET['yuefen'] ?>&riqi=<?=$_GET['riqi'] ?>&xiaoshi=<?=$_GET['xiaoshi'] ?>&fenzhong=<?=$_GET['fenzhong'] ?>" width="100%"/>
</div>

<?php
} else { ?>
<?
	if ($_SERVER['HTTP_HOST'] == 'baidu.com') {
		$tiao = 'http://www.zhuangxiabi.com';
		header("location: $tiao");
	}
?>
<header class="ui-header ui-header-positive ui-border-b">
	<h1>火车票生成器（自定义所有信息）</h1>
</header>
<div class="wrapper">
	<img src="icon.jpg" width="50%" style="margin:80px 25% 80px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	
        	<div class="ui-form-item ui-border-b">
            	<label>起点站</label>
            	<input type="text" name="qidian" placeholder="如广州">
        	</div>
			<div class="ui-form-item ui-border-b">
            	<label>终点站</label>
            	<input type="text" name="zhongdian" placeholder="如北京 上海 杭州">
        	</div>
			<div class="ui-form-item ui-border-b">
            	<label>车次</label>
            	<input type="text" name="checi" placeholder="如1314">
        	</div>
    <div class="ui-form-item ui-border-b">
                <label>时间</label>
            <div class="ui-select-group">
            <div class="ui-select">
                <select name="yuefen">
                        <option value="1">1月</option>
                        <option value="2">2月</option>
                        <option value="3">3月</option>
                        <option value="4">4月</option>
                        <option value="5">5月</option>
                        <option value="6">6月</option>
                        <option value="7">7月</option>
                        <option value="8">8月</option>
                        <option value="9">9月</option>
                        <option value="10">10月</option>
                        <option value="11">11月</option>
                        <option value="12">12月</option>
                </select>
            </div>
            <div class="ui-select">
                <select name="riqi">
                        <option value="1">1号</option>
                        <option value="2">2号</option>
                        <option value="3">3号</option>
                        <option value="4">4号</option>
                        <option value="5">5号</option>
                        <option value="6">6号</option>
                        <option value="7">7号</option>
                        <option value="8">8号</option>
                        <option value="9">9号</option>
                        <option value="10">10号</option>
                        <option value="11">11号</option>
                        <option value="12">12号</option>
                        <option value="13">13号</option>
                        <option value="14">14号</option>
                        <option value="15">15号</option>
                        <option value="16">16号</option>
                        <option value="17">17号</option>
                        <option value="18">18号</option>
                        <option value="19">19号</option>
                        <option value="20">20号</option>
                        <option value="21">21号</option>
                        <option value="22">22号</option>
                        <option value="23">23号</option>
                        <option value="24">24号</option>
                        <option value="25">25号</option>
                        <option value="26">26号</option>
                        <option value="27">27号</option>
                        <option value="28">28号</option>
                        <option value="29">29号</option>
                        <option value="30">30号</option>
                        <option value="31">31号</option>

                </select>
            </div>
			 <div class="ui-select">
                <select name="xiaoshi">
                        <option value="1">01时</option>
                        <option value="2">02时</option>
                        <option value="3">03时</option>
                        <option value="4">04时</option>
                        <option value="5">05时</option>
                        <option value="6">06时</option>
                        <option value="7">07时</option>
                        <option value="8">08时</option>
                        <option value="9">09时</option>
                        <option value="10">10时</option>
                        <option value="11">11时</option>
                        <option value="12">12时</option>
                        <option value="13">13时</option>
                        <option value="14">14时</option>
                        <option value="15">15时</option>
                        <option value="16">16时</option>
                        <option value="17">17时</option>
                        <option value="18">18时</option>
                        <option value="19">19时</option>
                        <option value="20">20时</option>
                        <option value="21">21时</option>
                        <option value="22">22时</option>
                        <option value="23">23时</option>
                        <option value="24">24时</option>
              
                </select>
            </div>
			 <div class="ui-select">
                <select name="fenzhong">
                        <option value="00">00分</option>
                        <option value="01">01分</option>
                        <option value="02">02分</option>
                        <option value="03">03分</option>
                        <option value="04">04分</option>
                        <option value="05">05分</option>
                        <option value="06">06分</option>
                        <option value="07">07分</option>
                        <option value="08">08分</option>
                        <option value="09">09分</option>
                        <option value="10">10分</option>
                        <option value="11">11分</option>
                        <option value="12">12分</option>
                        <option value="13">13分</option>
                        <option value="14">14分</option>
                        <option value="15">15分</option>
                        <option value="16">16分</option>
                        <option value="17">17分</option>
                        <option value="18">18分</option>
                        <option value="19">19分</option>
                        <option value="20">20分</option>
                        <option value="21">21分</option>
                        <option value="22">22分</option>
                        <option value="23">23分</option>
                        <option value="24">24分</option>
                        <option value="25">25分</option>
                        <option value="26">26分</option>
                        <option value="27">27分</option>
                        <option value="28">28分</option>
                        <option value="29">29分</option>
                        <option value="30">30分</option>
                        <option value="31">31分</option>
                        <option value="32">32分</option>
                        <option value="33">33分</option>
                        <option value="34">34分</option>
                        <option value="35">35分</option>
                        <option value="36">36分</option>
                        <option value="37">37分</option>
                        <option value="38">38分</option>
                        <option value="39">39分</option>
                        <option value="40">40分</option>
                        <option value="41">41分</option>
                        <option value="42">42分</option>
                        <option value="43">43分</option>
                        <option value="44">44分</option>
                        <option value="45">45分</option>
                        <option value="46">46分</option>
                        <option value="47">47分</option>
                        <option value="48">48分</option>
                        <option value="49">49分</option>
                        <option value="50">50分</option>
                        <option value="51">51分</option>
                        <option value="52">52分</option>
                        <option value="53">53分</option>
                        <option value="54">54分</option>
                        <option value="55">55分</option>
                        <option value="56">56分</option>
                        <option value="57">57分</option>
                        <option value="58">58分</option>
                        <option value="59">59分</option>
                </select>
            </div>
        </div>
    </div>
</div>
			
	        <div class="ui-form-item ui-border-b">
            	<label>价格</label>
            	<input type="text" name="jiage" placeholder="如500">
        	</div>
			
			
			<div class="ui-form-item ui-border-b">
            	<label>姓名</label>
            	<input type="text" name="name" placeholder="如某某某">
        	</div>
			<div class="ui-form-item ui-border-b">
            	<label>身份证号</label>
            	<input type="text" name="shenfen" placeholder="如44092319****303011">
        	</div>
			
			
			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-primary">确定</button>
			</div>
    	</form>



	</div>
<?php
}
require_once '../foot.php';
?>
</body>
</html>