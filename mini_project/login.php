<?php
session_start();
include("bootstrap.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
</head>
<body>
<div style="float: left; margin-left: 200px; margin-top: 100px;">
	<img src="sun.jpg" height="200px" width="200px">
</div>
<form action="loginprocessing.php" method="post" style="float: left; margin-left: 100px; margin-top: 200px;s">
	<table align="center" style="line-height: 30px;">
		<tr style="background-color: blue; color: white; ">
			<td colspan="2" style="text-align: center; line-height: 10px;"><h3>Đăng nhập</h3></td>
		</tr>
		<tr>
			<td><b>Tên đăng nhập</b></td>
			<td>
				<!--<input type="text" name="txtuser" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}?>">-->
				<input type="text" name="txtuser" value="<?php if(isset($_SESSION['userName'])){echo $_SESSION['userName'];}?>">
			</td>
		</tr>
		<tr>
			<td><b>Mật khẩu</b></td>
			<td><input type="password" name="txtpass" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>"></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;">
				<input type="checkbox" name="cbremember"><i>Nhớ mật khẩu</i>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;">
				<input type="submit" name="sbmlogin" value="Đăng nhập" class="btn btn-outline-primary">

			</td>
			<td style="text-align: center;">
				<input type="reset" name="reset" value="Hủy bỏ" class="btn btn-outline-secondary">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
<?php
if(isset($_COOKIE['password']) && isset($_COOKIE['username']))
{
	header("location:manager.php");
}
?>