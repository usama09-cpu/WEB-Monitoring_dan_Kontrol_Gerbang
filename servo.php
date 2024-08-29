<?php 
	include "koneksi.php";

	// tangkap variabel posisi pada ajax
	$pos = $_GET['pos'];
	// update nilai field yang ada di database
	mysqli_query($konek, "UPDATE tb_kontrol SET servo='$pos' where id=1");
	// berikan respons
	echo $pos;

 ?>