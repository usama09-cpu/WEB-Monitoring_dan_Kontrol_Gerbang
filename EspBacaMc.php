<?php
include "koneksi.php";
$query = "SELECT * FROM tb_kontrol";
$sql = mysqli_query($konek,$query);
$data = mysqli_fetch_array($sql);
// ambil status manualControl
$manualControl = $data['manualControl'];
echo $manualControl;
?>