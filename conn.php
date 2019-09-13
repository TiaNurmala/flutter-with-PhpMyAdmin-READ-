<?php 
	$conn = new mysqli("localhost","root","","db_sekolah");
	if (!$conn) 
		
	{
		echo "gagal koneksi";
		exit();
	}
 ?>