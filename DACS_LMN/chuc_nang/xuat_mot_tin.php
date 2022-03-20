<?php
    $id=$_GET['id'];
    $tv="select * from menu_ngang where id='$id'";
    $tv_1 = $conn->query($tv);
    $tv_2=$tv_1->fetch_assoc();
    echo "<h1>";
        echo $tv_2['ten'];
    echo "</h1>";
    echo $tv_2['noi_dung'];
?>