<?php
	$conn=mysqli_connect("localhost","root","","ban_dienthoai");
	if (isset($_POST["btn"]))
	{
		$id = $_POST["txt_ID"];
		$Noibat = $_POST["txt_Noibat"];
		$Menu = $_POST["txt_Menu"];
		$Ten = $_POST["txt_name"];
		$Gia = $_POST["txt_Gia"];
		$Image = $_POST["txt_Image"];
		$Noidung = $_POST["txt_Noidung"];
		$Trangchu = $_POST["txt_Trangchu"];
		$SX = $_POST["txt_SX"];
	}
	$sql = "INSERT INTO san_pham VALUES ('$id','$Noibat','$Menu','$Ten','$Gia','$Image','$Noidung','$Trangchu','$SX')";
	if (mysqli_query($conn,$sql))
	{
		header('location: quan_ly_san_pham.php');
	}
	else
	{
		$result = "Lỗi thêm mới" . mysqli_error($conn);
	}
?>