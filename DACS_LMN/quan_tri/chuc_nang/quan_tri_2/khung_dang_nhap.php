<?php
    if(!isset($bien_bao_mat)){exit();}
?>
<br><br>
<style type="text/css">
    #dangnhap{
        background-color: #00ace6;
        width: 100px;
        height: 30px;
        border-radius: 5px;
    }
    #password{

    }
    .form{
        width: 500px;
        height: 600px;
    }   
    #taikhoan{
        width: 250px;
        height: 40px;
        margin: auto;
    }
    #password{
        width: 250px;
        height: 40px;
        margin: auto;
    }
    .body{
        background-color:    #b3ecff;
        width: 750px;
        height: 450px;
        margin: auto;
        border-radius: 6px;
    }
</style>

<div class="body">

    <center>
        <br> <br> <br>
        <H1>Chào mừng bạn đến với trang đăng nhập</H1>
        <br> <br> <br>
        <form class="form" method="post" >
            <table>
                <tr>
                    <td> <font size="5px">Tài khoản:</font>  </td>
                    <td><input name="tai_khoan"  placeholder="Tài khoản" id="taikhoan"></td>
                </tr>
                <tr><tr><tr></tr></tr></tr>
                <tr>
                    <td> <font size="5px">Mật khẩu</font>  </td>
                    <td><input type="password" name="mat_khau" id="password" placeholder="password"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri" >
                        <input type="submit" value="Đăng nhập" id="dangnhap">
                    </td>
                </tr>
            </table>
        </form>
    </center>

</div>
