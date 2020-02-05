<?php  
include("DBConnect.php");
session_start();
$sql = "SELECT * FROM products";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lý hàng hóa</title>
	<?php include("bootstrap.php");?>
  	<style type="text/css">
  		table{
  			padding: 10px;
  		}
  		table th{
  			background-color: blue;
  			color: white;
  			text-align: center;
  		}
  	</style>
</head>
<body>
<div style="font-size: 20px; float: right; margin: 20px">
<form action="loginprocessing.php" method="post">
	<input type="submit" name="submitlogout" value="Đăng xuất">
</form>
</div>

<img src="sun.jpg" height="200px" width="200px">

<table border="1" align="center" class="table table-striped">
	<tr>
		<th width="100px">Mã sản phẩm</th>
		<th width="200px">Tên sản phẩm</th>
		<th width="80px">Số lượng</th>
		<th width="100px">Đơn giá</th>
		<th width="80px">Giảm giá</th>
		<th width="100px">Tùy chọn</th>
	</tr>

	<?php  
		while($p = $stmt->fetch(PDO::FETCH_ASSOC)){
	?>

	<tr>
		<td align="center"><?php echo $p['productID']?></td>
		<td align="center"><?php echo $p['productName']; ?></td>
		<td align="center"><?php echo $p['quantity']; ?></td>
		<td align="right"><?php echo number_format($p['unitPrice'])?></td>
		<td align="center"><?php echo $p['discount']."%";?></td>
		<td>
		<form action="manager.php" method="post">
			<a href="updateproduct.php?id=<?php echo $p['id'];?>">Sửa</a>
			<a href="processdelete.php?id=<?php echo $p['id'];?>">Xóa</a>
		</form>
		</td>
	</tr>
	<?php
	}
	?>
	<tr>
		<td colspan="6" align="center">
			<a href="addnewproduct.php">Thêm</a>
		</td>
	</tr>
</table>
</body>
</html>