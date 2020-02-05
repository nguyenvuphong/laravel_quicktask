<?php
session_start();  
if(isset($_POST['sbmlogin']))
{
	include("DBConnect.php");
	$username = $_POST['txtuser'];
	$pass = $_POST['txtpass'];
	$sql = "SELECT * FROM account WHERE username = :u AND password=:p";
	$stmt= $conn->prepare($sql);
	$stmt->bindParam(":u",$username);
	$stmt->bindParam(":p",$pass);
	$stmt->execute();
	if($_POST['txtuser'] == "" || $_POST['txtpass'] == "")
	{
		header("location:login.php");
	}
	else
	{
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		if($stmt->rowCount()>0)
		{
			if($pass == $result['password'])
			{
				$_SESSION['userName'] = $username;
				header("location:manager.php");
				if(isset($_POST['cbremember']))
				{
					setcookie("username","$username",time()+60);
					setcookie("password","$pass",time()+60);
				}
			}
			else
			{
				header("location:login.php");
			}
		}
		else
		{
			header("location:login.php");
		}
	}
}
else
{
	header("location:login.php");
}

if(isset($_POST['submitlogout']))
{
	setcookie("username","$username",time()+60);
	setcookie("password","$pass",time()+60);
}
?>