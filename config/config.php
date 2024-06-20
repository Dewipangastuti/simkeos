<?php 

	$hostname = "localhost"; // Isi Hostname yang di pakai
	$username = "root"; // Isi Username sesuai dengan Phpmyadmin
	$password = ""; // Isi Password sesuai dengan Phpmyadmin Jika ada, jikalau tidak kosongkan
	$database = "simkeos"; // Isi dengan Nama Database yang akan di gunakan

	$con = mysqli_connect($hostname, $username, $password, $database);
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}

 ?>