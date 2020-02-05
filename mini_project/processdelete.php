<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<script type='text/javascript' >
    function bam()
    {
        var p = confirm('Bạn có chắc chắn muốn xoá');
        if(p == true)
        {
            alert("Xóa thành công");
            <?php echo '1';?> 
        }
    }
    
</script>
<?php
        include("DBConnect.php");
		$idDel = $_GET['id'];
		echo "<script type='text/javascript' >bam();</script>";
		$sqlDel = "DELETE FROM products WHERE id='$idDel'";
		$stmt = $conn->prepare($sqlDel);
		$stmt->execute();
?>
<a href="manager.php">Quay trở lại trang chủ</a>
</body>
</html>