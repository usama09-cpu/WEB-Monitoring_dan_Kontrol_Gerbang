<?php 

require 'koneksi.php';

ini_set('date.timezone', 'Asia/Jakarta');

$now = new DateTime();

$datenow = $now->format("Y-m-d H:i:s");

    	$flowRate = $_POST['flowRate'];
    	$totalMilliLitres = $_POST['totalMilliLitres'];
		$jarak1 = $_POST['jarak1'];
		$jarak2 = $_POST['jarak2'];
		$jarak3 = $_POST['jarak3'];

		$sql = "INSERT INTO tb_monitoring VALUES ('', '$flowRate', '$totalMilliLitres','$jarak1','$jarak2','$jarak3','$datenow')";

		if ($konek->query($sql) === TRUE) {
		    echo json_encode("Ok");
		} else {
		    echo "Error: " . $sql . "<br>" . $konek->error;
		}
	


	$konek->close();
 ?>