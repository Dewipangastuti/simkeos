<?php 
	$id = $_GET['id'];

	$nama_produk = $_POST['nama_produk'];
	$deskripsi_produk = $_POST['deskripsi_produk'];
	$harga_produk = $_POST['harga_produk'];
	
	// Set Upload file
	$ekstensi_boleh = array('png','jpeg', 'jpg');
	$image = $_FILES['image']['name'];
	$ex = explode('.', $image);
	$ekstensi = strtolower(end($ex));
	$ukuran = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];

	$update= mysqli_query($con, "SELECT * FROM tb_produk WHERE id_produk='$id'");
	$data = mysqli_fetch_array($update);

	if(!empty($image)) {
		if(in_array($ekstensi, $ekstensi_boleh) === true) {
			if($ukuran < 2000000) {
				move_uploaded_file($file_tmp, '../assets/img/produk/'. $image);
				$update = mysqli_query($con, "UPDATE tb_produk SET nama_produk='$nama_produk',  deskripsi_produk='$deskripsi_produk', harga_produk='$harga_produk', image='$image' WHERE id_produk='$id'");
				echo "<script>alert('Data Berhasil Di ubah!')</script>";
				echo "<script>window.location.href='index.php?page=produk'</script>";
			} else {
				echo "<script>alert('Ukuran tidak boleh > 2MB')</script>";
			}
		} else {
			echo "<script>alert('Ekstensi tidak sesuai')</script>";
		}
	} else {
		if(empty($image)) {
			$image = $data['image'];
			$update= mysqli_query($con, "UPDATE tb_produk SET nama_produk='$nama_produk', deskripsi_produk='$deskripsi_produk', harga_produk='$harga_produk', image='$image' WHERE id_produk='$id'");
			echo "<script>alert('Data Berhasil Di ubah!')</script>";
			echo "<script>window.location.href='index.php?page=produk'</script>";
		}
	}
 ?>