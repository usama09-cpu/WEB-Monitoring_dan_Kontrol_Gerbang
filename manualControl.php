<?php 
// include koneksi
	include "koneksi.php";

	// tangkap paramater stat
	$stat = $_GET['stat'];
	
	if($stat == "Manual")
	{
		// ubah field relay jadi 1
		mysqli_query($konek, "UPDATE tb_kontrol SET manualControl=1");
		
		// berikan respon
		echo "Manual";
	}
	else
	{
		// ubah field relay jadi 1
		mysqli_query($konek, "UPDATE tb_kontrol SET manualControl=0");
		// berikan respon
		echo "Automatis";
	}
 ?>

	
	