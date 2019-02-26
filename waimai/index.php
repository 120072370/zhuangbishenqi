<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>外卖头像在线生成</title>
<link type="text/css" rel="stylesheet" href="../frozen.css" />
<link rel="stylesheet" type="text/css" href="styles/iview.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
	<h1>外卖头像在线生成</h1>
</header>
<div class="wrapper">
	<img src="icon.jpg" width="50%" style="margin:30px 25% 30px 25%;"/>
	<div class="ui-form">
    	<form action="">
   	
        	<div class="ui-form-item ui-border-b">
            	<label>输入文字</label>
            	<input type="text" name="name" placeholder="注意控制字数">
        	</div>
		<div class="ui-form-item ui-border-b">
            	<label>选择模板</label>
            	<div class="ui-select">
                	<select name="id">
                    	<option value ="1">蓝色头盔</option>
                    	<option value ="2">碧色头盔</option>
                    	<option value ="3">绿色头盔</option>
                    	<option value ="4">橘色头盔</option>
                    	<option value ="5">青色头盔</option>
                    	<option value ="6">黄色头盔</option>
                	</select>
            	</div>
        	</div>
        	
			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-primary">确定</button>

			</div>
            <a href="http://wodetianla.com"><img src="caps/banner.png" style="width:100%" /></a>
            <p class="text-center">长按头像即可保存到相册</p>
            <div class="row">
                <div class="col-xs-3"><img src="caps/0cbed4c12845cf1d46670cb73722d66.jpg" style="width:100%"/></div>
                <div class="col-xs-3"><img src="caps/0db5069e01331f1625fcc260559ed5ab_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/0f15c25b14bedf08e66030e4c569408a_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/1d5caa0909b2856f2e1c16beb6425040_1.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/1f9013933ed604b93a47d3343287aa68_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/2cf55463da8b5cd39a49ad843b701f06_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/3af20aa21ff854da09a9c19531b38b2d_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/3b6bca75f79aac1a806c136dc028a965_1.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/3c05451e6d84c3460d51d38f34489af1_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/4d9453e7027dbb830f9245ffef91165e_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/4e3be868c9279eb287b01d9a563d6941_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/4f7b110b3cf3d10087d701beac03ce6b_1.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/0005.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/6a806be603fc98e8f635e32ae374f05c_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/0007.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/0008.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/9c1544a8730371ee2ebe0774bd7f80bf_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/11fa4ccd68351d16c31568b9dd163d5b_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/0012.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/0013.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/0014.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/0016.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/0017.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/0020.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/0021.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/0022.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/22c8c3133c39325a1f7c67fa3983483e_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/23e5e765b0fe8dff86371a6b95d00ca6_1.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/0042.png" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/0044.png" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/0045.png" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/0049.png" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/49a63b95733818713793c4e377a71acb_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/59cced106f4131c91225f4843aef47e0_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/64e6b6dfee185603d51eb56c446e5d64_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/66d1de714be935e433a40c28d6671b7e_1.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/97b3fadc8c3616bdc8c9fd350a7ca5a9_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/111.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/222.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/292cf05515680f22637fc590ec370c37_1.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/422fc5cdf85dc9e92a75bd66a5d91f79_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/497c40d46218e20e692978cc1af6401f_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/610caca932644ab42be2b52cc08de1c.png" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/721efdebf1a4857faa34107dd841e43.png" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/906b5ea54c606beb1a35aa0636117f91_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/6388f3ee66ea3677ab5e8b560f0f3cf3_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/7005f784c418ff851880b1b992f24284_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/9100b347202db4f909525be211d3f7c1_1.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/33653d641ef369e1f78c516fbedcf747_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/42212cab96f29bbc08905df65ba41331_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/40352910085211cc9c7c399b93d881c8_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/122501674577224285.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/ad16cfbe53dcd4da15cc383dc3c2e93d_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/b303b781557bf60627ad0b5dcc8c6b2a_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/b1570fda248f8392dc218f01ce75e15d_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/c2ac039037d430cbb9f506c052cda1dd_1.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/c4b763e2db80e192ce078d32588af2de_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/c056cd2881ac12b60dc69b960c0cea2.png" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/c87aa413927ca473bf100117061d0e0d_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/c36301e00fd97d28399959491177efb3_1.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/d842773b07622335a4e84887a6eda3e8_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/59cced106f4131c91225f4843aef47e0_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/dc70cac6663c838720f5ae10f934993c_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/e5b9f3314da8accad2f5210f8ebec82f_1.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/e68c6573a528539c82e2431f7d7e50e1_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/e4343f139d9dc077f9b5431fc66c75da_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/ea84c3c7125e6dcc2f7a879026344892_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/ec5afd0e849340d179c48cb09a665458_1.jpg" style="width:100%" /></div>
            </div>
            <div class="row">
                <div class="col-xs-3"><img src="caps/efcd6a3f91792495c044a28b734bd78f_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/f5b7ca3993ca546892acfe93bd69d6c2_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/fa38806224a6298ab28d67a5878a506a_1.jpg" style="width:100%" /></div>
                <div class="col-xs-3"><img src="caps/fd3bb467502c8207bde7222c36dc4f48_1.jpg" style="width:100%" /></div>

            </div>

 

        </div>
        </div>
    <div style="display:none">
    	</form>
	</div>
<?php  } require_once '../foot.php'; ?>
</body>
</html>
