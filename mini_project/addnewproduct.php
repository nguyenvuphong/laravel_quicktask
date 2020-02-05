<!DOCTYPE html>
<html>
<head>
	<title>Thêm sản phẩm</title>
	<?php include("bootstrap.php");?>
</head>
<body>
<a href="manager.php"><img src="sun.jpg" height="200px" width="200px"></a>

<form action="processaddproduct.php" method="post">
<table width="30%" border="1" align="center">
	<tr>
		<td>Mã sản phẩm</td>
		<td><input type="text" name="productID"></td>
	</tr>
	<tr>
		<td>Tên sản phẩm</td>
		<td><input type="text" name="productName"></td>
	</tr>
	<tr>
		<td>Số lượng</td>
		<td><input type="text" name="quantity"></td>
	</tr>
	<tr>
		<td>Đơn giá</td>
		<td><input type="text" name="unitPrice"></td>
	</tr>
	<tr>
		<td>Giảm giá</td>
		<td><input type="text" name="discount"></td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center"><input type="submit" name="submitthem" value="Thêm sản phẩm"></td>
	</tr>
</table>
</form>
</body>
</html>