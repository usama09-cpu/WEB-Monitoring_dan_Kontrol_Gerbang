<?php 
// include koneksi
	include "koneksi.php";

	// tangkap paramater stat
	$stat = $_GET['stat'];
	if($stat == "Terbuka")
	{
		// ubah field relay jadi 1
		mysqli_query($konek, "UPDATE tb_kontrol SET relay=1 where id=2");
		
		// berikan respon
		echo "Terbuka";
			
	}
	else
	{
		// ubah field relay jadi 1
		mysqli_query($konek, "UPDATE tb_kontrol SET relay=0 where id=2");
		// berikan respon
		echo "Tertutup";
	}
 ?>

	
	