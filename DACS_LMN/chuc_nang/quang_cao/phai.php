<br>Quảng cáo <br><br>
<?php
    $tv="select html from quang_cao where vi_tri='phai' ";
    $tv_1 = $conn->query($tv);
	$tv_2=$tv_1->fetch_assoc();
    echo $tv_2['html'];
?>