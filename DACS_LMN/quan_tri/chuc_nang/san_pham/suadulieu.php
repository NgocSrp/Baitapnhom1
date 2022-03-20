<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<title>SỬA SẢN PHẨM</title>
</head>
<style type="text/css">
	#btntm {
	background-color: #a3c2c2;
	border-radius:  5px;
	color: black;
	padding: 4px 15px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
}
</style>
<body>
	<?php
		$conn=mysqli_connect("localhost","root","","ban_dienthoai");
		$id = $_GET["id"];
		$sql ="SELECT * FROM san_pham WHERE id ='$id'";
		$result = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_assoc($result)) 
		{
			$id = $row["id"];
			$Noibat = $row["noi_bat"];
			$Menu = $row["thuoc_menu"];
			$Ten = $row["ten"];
			$Gia = $row["gia"];
			$Image = $row["hinh_anh"];
			$Noidung = $row["noi_dung"];
			$Trangchu = $row["trang_chu"];
			$SX = $row["sap_xep_trang_chu"];
		}
	?>
		<form action="xulysua.php" method ="post">
			<p style="text-align: center; font-size:60px;color:blue;text-decoration:none"> SỬA SẢN PHẨM</p>
			<center>
				<table style="font-size: 20px; background-color:  #f0f5f5;" >
					<tr>
					<td>ID:</td>
					<td>
						<input type="text" name = "txt_ID" value = "<?php echo $id ?>" size="50">
					</td>
				</tr>
				<tr>
					<td>Nổi bật:</td>
					<td>
						<input type="text" id = "txt_Noibat" name="txt_Noibat" value = "<?php echo $Noibat ?>" size="50">
					</td>
				</tr>
				<tr>
					<td>Menu: </td>
					<td>
						<input type="text" id = "txt_Menu" name="txt_Menu" value = "<?php echo $Menu ?>" size="50">
					</td>
				</tr>
				<tr>
					<td>Tên SP: </td>
					<td>
						<input type="text" id = "txt_name" name="txt_name" value = "<?php echo $Ten ?>" size="50">
					</td>
				</tr>
				<tr>
					<td>Giá SP: </td>
					<td>
						<input type="text" id = "txt_Gia" name="txt_Gia" value = "<?php echo $Gia ?>" size="50">
					</td>
				</tr>
				<tr>
					<td>Ảnh: </td>
					<td>
						<input type="text" id = "txt_Image" name="txt_Image" value = "<?php echo $Image ?>" size="50">
					</td>
				</tr>
				<tr>
					<td>Nội dung: </td>
					<td>
						<form>
							<textarea cols="48" rows ="15" id = "txt_Noidung" name="txt_Noidung">
								<?php echo $Noidung ?>
							</textarea>
						</form>
						
					</td>
				</tr>
				<tr>
					<td>Trang chủ: </td>
					<td>
						<input type="text" id = "txt_Trangchu" name="txt_Trangchu" value = "<?php echo $Trangchu ?>" size="50">
					</td>
				</tr>
				<tr>
					<td>Sắp xếp: </td>
					<td>
						<input type="text" id = "txt_SX" name="txt_SX" value = "<?php echo $SX ?>" size="50">
					</td>
				</tr>
			</table>
		</center>
		<p align="center">
			<input type="submit" name="btn" value="Cập nhật" id="btntm">
		</p>
	</form>

</body>
</html>