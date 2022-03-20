<?php
    if(trim($_GET['tu_khoa'])!=""){
        $m=explode(" ",$_GET['tu_khoa']);  
        $chuoi_tim_sql="";
        for($i=0;$i<count($m);$i++)
        {
            $tu=trim($m[$i]);
            if($tu!="")
            {
                $chuoi_tim_sql=$chuoi_tim_sql." ten like '%".$tu."%' or";
            }
        }

        $m_2=explode(" ",$chuoi_tim_sql);  
        $chuoi_tim_sql_2="";
        for($i=0;$i<count($m_2)-1;$i++)
        {
            $chuoi_tim_sql_2=$chuoi_tim_sql_2.$m_2[$i]." ";
        }

         $tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham where $chuoi_tim_sql_2 order by id desc";

        $tv_1 = $conn->query($tv);
        echo "<table>";
        while($tv_2=$tv_1->fetch_assoc())
        {
            echo "<tr>";
                for($i=1;$i<=3;$i++)
                {
                    echo "<td align='center' width='215px' valign='top' >";
                        if($tv_2!=false)
                        { 
                            $link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
                            $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
                            $gia=$tv_2['gia'];
                            $gia=number_format($gia,0,",",".");
                            echo "<a href='$link_chi_tiet' >";
                                echo "<img src='$link_anh' width='150px' >";
                            echo "</a>";
                            echo "<br>";
                            echo "<br>";
                            echo "<a href='$link_chi_tiet' >";
                                echo $tv_2['ten'];
                            echo "</a>";
                            echo "<div style='margin-top:5px' >";                       
                            echo $gia;
                            echo "</div>";
                            echo "<br>";
                        }
                        else
                        {
                            echo "&nbsp;";
                        }
                    echo "</td>";
                    if($i!=3)
                    {
                        $tv_2=$tv_1->fetch_assoc();
                    }
                }
            echo "</tr>";
        }
        echo "</table>";
    }
    else
    {
    echo "Bạn chưa nhập từ khóa";
    }
?>