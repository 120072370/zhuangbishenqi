<?php
/**
 * Created By mt管理器
 * Date：2018/8/1
 * User：怪咖
 * 改版权死一户口本！
 * 原作者：飞宇
*/
include("./includes/common.php");
?>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<title><?php echo $conf['sitename']; ?>-<?php echo $conf['title']?></title>
<meta name="Keywords" content="<?php echo $conf['keywords']?>" />
<meta name="Description" content="<?php echo $conf['description']?>" />
<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://css.letvcdn.com/lc04_yinyue/201612/19/20/00/bootstrap.min.css">
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head><body>
<div class="container" style="padding-top:20px;">
<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<div class="panel panel-primary">
<div class="panel-heading" style="background: linear-gradient(to right,#8ae68a,#5ccdde,#b221ff);"><center><font color="#000000"><b><?php echo $conf['sitename']; ?>-<?php echo $conf['title']?></b></font></center></div>
<div class="panel-body">
<center><div class="alert alert-success"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&site=qq&menu=yes"><img class="img-circle m-b-xs" style="border: 2px solid #1281FF; margin-left:3px; margin-right:3px;" src="https://q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq']?>&spec=100"; width="60px" height="60px" alt="<?php echo $conf['sitename']; ?>"><br></a></div></center>
<form><div class="input-group">
<span class="input-group-addon">账号:</span><input size="30" name="hm" class="form-control" required="required" placeholder="请输入你需要刷赞或者拉圈圈的QQ！每天每Q只能提交一次！"/>			</div><br/>
<input class="btn btn-primary btn-block bk-margin-top-10" name="ok" type="submit" value="点击开始" onClick="AlertButton()"> 
<script>function AlertButton(){window.alert("在线刷QQ赞小助手已启动！正在为您刷赞中....");}</script></form>
</form>
<?php
error_reporting(0);
$v=$_GET['c'];
$a=$v+1;
$e=$a;
$d=$_GET['hm'];
?>
<div class="tip">
<?php
$i=13;//
if($i==$d){
   echo "<br><br><H4>0</H4>";
}
if($i!=$d and $d>1){
    echo"   <br /><div class='progress progress-striped active'><div class='progress-bar progress-bar-success' style='width: 100%'>刷QQ赞进行中</div></div><div id='ajax_thread_msg'><div class='alert alert-success' style='margin-bottom: 0px;'>刷赞助手已启动,  对<strong>$d</strong>,已经开始刷赞中,请静静的等待1分钟查看效果！</div></div>";
echo $conf['xy'];
echo $conf['xy1'];
echo $conf['xy2'];
echo $conf['xy3'];
echo $conf['xy4'];
echo $conf['xy5'];
echo $conf['xy6'];
echo $conf['xy7'];
echo $conf['xy8'];
echo $conf['xy9'];
  echo"<meta http-equiv=refresh content='9999999999; url=index.php?hm=$d&amp;c=$a'>";
}
?>
<div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-info-sign"></span>
<strong>提示</strong>:输入要刷名片赞或者圈圈赞的QQ即可，此为双接口并发系统！</div>
<hr><center><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&site=qq&menu=yes" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-user"></span> 客服</a>
<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&site=qq&menu=yes" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span> 反馈</a></center>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<div class="panel panel-primary">
<div class="panel-heading" style="background: linear-gradient(to right,#b221ff,#14b7ff,#8ae68a);"><center><font color="#000000"><b>站点工具</b></font></center></div>
<?php echo $conf['dbdm']; ?>
<p style="text-align:center">
<br>© Powered by <a href="<?php echo $conf['ym']; ?>"><?php echo $conf['banquan']; ?></a> 2018 版权所有</p>
<center><iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width="200" height="52" src="http://music.163.com/outchain/player?type=2&id=<?php echo $conf['music']; ?>&auto=1&height=32"></center></div>
</div>
</body>
</html>