<?php
	$conn=mysqli_connect("localhost","root","","ban_dienthoai");
	if(isset($_POST["btn"]))
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
	$sql = "UPDATE san_pham SET id = '$id', noi_bat = '$Noibat', thuoc_menu = '$Menu', ten = '$Ten', gia ='$Gia', hinh_anh ='$Image', noi_dung = '$Noidung', trang_chu ='$Trangchu', sap_xep_trang_chu = '$SX' WHERE id = '$id' ";
	if (mysqli_query($conn,$sql))
	{
		header('location: quan_ly_san_pham.php');
	}
	else
	{
		$result = "Cập nhật chưa thành công" . mysqli_error($conn);
	}
?>