<?php
    if(isset($_GET['id']) and $_SESSION['trang_chi_tiet_gio_hang']=="co")
    {
        $_SESSION['trang_chi_tiet_gio_hang']="huy_bo";
        if(isset($_SESSION['id_them_vao_gio']))
        {
            $so=count($_SESSION['id_them_vao_gio']);
            $trung_lap="khong";
            for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
            {
                if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
                {
                    $trung_lap="co";
                    $vi_tri_trung_lap=$i;
                    break;
                }
            }
            if($trung_lap=="khong")
            {
                $_SESSION['id_them_vao_gio'][$so]=$_GET['id'];
                $_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
            }
            if($trung_lap=="co")
            {
                $_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
            }
        }
        else
        {
            $_SESSION['id_them_vao_gio'][0]=$_GET['id'];
            $_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
        }
    }
    $gio_hang="khong";
    if(isset($_SESSION['id_them_vao_gio']))
    {
        $so_luong=0;
        for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
        {
            $so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
        }
        if($so_luong!=0)
        {
            $gio_hang="co";
        }
    }

    echo "<h2>Giỏ hàng </h2>";

    echo "<br>";
    echo "<br>";
    if($gio_hang=="khong")
    {
        echo "Không có sản phẩm trong giỏ hàng";
    }
    else
    {
        echo "<form action='' method='post' >";
        echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' > ";
        echo "<table >";
            echo "<tr>";
                echo "<td width='200px'> <b style='color:#476b6b;'> Tên </b></td>";
                echo "<td width='150px'> <b style='color:#476b6b;'> Số lượng </b></td>"; 
                echo "<td width='150px'><b style='color:#476b6b;'> Đơn giá  </b></td>";
                echo "<td width='170px'><b style='color:#476b6b;'> Thành tiền </b></td>";
            echo "</tr>";
            $tong_cong=0;
            for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
            {
          
                $tv="select id,ten,gia from san_pham where id='".$_SESSION['id_them_vao_gio'][$i]."'";
                $tv_1 = $conn->query($tv);
                $tv_2=$tv_1->fetch_assoc();
                $tien=$tv_2['gia']*$_SESSION['sl_them_vao_gio'][$i];
                $tong_cong=$tong_cong+$tien;
                if($_SESSION['sl_them_vao_gio'][$i]!=0)
                {
                $name_id="id_".$i;
                $name_sl="sl_".$i;
                echo "<tr>";
                    echo "<td>".$tv_2['ten']."</td>";
                    echo "<td>";
                    echo "<input type='hidden' name='".$name_id."' value='".$_SESSION['id_them_vao_gio'][$i]."' >";
                    echo "<input type='number' style='width:50px' name='".$name_sl."' value='". $_SESSION['sl_them_vao_gio'][$i]."' > ";
                    echo "</td>";
                    echo "<td>".$tv_2['gia']."</td>";
                    echo "<td>".$tien." VNĐ</td>";
                echo "</tr>";
                }
            } 
            echo "<tr>";
                echo "<td>&nbsp;</td>";
                echo "<td><input type='submit' value='Cập nhật' > </td>";
                echo "<td>&nbsp;</td>";
                echo "<td>&nbsp;</td>";
            echo "</tr>";           
        echo "</table>";
        echo "</form>";
        echo "<br>";
        echo "<b>Tổng giá trị đơn hàng là : </b>".$tong_cong." VNĐ";
        include("chuc_nang/gio_hang/bieu_mau_mua_hang.php");
    }
?>