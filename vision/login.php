
<?php
$no_visible_elements=true;
include('header.php'); ?>

<?php 

if(isset($_POST['username'])&& isset($_POST['password']))
{
$username = $_POST['username'];
$password = $_POST['password'];
 $sql = "SELECT * FROM login  where username='$username' and password='$password'";
$loginresp = $es->doStandaredQuery($sql);

if(@$loginresp[0]['username'])
{
$loginboolean = "true";
session_start();
$_SESSION["login"] = "true";
header('Location:index.php');
}else
{
$loginboolean = "false";
}


}

?>

			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to Vision Login</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					
							<?php if(isset($loginboolean)){?>
					<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Login Failed!!!!!!!!
						</div>
					<?php }?>
					<form class="form-horizontal" action="login.php" method="post">
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password"  />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Login</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
<?php include('footer.php'); ?>
