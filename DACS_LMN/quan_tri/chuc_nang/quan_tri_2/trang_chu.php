<?php
    if(!isset($bien_bao_mat)){exit();}
?>
<style type="text/css" >
    a.lk_1{font-size:22px;text-decoration:none;color:blue;margin-right:30px}
    a.lk_1:hover {color:red}
</style>
<br>
<center>
<a href="index.php" style="font-size:72px;color:blue;text-decoration:none" >Quản trị cửa hàng</a>
</center>
<br><br>
<table width="990px" bgcolor="#c2c2a3" >
    <tr>
        <td width="800px">
            <a href="index.php" class="lk_1" >Trang chủ</a>
            <a href="?thamso=hoa_don" class="lk_1" >Hóa đơn</a>
            <a href="./chuc_nang/san_pham/quan_ly_san_pham.php" class="lk_1" >Quản lý Sản phẩm</a>
        </td>
        <td align="right" >
            <a href="?thamso=thoat" class="lk_1" >Đăng xuất</a>
        </td>
    </tr>
</table>
<br><br>
<?php
    include("chuc_nang/quan_tri_2/dieu_huong.php");
?>
<br><br>
<table width="990px" style=" background:     #b3cccc">
    <tr>
        <td width="495px" align="right" >
       Shop    :
        </td>
        <td width="495px" >
        NgocSRP Shop
        </td>
    </tr>
    <tr>
        <td align="right" >
        Điện thoại :
        </td>
        <td>
        0327908500
        </td>
    </tr>
    <tr>
        <td align="right">
        Địa chỉ   :
        </td>
        <td>
        Quỳ Hợp - Nghệ An
        </td>
    </tr>
    <tr>
        <td align="right">
        Email   :
        </td>
        <td>
        Leminhngoc17111999@gmail.com
        </td>
    </tr>
</table>