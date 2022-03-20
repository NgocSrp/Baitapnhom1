<?php
	$conn=mysqli_connect("localhost","root","","ban_dienthoai");
	$id = $_GET["id"];
	$sql = "DELETE FROM san_pham WHERE id = '$id'";
	if (mysqli_query($conn,$sql))
	{
		header('location: quan_ly_san_pham.php');
	}
	else
	{
		$result = "Xóa không thành công" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>