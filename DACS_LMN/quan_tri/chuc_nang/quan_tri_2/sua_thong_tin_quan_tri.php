<?php
    if(!isset($bien_bao_mat)){exit();}
?>
<?php
    $tv="select * from thong_tin_quan_tri where id='1' ";
    $tv_1 = $conn->query($tv);
    $tv_2=$tv_1->fetch_assoc();
    $tai_khoan=$tv_2['tai_khoan'];   
?>
<form action="" method="post" >
    <table width="990px" >
        <tr>
            <td colspan="2" ><b style="color:blue;font-size:20px" >Sửa thông tin quản trị</b><br><br> </td>           
        </tr>
        <tr>
            <td width="100px" >Tài khoản : </td>
            <td width="890px" >
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="tai_khoan" value="<?php echo $tai_khoan; ?>" >
            </td>
        </tr>
        <tr>
            <td valign="top" >Mật khẩu : </td>
            <td >
                <input type="password" style="width:400px;margin-top:3px;margin-bottom:3px;" name="mat_khau" value="khong_doi" ><br><br>
                - Nếu chỉ muốn đổi tài khoản thì chỉ cần sửa tài khoản , còn phần mật khẩu thì để nguyên (mật khẩu sẽ không đổi khi gửi biểu mẫu) <br><br>
                - Khi sửa thông tin quản trị mà thông tin mật khẩu nhập vào là 'khong_doi' thì thông tin mật khẩu vẫn giữ nguyên (nghĩa là mật khẩu cũ không đổi)
                <br><br>
            </td>
        </tr>
       
        <tr>
            <td>&nbsp;</td>
            <td>
                <br>
                <input type="submit" name="bieu_mau_sua_thong_tin_quan_tri" value="Sửa" style="width:200px;height:50px;font-size:24px" >
            </td>
        </tr>
    </table>
</form>