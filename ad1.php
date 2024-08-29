<?php
$query = "SELECT * FROM tb_kontrol WHERE id = 1";
$sql = mysqli_query($konek,$query);
$data = mysqli_fetch_array($sql);
// ambil status relay
$relay = $data['relay'];
$id = $data['id'];
?>