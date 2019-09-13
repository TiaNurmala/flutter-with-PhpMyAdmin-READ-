<?php 
	include "conn.php";
	$data = $conn->query("SELECT * FROM dt_siswa");
	
	$hasil = array();
	while ($a = $data->fetch_assoc()) {
		$hasil[] = $a;
	}
	echo json_encode($hasil);
 ?>