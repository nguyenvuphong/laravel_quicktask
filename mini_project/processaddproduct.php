<?php
session_start();
include("DBConnect.php");
if(isset($_POST['submitthem']))
{
	$productID = $_POST['productID'];
	$productName = $_POST['productName'];
	$quantity = $_POST['quantity'];
	$unitPrice = $_POST['unitPrice'];
	$discount = $_POST['discount'];
	$userName = $_SESSION['userName'];

	$sqlTest = "SELECT productID,productName FROM products WHERE productID = '$productID' OR productName = '$productName'";
	$nvp1 = $conn->prepare($sqlTest);
	$nvp1->execute();
	//$result1 = $nvp1->fetch(PDO::FETCH_ASSOC);
	if($productID ==""||$productName==""||$quantity==""||$unitPrice==""||$discount=="")
	{
		echo "<script>alert('Bạn phải nhập đủ thông tin');</script>";
	}
	else
	{
		if($nvp1->rowCount()>0)
		{
			echo "<script>alert('Mã hoặc tên sản phẩm đã tồn tại');</script>";
		}
		else
		{
			if(is_numeric($quantity) && is_numeric($discount) && is_numeric($unitPrice))
			{
				$sqlInsert = "INSERT INTO products(productID,productName,quantity,unitPrice,discount,userName) VALUES ('$productID','$productName','$quantity','$unitPrice','$discount','$userName')";

				$stmt = $conn->prepare($sqlInsert);
				$stmt->execute();

				header("location:manager.php");
			}
			else
			{
				echo "<script>alert('Phải nhập số');</script>";
			}
		}
	}
}
?>
<a href="addnewproduct.php">Quay trở lại trang thêm sản phẩm</a><br>
<a href="manager.php">Quay lại trang chủ</a>