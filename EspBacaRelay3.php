<?php
include "koneksi.php";
$query = "SELECT * FROM tb_kontrol WHERE id = 3";
$sql = mysqli_query($konek,$query);
$data = mysqli_fetch_array($sql);
// ambil status relay
$relay = $data['relay'];
echo $relay;
?>