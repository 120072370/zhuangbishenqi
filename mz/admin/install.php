<?php
/**
 * Created By MT管理器
 * Date：2018/8/1
 * User：怪咖
 * 改版权死一户口本！
*/
$mod='blank';
include("../includes/common.php");
$title='接口更新';
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
	$xy=daddslashes($_POST['xy']);
	$xy1=daddslashes($_POST['xy1']);
	$xy2=daddslashes($_POST['xy2']);
	$xy3=daddslashes($_POST['xy3']);
	$xy4=daddslashes($_POST['xy4']);
	$xy5=daddslashes($_POST['xy5']);
	$xy6=daddslashes($_POST['xy6']);
	$xy7=daddslashes($_POST['xy7']);
	$xy8=daddslashes($_POST['xy8']);
	$xy9=daddslashes($_POST['xy9']);
	$sql="update `zm_config` set `xy` ='{$xy}',`xy1` ='{$xy1}',`xy2` ='{$xy2}',`xy5` ='{$xy5}',`xy4` ='{$xy4}',`xy3` ='{$xy3}',`xy6` ='{$xy6}',`xy7` ='{$xy7}',`xy9` ='{$xy9}',`xy8` ='{$xy8}' where `id`='{$siteid}'";
	if(!empty($pwd))$DB->query("update `zm_config` set `pwd` ='{$pwd}' where `id`='{$siteid}'");
	if(!empty($user))$DB->query("update `zm_config` set `user` = '{$user}' where `id`='{$siteid}'");
	if($DB->query($sql))showmsg('修改成功！',1);
	else showmsg('修改失败！<br/>'.$DB->error(),4);
}else{
?>
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">接口配置</h3></div>
<div class="panel-body">
  <form action="./install.php" method="post" class="form-horizontal" role="form">
	<div class="form-group">
	  <label class="col-sm-2 control-label">接口一</label>
	  <div class="col-sm-10"><textarea class="form-control" name="xy" rows="9"><?php echo $conf['xy']; ?></textarea></div>
	</div><br/>
		<div class="form-group">
	  <label class="col-sm-2 control-label">接口二</label>
  <div class="col-sm-10"><textarea class="form-control" name="xy1" rows="9"><?php echo $conf['xy1']; ?></textarea></div>
</div><br/>
		<div class="form-group">
	  <label class="col-sm-2 control-label">接口三</label>
  <div class="col-sm-10"><textarea class="form-control" name="xy2" rows="9"><?php echo $conf['xy2']; ?></textarea></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">接口四</label>
	  <div class="col-sm-10"><textarea class="form-control" name="xy3" rows="9"><?php echo $conf['xy3']; ?></textarea></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">接口五</label>
	  <div class="col-sm-10"><textarea class="form-control" name="xy4" rows="9"><?php echo $conf['xy4']; ?></textarea></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">接口六</label>
  <div class="col-sm-10"><textarea class="form-control" name="xy5" rows="9"><?php echo $conf['xy5']; ?></textarea></div>
	</div><br/>
		<div class="form-group">
	  <label class="col-sm-2 control-label">接口七</label>
  <div class="col-sm-10"><textarea class="form-control" name="xy6" rows="9"><?php echo $conf['xy6']; ?></textarea></div>
	</div><br/>
			<div class="form-group">
	  <label class="col-sm-2 control-label">接口八</label>
	  <div class="col-sm-10"><textarea class="form-control" name="xy7" rows="9"><?php echo $conf['xy7']; ?></textarea></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">接口九</label>
  <div class="col-sm-10"><textarea class="form-control" name="xy8" rows="9"><?php echo $conf['xy8']; ?></textarea></div>
	</div><br/>
		<div class="form-group">
	  <label class="col-sm-2 control-label">接口十</label>
  <div class="col-sm-10"><textarea class="form-control" name="xy9" rows="9"><?php echo $conf['xy9']; ?></textarea></div>
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
