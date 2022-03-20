<?php
    $tv="select * from banner ";
    $tv_1 = $conn->query($tv);
	$tv_2=$tv_1->fetch_assoc();
    $link_hinh="hinh_anh/banner/".$tv_2['hinh'];  
    echo "<img src='".$link_hinh."' width='".$tv_2['rong']."' height='".$tv_2['cao']."' >";
?>