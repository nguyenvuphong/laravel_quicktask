<?php
include("DBConnect.php");
if(isset($_GET['id']))
{
	$idpro = $_GET['id'];
	$sql = "SELECT * FROM products WHERE id = '$idpro'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sửa sản phẩm</title>
	<?php include("bootstrap.php");?>
	<style type="text/css">
		input{
			width: 100%;
		}
		td{
			text-align: center;
			font-weight: bold;
			background-color: #5b1a00;
			color: white;
		}
	</style>
</head>
<body>

</body>
</html>
<img src="sun.jpg" height="200px" width="200px">
<?php
while ($p= $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<form action="processupdate.php?id=<?php echo $idpro;?>" method="post">
	<table width="40%" border="1" align="center">
		<tr>
			<td>Mã sản phẩm</td>
			<td><input type="text" name="txtproductID" value="<?php echo $p['productID'];?>"></td>
		</tr>
		<tr>
			<td>Tên sản phẩm</td>
			<td><input type="text" name="txtproductName" value="<?php echo $p['productName'];?>"></td>
		</tr>
		<tr>
			<td>Số lượng</td>
			<td><input type="text" name="txtquantity" value="<?php echo $p['quantity'];?>"></td>
		</tr>
		<tr>
			<td>Đơn giá</td>
			<td><input type="text" name="txtunitPrice" value="<?php echo $p['unitPrice'];?>"></td>
		</tr>
		<tr>
			<td>Giảm giá</td>
			<td><input type="text" name="txtdiscount" value="<?php echo $p['discount'];?>"></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center"><input type="submit" name="submitsua" value="Sửa sản phẩm" style="width: 30%; background-color: #f4956f"></td>
		</tr>
		<?php
		}
		?>
	</table>
</form>