<?php 
	$id = $_GET['id'];

	$nama_produk = $_POST['nama_produk'];
	$id_kategori = $_POST['id_kategori'];
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];
	$link_wa = $_POST['link'];
	
	// Set Upload file
	$ekstensi_boleh = array('png', 'jpg');
	$img = $_FILES['file']['name'];
	$ex = explode('.', $img);
	$ekstensi = strtolower(end($ex));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];

	$sql= mysqli_query($con, "SELECT * FROM tb_produk WHERE id_produk='$id'");
	$data = mysqli_fetch_array($sql);

	if(!empty($img)) {
		if(in_array($ekstensi, $ekstensi_boleh) === true) {
			if($ukuran < 2000000) {
				move_uploaded_file($file_tmp, '../assets/img/produk/'. $img);
				$sql = mysqli_query($con, "UPDATE tb_produk SET nama_produk='$nama_produk', id_kategori='$id_kategori', deskripsi_produk='$deskripsi', harga_produk='$harga', image='$img', link_wa='$link_wa' WHERE id_produk='$id'");
				echo "<script>alert('Data Berhasil Di ubah!')</script>";
				echo "<script>window.location.href='index.php?page=produk'</script>";
			} else {
				echo "<script>alert('Ukuran tidak boleh > 2MB')</script>";
			}
		} else {
			echo "<script>alert('Ekstensi tidak sesuai')</script>";
		}
	} else {
		if(empty($img)) {
			$img = $data['image'];
			$sql = mysqli_query($con, "UPDATE tb_produk SET nama_produk='$nama_produk', id_kategori='$id_kategori', deskripsi_produk='$deskripsi', harga_produk='$harga', image='$img', link_wa='$link_wa' WHERE id_produk='$id'");
			echo "<script>alert('Data Berhasil Di ubah!')</script>";
			echo "<script>window.location.href='index.php?page=produk'</script>";
		}
	}
 ?>