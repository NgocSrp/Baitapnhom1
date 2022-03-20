<?php
    if(!isset($bien_bao_mat)){exit();}
?>

<?php
    $so_dong_tren_mot_trang=10;
    if(!isset($_GET['trang'])){$_GET['trang']=1;}   

    $tv="select count(id) from san_pham where trang_chu='co' ";
    
    $tv_1 = $conn->query($tv);
    $tv_2=$tv_1->fetch_array(MYSQLI_NUM);
    $so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
    $vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
    $tv="select id,ten,gia,hinh_anh,sap_xep_trang_chu from san_pham where trang_chu='co' order by sap_xep_trang_chu desc limit $vtbd,$so_dong_tren_mot_trang";

    $tv_1 = $conn->query($tv);
?>
<h3>Sản phẩm trang chủ</h3>
<form method="post" >
    <table width="990px" class="tb_a1" >
        <tr style="background:#CCFFFF;height:40px;" >
            <td width="120px" ><b>Hình ảnh</b></td>
            <td width="450px" ><b>Tên</b></td>
            <td align="center" width="140px" ><b>Giá</b></td>
            <td align="center" width="140px" ><b>Trang chủ</b></td>
            <td align="center" width="140px" ><b>Thứ tự</b></td>       
        </tr>
        <?php
            $i=1;
            while($tv_2=$tv_1->fetch_assoc())
            {
                $id=$tv_2['id'];
                $ten=$tv_2['ten'];
                $gia=$tv_2['gia'];
                $gia=number_format($gia,0,",",".");
                $link_hinh="../hinh_anh/san_pham/".$tv_2['hinh_anh'];
                $sap_xep_trang_chu=$tv_2['sap_xep_trang_chu'];
                $ten_select="select_".$i;
                $ten_input="input_".$i;
                $ten_id="id_".$i;
                ?>
                    <tr class="a_1" >
                        <td align="center" >
                            <img src="<?php echo $link_hinh; ?>" style="width:100px;margin-top:10px;margin-bottom:10px;" border="0" >
                        </td>
                        <td>
                            <?php echo $ten; ?>
                        </td>
                        <td align="center" >
                            <?php echo $gia; ?>
                        </td>
                        <td align="center" >
                            <select name="<?php echo $ten_select; ?>" >
                                <option value="" >Không</option>
                                <option value="co" selected >Có</option>
                            </select>
                        </td>
                        <td align="center" >
                            <input value="<?php echo $sap_xep_trang_chu; ?>" style="width:50px" name="<?php echo $ten_input; ?>" >
                            <input  type="hidden" value="<?php echo $id; ?>" name="<?php echo $ten_id; ?>" > 
                        </td>                   
                    </tr>
                <?php               
                $i++;
            }
        ?>
        <tr>
            <td colspan="3" align="center" >
                &nbsp;
            </td>
            <td colspan="2" align="center" >
                <br>
                <input type="submit" name="bieu_mau_san_pham_trang_chu" value="Cập nhật" style="width:180px;height:50px;font-size:24px" >
                <br><br>
            </td>           
        </tr>
    </table>
</form>