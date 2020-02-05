<?php  
include("DBConnect.php");
if(isset($_POST['submitsua']))
{
	$idpro = $_GET['id'];
	$productID = $_POST['txtproductID'];
	$productName = $_POST['txtproductName'];
	$quantity = $_POST['txtquantity'];
	$unitPrice = $_POST['txtunitPrice'];
	$discount = $_POST['txtdiscount'];

	$sql = "UPDATE products SET productID = '$productID', productName = '$productName', quantity = '$quantity',unitPrice = '$unitPrice', discount = '$discount' WHERE id = $idpro";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	header("location:manager.php");
}
else
{
	header("location:manager.php");
}
?>