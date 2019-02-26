<?php
/**
 * Created By MT管理器
 * Date：2018/8/1
 * User：怪咖
 * 改版权死一户口本！
*/
$mod='blank';
include("../includes/common.php");
$title='系统后台管理';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
  <nav class="navbar navbar-fixed-top navbar-default">
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
<?php
$count=$DB->count("SELECT count(*) from yaofan_log WHERE siteid='$siteid'");
$mysqlversion=$DB->count("select VERSION()");
$fz=$DB->count("SELECT domain(*) from yaofan_domain WHERE domain='$domain'");
 
		$sql=" `km`='{$_GET['kw']}'";
	$numrows=$DB->count("SELECT count(*) from yaofan_domain WHERE 1");
?>                 
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">后台管理首页</h3></div>
           <li class="list-group-item"><span class="glyphicon glyphicon-time"></span> <b>现在时间：</b> <?=$date?></li>
             </ul>
          <li class="list-group-item"><span class="glyphicon glyphicon-check"></span> <b>程序版本：</b> V1.4</li>
             </ul>                              
   </div>
    <center><a href="./set.php" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-cog"></i>网站设置</a>&nbsp;&nbsp;
    <a href="./login.php?logout" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-log-out"></i>退出登录</a>&nbsp;&nbsp;
    <a href="./gengxin.php" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-home"></i>检测更新</a></center>
    <br>
    <center><a href="./install.php" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-edit"></i>接口更新</a></center>
<br>
<div class="panel panel-info">
	<div class="panel-heading text-center">
		<h3 class="panel-title">安全中心</h3>
	</div>
	<ul class="list-group">
<?php
foreach($sec_msg as $row){
	echo $row;
}
if(count($sec_msg)==0)echo '<li class="list-group-item"><span class="btn-sm btn-success">正常</span>&nbsp;暂未发现网站安全问题</li>';
?>
	</ul>
</div>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">服务器信息</h3>
	</div>
	<ul class="list-group">
		<li class="list-group-item">
			<b>PHP 版本：</b><?php echo phpversion() ?>
			<?php if(ini_get('safe_mode')) { echo '线程安全'; } else { echo '非线程安全'; } ?>
		</li>
		<li class="list-group-item">
			<b>MySQL 版本：</b><?php echo $mysqlversion ?>
		</li>
		<li class="list-group-item">
			<b>服务器软件：</b><?php echo $_SERVER['SERVER_SOFTWARE'] ?>
		</li>
		
		<li class="list-group-item">
			<b>程序最大运行时间：</b><?php echo ini_get('max_execution_time') ?>s
		</li>
		<li class="list-group-item">
			<b>POST许可：</b><?php echo ini_get('post_max_size'); ?>
		</li>
		<li class="list-group-item">
			<b>文件上传许可：</b><?php echo ini_get('upload_max_filesize'); ?>
		</li>
	</ul>
</div>
    </div>
  </div>
