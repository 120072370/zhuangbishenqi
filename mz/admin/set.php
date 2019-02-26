<?php
/**
 * Created By MT管理器
 * Date：2018/8/1
 * User：怪咖
 * 改版权死一户口本！
*/
$mod='blank';
include("../includes/common.php");
$title='系统设置';
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
    <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<?php
if(isset($_POST['submit'])) {
	$sitename=daddslashes($_POST['sitename']);
	$title=daddslashes($_POST['title']);
	$keywords=daddslashes($_POST['keywords']);
	$description=daddslashes($_POST['description']);
	$kfqq=daddslashes($_POST['kfqq']);
	$ym=daddslashes($_POST['ym']);
	$dbdm=daddslashes($_POST['dbdm']);
	$banquan=daddslashes($_POST['banquan']);
	$music=daddslashes($_POST['music']);
	$sql="update `zm_config` set `sitename` ='{$sitename}',`title` ='{$title}',`keywords` ='{$keywords}',`description` ='{$description}',`kfqq` ='{$kfqq}',`ym` ='{$ym}',`dbdm` ='{$dbdm}',`banquan` ='{$banquan}',`music` ='{$music}' where `id`='{$siteid}'";
	if(!empty($pwd))$DB->query("update `zm_config` set `pwd` ='{$pwd}' where `id`='{$siteid}'");
	if(!empty($user))$DB->query("update `zm_config` set `user` = '{$user}' where `id`='{$siteid}'");
	if($DB->query($sql))showmsg('修改成功！',1);
	else showmsg('修改失败！<br/>'.$DB->error(),4);
}else{
?>
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">系统配置</h3></div>
<div class="panel-body">
  <form action="./set.php" method="post" class="form-horizontal" role="form">
	<div class="form-group">
	  <label class="col-sm-2 control-label">网站名称</label>
	  <div class="col-sm-10"><input type="text" name="sitename" value="<?php echo $conf['sitename']; ?>" class="form-control" required/></div>
	</div><br/>
		<div class="form-group">
	  <label class="col-sm-2 control-label">标题栏后缀</label>
	  <div class="col-sm-10"><input type="text" name="title" value="<?php echo $conf['title']; ?>" class="form-control" required/></div>
	</div><br/>
		<div class="form-group">
	  <label class="col-sm-2 control-label">网站域名(需要加http://)</label>
	  <div class="col-sm-10"><input type="text" name="ym" value="<?php echo $conf['ym']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">关键字</label>
	  <div class="col-sm-10"><input type="text" name="keywords" value="<?php echo $conf['keywords']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">网站描述</label>
	  <div class="col-sm-10"><input type="text" name="description" value="<?php echo $conf['description']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">客服ＱＱ</label>
	  <div class="col-sm-10"><input type="text" name="kfqq" value="<?php echo $conf['kfqq']; ?>" class="form-control"/></div>
	</div><br/>
			<div class="form-group">
	  <label class="col-sm-2 control-label">底部代码</label>
	  <div class="col-sm-10"><textarea class="form-control" name="dbdm" rows="9"><?php echo $conf['dbdm']; ?></textarea></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">音乐外链</label>
	  <div class="col-sm-10"><input type="text" name="music" value="<?php echo $conf['music']; ?>" class="form-control"/></div>
	</div><br/>
		<div class="form-group">
	  <label class="col-sm-2 control-label">底部版权信息</label>
	  <div class="col-sm-10"><input type="text" name="banquan" value="<?php echo $conf['banquan']; ?>" class="form-control"/></div>
	</div><br/>
	<h4>管理员账号设置</h4>
		<div class="form-group">
	  <label class="col-sm-2 control-label">后台用户名设置</label>
	  <div class="col-sm-10"><input type="text" name="user" value="<?php echo $conf['user']; ?>" class="form-control" placeholder="<?php echo $conf['user']; ?>"/></div>
	  <br/>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">后台密码设置</label>
	  <div class="col-sm-10"><input type="text" name="pwd" value="" class="form-control" placeholder="不修改请留空"/></div>
	  <br/>
	</div><br/>
	<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/><br/>
	 </div>
	</div>
  </form>
</div>
</div>
<script>
var items = $("select[default]");
for (i = 0; i < items.length; i++) {
	$(items[i]).val($(items[i]).attr("default"));
}
</script>
<?php
}?>

    </div>
  </div>
