<?php
	session_start();
    include("ket_noi.php");
    include("chuc_nang/ham/ham.php");   
    if(isset($_POST['thong_tin_khach_hang']))
    {
        include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
    }
	if(isset($_POST['cap_nhat_gio_hang']))
	{
	    include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
	    trang_truoc();
	}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Web bán điện thoại</title>
        <style type="text/css" >  
        a
		{
		    text-decoration: none;
		}        
	    div.menu_ngang a
	    {
            text-align: center;
	        color:blue;
	        margin-left: 10px;
	        margin-right: 10px;
	        text-decoration: none;
	        font-size:20px;
            
	    }
	    div.menu_ngang a:hover
	    {
	        color:red

	    }
	    div.menu_doc a
		{
		    color:blue;
		    text-decoration: none;
		    display:block;
		}
		div.menu_doc a:hover
		{
		    color:red
		}
		</style>
    </head>
    <body>
      <table width="100%" style="background-color: #e0ebeb" >
        <tr>
            <td colspan="3">
            	<?php 
            		include("chuc_nang/banner/banner.php"); 
            	?>	
            </td>

        </tr>
        <tr  style="background-color:  #f0f5f5; margin: auto; text-align: center;">
            <td colspan="3" height="50px" >
            	<?php
        			include("chuc_nang/menu_ngang/menu_ngang.php");
    			?>
    		</td>
        </tr>
        <tr >
            <td width="50px" valign="top"  >
            	<?php
        			include("chuc_nang/menu_doc/menu_doc.php");
        			include("chuc_nang/san_pham/moi.php");
    			?>
    		</td>
            <td width="250px" height="100px" valign="top">
                <br> <br>
            	<?php
    		    	include("chuc_nang/dieu_huong.php");
    			?>
            </td>
            <td width="100px" style="margin-right: 70px;">
            	<?php
    			    include("chuc_nang/tim_kiem/vung_tim_kiem.php");
    			    include("chuc_nang/gio_hang/vung_gio_hang.php");
    			    include("chuc_nang/san_pham/noi_bat.php");
    			?>
            </td>
        </tr>
        <tr   style="background-color:#b3cccc "   >
            <td colspan="3">
            	<?php 
            		include("chuc_nang/footer/footer.php"); 
            	?>	
            </td>
        </tr>
    </table>

    </body>
</html>