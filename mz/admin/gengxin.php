<?php
/**
 * Created By MT管理器
 * Date：2018/8/1
 * User：怪咖
 * 改版权死一户口本！
*/
$mod='blank';
include("../includes/common.php");
$title='检测更新';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">后台管理</a>
      </div><!-- /.navbar-header -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="./"><span class="glyphicon glyphicon-user"></span> 平台首页</a>
          </li>
		  <li>
           
          </li>
		  <li><a href="./set.php"><span class="glyphicon glyphicon-cog"></span> 系统设置</a></li>
		  <li><a href="./gengxin.php"><span class="glyphicon glyphicon-home"></span> 系统更新</a></li>
      <li><a href="./install.php"><span class="glyphicon glyphicon-home"></span> 接口更新</a></li>
     <li><a href="./login.php?logout"><span class="glyphicon glyphicon-log-out"></span> 退出登陆</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
<div class="container" style="padding-top:100px;"><div class="col-xs-12 col-sm-10 col-lg-10 center-block" style="float: none;">
<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title"> <?=$title?></h3></div>
<div class="panel-body">
<?php if(!isset($_GET['install'])){ ?>
<p><iframe src="http://mpz.410wl.cn/readme.txt" style="width:100%;height:465px;"></iframe></p>
<p align="center"><a class="btn btn-primary form-control" href="<?=$_SERVER['PHP_SELF']?>?install"/>点击这里开始自动更新</a></p>
<?php 
}else{
if(ini_get('allow_url_fopen') && class_exists('ZipArchive')){
if($file = file_get_contents('http://mpz.410wl.cn/update.zip')){
echo '<p>下载程序成功</p>';
}else{
echo '<p>下载程序失败</p>';
exit;
}
if(file_put_contents('update.zip', $file)){
echo '<p>保存程序成功</p>';
}else{
echo '<p>保存程序失败！<br/>可能脚本没有写入权限。</p>';
exit;
}
$zip = new ZipArchive;
if($zip->open('./update.zip') && $zip->extractTo('../')){
echo '<p>程序解压成功</p>';
}else{
echo '<p>程序解压失败</p><a href="./index.php" class="btn btn-info btn-block">返回首页</a>';
exit;
}
	
$file = "./update.zip";
if (!unlink($file)){
echo '<p>源码删除成功</p>';
}else{
echo '<p>源码删除成功</p>';
}
echo '<p><pre>'.file_get_contents('http://mpz.410wlcn/readme.txt').'</pre></p>';
}else{
?>
<p>
由于功能问题，该脚本无法在您的空间运行。<br/>
错误：无法打开远程文件或<b>ZipArchive</b>类不存在！
</p>
<?php } ?>
<a href="./index.php" class="btn btn-primary form-control" href=""/>回到首页</a>
<?php } ?>
</body>
</html>