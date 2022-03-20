<br> <br>
<font class="test">Sản phẩm nổi bật</font>

<br>
<br>
<center>
    <?php
        $tv="select id,ten,hinh_anh from san_pham where noi_bat='co' order by id desc limit 0,3";
        $tv_1 = $conn->query($tv);

        while($tv_2=$tv_1->fetch_assoc())
        {
            $link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
            $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
            echo "<a href='$link_chi_tiet' >";
                echo "<img src='$link_anh' width='100px' >";
            echo "</a>";
            echo "<br><br>";
            echo $tv_2['ten'];
            echo "<br>";
            echo "<br>";
        }
    ?>
</center>

<style type="text/css">
    @-webkit-keyframes my {
     0% { color: #e63900; } 
     50% { color: #fff;  } 
     100% { color: #e63900;  } 
     }
     @-moz-keyframes my { 
         0% { color: #e63900;  } 
         50% { color: #fff;  }
         100% { color: #e63900;  } 
     }
     @-o-keyframes my { 
         0% { color: #e63900; } 
         50% { color: #fff; } 
         100% { color: #e63900;  } 
     }
     @keyframes my { 
         0% { color: #e63900;  } 
         50% { color: #fff;  }
         100% { color: #e63900;  } 
     } 
     .test {
        font-size:24px;
        font-weight:bold;
        -webkit-animation: my 700ms infinite;
        -moz-animation: my 700ms infinite; 
        -o-animation: my 700ms infinite; 
        animation: my 700ms infinite;
    }
</style>