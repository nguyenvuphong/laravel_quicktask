<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "mini_project";
try{
	$conn = new PDO("mysql:host=$server;dbname=$db_name",$username, $password);
	$conn->exec("SET NAMES 'utf8'");
}catch(PDOException $ex){
	echo "Lỗi: ". $ex->getMessage();
}
?>