<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<title>Thêm Sản phẩm</title>
</head>
<style type="text/css">
	#btn{
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
	<form action="xulydulieu.php" method ="post">
		<p style="text-align: center; font-size:60px;color:blue;text-decoration:none"> THÊM SẢN PHẨM</p>
		<center>
				<table  style="font-size: 20px; background-color:  #f0f5f5;">
					<tr>
					<td>ID:</td>
					<td>
						<input type="text" name = "txt_ID" value = "" size="50" placeholder="Id tự tăng">
					</td>
				</tr>
				<tr>
					<td>Nổi bật:</td>
					<td>
						<input type="text" id = "txt_Noibat" name="txt_Noibat" value = "" size="50">
					</td>
				</tr>
				<tr>
					<td>Menu: </td>
					<td>
						<input type="text" id = "txt_Menu" name="txt_Menu" value = "" size="50">
					</td>
				</tr>
				<tr>
					<td>Tên SP: </td>
					<td>
						<input type="text" id = "txt_name" name="txt_name" value = "" size="50">
					</td>
				</tr>
				<tr>
					<td>Giá SP: </td>
					<td>
						<input type="text" id = "txt_Gia" name="txt_Gia" value = "" size="50">
					</td>
				</tr>
				<tr>
					<td>Ảnh: </td>
					<td>
						<input type="text" id = "txt_Image" name="txt_Image" value = "" size="50">
					</td>
				</tr>
				<tr>
					<td>Nội dung: </td>
					<td>
						<form>
							<textarea cols="49" rows ="15" id = "txt_Noidung" name="txt_Noidung">
							</textarea>
						</form>
						
					</td>
				</tr>
				<tr>
					<td>Trang chủ: </td>
					<td>
						<input type="text" id = "txt_Trangchu" name="txt_Trangchu" value = "" size="50">
					</td>
				</tr>
				<tr>
					<td>Sắp xếp: </td>
					<td>
						<input type="text" id = "txt_SX" name="txt_SX" value = "" size="50">
					</td>
				</tr>
			</table>
		</center>
		<p align="center">
			<input type="submit" id ="btn" name="btn" value="Cập nhật">
		</p>
	</form>
</body>
</html>