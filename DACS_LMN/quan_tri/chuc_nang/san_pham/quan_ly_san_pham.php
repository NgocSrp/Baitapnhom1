<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<title>Trang chủ</title>
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

	<p align="center" style="font-size:70px;color:blue;text-decoration:none">Quản lý sản phẩm</p>
	<p align="center" style="text-align: right;" ><button type ="button" id="btntm" onclick="myFunction2()">Trở về</button>
	</p>

	<TABLE border ="1" align = "center" cellspacing ="0" cellpadding ="5"  >
		<tr bgcolor="#c2c2a3">
			<th>ID</th>
			<th>Nổi bật</th>
			<th>Thuộc menu </th>
			<th>Tên sản phẩm</th>
			<th>Giá sản phẩm</th>
			<th>Hình ảnh </th>
			<th style="width: 400px">Nội dung</th>
			<th>Trang chủ</th>
			<th>Sắp xếp</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
	<?php
		$conn=mysqli_connect("localhost","root","","ban_dienthoai");
		$sql = "SELECT * FROM san_pham";
		$result = mysqli_query($conn, $sql);
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
			?>
			<tr bgcolor="#e0ebeb">
				<td><?php echo $id ?></td>
				<td><?php echo $Noibat ?></td>
				<td><?php echo $Menu ?></td>
				<td><?php echo $Ten ?></td>
				<td><?php echo $Gia ?></td>
				<td><?php echo $Image ?></td>
				<td><?php echo $Noidung ?></td>
				<td><?php echo $Trangchu ?></td>
				<td><?php echo $SX ?></td>
				<td>
					<a href="suadulieu.php?id=<?php echo $id; ?>">Sửa</a>
				</td>
				<td>
					<a href="xulyxoa.php?id=<?php echo $id; ?>" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
				</td>
			</tr>
			<?php
			}
			?>
			<?php
				mysqli_close($conn); ?>
			</TABLE>
				<p align="center"><button type ="button" id="btntm" onclick="myFunction()">Thêm mới</button>
				</p>
		
</body>
</html>
<script>
	function myFunction() 
	{
		location.replace("themdulieu.php");
	}
	function myFunction2() 
	{

		history.back();
	}
</script>