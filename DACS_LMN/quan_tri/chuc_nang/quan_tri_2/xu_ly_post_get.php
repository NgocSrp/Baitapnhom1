<?php
    if(!isset($bien_bao_mat)){exit();}
?>
<?php
    if(isset($_GET['xoa_hoa_don']))
    {
        include("chuc_nang/hoa_don/xoa_hoa_don.php");
        trang_truoc_html();
    }
    if(isset($_GET['xoa_hoa_don_o_trang_chi_tiet']))
    {
        include("chuc_nang/hoa_don/xoa_hoa_don_o_trang_chi_tiet.php");
        trang_truoc_html();
    }
    if(isset($_POST['bieu_mau_san_pham_trang_chu']))
    {
        include("chuc_nang/san_pham_trang_chu/sua_san_pham_trang_chu.php");
        trang_truoc_html();
    }
    if(isset($_POST['bieu_mau_san_pham_noi_bat']))
    {
        include("chuc_nang/san_pham_noi_bat/sua_san_pham_noi_bat.php");
        trang_truoc_html();
    }
    if(isset($_POST['bieu_mau_them_slideshow']))
    {
        include("chuc_nang/slideshow/them_slideshow_vao_csdl.php");
        trang_truoc_html();
    }
    if(isset($_POST['bieu_mau_sua_slideshow']))
    {
        include("chuc_nang/slideshow/sua_slideshow_o_trong_csdl.php");
        trang_truoc_html();
    }
    if(isset($_GET['xoa_slideshow']))
    {
        include("chuc_nang/slideshow/xoa_slideshow.php");
        trang_truoc_html();
    }
    if(isset($_GET['thamso']))
    {
        if($_GET['thamso']=="thoat")
        {
            include("chuc_nang/quan_tri_2/thoat.php");
            trang_truoc_html();
        }
    }
?>