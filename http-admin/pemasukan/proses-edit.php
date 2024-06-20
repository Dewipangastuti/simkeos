<?php 
	$id = $_GET['id'];

	$kode = $_POST['kode'];
	$tgl = $_POST['tgl'];
	$ket = $_POST['ket'];
	$jml = $_POST['jml'];

	$sql = mysqli_query($con, "UPDATE tb_pemasukan SET kode='$kode', tanggal='$tgl', keterangan='$ket', jumlah='$jml' WHERE id='$id'");
	if($sql) {
		echo "<script>alert('berhasil')</script>";
		echo "<script>window.location.href='index.php?page=pemasukan'</script>";
	}
 ?>